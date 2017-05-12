<?php
$this->load->view('header');
?>

<div class="grid_1">
    <div class="col-md-3 banner_left">
<!--                        <img src="<?php echo $this->config->item("base_url"); ?>images/pic1.png" class="img-responsive" alt=""/>-->
        <div class="banner_desc">
            <h1>How it Works? </h1>
            <h4 class="span_3">1. Sign up Free.</h4>
            <h4 class="span_3">2. Send the link of the item.</h4>
            <h4 class="span_3">3. We buy the item for you.</h4>
            <h4 class="span_3">4. Get your item with Home Delivery Service or from one of our branches in Erbil,
                Sulaimani, Duhok, Baghdad and Al-Basra.</h4>
            <!--                            <h2>Roundcheck T-Shirt</h2>
                                        <h5>$125
                                            <small>Only</small>
                                        </h5>-->
            <!--<a href="#" class="btn1 btn4 btn-1 btn1-1b">Add To Cart</a>-->
        </div>
    </div>
    <div class="col-md-9 banner_right">
        <!-- FlexSlider -->
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="<?php echo $this->config->item("base_url"); ?>images/b2.png" alt=""/></li>
                    <li><img src="<?php echo $this->config->item("base_url"); ?>images/b1.png" alt=""/></li>
                    <li><img src="<?php echo $this->config->item("base_url"); ?>images/b3.png" alt=""/></li>
                    <li><img src="<?php echo $this->config->item("base_url"); ?>images/b4.jpeg" alt=""/></li>

                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
    </div>
    <div class="clearfix"></div>
</div>
<div class="content">
    <div class="content_box">
        <ul class="grid_2">
            <a href="single.html"><li><img src="<?php echo $this->config->item("base_url"); ?>images/pic2.png" class="img-responsive" alt=""/>
                    <span class="btn5">$120</span>
                    <p>Bikroy Tshirt - Roundneck</p>
                </li></a>
            <a href="single.html"><li><img src="<?php echo $this->config->item("base_url"); ?>images/pic3.png" class="img-responsive" alt=""/>
                    <span class="btn5">$340</span>
                    <p>Park Tshirt - Partygrandd</p>
                </li></a>
            <a href="single.html"><li><img src="<?php echo $this->config->item("base_url"); ?>images/pic4.png" class="img-responsive" alt=""/>
                    <span class="btn5">$250</span>
                    <p>Gray Tshirt Roundneckdd</p>
                </li></a>
            <a href="single.html"><li><img src="<?php echo $this->config->item("base_url"); ?>images/pic5.png" class="img-responsive" alt=""/>
                    <span class="btn5">$378</span>
                    <p>Marivo Tshirt - Roundneck</p>
                </li></a>
            <a href="single.html"><li class="last1"><img src="<?php echo $this->config->item("base_url"); ?>images/pic6.png" class="img-responsive" alt=""/>
                    <span class="btn5">$428</span>
                    <p>Strict TshirtSoft, Pure Cotton</p>
                </li></a>
            <div class="clearfix"> </div>
        </ul>

    </div>


</div>	
<?php
$this->load->view('footer');
?>