<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('users_model', 'products_model'));
	}
	
	
	public function index()
	{
		$data = array();
		$data['usersList'] = $this->users_model->getAllUsers();
		$data['verifiedUsers'] = $this->users_model->getCountOf('Verified');
		$data['userWithActiveAttachedProducts'] = $this->users_model->getUsersWithActiveProducts();
		$data['allProductsCount'] =  $this->products_model->getProductsCount('Active');
		$data['activeProductsDoNotLinkedTouser'] = $this->products_model->activeProductsDoNotBelongToUser();
		$data['AmountOfActiveAttachedProducts'] = $this->products_model->getAllAmountOfActiveAttachedProducts();
		$data['allActiveAttachedProductsList'] = $this->products_model->getAllActiveAttachedProductsList();
		$data['summerizedPrice'] = $this->products_model->getSummerizedProducstAmount();
		$data['summerizedProductsList'] = $this->products_model->getSummerizedActiveProductsList();
		$data['exchangeRatesForUSDAndRON'] = $this->users_model->getExchangeRatesForUSDAndRON();
		$this->load->view('user_page', $data);
	}
	
	
}
