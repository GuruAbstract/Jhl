<?php

class Registration extends CI_Model {

    function hospitalRegistration($data){
        $this->db->insert("hospital", $data);
    }
    
    function userRegistration($data){
        $this->db->insert("users", $data);
    }

}

?>