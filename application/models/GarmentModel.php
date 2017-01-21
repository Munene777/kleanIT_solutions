<?php


Class GarmentModel extends CI_Model{


public function getGarments(){
  $this->db->from('category');
  $query = $this->db->get();


      if($query->num_rows() > 0)
      {
        return $query->result();
      }else{
        return NULL;
      }
    }
    public function getGarment($id){
  $this->db->from('category');
  $this->db->where('categoryid',$id);
  $query = $this->db->get();


      if($query->num_rows() > 0)
      {
        return $query->result();
      }else{
        return NULL;
      }
    }

public function getClientOrder($id){
  $this->db->select('*');
  $this->db->from('garment');
  $this->db->join('category','garment.garmentype=category.categoryid');
  $this->db->where('jobcard_id',$id);
  $query = $this->db->get();


      if($query->num_rows() > 0)
      {
        return $query->result();
      }else{
        return NULL;
      }
    }


    public function getClient($id){
       $this->db->select('*');
  $this->db->from('order');
  $this->db->join('customer','order.clientid=customer.customerid');
  $this->db->where('jobcard_id',$id);
  
  $query = $this->db->get();


      if($query->num_rows() > 0)
      {
        return $query->result();
      }else{
        return NULL;
      }
    }


public function getOrders(){
  $this->db->select('*');
  $this->db->from('order');
  $this->db->join('customer','order.clientid=customer.customerid');
  $query = $this->db->get();


      if($query->num_rows() > 0)
      {
        return $query->result();
      }else{
        return NULL;
      }
    }


public function getReadyGarments(){
  $this->db->select('*');
  $this->db->from('order');
  $this->db->join('customer','order.clientid=customer.customerid');
  $this->db->where('readystatus="Yes"');
  $query = $this->db->get();


      if($query->num_rows() > 0)
      {
        return $query->result();
      }else{
        return NULL;
      }
    }



    public function insertNewGarment($garment){
    $new= $this->db->insert('category',$garment);

   
       if($new){
        return true;
       }else{
        return false;
       }
    }

      public function insertNewClientOrder($order){
    $new= $this->db->insert('order',$order);

   
       if($new){
        return true;
       }else{
        return false;
       }
    }

    public function insertNewOrder($garment){
    $new= $this->db->insert('garment',$garment);

   
       if($new){
        return true;
       }else{
        return false;
       }
    }


      public function updateGarment($id,$change){
      $this->db->where('categoryid',$id);

      if($this->db->update('category',$change)){

        return true;
      }else
      {
        return false;
      }


}
       public function readyStatus($id,$change){
      $this->db->where('jobcard_id',$id);

      if($this->db->update('order',$change)){

        return true;
      }else
      {
        return false;
      }




    }

      public function delGarment($id){
     
    
      $this->db->where('categoryid',$id);
     

      $down=$this->db->delete('category');
       if($down){
        return true;
       }else{
        return false;
       }
    }





}




?>