package springmvc.controller;

import java.util.HashMap;
import java.util.Map;

import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;

import springmvc.model.Cart;
import springmvc.model.Product;
import springmvc.service.ProductService;

@Controller
public class CartController {
	@Autowired
	private ProductService productService;

	
	/**
	 * hàm dùng thêm sản phẩm vào giỏ hàng
	 * @param session: dùng để lưu các giá trị: các sản phẩm, tổng giá trị, 
	 * tổng số lượng cho từng sản phẩm, số lượng sản phẩm khác nhau trong giỏ hàng
	 * @param productId là id của sản phẩm được chọn để thêm vào giỏ hàng
	 * @param quantityBuy là số lượng sản phẩm muốn thêm vào giỏ hàng
	 * @return
	 */
	@RequestMapping(value = "/add", method = RequestMethod.GET)
	public String viewAdd(HttpSession session, @RequestParam(name = "id") Integer productId,
			@RequestParam(name = "quantityBuy", required = false) Integer quantityBuy) {
		
		// 1 khai báo giỏ hàng với cấu trúc HashMap key = id sản phẩm, value = cart với cart là có 2 thuộc tính là sản phẩm và số lượng mua
		HashMap<Integer, Cart> cartItems = (HashMap<Integer, Cart>) session.getAttribute("myCartItems");
		// khi chưa có sản phẩm gì thì khởi tạo
		if (cartItems == null) {
			cartItems = new HashMap<>();
		}
		// tìm kiếm sản phẩm được cho vào giỏ hàng dưới database theo id
		Product product = productService.getProductByID(productId);
		
		if (product != null) {
			// tìm được sản phẩm => kiểm tra trong cartItems đã có phần tử nào có key == id của sản phẩm tìm được chưa
			
			// nếu đã có sản phẩm đó trong cartItems
			if (cartItems.containsKey(productId)) {
				// lấy cartItem trong trong hashmap đó ra theo key = idProduct
				Cart item = cartItems.get(productId);
				// quantityBuy là dùng để xem sản phẩm ở trang nào
				// quantityBuy == null => không phải ở trang chi tiết sản phẩm => không thêm được nhiều sản phẩm vào giỏ hàng được
				if (quantityBuy == null) {
					// tăng số lượng sản phẩm lên 1
					item.setQuantityBuy(item.getQuantityBuy() + 1);
				} 
				// quantity != null => đang ở trang chi tiết sản phẩm => thêm được nhiều sản phẩm vào giỏ hàng
				else {
					// tăng số lượng sản phẩm
					item.setQuantityBuy(item.getQuantityBuy() + quantityBuy);
				}
				
			} 
			// nếu chưa có sản phẩm đó trong cartItems
			else {
				// tạo ra phần tử chứa sản phẩm trong hashMap
				Cart item = new Cart();
				// set value cho phần tử trong hashmap đó là sản phẩm tìm được
				item.setProduct(product);
				// quantityBuy là dùng để xem sản phẩm ở trang nào
				// quantityBuy == null => không phải ở trang chi tiết sản phẩm => không thêm được nhiều sản phẩm vào giỏ hàng được
				if (quantityBuy == null) {
					// tăng số lượng sản phẩm lên 1
					item.setQuantityBuy(item.getQuantityBuy() + 1);
				} 
				// quantity != null => đang ở trang chi tiết sản phẩm => thêm được nhiều sản phẩm vào giỏ hàng
				else {
					// tăng số lượng sản phẩm
					item.setQuantityBuy(item.getQuantityBuy() + quantityBuy);
				}
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
		return "redirect:/index";
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
