<?php


class GarmentsProcessing extends CI_Controller {



public function index()
	{
		$data= array(
			'garments'=> $this->GarmentModel->getGarments()
			);
		$this->load->view('pages/GarmentsProcess/newGarment',$data);
	}


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



	public function delGarment(){

		
		$Id= $this->input->post('del_categoryId');

		$this->GarmentModel->delGarment($Id);

		redirect('GarmentsProcessing/');
	}




	

}