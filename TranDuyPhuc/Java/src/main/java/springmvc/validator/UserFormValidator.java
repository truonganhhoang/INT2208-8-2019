package springmvc.validator;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;
import org.springframework.validation.Errors;
import org.springframework.validation.Validator;

import springmvc.common.Encryption;
import springmvc.model.User;
import springmvc.service.UserService;

@Component
public class UserFormValidator implements Validator {
	@Autowired
	private UserService userService;

	public boolean supports(Class<?> clazz) {
		return User.class.equals(clazz);
	}

	/**
	 * hàm kiểm tra số phone nhập vào có đúng 10 ký tự và là số hay không?
	 * 
	 * @param phone
	 * @return: true nếu thỏa mãn, false nếu không thỏa mãn
	 */
	private boolean checkPhone(String phone) {
		// kiểm tra độ dài của phone
		if (phone.length() != 10) {
			return false;
		} else {
			for (int i = 0; i < phone.length(); i++) {
				char check = phone.charAt(i);
				// kiểm tra từng kí tự trong phone có phải là chữ hay không
				if (!(check >= 48 && check <= 57)) {
					return false;
				}
			}
		}
		return true;
	}

	/**
	 * hàm kiểm tra pass word nhập vào có độ dài >= 6 hay không?
	 * 
	 * @param password
	 * @return: true nếu thỏa mãn, false nếu không thỏa mãn
	 */
	private boolean checkLengthOfPassword(String password) {
		int lengthOfPassword = password.length();
		if (lengthOfPassword < 6 || password.length() > 30) { // kiểm tra độ dài của password
			return false;
		}
		return true;
	}

	public void validate(Object target, Errors errors) {
		User user = (User) target;
		/*
		 * lấy rePassword là điều kiện so sánh vì khi đăng nhập chỉ tìm user dựa trên
		 * email và password
		 */
		if (user.getRePassword() != null) {
			if (!user.getPassword().equals(user.getRePassword())) {
				errors.rejectValue("rePassword", "Diff.signup.rePassword");
			}
			if (checkPhone(user.getPhone()) == false) {
				errors.rejectValue("phone", "CheckPhone.signup.phone");
			}
			if (checkLengthOfPassword(user.getPassword()) == false) {
				errors.rejectValue("password", "CheckLength.signup.password");
			}
			if (userService.searchUserByEmail(user.getEmail()) != null) {
				errors.rejectValue("email", "Empty.signup.email");
			}
		} else {
			/*
			 * kiểm tra email của user nhập vào có giống email của user nào dưới database ko?
			 * - nếu có: kiểm tra tiếp mật khẩu có trùng mật khẩu dưới database không? (có thì cho đăng nhập, không thì thông báo)
			 * - nếu không: thông báo là email nhập vào có thể sai hoặc không tồn tại
			 */
			User userInDatabase = userService.searchUserByEmail(user.getEmail());
			if (userInDatabase != null) {
				if (Encryption.checkPassAtferHash(user.getPassword(), userInDatabase.getPassword()) == false) {
					errors.rejectValue("password", "False.login.password");
				}
			} else {
				errors.rejectValue("email", "False.login.email");
			}
		}

	}
}
