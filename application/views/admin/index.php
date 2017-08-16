<?php
if(!$this->session->userdata('id')){
	$url = base_url('admin/login');
	redirect($url);
	}else{
?>
                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">
                
                <h2 class="section-title"> Welcome to Dashboard</h2>

                    <div class="row" style="margin-bottom:5px;">


                        <div class="col-md-4">
                            <div class="sm-st-01 clearfix">
                                <span class="sm-st-icon st-01"><i class="fa fa-th-large" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                   Total No. of 
                                    <span style="color:#FFF">Products</span>
                                    <span>
                                    
                                    <?php //foreach($q as $r){
										echo"<a href='http://amshoppie.com/show_product/s_product'>".$s."</a>";
										//} ?>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sm-st-02 clearfix">
                                <span class="sm-st-icon st-02"><i class="fa fa-first-order" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                    Total No. of
									<span style="color:#FFF">Orders</span>
                                    <span>
                                    
                                    <?php //foreach($q as $r){
										echo"<a href='http://amshoppie.com/show_order/s_order'>".$q."</a>";
										//} ?>
                                        
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sm-st-03 clearfix">
                                <span class="sm-st-icon st-03"><i class="fa fa-times" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                    Total
									<span style="color:#FFF">Cancels</span>
                                    <span style="color:#FFF">2</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row" style="margin-bottom:5px;">

						<div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="sm-st-04 clearfix">
                                <span class="sm-st-icon st-04"><i class="fa fa-undo" aria-hidden="true"></i></span>
								
                                <div class="sm-st-info" style="color:#FFF">
                                     Total 
									 <span style="color:#FFF">Returns</span>
									 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sm-st-05 clearfix">
                                <span class="sm-st-icon st-05"><i class="fa fa-money" aria-hidden="true"></i></span>
								
                                <div class="sm-st-info" style="color:#FFF">
                                    Total
									<span style="color:#FFF">Commissions</span>
                                      
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
					
					
					<div class="row" style="margin-bottom:5px;">

						<div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="sm-st-03 clearfix">
                                <span class="sm-st-icon st-03"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                    Total
									<span style="color:#FFF">Sales</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        
                        
                    </div>
                    
					
					</section>
					</aside>
					
					
					<!-- <hr class="line"> -->

				
    


<?php } ?>