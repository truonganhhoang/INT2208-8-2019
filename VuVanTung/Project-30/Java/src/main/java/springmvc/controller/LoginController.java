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

import springmvc.model.Category;
import springmvc.model.User;
import springmvc.service.ProductService;
import springmvc.service.UserService;
import springmvc.validator.UserFormValidator;

@Controller
public class LoginController {
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
	 * hàm dùng để vào trang đăng nhập
	 * 
	 * @param model: dùng để đẩy user vào modelAttribute
	 * @return: chuyển màn hình thành trang đăng nhập
	 */
	@RequestMapping(value = "/login", method = RequestMethod.GET)
	public String login(ModelMap model) {
		List<Category> lstCategory = productService.getListCategory();
		model.addAttribute("lstCategory", lstCategory);
		/*
		 * - thêm một user có email = null, password = null vào form để khi nhập vào
		 * form chính là set giá trị các thuộc tính cho user rỗng này
		 * 
		 * - phải thêm user rỗng để dùng được validation
		 */
		model.addAttribute("user", new User(null, null));
		return "login";
	}

	/**
	 * hàm dùng để đăng xuất tài khoản
	 * 
	 * @param model
	 * @param       request: xóa session
	 * @return: chuyển về trang chủ sau khi đăng xuất
	 */
	@RequestMapping(value = "/logout", method = RequestMethod.GET)
	public String logout(ModelMap model, HttpServletRequest request) {
		HttpSession session = request.getSession();
		session.invalidate();
		return "redirect:/index";
	}
	

	/**
	 * hàm xử lý tác vụ đăng nhập (kiểm tra email, password)
	 * 
	 * @param       user: user được lấy từ form đăng đăng nhập có các thuộc tính là
	 *              email và pass được nhập vào ở trên form (chính là user rỗng ở
	 *              login được set giá trị)
	 * @param       result: dùng để kiểm tra lỗi và bắt buộc phải đứng ngay sau đối
	 *              tượng được kiểm tra validate
	 * @param model
	 * @param       request: dùng để thêm vào session
	 * @return: - đăng nhập thành công thì chuyển về trang chủ - đăng nhập thất bại
	 *          thì chuyển về trang đăng nhập và kiển thị ra lỗi
	 */
	@RequestMapping(value = "/formLogin", method = RequestMethod.POST)
	public String handleLogin(@ModelAttribute("user") @Validated User user, BindingResult result, Model model,
			HttpServletRequest request) {
		/*
		 * validate các điều kiện - nếu thông tin sai thì UserFormValidator ->
		 * if(result.hasErrors()) - nếu thông tin đúng thì thực hiện lấy thông tin và
		 * cho đăng nhập
		 */
		if (result.hasErrors()) {
			return "login";
		} else {
			// không chạy vào if ở trên => cho thỏa mãn yêu cầu đúng mật khẩu đúng email =>
			// chỉ cần getUser theo email thì chính là user đã đăng nhập thành công
			User userFind = userService.searchUserByEmail(user.getEmail());
			HttpSession session = request.getSession();
			session.setAttribute("user", userFind);
			return "redirect:/index";
		}
	}
}
