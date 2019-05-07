package springmvc.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;

import springmvc.model.Category;
import springmvc.model.Product;
import springmvc.service.AdminService;
import springmvc.service.ProductService;

@Controller
public class ManageProductController {
	@Autowired
	private AdminService adminService;
	
	@Autowired
	private ProductService productService;
	
	
	@RequestMapping(value = "/formManageProduct", method = RequestMethod.POST)
	public String handleLogin(ModelMap model, @RequestParam(name = "modeActive") String modeActive,
			@RequestParam(name = "idProduct") Integer idProduct) {
		if ("Add".equals(modeActive)) {
			model.addAttribute("addProduct", new Product());
			List<Category> categories = productService.getListCategory();
			model.addAttribute("categories", categories);
			return "formAddProduct";
		} else if ("Edit".equals(modeActive)) {
			Product editProduct = productService.getProductByID(idProduct);
			List<Category> categories = productService.getListCategory();
			for(int i = 0; i < categories.size(); i++) {
				if(categories.get(i).getName().equals(editProduct.getCategory().getName())) {
					categories.remove(i);
				}
			}
			model.addAttribute("categories", categories);
			model.addAttribute("editProduct", editProduct);
			return "formEditProduct";
		} else if ("Delete".equals(modeActive)) {
			Product deleteProduct = productService.getProductByID(idProduct);
			adminService.deleteProduct(deleteProduct);
			return "redirect:/allProduct";
		}	
		return  "";
	}
	@RequestMapping(value = "/formEdit", method = RequestMethod.POST)
	public String handleEdit(@ModelAttribute("editProduct") Product product,
			@RequestParam(name = "id-category") Integer idCategory) {
		product.setCategory(productService.getCategoryByID(idCategory));
		adminService.updateSinhVien(product);
		return "redirect:/allProduct";
	}

	@RequestMapping(value = "/formAdd", method = RequestMethod.POST)
	public String handleAdd(@ModelAttribute("addProduct") Product product,
				@RequestParam(name = "id-category") Integer idCategory) {
		product.setCategory(productService.getCategoryByID(idCategory));
		adminService.insertProduct(product);
		return "redirect:/allProduct";
	}
}
