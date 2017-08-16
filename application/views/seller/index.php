<?php if($this->session->userdata('id')==true){ ?>
                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">
                
                <h2 class="section-title"> Welcome to Dashboard</h2>
                    <!--**********************USER COUNTER START****************************-->
                    <?php if($this->session->userdata('usertype')!=2){?>
                    <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-4">
                                <div class="sm-st-01 clearfix">
                                    <span class="sm-st-icon st-01"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                                    <div class="sm-st-info" style="color:#FFF">
                                        TOTAL NO. OF REGISTERED
                                        <span style="color:#FFF">USER<br>
										<span>
                                    
                                    <?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/admin/user'>".$total_r."</a>";
										//} ?>
                                        
                                    </span>
                                            
                                    </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="sm-st-01 clearfix">
                                    <span class="sm-st-icon st-01"><i class="fa fa-user-o" style="color:red;" aria-hidden="true"></i></span>
                                    <div class="sm-st-info" style="color:#FFF">
                                        TOTAL NO. OF BLOCKED
                                        <span style="color:#FFF">USER<br>
										<span>
                                    
                                    <?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/admin/block_user'>".$total_blocked."</a>";
										//} ?>
                                        
                                    </span>
                                            
                                    </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="sm-st-01 clearfix">
                                    <span class="sm-st-icon st-01"><i class="fa fa-user-o" style="color:green;" aria-hidden="true"></i></span>
                                    <div class="sm-st-info" style="color:#FFF">
                                        TOTAL NO. OF ACTIVE
                                        <span style="color:#FFF">USER<br>
										<span>
                                    
                                    <?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/admin/active_user'>".$total_active."</a>";
										//} ?>
                                        
                                    </span>
                                            
                                           
                                    </span>
                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-4">
                            <div class="sm-st-01 clearfix">
                                <span class="sm-st-icon st-01"><i class="fa fa-user-o" style="color: #ffffff;" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                    TOTAL NO. OF PENDING
                                    <span style="color:#FFF">USER<br>
									<span>
                                    
                                    <?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/admin/pending_user'>".$total_pending."</a>";
										//} ?>
                                        
                                    </span>
                                            
                                       
                                    </span>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sm-st-02 clearfix">
                                <span class="sm-st-icon st-02"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                    TOTAL NUMBER OF
                                    <span style="color:#FFF">SELLERS</span>
									<span>
                                    
                                    <?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/manage_seller/total_seller'>".$total_seller."</a>";
										//} ?>
                                        
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sm-st-02 clearfix">
                                <span class="sm-st-icon st-02"><i class="fa fa-balance-scale" style="color: #ff0000;" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                    TOTAL NUMBER OF BLOCKED
                                    <span style="color:#FFF">SELLERS</span>
									<span>
									<?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/manage_seller/block_seller'>".$tot_sel_bl."</a>";
										//} ?>
										</span>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!--**********************USER COUNTER END****************************-->


                    <!--************************SELLER  START******************************************************-->
                    <?php if($this->session->userdata('usertype')==3){?>
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-4">
                            <div class="sm-st-02 clearfix">
                                <span class="sm-st-icon st-02"><i class="fa fa-balance-scale" style="color: #00A000;" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                    TOTAL NUMBER OF ACTIVE
                                    <span style="color:#FFF">SELLERS</span>
									<span>
									<?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/manage_seller/active_seller'>".$tot_sel_ac."</a>";
										//} ?>
										</span>
                                                                   </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sm-st-02 clearfix">
                                <span class="sm-st-icon st-02"><i class="fa fa-balance-scale" style="color: white;" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                    TOTAL NUMBER OF PENDING
                                    <span style="color:#FFF">SELLERS</span>

                                    <span><?php if($tot_sel_pe){ print_r($tot_sel_pe); }else{ echo 0;} ?></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="sm-st-02 clearfix">
                                <span class="sm-st-icon st-02"><i class="fa fa-balance-scale" style="color: white;" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                    TOTAL NUMBER OF
                                    <span style="color:#FFF">SUBADMIN</span>
                                    <span><?php if($total_a_sub){ print_r($total_a_sub); }else{ echo 0;} ?></span>
                                </div>
                            </div>
                        </div>
                    </div>


                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-4">


                            </div>
                            <div class="col-md-4">


                            </div>
                            <div class="col-md-4">


                            </div>
                        </div>


                    <?php } ?>
                    <!--************************SELLER END*********************************************************-->
                    <div class="row" style="margin-bottom:5px;">




                        <div class="col-md-4">
                            <div class="sm-st-01 clearfix">
                                <span class="sm-st-icon st-01"><i class="fa fa-th-large" aria-hidden="true"></i></span>
                                <div class="sm-st-info" style="color:#FFF">
                                   Total No. of 
                                    <span style="color:#FFF">Products</span>
                                    <span><?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/show_product/s_product'>".$product_total."</a>";
										//} ?></span>
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
										echo"<a href='https://amshoppie.com/show_order/s_order'>".$q."</a>";
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
                                    <?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/product/cancelled_order'>".$cancel."</a>";
										//} ?>
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
									 <?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/seller/returned_orders'>".$returns."</a>";
										//} ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sm-st-05 clearfix">
                                <span class="sm-st-icon st-05"><i class="fa fa-money" aria-hidden="true"></i></span>
								
                                <div class="sm-st-info" style="color:#FFF">
                                    Total
									<span style="color:#FFF">Bank Account</span><span>
                                    <span>
                                    <?php //foreach($q as $r){
										echo"<a href='https://amshoppie.com/seller/bank_detail_view'>".$bank_total."</a>";
										//} ?>
                                        
                                    </span>
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
									<span style="color:#FFF">Sales</span><span>
                                    <span>
                                    <?php //foreach($q as $r){
											echo"<a href='https://amshoppie.com/show_order/s_order'>".$total_amount."</a>";
										//} ?>
                                        
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        
                        
                    </div>
                    
					
					</section>
					</aside>
					
					
					<!-- <hr class="line"> -->

				
    


<?php }else{
    redirect('seller/login?msg=Please login to continue');
} ?>