<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function newCustomer()
	{
		$data= array(
			'customers'=> $this->CustomerModel->getCustomers()
			);
		$this->load->view('pages/CustomerTransactions/newCustomer',$data);
	}


	


	public function insertNewCustomer(){

		$data= array(
			'firstname'=> $this->input->post('firstName'),
			'lastname'=> $this->input->post('lastName'),
			'phone'=> $this->input->post('phone')
			);

		if($this->CustomerModel->insertNewCustomer($data))

		redirect('Welcome/newCustomer');
	}

	

	public function updateCustomer(){

		$data= array(
			'firstname'=> $this->input->post('edit_firstName'),
			'lastname'=> $this->input->post('edit_lastName'),
			'phone'=> $this->input->post('edit_phone'),

			);
		$customerId= $this->input->post('customerId');

		$this->CustomerModel->updateCustomer($customerId,$data);

		redirect('Welcome/newCustomer');
	}

	

	public function delCustomer(){

		
		$customerId= $this->input->post('del_customerId');

		$this->CustomerModel->delCustomer($customerId);

		redirect('Welcome/newCustomer');
	}

	


	public function processOrder()
	{


		$data= array(
			'garments'=> '',
			'client'=>'',
			'category'=> $this->GarmentModel->getGarments(),
			'customers'=> $this->CustomerModel->getCustomers()
			);
		
		$this->load->view('pages/CustomerTransactions/processOrder',$data);
	}

	public  function searchJobOrder($id=''){


		if($id == ''){
		$id= $this->input->post('jobNoSearch');
		}

		 $data= array(
			'garments'=> $this->GarmentModel->getClientOrder($id),
			'client'=> $this->GarmentModel->getClient($id),
			'category'=> $this->GarmentModel->getGarments(),
			'customers'=> $this->CustomerModel->getCustomers()

			);

		 $this->load->view('pages/CustomerTransactions/processOrder',$data);

	}

	public  function fetchCharges(){
		$id=$_POST['id'];
		$res= $this->GarmentModel->getGarment($id);
		$return= "";
		foreach ($res as $charge) {
		 $return= $charge->charges.' '.$charge->express.' '.$charge->special.' '.$charge->others;
		}

		echo $return;
	}

	//insert a new Order
public function insertNewOrder(){


		$serviceAmount= explode(",",$this->input->post('serviceType'));

		$data= array(
			'jobcard_id'=>$this->input->post('newGarmentOrder'),
			'garmentype'=> $this->input->post('garmentTypeOrder'),
			'typeservice'=>$serviceAmount[0],
			'inspection'=> $this->input->post('garmentInspection'),
			'charges'=> $serviceAmount[0],
			'collected'=> $this->input->post('No')
			);
	$id= $this->input->post('newGarmentOrder');
		if($this->GarmentModel->insertNewOrder($data))

		$this->searchJobOrder($id);
	}



	//insert a new Customer order
public function insertNewClientOrder(){

		$data= array(
			'clientid'=>$this->input->post('newCustomerName'),
			'orderdate'=> $this->input->post('dropDate'),
			'pickdate'=> $this->input->post('pickDate'),
			'jobcard_id'=> $this->input->post('jobNoOrder'),
			'readystatus'=>'No'
			);
	$id= $this->input->post('jobNoOrder');
		if($this->GarmentModel->insertNewClientOrder($data))

		$this->searchJobOrder($id);
	}

	

	public function makePayment($client='')
	{
		$data= array(
			'orders'=> $this->GarmentModel->getOrders(),
			'client'=>$client
			);
		$this->load->view('pages/CustomerTransactions/makePayment',$data);
	}


	public  function processPayment(){
		$id=$this->input->post('garmentPayment');
		$client= $this->GarmentModel->getClient($id);

		$this->makePayment($client);
		
	}

	
}
