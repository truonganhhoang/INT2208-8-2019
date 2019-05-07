package springmvc.repository;

import springmvc.model.Admin;
import springmvc.model.Product;

public interface AdminRepository {
	Admin searchAdminByEmail(String email);
	void insertProduct(Product product);
	void deleteProduct(Product product);
	void updateSinhVien(Product product);
}
