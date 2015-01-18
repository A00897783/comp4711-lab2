<?php
class Images extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function getImg($id){
        $this->db->select('filename');
        $this->db->where("id",$id);
        $query = $this->db->get('images');
        return $query->result();
    }
    
}