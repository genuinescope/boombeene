
                <div class="footer_top">
                    <div class="span_of_4">

                        <div class="col-md-12 faq">
                            <!--                                <h4>help</h4>-->
                            <ul class="list-inline">
                                <li><a href="#">About</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Shops</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>				
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <!-- start span_of_2 -->
                    <div class="span_of_2">
                        <div class="span1_of_2">
                            <h5>need help? <a href="#">contact us <span> &gt;</span> </a> </h5>
                            <p>(or) Call us: +766-967-782</p>
                        </div>
                        <div class="span1_of_2">
                            <h5>follow us </h5>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#" target="_blank"></a></li>
                                    <li><a href="#" target="_blank"></a></li>
                                    <li><a href="#" target="_blank"></a></li>
                                    <li><a href="#" target="_blank"></a></li>
                                    <li class="last2"><a href="#" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="copy">
                        <p>© 2017 All Rights Reserved by  </p>
                    </div>
                </div>
                <link href="<?php echo $this->config->item("base_url"); ?>css/flexslider.css" rel='stylesheet' type='text/css' />
                <script defer src="<?php echo $this->config->item("base_url"); ?>js/jquery.flexslider.js"></script>
                <script type="text/javascript">
                                    $(function() {
                                        SyntaxHighlighter.all();
                                    });
                                    $(window).load(function() {
                                        $('.flexslider').flexslider({
                                            animation: "slide",
                                            start: function(slider) {
                                                $('body').removeClass('loading');
                                            }
                                        });
                                    });
                </script>
                </body>
                </html>		