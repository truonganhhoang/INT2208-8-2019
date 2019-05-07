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
import springmvc.model.Product;
import springmvc.service.ProductService;

@Controller
public class ProductController {
	@Autowired
	private ProductService productService;

	/**
	 * hàm dùng để chuyển hướng sang trang 1 sản phẩm được chọn
	 * 
	 * @param model
	 * @param id
	 * @return: hiển thị file product.jsp
	 */
	@RequestMapping(value = "/product", method = RequestMethod.GET)
	public String productPage(ModelMap model, @RequestParam Integer id) {
		// id on url, is id of book selected and is id of book in database

		// // lấy tên loại dưới database
		List<Category> lstCategory = productService.getListCategory();
		model.addAttribute("lstCategory", lstCategory);

		// lấy product theo id để hiển thị sang trang product được chọn
		int idProductSelected = id;
		Product productSelected = productService.getProductByID(idProductSelected);
		model.addAttribute("productSelected", productSelected);

		// lấy danh sách product có cùng thể loại
		List<Product> lstProductSameCategory = productService.getListProductsByCategory(productSelected.getCategory());
		model.addAttribute("lstProductSameCategory", lstProductSameCategory);

		// lấy danh sách product theo thời gian từ mới nhất đến cũ nhất
		List<Product> lstProductsByTime = productService.getListProductsByTime();
		model.addAttribute("lstProductsByTime", lstProductsByTime);

		return "product";
	}
	
	/**
	 * hàm dùng để xử lý mua ngay sản phẩm
	 * @param model
	 * @param session: dùng để lưu các giá trị: các sản phẩm, tổng giá trị, 
	 * tổng số lượng cho từng sản phẩm, số lượng sản phẩm khác nhau trong giỏ hàng
	 * @param productId là id của sản phẩm được chọn để thêm vào giỏ hàng
	 * @param quantityBuy là số lượng sản phẩm muốn thêm vào giỏ hàng
	 * @return
	 */
	@RequestMapping(value = "/buynow", method = RequestMethod.GET)
	public String buyNow(ModelMap model, HttpSession session, @RequestParam(name = "id") Integer productId,
			@RequestParam(name = "quantityBuy", required = false) Integer quantityBuy) {
		// lấy danh sách thể loại dưới database
		List<Category> lstCategory = productService.getListCategory();
		model.addAttribute("lstCategory", lstCategory);
		
		// 1 khai báo giỏ hàng với cấu trúc HashMap key = id sản phẩm, value = cart với cart là có 2 thuộc tính là sản phẩm và số lượng mua
		HashMap<Integer, Cart> cartItems = (HashMap<Integer, Cart>) session.getAttribute("myCartItems");
		// khi chưa có sản phẩm gì thì khởi tạo
		if (cartItems == null) {
			cartItems = new HashMap<>();
		}
		// tìm kiếm sản phẩm được cho vào giỏ hàng dưới database theo id
		Product product = productService.getProductByID(productId);
		// tìm được sản phẩm => kiểm tra trong cartItems đã có phần tử nào có key == id của sản phẩm tìm được chưa
		if (product != null) {
			if (cartItems.containsKey(productId)) {
				// lấy cartItem trong trong hashmap đó ra theo key = idProduct
				Cart item = cartItems.get(productId);
				// set lại số lượng sau khi tăng số lượng
				item.setQuantityBuy(item.getQuantityBuy() + quantityBuy);
				// set lại (ghi đè) phần tử có key = productID
				cartItems.put(productId, item);
			} else {
				Cart item = new Cart();
				// set value cho phần tử trong hashmap đó là sản phẩm product tìm được theo id
				item.setProduct(product);
				// tăng số lượng sản phẩm
				item.setQuantityBuy(quantityBuy);
				// set lại (ghi đè) phần tử có key = productID
				cartItems.put(productId, item);
			}
		}
		// cartItems chứa các sản phẩm và số lượng của nó
		session.setAttribute("myCartItems", cartItems);
		// tổng giá tiền của giỏ hàng
		session.setAttribute("myCartTotal", totalPrice(cartItems));
		// tổng số lượng các sản phẩm trong giỏ hàng
		session.setAttribute("sizeCart", countProduct(cartItems));
		// số lượng các sản phẩm khác nhau trong giỏ hàng
		session.setAttribute("myCartNum", cartItems.size());
		return "redirect:/checkout";
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
