<?php

/*
  Author: Daniel Gutierrez
  Date: 9/23/12
  Version: 1.0
 */

class Orders extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model("model_order");
//		
//		if(!$this->users->_is_admin()){
//			show_404();
//		}
    }

    function all() {
        $data['orders'] = $this->model_order->get_all_user_orders();
        $this->load->view('admin/list_all_orders', $data);
    }

}

?>