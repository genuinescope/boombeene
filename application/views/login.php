<?php
$this->load->view('header');
?>

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
                            <label class="control-label-login col-sm-4" for="email">Email:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control-login" id="email" placeholder="Enter email" name='username' >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label-login col-sm-4" for="pwd">Password:</label>
                            <div class="col-sm-4"> 
                                <input type="password" class="form-control-login" id="pwd" placeholder="Enter password" name='password'>
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

        </header>
        <!-- / header -->
        <!-- content -->
        <!--		<section id="content">
                                <article class="col-1-3"><div class="wrap-col">
                                        <h3>Hot Travel</h3>
                                        <div class="pad">
                                                <div class="wrapper under">
                                                        <figure class="left marg_right1">
                                                            <img src="<?php echo $this->config->item("base_url"); ?>img/page1_img1.jpg" alt=""></figure>
                                                        <p class="pad_bot2"><strong>Italy<br>Holidays</strong></p>
                                                        <p class="pad_bot2">Lorem ipsum dolor sit amet, consect etuer adipiscing.</p>
                                                        <a href="#" class="marker_1"></a>
                                                </div>
                                                <div class="wrapper under">
                                                        <figure class="left marg_right1"><img src="<?php echo $this->config->item("base_url"); ?>img/page1_img2.jpg" alt=""></figure>
                                                        <p class="pad_bot2"><strong>Philippines<br>Travel</strong></p>
                                                        <p class="pad_bot2">Lorem ipsum dolor sit amet, consect etuer adipiscing.</p>
                                                        <a href="#" class="marker_1"></a>
                                                </div>
                                                <div class="wrapper">
                                                        <figure class="left marg_right1"><img src="<?php echo $this->config->item("base_url"); ?>img/page1_img3.jpg" alt=""></figure>
                                                        <p class="pad_bot2"><strong>Cruise<br>Holidays</strong></p>
                                                        <p class="pad_bot2">Lorem ipsum dolor sit amet, consect etuer adipiscing.</p>
                                                        <a href="#" class="marker_1"></a>
                                                </div>
                                        </div>
                        </div></article>
                                <article class="col-2-3"><div class="wrap-col">
                                        <h2>Popular Places</h2>
                                        <div class="row under">
                                                <div class="col-1-3"><div class="wrap-col">
                                                        <figure class="left marg_right1"><img src="<?php echo $this->config->item("base_url"); ?>img/page1_img4.jpg" alt=""></figure>
                                                </div></div>
                                                <div class="col-2-3"><div class="wrap-col">
                                                        <p class="pad_bot2"><strong>Hotel du Havre</strong></p>
                                                        <p class="pad_bot2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                        <p class="pad_bot2"><strong>Nemo enim ipsam voluptatem</strong> quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        <a href="#" class="marker_2"></a>
                                                </div></div>
                                        </div>
                                        <div class="row under">
                                                <div class="col-1-3"><div class="wrap-col"><figure class="left marg_right1"><img src="<?php echo $this->config->item("base_url"); ?>images/page1_img5.jpg" alt=""></figure></div></div>
                                                <div class="col-2-3"><div class="wrap-col">
                                                        <p class="pad_bot2"><strong>Hotel Vacance</strong></p>
                                                        <p class="pad_bot2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                                                        <p class="pad_bot2">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
                                                        <a href="#" class="marker_2"></a>
                                                </div></div>
                                        </div>
                                        <div class="row">
                                                <div class="col-1-3"><div class="wrap-col">
                                                        <figure class="left marg_right1"><img src="<?php echo $this->config->item("base_url"); ?>images/page1_img4.jpg" alt=""></figure>
                                                </div></div>
                                                <div class="col-2-3"><div class="wrap-col">
                                                        <p class="pad_bot2"><strong>Hotel du Havre</strong></p>
                                                        <p class="pad_bot2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                        <p class="pad_bot2"><strong>Nemo enim ipsam voluptatem</strong> quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                        <a href="#" class="marker_2"></a>
                                                </div></div>
                                        </div>
                        </div></article>
                        </section>-->
        <!-- / content -->
    </div>
    <div class="block"></div>
</div>
<?php
$this->load->view('footer');
?>