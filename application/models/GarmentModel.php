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



    public function insertNewGarment($garment){
    $new= $this->db->insert('category',$garment);

   
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