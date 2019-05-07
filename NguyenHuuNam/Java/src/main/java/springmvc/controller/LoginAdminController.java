package springmvc.controller;


import java.util.List;


import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;

import springmvc.model.Admin;
import springmvc.model.Product;
import springmvc.service.AdminService;
import springmvc.service.ProductService;

@Controller
public class LoginAdminController {
	@Autowired
	private AdminService adminService;
	
	@Autowired
	private ProductService productService;
	
	
	@RequestMapping(value = "/loginAdmin", method = RequestMethod.GET)
	public String login(ModelMap model) {
		model.addAttribute("admin", new Admin(null, null));
		return "login-admin";
	}
	@RequestMapping(value = "/allProduct")
	public String allProduct(ModelMap model) {
		List<Product> lstProductAll = productService.getAllProduct();
		model.addAttribute("lstProductAll", lstProductAll);
		return "manage-product";
	}
	@RequestMapping(value = "/formLoginAdmin", method = RequestMethod.POST)
	public String handleLogin(ModelMap model,
							  @RequestParam(name = "emailAdmin") String email,
							  @RequestParam(name = "passwordAdmin") String password) {
		Admin admin = adminService.searchAdminByEmail(email);
		if(admin == null) {
			return "login-admin";
		}
		else {
			if(admin.getPassword().equals(password)==true) {
				return "redirect:/allProduct";
			}
			else {
				return "login-admin";
			}
		}
	}
	

}
