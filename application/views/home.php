<?php
$this->load->view('header');
?>

<div class="row headerextra">
    <article class="col-2-3">
        <div class="wrap-col">
            <div class="text">
                <!--<img src="<?php echo $this->config->item("base_url"); ?>img/text1.jpg" alt="">-->
                <h2>How It Works?</h2>
                <ol class="homelist">
                    <li>1. Sign up Free</li>
                    <li>2. Send the link of the item.</li>
                    <li>3. We buy the item for you.</li>
                    <li>4. Get your item with Home Delivery Service or from one of our branches in Erbil, Sulaimani, Duhok, Baghdad and Al-Basra.</li>
                </ol>


                <a href="#" class="button">Read More</a>
            </div>
        </div></article>

    <article class="col-1-3" ><div class="wrap-col">

            <div class="tabs_cont">
                <form id="form_1" action="" method="post">
                    <div class="bg">
                        <h4>Order Cost Calculation</h4>

                        <div>
                            <input type="text" class="input"  placeholder="Item Price">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item Quantity">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item LB">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item Price">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item Price">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item Price">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item Quantity">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item LB">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item Price">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item Price">
                        </div>
                        <div>
                            <input type="text" class="input"  placeholder="Item Price">
                        </div>

                        <div class="wrapper pad_bot1">
                            <a href="#" class="button" onclick="document.getElementById('form_1').submit()">Search</a>

                        </div>
                    </div>							
                </form>
            </div>
        </div></article>
</div>
</header>

</div>
<div class="block"></div>
</div>
<?php
$this->load->view('footer');
?>   