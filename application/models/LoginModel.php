<?php

class LoginModel extends CI_Model {

    function UserLogin($email, $password){
        $this->db->where("EMAIL", $email);
        $this->db->where("PASSWORD", $password);
        $result = $this->db->get("hospital");
        
        if($result->num_rows() > 0){
            $res = $result->row();
            
            return $res;
        }
        else {
            $this->db->where("EMAIL", $email);
            $this->db->where("PASSWORD", $password);
            $result = $this->db->get("users");
            
            if($result->num_rows() > 0){
                $res = $result->row();
                
                return $res;
            }
            else {
                return FALSE;
            }
        }
    }

}

?>