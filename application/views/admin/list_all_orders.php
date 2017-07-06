<?php
$this->load->view('admin/header');
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
                            <div class="col-md-12 headings">
                                <h3>Orders</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group" >

                                    <?php
                                    if ($this->session->flashdata('msg') != "") {
                                        echo $this->session->flashdata('msg');
                                    }
                                    ?>

                                </div>
                                <div class="table-responsive">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label><select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" aria-controls="dataTables-example"></label></div></div></div><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 164px;">
                                                        ORDER ID
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 254px;">
                                                        DATE
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 231px;">
                                                        ITEM NAME
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 139px;">
                                                        PRICE
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 98px;">
                                                        QTY
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 98px;">
                                                        ORDER COST
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 98px;">
                                                        TOTAL
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 98px;">
                                                        STATUS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                for ($i = 0; $i < count($orders); $i++) {
                                                    ?>
                                                    <tr class="gradeA odd">
                                                        <td class="sorting_1"><?php echo $orders[$i]["orderId"] ?></td>
                                                        <td class=" "><?php echo $orders[$i]["created_date"] ?></td>
                                                        <td class=" "><?php echo $orders[$i]["item_name"] ?></td>
                                                        <td class="center "><?php echo $orders[$i]["item_price"] ?></td>
                                                        <td class="center "><?php echo $orders[$i]["quantity"] ?></td>
                                                        <td class="center "><?php echo $orders[$i]["item_price"] ?></td>
                                                        <td class="center "><?php echo $orders[$i]["item_price"] ?></td>
                                                        <td class="center "><?php echo $orders[$i]["item_price"] ?></td>
                                                    </tr>

                                                    <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
                                </div>

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

<!-- /. PAGE WRAPPER  -->
<?php
$this->load->view('admin/footer');
?>
