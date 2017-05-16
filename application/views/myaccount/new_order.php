<?php
$this->load->view('myaccount/header');
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <!--        <div class="row">
                    <div class="col-md-12">
                        <h2>User Dashboard</h2>   
                        <h5>Welcome Rawand , Love to see you back. </h5>
                    </div>
                </div>              -->
        <!-- /. ROW  -->
        <!--<hr />-->
        <div class="row">
            <div class="col-md-12">           
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>New Order</h3>
                                <form class="form-horizontal" method="POST" action="<?php echo $this->config->item("base_url"); ?>login/check_login">
                                    <div class="form-group">

                                        <?php
                                        if ($this->session->flashdata('msg') != "") {
                                            echo $this->session->flashdata('msg');
                                        }
                                        ?>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="email">Item Web Link:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="weblink"  name='weblink' onblur="return extractURLData(this.value)">
                                            <span id="loading" style="display:none;">Loading <img src="<?php echo $this->config->item("base_url"); ?>images/loading.gif" height="50" ></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Item Name:</label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control" id="itemName"  name='itemName'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Item Price($):</label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control" id="itemPrice"  name='itemPrice'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Item Picture:</label>
                                        <div class="col-sm-8" id="itemImg"> 

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Item Color:</label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control" id="pwd"  name='password'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Item Size:</label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control" id="pwd"  name='password'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Item Model / Type:</label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control" id="pwd"  name='password'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Other Specification:</label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control" id="pwd"  name='password'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Item Start Price ($):</label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control" id="pwd"  name='password'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Quantity:</label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control" id="pwd"  name='password'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Note:</label>
                                        <div class="col-sm-8"> 
                                            <textarea type="text" class="form-control" id="pwd"  name='password'></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Shipping Branch:</label>
                                        <div class="col-sm-8"> 
                                            <textarea type="text" class="form-control" id="pwd"  name='password'></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="submit" class="btn btn-default" value="Submit" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /. ROW  -->
        <hr />                

        <!-- /. ROW  -->           
    </div>
    <!-- /. PAGE INNER  -->
</div>
<script>
    function extractURLData(linkURL) {
        var urlType = "";
        $("#loading").css("display", "none");
        //if this is an ebay product link
        if (linkURL.indexOf("http://www.ebay.com/itm/") >= 0) {
            urlType = "ebay";
            $("#loading").css("display", "block");
            $.ajax({
                method: "POST",
                data: {linkURL: linkURL, urlType: urlType},
                url: "<?php echo $this->config->item("base_url"); ?>my_account/new_order/loadData",
                success: function(data) {
                    
                    var replyVal = JSON.parse(data);
                    $("#itemName").val(replyVal[0]);
                    $("#itemPrice").val(replyVal[1]);
                    $("#itemImg").html("<img src='" + replyVal[2] + "'>");
                    $("#loading").css("display", "none");
                },
                error: function(e) {
                    console.log("error-" + e.message);
                }
                
            }).done(function(msg) {
                // console.log(obj);
//                
            });
            return false;
        }
    }
</script>
<!-- /. PAGE WRAPPER  -->
<?php
$this->load->view('myaccount/footer');
?>
