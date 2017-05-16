<?php

class model_order extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function save_new_order($data) {
        $this->db->insert('orders', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}

?>