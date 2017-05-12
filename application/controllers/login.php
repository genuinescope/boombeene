<?php

/*
  Author: Daniel Gutierrez
  Date: 9/18/12
  Version: 1.0
 */

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_login');
    }

    function index() {
        $this->load->view('login');
    }

    public function check_login() {
        $checkuser = $this->model_login->check_user($this->input->post("username"), $this->input->post("password"));
        if ($checkuser == "1") {
            redirect($this->config->item("base_url") . "admin/home/slider");
        }
        if ($checkuser == "0") {
            $msg = '<div class="alert alert-danger"> Invalid Login </div>';
            $this->session->set_flashdata('msg', $msg);
            redirect($this->config->item("base_url") . "admin/login");
        }
    }

    function logout() {
        $this->session->set_userdata("loggedin", "0");
        $this->session->set_userdata("admin", "0");
        $this->session->set_userdata("user_id", "");
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('loggedin');
        $this->session->unset_userdata('admin');
        $this->session->sess_destroy();
        redirect($this->config->item("base_url") . "admin/login");
    }

}

?>