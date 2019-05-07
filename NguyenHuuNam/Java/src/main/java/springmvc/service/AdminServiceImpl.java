package springmvc.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import springmvc.model.Admin;
import springmvc.model.Product;
import springmvc.repository.AdminRepository;

@Service
public class AdminServiceImpl implements AdminService{
	@Autowired
	private AdminRepository adminRepository;

	@Override
	public Admin searchAdminByEmail(String email) {
		return adminRepository.searchAdminByEmail(email);
	}

	@Override
	public void insertProduct(Product product) {
		adminRepository.insertProduct(product);
	}

	@Override
	public void deleteProduct(Product product) {
		adminRepository.deleteProduct(product);
	}

	@Override
	public void updateSinhVien(Product product) {
		adminRepository.updateSinhVien(product);
	}
	
	
}
