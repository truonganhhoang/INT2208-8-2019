package springmvc.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.hibernate.Criteria;
import org.hibernate.SessionFactory;
import org.hibernate.criterion.Restrictions;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import springmvc.model.Admin;
import springmvc.model.Product;


@Repository
@Transactional
public class AdminRepositoryImpl implements AdminRepository{
	@Autowired
	private SessionFactory sessionFactory;
	
	@Override
	public Admin searchAdminByEmail(String email) {
		Criteria criteria = sessionFactory.getCurrentSession().createCriteria(Admin.class);
		criteria.add(Restrictions.eq("email", email));
		List<Admin> admins = criteria.list();
		if(admins.size() != 0) {
			return admins.get(0);
		}
		return null;
	}

	@Override
	public void insertProduct(Product product) {
		sessionFactory.getCurrentSession().save(product);
	}

	@Override
	public void deleteProduct(Product product) {
		sessionFactory.getCurrentSession().delete(product);	
	}

	@Override
	public void updateSinhVien(Product product) {
		sessionFactory.getCurrentSession().update(product);
	}

}
