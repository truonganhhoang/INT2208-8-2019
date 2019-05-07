package springmvc.controller;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;

import springmvc.model.Cart;
import springmvc.model.Category;
import springmvc.service.ProductService;

@Controller
public class CheckOutController {
	@Autowired
	private ProductService productService;

	/**
	 * hàm dùng để hiện thị trang checkout
	 * @param model
	 * @return
	 */
	@RequestMapping(value = "/checkout", method = RequestMethod.GET)
	public String checkOut(ModelMap model) {
		// lấy danh sách thể loại dưới database
		List<Category> lstCategory = productService.getListCategory();
		model.addAttribute("lstCategory", lstCategory);
		return "checkout";
	}
	
	/**
	 * hàm dùng để xóa sản phẩm trong trang đặt hàng
	 * @param model
	 * @param session: dùng để lưu các giá trị: các sản phẩm, tổng giá trị, 
	 * tổng số lượng cho từng sản phẩm, số lượng sản phẩm khác nhau trong giỏ hàng
	 * @param productId là id của sản phẩm được chọn để thêm vào giỏ hàng
	 * @return
	 */
	@RequestMapping(value = "/remove", method = RequestMethod.GET)
	public String removeProduct(ModelMap model, HttpSession session, @RequestParam(name = "id") Integer productId) {
		// lấy danh sách thể loại dưới database
		List<Category> lstCategory = productService.getListCategory();
		model.addAttribute("lstCategory", lstCategory);

		// 1 khai báo giỏ hàng với cấu trúc HashMap key = id sản phẩm, value = cart với cart là có 2 thuộc tính là sản phẩm và số lượng mua
		HashMap<Integer, Cart> cartItems = (HashMap<Integer, Cart>) session.getAttribute("myCartItems");
		
		// khi chưa có sản phẩm gì thì khởi tạo
		if (cartItems == null) {
			cartItems = new HashMap<>();
		}
		
		// xóa sản phẩm trong giỏ hàng
		if (cartItems.containsKey(productId)) {
			cartItems.remove(productId);
		}
		
		// cartItems chứa các sản phẩm và số lượng của nó
		session.setAttribute("myCartItems", cartItems);
		// tổng giá tiền của giỏ hàng
		session.setAttribute("myCartTotal", totalPrice(cartItems));
		// tổng số lượng các sản phẩm trong giỏ hàng
		session.setAttribute("sizeCart", countProduct(cartItems));
		// số lượng các sản phẩm khác nhau trong giỏ hàng
		session.setAttribute("myCartNum", cartItems.size());

		// xóa hết sản phẩm trong giỏ hàng => về trang chủ
		if (cartItems.size() == 0) {
			return "redirect:/index";
		} 
		// chưa xóa hết sản phẩm trong giỏ hàng => thì vẫn ở trang đặt hàng
		else {
			return "redirect:/checkout";
		}
	}

	// tính tổng tiền của giỏ hàng
	private double totalPrice(HashMap<Integer, Cart> cartItems) {
		int price = 0;
		for (Map.Entry<Integer, Cart> list : cartItems.entrySet()) {
			price += list.getValue().getProduct().getPriceUnitProduct() * list.getValue().getQuantityBuy();
		}
		return price;
	}

	// tính số lượng của từng sản phẩm
	private int countProduct(HashMap<Integer, Cart> cartItems) {
		int countProduct = 0;
		for (Map.Entry<Integer, Cart> list : cartItems.entrySet()) {
			countProduct += list.getValue().getQuantityBuy();
		}
		return countProduct;
	}

}
