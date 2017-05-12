<?php
$this->load->view('header');
?>

<div class="content">
    <div class="content_box">

        <div class="account-in">
            <h2>Login</h2>

            <div class="col-md-7 account-top">
                <form class="form-horizontal" method="POST" action="<?php echo $this->config->item("base_url"); ?>login/check_login">
                    <div class="form-group">

                        <?php
                        if ($this->session->flashdata('msg') != "") {
                            echo $this->session->flashdata('msg');
                        }
                        ?>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10"> 
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Submit" />
                        </div>
                    </div>
                </form>
            </div>
            <!--                                <div class="col-md-5 left-account ">
                                                <a href="single.html"><img class="img-responsive " src="images/s4.jpg" alt=""></a>
                                                <div class="five-in">
                                                    <h1>25% </h1><span>discount</span>
                                                </div>
                                                <a href="register.html" class="create">Create an account</a>
                                                <div class="clearfix"> </div>
                                            </div>-->
            <div class="clearfix"> </div>
        </div>

    </div>


</div>	
<?php
$this->load->view('footer');
?>