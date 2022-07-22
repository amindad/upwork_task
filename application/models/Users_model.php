<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {

	function __construct(){
	  parent::__construct();	
	}
	
	// Get all users
	public function getAllUsers(){
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		return $query->result();
	}
	
	// Get count of user data based on status
	public function getCountOf($status){
	   $sql = "SELECT COUNT(id) AS cnt FROM users WHERE user_status='".$status."' ";
	   $query = $this->db->query($sql);
	   $result = $query->row();
	   return $result->cnt;
	}
	// This function will find count of all users with attached active products
	public function getUsersWithActiveProducts(){
      $Sql = "SELECT COUNT(U.id) AS usersWithAttachedProducts FROM users AS U 
			INNER JOIN `user_products` AS UP ON U.`id`=UP.`user_id`
			INNER JOIN products AS P ON UP.`product_id`=P.`id`
			WHERE P.`status`='Active' AND U.`user_status`='Verified'";	
	  $query = $this->db->query($Sql);
	  $result = $query->row();
	  return $result->usersWithAttachedProducts;		
	}
	
	
	public function getExchangeRatesForUSDAndRON(){
	   // set API Endpoint and API key
		$endpoint = 'latest';
		$access_key = 'cee212a839adf0ce9f3cafc93f3f8890';
		
		// Initialize CURL:
		$ch = curl_init('http://api.exchangeratesapi.io/v1/'.$endpoint.'?access_key='.$access_key.'');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		// Store the data:
		$json = curl_exec($ch);
		curl_close($ch);
		
		// Decode JSON response:
		$exchangeRates = json_decode($json, true);
		//return $exchangeRates['rates']['USD'];
		
		// Access the exchange rate values, e.g. GBP:
		$html = '<p>Exchange rates for USD and RON based on Euro using https://exchangeratesapi.io/</p>';
		$html .= '<table width="100%" border="1" class="table">';
		$html .= '<tr><td>USD</td><td>RON</td></tr>';
		$html .= '<tr><td>'.$exchangeRates['rates']['USD'].'</td><td>'.$exchangeRates['rates']['RON'].'</td></tr>';
		$html .= '</table>';
		return $html;	
	}


}

?>