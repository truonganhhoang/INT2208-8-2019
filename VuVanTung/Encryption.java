package springmvc.common;

import org.mindrot.jbcrypt.BCrypt;

public class Encryption {
	/**
	 * hàm dùng để mã hóa mật khẩu
	 * @param password
	 * @return
	 */
	public static String hashPassword(String password) {
		String passWordAfterHash = BCrypt.hashpw(password, BCrypt.gensalt(8));
		return passWordAfterHash;
	}
	
	/**
	 * hàm kiểm tra mật khẩu nhập vào có đúng với mật khẩu đã đc mã hóa dưới database không?
	 * @param password
	 * @param passWordAfterHash
	 * @return true khi password == passWordAfterHash và ngược lại
	 */
	public static boolean checkPassAtferHash(String password, String passWordAfterHash) {
		boolean valuate = BCrypt.checkpw(password, passWordAfterHash);
		return valuate;
	}
}
