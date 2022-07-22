<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Products_Model extends CI_Model {

	function __construct(){
	  parent::__construct();	
	}
	
	// Get all products list
	public function getAllUsers(){
		$this->db->select('*');
		$this->db->from('products');
		$query = $this->db->get();
		return $query->result();
	}
	
	// Find count of all products based on status
	public function getProductsCount($status){
		$sql = "SELECT COUNT(id) AS cnt FROM products WHERE status='".$status."' ";
		$query = $this->db->query($sql);
		$result = $query->row();
		return $result->cnt;
	}
	
	// This will find active products which do not belong to any user
	public function activeProductsDoNotBelongToUser(){
	  $sql = "SELECT COUNT(P.id) AS cntProducts FROM `products` AS P WHERE P.id NOT IN ( SELECT product_id FROM `user_products` WHERE P.`status`='Active') ";	
	    $query = $this->db->query($sql);
		$result = $query->row();
		return $result->cntProducts;
	  
	}
	
	// This will find all active products which does belong to any user
	public function activeProductsBelongTouser(){
      $sql= "SELECT COUNT(P.id) AS cntProducts FROM `products` AS P WHERE P.id  IN ( SELECT product_id FROM `user_products` WHERE P.`status`='Active') ";	
	    $query = $this->db->query($sql);
		$result = $query->row();
		return $result->cntProducts;	
	}
	
	// This will find all users with active products attached to user and will calculate price accordingly as per active status of the product
	public function getAllActiveAttachedProductsList(){
	   $sql = "SELECT U.id, U.`full_name`, COUNT(UP.id) AS NoOfProducts, SUM(UP.`product_price`) AS activeProductPrice
			FROM users AS U  INNER JOIN `user_products` AS UP ON
			U.`id`=UP.`user_id`
			INNER JOIN `products` AS P ON P.`id`=UP.`product_id`
			WHERE P.`status`='Active'
			GROUP BY UP.`user_id`";	
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	// This will only display all amount of active products linked to any user
	public function getAllAmountOfActiveAttachedProducts(){
	  $sql  = "SELECT  SUM(UP.`product_price`) AS activeProductPrice
				FROM users AS U  INNER JOIN `user_products` AS UP ON
				U.`id`=UP.`user_id`
				INNER JOIN `products` AS P ON P.`id`=UP.`product_id`
				WHERE P.`status`='Active'";
		$query = $this->db->query($sql);
		$result = $query->row();
		return $result->activeProductPrice;			
	}
	
	// Get summerized products list as per user with active products
	public function getSummerizedActiveProductsList(){
	    $sql = "SELECT U.id, U.`full_name`,COUNT(UP.id) AS NoOfProducts,SUM(UP.`product_price`) AS totalPrice,  
		(COUNT(UP.id) * SUM(UP.`product_price`)) AS summerizedActiveProductsPrice
		FROM users AS U  INNER JOIN `user_products` AS UP ON
		U.`id`=UP.`user_id`
		INNER JOIN `products` AS P ON P.`id`=UP.`product_id`
		WHERE P.`status`='Active'
		GROUP BY UP.`user_id`";	
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	// Get summerized products price/amount
	/*
	* total number of active products x all price of the active products.
	* products with inactive status will be ignored and will not be count
 	*/
	public function getSummerizedProducstAmount(){
	    $sql = "SELECT  (COUNT(UP.id) * SUM(UP.`product_price`)) AS activeProductPrice
				FROM users AS U  INNER JOIN `user_products` AS UP ON
				U.`id`=UP.`user_id`
				INNER JOIN `products` AS P ON P.`id`=UP.`product_id`
				WHERE P.`status`='Active' ";
		$query = $this->db->query($sql);
		$result = $query->row();
		return $result->activeProductPrice;	
	}
	


}

?>