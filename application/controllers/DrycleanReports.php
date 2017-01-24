<?php


class DrycleanReports extends CI_Controller {

	public function jobOrderReport(){

		$data= array(
			'orders'=>
		$this->GarmentModel->getOrders(),
		'garments'=> $this->GarmentModel->getAllGarmentsOrdered()
		);

		$this->load->view('pages/DrycleanReports/paymentSummary',$data);
	}


	function generateOrderReport(){
		$this->load->helper('pdf_helper');
		$data= array(
			'orders'=>
		$this->GarmentModel->getOrders(),
		'garments'=> $this->GarmentModel->getAllGarmentsOrdered()
		);

		$this->load->view('pages/DrycleanReports/paymentSummaryPdf',$data);
	}



}
