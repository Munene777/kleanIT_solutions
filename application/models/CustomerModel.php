<?php


Class CustomerModel extends CI_Model{


public function getCustomers(){
  $this->db->from('customer');
  $query = $this->db->get();


      if($query->num_rows() > 0)
      {
        return $query->result();
      }else{
        return NULL;
      }
    }



    public function insertNewCustomer($customer){
    $new= $this->db->insert('customer',$customer);

   
       if($new){
        return true;
       }else{
        return false;
       }
    }


      public function updateCustomer($id,$change){
      $this->db->where('customerid',$id);

      if($this->db->update('customer',$change)){

        return true;
      }else
      {
        return false;
      }

    }

    public function editDeposit($id,$change){
      $this->db->where('garmentid',$id);

      if($this->db->update('garment',$change)){

        return true;
      }else
      {
        return false;
      }

    }


      public function delCustomer($id){
     
    
      $this->db->where('customerid',$id);
     

      $down=$this->db->delete('customer');
       if($down){
        return true;
       }else{
        return false;
       }
    }





}




?>