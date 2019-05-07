package springmvc.controller;

import java.util.List;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.ui.ModelMap;
import org.springframework.validation.BindingResult;
import org.springframework.validation.annotation.Validated;
import org.springframework.web.bind.WebDataBinder;
import org.springframework.web.bind.annotation.InitBinder;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import springmvc.validator.UserFormValidator;
import springmvc.common.Encryption;
import springmvc.model.Category;
import springmvc.model.User;
import springmvc.service.ProductService;
import springmvc.service.UserService;

@Controller
public class SignUpController {
	@Autowired
	private UserService userService;
	@Autowired
	private ProductService productService;
	@Autowired
	UserFormValidator userFormValidator;

	@InitBinder
	protected void initBinder(WebDataBinder binder) {
		binder.setValidator(userFormValidator);
	}
	
	/**
	 * hàm dùng để vào trang đăng kí
	 * 
	 * @param model: dùng để đẩy user vào modelAttribute
	 * @return: chuyển màn hình thành trang đăng kí
	 */
	@RequestMapping(value = "/signup", method = RequestMethod.GET)
	public String signUp(ModelMap model) {
		List<Category> lstCategory = productService.getListCategory();
		model.addAttribute("lstCategory", lstCategory);
		/*
		 * - thêm một user rỗng vào form để khi nhập vào form chính là set giá trị các
		 * thuộc tính cho user rỗng này
		 * 
		 * - phải thêm user rỗng để dùng được validation
		 */
		model.addAttribute("user", new User());
		return "signup";
	}

	/**
	 * hàm xử lý tác vụ đăng kí (kiểm tra email, password, phone)
	 * 
	 * @param user: user được lấy từ form đăng kí có các thuộc tính là các input nhập
	 *             vào (chính là user rỗng ở method signup sau khi được set giá
	 *             trị bằng các nhập vào)
	 * @param result: dùng để kiểm tra lỗi và bắt buộc phải đứng ngay sau đối tượng
	 *               được kiểm tra validate
	 * @param model
	 * @param request: dùng để thêm vào session
	 * @return: - đăng kí thành công thì chuyển về trang chủ 
	 *          - đăng kí thất bại thì chuyển về trang đăng kí và kiển thị ra lỗi
	 */
	@RequestMapping(value = "/formSignUp", method = RequestMethod.POST)
	public String handleSignUp(@ModelAttribute("user") @Validated User user, BindingResult result, Model model,
			HttpServletRequest request) {
		if (result.hasErrors()) {
			return "signup";
		} else {
			// mã hóa mật khẩu trước khi lưu xuống database
			String passwordAfterHash = Encryption.hashPassword(user.getPassword());
			String rePasswordAfterHash = Encryption.hashPassword(user.getRePassword());
			// set lại mật khẩu cho user
			user.setPassword(passwordAfterHash);
			user.setRePassword(rePasswordAfterHash);
			userService.insertUser(user); // đăng kí thành công => insert xuống database
			HttpSession session = request.getSession();
			session.setAttribute("user", user);
			return "redirect:/index";

		}
	}
}
