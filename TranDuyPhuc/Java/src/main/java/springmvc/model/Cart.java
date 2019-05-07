package springmvc.model;

public class Cart {
	private Product product;
	private int quantityBuy;

	public Cart() {
		super();
	}

	public Cart(Product product, int quantityBuy) {
		super();
		this.product = product;
		this.quantityBuy = quantityBuy;
	}

	public Product getProduct() {
		return product;
	}

	public void setProduct(Product product) {
		this.product = product;
	}

	public int getQuantityBuy() {
		return quantityBuy;
	}

	public void setQuantityBuy(int quantityBuy) {
		this.quantityBuy = quantityBuy;
	}

}
