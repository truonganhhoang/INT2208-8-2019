package springmvc.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import springmvc.model.Category;
import springmvc.model.Product;
import springmvc.service.ProductService;

@Controller
public class HomePageController {
	@Autowired
	private ProductService productService;
	
	/**
	 * hàm này dùng để vào trang chủ
	 * @param model
	 * @return: hiển thị file index.jsp
	 */
	@RequestMapping(value = "/index", method = RequestMethod.GET)
	public String homePage(ModelMap model) {
		// lấy danh sách thể loại dưới database
		List<Category> lstCategory = productService.getListCategory();
		model.addAttribute("lstCategory", lstCategory);
		
		// lấy danh sách product theo thời gian từ mới nhất đến cũ nhất
		List<Product> lstProductsByTime = productService.getListProductsByTime();
		model.addAttribute("lstProductsByTime", lstProductsByTime);
		
		//lấy danh sách sản phẩm theo giá tăng dần
		List<Product> lstProductByPrice = productService.getListProductByPrice();
		model.addAttribute("lstProductByPrice", lstProductByPrice);
		return "index";
	}
	
	@RequestMapping(value = "/test", method = RequestMethod.GET)
	public String home(ModelMap model) {
		// lấy danh sách thể loại dưới database
		List<Category> lstCategory = productService.getListCategory();
		model.addAttribute("lstCategory", lstCategory);
		
		return "product-find";
	}
}
