package springmvc.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import springmvc.model.Category;
import springmvc.model.Product;
import springmvc.repository.ProductRepository;

@Service
public class ProductServiceImpl implements ProductService{
	@Autowired
	private ProductRepository productRepositoty;
	
	@Override
	public List<Category> getListCategory() {
		return productRepositoty.getListCategory();
	}
	
	@Override
	public List<Product> getListProductsByTime() {
		return productRepositoty.getListProductsByTime();
	}
	
	@Override
	public Product getProductByID(int idProduct) {
		return productRepositoty.getProductByID(idProduct);
	}

	@Override
	public List<Product> getListProductsByCategory(Category categoryOfProductSelected) {
		return productRepositoty.getListProductsByCategory(categoryOfProductSelected);
	}

	@Override
	public List<Product> getListProductByPrice() {
		return productRepositoty.getListProductByPrice();
	}

	@Override
	public Category getCategoryByID(int idCategory) {
		return productRepositoty.getCategoryByID(idCategory);
	}

	@Override
	public List<Product> getListProductByText(String keyword) {
		return productRepositoty.getListProductByText(keyword);
	}

	@Override
	public List<Product> getAllProduct() {
		return productRepositoty.getAllProduct();
	}



}
