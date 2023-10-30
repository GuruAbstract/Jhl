<?php

class WebsiteModel extends CI_Model {
    
    function totalHospital(){
        $this->db->select('count(HID) as totalHospital');
        $res = $this->db->get('hospital');
        return $res->row();
    }
    
    function totalCountry(){
        $this->db->select('count(CID) as totalCountry');
        $res = $this->db->get('country');
        return $res->row();
    }
    
    function fetchRegions(){
        $this->db->order_by('RNAME', 'ASC');
        $this->db->where('CID', 1);
        $res = $this->db->get('region');
        return $res->result();
    }
    
    //All regions
    function allRegions(){
        $this->db->order_by("RNAME","ASC");
        $this->db->from("region");
        $result = $this->db->get();

        return $result->result();
    }

}