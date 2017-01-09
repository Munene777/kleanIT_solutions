<?php


class GarmentsProcessing extends CI_Controller {


//default page for the garment processing
public function index()
	{
		$data= array(
			'garments'=> $this->GarmentModel->getGarments()
			);
		$this->load->view('pages/GarmentsProcess/newGarment',$data);
	}

//insert a new garment
public function insertNewGarment(){

		$data= array(
			'garmentype'=> $this->input->post('garmentype'),
			'description'=> $this->input->post('desc'),
			'charges'=> $this->input->post('normal'),
			'express'=> $this->input->post('express'),
			'special'=> $this->input->post('special'),
			'pressing'=> $this->input->post('pressing'),
			'others'=> $this->input->post('others')

			);

		if($this->GarmentModel->insertNewGarment($data))

		redirect('GarmentsProcessing/');
	}

//update a garment
	public function updateGarment(){

		$data= array(
			'garmentype'=> $this->input->post('edit_garmentype'),
			'description'=> $this->input->post('edit_desc'),
			'charges'=> $this->input->post('edit_normal'),
			'express'=> $this->input->post('edit_express'),
			'special'=> $this->input->post('edit_special'),
			'pressing'=> $this->input->post('edit_pressing'),
			'others'=> $this->input->post('edit_others')

			);

		$id=$this->input->post('categoryId');
		if($this->GarmentModel->updateGarment($id,$data))

		redirect('GarmentsProcessing/');
	}


//update ready status

	public function readyStatus(){

		$data= array(
			'readystatus'=> $this->input->post('edit_ready'),
			'dateready'=> $this->input->post('readyDate')

			);

		$id=$this->input->post('orderId');
		if($this->GarmentModel->readyStatus($id,$data))

		redirect('GarmentsProcessing/enterReadyGarment');
	}


//delete a garment
	public function delGarment(){

		
		$Id= $this->input->post('del_categoryId');

		$this->GarmentModel->delGarment($Id);

		redirect('GarmentsProcessing/');
	}



//view garment's state 
public function enterReadyGarment()
	{
		$data= array(
			'orders'=> $this->GarmentModel->getOrders()
			);
		$this->load->view('pages/GarmentsProcess/enterReadyGarment',$data);
	}


	public function readyGarments()
	{
		$data= array(
			'ready'=> $this->GarmentModel->getReadyGarments()
			);
		$this->load->view('pages/GarmentsProcess/readyGarments',$data);
	}



}