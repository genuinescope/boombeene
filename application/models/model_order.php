<?php

class model_order extends CI_Model {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata("loggedin") != "1") {
            redirect($this->config->item("base_url") . "login");
        }
    }

    function save_new_order($data) {
        $this->db->insert('orders', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function get_all_orders() {
        $query = $this->db->get_where('orders', array('userId' => $this->session->userdata("userid")));
        
        return $query->result_array();
    }

}

?>