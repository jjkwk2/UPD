<?php
class Client_Model extends CI_model{

    //Buyer
    public function insertData_B ($clinsert){
        
        $result = $this->db->insert('buyercl', $clinsert);
        if($result){
            return true;
        } else {
            return false;
        }
    } 


    //Seller
    public function insertData_S ($clinsert){
        
        $result = $this->db->insert('sellercl', $clinsert);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    

}