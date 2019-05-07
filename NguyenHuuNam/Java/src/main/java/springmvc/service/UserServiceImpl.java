package springmvc.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import springmvc.model.User;
import springmvc.repository.UserRepository;

@Service
public class UserServiceImpl implements UserService{
	@Autowired
	private UserRepository userRepository;
	public void insertUser(User user) {
		userRepository.insertUser(user);
	}
	public User searchUserInDatabase(User user) {
		return userRepository.searchUserInDatabase(user);
	}
	@Override
	public User searchUserByEmail(String email) {
		return userRepository.searchUserByEmail(email);
	}

}
