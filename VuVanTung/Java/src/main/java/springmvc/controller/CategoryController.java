package springmvc.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;

import springmvc.model.Category;
import springmvc.model.Product;
import springmvc.service.ProductService;

@Controller
public class CategoryController {
	@Autowired
	private ProductService productService;

	
	/**
	 * hàm dùng để hiển thị trang thể loại sản phẩm
	 * @param model
	 * @param idCategory là id của thể sách
	 * @return
	 */
	@RequestMapping(value = "/category", method = RequestMethod.GET)
	public String productPage(ModelMap model, @RequestParam(required = false) Integer idCategory) {
		model.addAttribute("idCategory", idCategory);

		// lấy các sản phẩm có cùng thể loại
		if (idCategory != null) {
			Category categoryById = productService.getCategoryByID(idCategory);
			List<Product> lstProductByCategory = categoryById.getListProduct();
			model.addAttribute("nameCategory", categoryById.getName());
			model.addAttribute("lstProductByCategory", lstProductByCategory);
		}

		// lấy tên thể loại dưới database
		List<Category> lstCategory = productService.getListCategory();
		model.addAttribute("lstCategory", lstCategory);

		// lấy danh sách product theo thời gian từ mới nhất đến cũ nhất
		List<Product> lstProductsByTime = productService.getListProductsByTime();
		model.addAttribute("lstProductsByTime", lstProductsByTime);

		// lấy danh sách sản phẩm theo giá tăng dần
		List<Product> lstProductByPrice = productService.getListProductByPrice();
		model.addAttribute("lstProductByPrice", lstProductByPrice);
		return "category";
	}
}
