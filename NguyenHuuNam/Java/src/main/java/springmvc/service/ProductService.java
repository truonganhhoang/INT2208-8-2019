package springmvc.service;

import java.util.List;

import springmvc.model.Category;
import springmvc.model.Product;

public interface ProductService {
	List<Product> getAllProduct();
	/**
	 * hàm dùng để lấy danh sách các thể loại sản phẩm ở dưới database
	 * 
	 * @return
	 */
	List<Category> getListCategory();

	/**
	 * hàm dùng để lấy thể loại(List<Product>, tên thể loại,...) theo id của thể
	 * loại
	 * 
	 * @param idCategory
	 * @return
	 */
	Category getCategoryByID(int idCategory);

	/**
	 * hàm dùng để lấy danh sách sản phẩm ở dưới database theo thời gian mới nhất
	 * đến cũ nhất
	 * 
	 * @return
	 */
	List<Product> getListProductsByTime();

	/**
	 * hàm dùng để lấy sản phẩm ở dưới database theo id
	 * 
	 * @param idProduct
	 * @return: product tìm được
	 */
	Product getProductByID(int idProduct);

	/**
	 * hàm dùng để lấy danh sách sản phẩm ở dưới database theo thể loại
	 * 
	 * @param categoryOfProductSelected
	 * @return
	 */
	List<Product> getListProductsByCategory(Category categoryOfProductSelected);

	/**
	 * hàm dùng để lấy sản phẩm theo giá từ thấp đến cao
	 * 
	 * @return
	 */
	List<Product> getListProductByPrice();

	/**
	 * hàm dùng để tìm kiếm sản phẩm theo ký tự
	 * 
	 * @param keyword
	 * @return
	 */
	List<Product> getListProductByText(String keyword);
}
