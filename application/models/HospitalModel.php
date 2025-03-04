<?php

class HospitalModel extends CI_Model {

    function allNeeds(){
        $this->db->order_by("CATEGORY","ASC");
        $this->db->from("items");
        $result = $this->db->get();

        return $result->result();
    }
    
    function ourNeeds($hid){
        $this->db->where('hospital.HID', $hid);
        $this->db->select('items.INAME, items.INAME, needs.QUANTITY');
        $this->db->from('hospital');
        $this->db->join('needs', 'needs.HID = hospital.HID');
        $this->db->join('items', 'items.ITEM_ID = needs.ITEM_ID');
        $query = $this->db->get();
        
        return $query->result();
    }

}