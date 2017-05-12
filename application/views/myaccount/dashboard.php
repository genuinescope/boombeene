<?php
$this->load->view('myaccount/header');
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>User Dashboard</h2>   
                <h5>Welcome Rawand , Love to see you back. </h5>
            </div>
        </div>              
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-6">           
                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>DATE</th>
                                            <th>ITEM NAME</th>
                                            <th>ITEM PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>1</td>
                                            <td>2017/01/10</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr class="info">
                                            <td>2</td>
                                            <td>2017/01/10</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>3</td>
                                            <td>2017/01/10</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>4</td>
                                            <td>2017/01/10</td>
                                            <td>Smith</td>
                                            <td>@jsmith</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
            </div>
           
        </div>
        <!-- /. ROW  -->
        <hr />                
           
        <!-- /. ROW  -->           
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<?php
$this->load->view('myaccount/footer');
?>
