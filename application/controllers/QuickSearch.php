<?php
class QuickSearch extends CI_Controller {



public function customers()
	{
		$data= array(
			'customers'=> $this->CustomerModel->getCustomers()
			);
		$this->load->view('pages/QuickSearch/customers',$data);
	}



	public function orders()
	{
		$data= array(
			'orders'=> $this->GarmentModel->getOrders()
			);
		$this->load->view('pages/QuickSearch/orders',$data);
	}


public function payments()
	{
		$data= array(
			'payments'=> $this->GarmentModel->getPaidOrders()
			);
		$this->load->view('pages/QuickSearch/payments',$data);
	}




}