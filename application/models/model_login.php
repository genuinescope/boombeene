<?php

class model_login extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function check_user($username, $password) {
        $sql3 = "select * from users where email='" . $username . "' and pwd=md5('" . $password . "') and active='1'";
        $result = mysql_query($sql3);
        if (mysql_num_rows($result) > 0) {
            $row = mysql_fetch_assoc($result);
            if($username=="admin"){
                $this->session->set_userdata("admin", "1");
                $this->session->set_userdata("loggedin", "1");
            }
            else{
                $this->session->set_userdata("loggedin", "1");
            }
            
            $this->session->set_userdata("userid", $row["id"]);
            return "1";
        } else {
            return "0";
        }
    }

}

?>