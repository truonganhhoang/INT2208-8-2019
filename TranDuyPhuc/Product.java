package springmvc.model;



import java.sql.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;


@Entity
public class Product {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private int id;
	
	@Column(name = "name", length = 100)
	private String name;
	
	@Column(name = "productDescription", columnDefinition = "TEXT")
	private String productDescription;
	
	@Column(name = "image")
	private String image;
	
	@Column(name = "quantity")
	private int quantity;
	
	@Column(name = "unit_price")
	private double priceUnitProduct;
	
	@Column(name = "unit")
	private String donVi;
	
	@ManyToOne
	@JoinColumn(name = "id_type", nullable = false)
	private Category category;

	public Product() {
		super();
	}

	public Product(int id, String name, String productDescription, String image, int quantity, double priceUnitProduct,
			String donVi, Category category) {
		super();
		this.id = id;
		this.name = name;
		this.productDescription = productDescription;
		this.image = image;
		this.quantity = quantity;
		this.priceUnitProduct = priceUnitProduct;
		this.donVi = donVi;
		this.category = category;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getProductDescription() {
		return productDescription;
	}

	public void setProductDescription(String productDescription) {
		this.productDescription = productDescription;
	}

	public String getImage() {
		return image;
	}

	public void setImage(String image) {
		this.image = image;
	}

	public int getQuantity() {
		return quantity;
	}

	public void setQuantity(int quantity) {
		this.quantity = quantity;
	}

	public double getPriceUnitProduct() {
		return priceUnitProduct;
	}

	public void setPriceUnitProduct(double priceUnitProduct) {
		this.priceUnitProduct = priceUnitProduct;
	}

	public String getDonVi() {
		return donVi;
	}

	public void setDonVi(String donVi) {
		this.donVi = donVi;
	}

	public Category getCategory() {
		return category;
	}

	public void setCategory(Category category) {
		this.category = category;
	}

	
	
}
