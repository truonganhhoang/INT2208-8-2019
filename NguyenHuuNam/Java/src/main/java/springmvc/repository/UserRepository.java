package springmvc.repository;
import springmvc.model.User;

public interface UserRepository {

	/**
	 * hàm insert user nhập ở trên form xuống database
	 * 
	 * @param user
	 */
	void insertUser(User user);

	/**
	 * hàm tìm trong database user theo email và password 
	 * kiểm tra user khi đăng nhập có tồn tại dưới database không?
	 * 
	 * @param user: user được ở tạo bởi user = new User(String email, String
	 *        password);
	 * @return: trả về user nếu tìm được, trả về null nếu không tìm được
	 */
	User searchUserInDatabase(User user);

	/**
	 * hàm user tìm trong database theo email 
	 * kiểm tra email user khi đăng kí có bị trùng với email của user khác đã đăng kí không?
	 * 
	 * @param email
	 * @return: trả về user nếu đã tồn tại, trả về null nếu chưa tồn tại email cần
	 *          đăng kí dưới database
	 */
	User searchUserByEmail(String email);
	
	
}
