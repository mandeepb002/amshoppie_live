 <!-- header logo: style can be found in header.less -->
<?php if($this->session->userdata('permission')){
		//echo $this->session->userdata('usertype');
		$per=$this->session->userdata('permission');
		$permission=$per[0];
		//print_r($permission);
}?>
        <header class="header">
		<a href="https://amshoppie.com/" class="logo">
                        <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?php echo base_url(); ?>assets/seller/img/m-logo.png">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </a>
                            
                        </li>
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $this->session->userdata('name'); 	
								$id =$this->session->userdata('id'); 
                               // echo $id;								
								?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                               
                                <li class="divider"></li>

                                    <li>
                                        <a href="<?= base_url('profile/edit_profile_detail?id='.$id);?>"><i class="fa fa-user fa-fw pull-right"></i>Profile</a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="<?php echo base_url()."seller/logout"; ?>"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
								<!-- Messages: style can be found in dropdown.less-->
                        
                            </ul>
                        </div>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
								<?php $image= $this->session->userdata('image');// echo $image;die; ?>
                                    <img src="<?= base_url()."uploads/".$image; ?>" width="100px" height="100px" class="img-circle" alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                    <p><?php echo "Hello, ".strtoupper($this->session->userdata('name')); 	
								?> </p>

                                    
                                </div>
                            </div>
                           
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu lh">
                                <li class="active a">
                                    <a href="<?php echo base_url(); ?>seller">
                                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                    </a>
                                </li>
                                
								<!--ADMIN SECTION MANGE USER START-->
                                <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->manage_user==1)){
									if($this->session->userdata('usertype')!=2){
								?>
                               <li class="b">
                        <a href="javascript:;" data-toggle="collapse" data-target="#manage_user"><i class="fa fa-user" aria-hidden="true"></i>Manage Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="manage_user" class="collapse">
                            <li>
                                <a href="<?php echo base_url('admin/add_user'); ?>"> <i class="fa fa-plus" aria-hidden="true"></i>Add User</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/user"> <i class="fa fa-plus" aria-hidden="true"></i>Registered</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/block_user'); ?>"> <i class="fa fa-ban" aria-hidden="true"></i>BLOCKED USER</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/active_user'); ?>"> <i class="fa fa-eye" aria-hidden="true"></i>ACTIVE USER</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/pending_user'); ?>"> <i class="fa fa-square" aria-hidden="true"></i>PENDING USER</a>
                            </li>
                        </ul>
                   </li><?php
						}
						?>

                        <?php
						}
						?>
                                <!--ADMIN SECTION MANGE USER END-->
                                
                                <!--ADMIN SECTION MANGE SELLER START-->
                                <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->manage_seller==1)){
									if($this->session->userdata('usertype')!=2){
								?>
                               <li class="b">
                        <a href="javascript:;" data-toggle="collapse" data-target="#manage_seller"><i class="fa fa-balance-scale" aria-hidden="true"></i>Manage Seller<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="manage_seller" class="collapse">
                            <li>
                                <a href="<?php echo base_url('admin/add_seller'); ?>"> <i class="fa fa-plus" aria-hidden="true"></i>Add Seller</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>manage_seller/total_seller"> <i class="fa fa-plus" aria-hidden="true"></i>Registered</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage_seller/block_seller'); ?>"> <i class="fa fa-ban" aria-hidden="true"></i>BLOCKED SELLER</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage_seller/active_seller?seller=active'); ?>"> <i class="fa fa-eye" aria-hidden="true"></i>ACTIVE SELLER</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage_seller/pending_seller'); ?>"> <i class="fa fa-square" aria-hidden="true"></i>PENDING SELLER</a>
                            </li>
                        </ul>
                   </li><?php
						}
						?>
                        <?php
						}
						?>
                                <!--ADMIN SECTION MANGE SELLER END-->

                                <!--ADMIN SECTION MANGE SUBADMIN START-->
                                <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->manage_subadmin==1)){
									if($this->session->userdata('usertype')!=2){
								?>


                                    <li class="b">
                                        <a href="javascript:;" data-toggle="collapse" data-target="#demo79"><i class="fa fa-cubes" aria-hidden="true"></i>Manage subadmin<i class="fa fa-fw fa-caret-down"></i></a>
                                        <ul id="demo79" class="collapse">
                                            <li>
                                                <a href="<?php echo base_url('subadmin/add_user'); ?>"> <i class="fa fa-plus" aria-hidden="true"></i>Add Subadmin</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('subadmin/view_subadmin'); ?>"> <i class="fa fa-eye" aria-hidden="true"></i>VIEW</a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php }
									} ?>
                                <!--ADMIN SECTION MANGE SUBADMIN START-->
                                
                                <!--ADMIN SECTION MANGE CATEGORIES START-->
                                 <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->manage_categories==1)){
										if($this->session->userdata('usertype')!=2){
								?>
                               <li class="b">
                        <a href="javascript:;" data-toggle="collapse" data-target="#manage_category"><i class="fa fa-bars" aria-hidden="true"></i>Manage Categories<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="manage_category" class="collapse">
                            <li>
                                <a href="<?php echo base_url('admin/manage_category'); ?>"> <i class="fa fa-plus" aria-hidden="true"></i> ADD CATEGORY</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/cat_list'); ?>"> <i class="fa fa-pencil-square " aria-hidden="true"></i> CATEGORY LIST</a>
                            </li>
                            
                        </ul>
                   </li>
                        <?php
							}
						}
						?>
                                <!--ADMIN SECTION MANGE CATEGORIES END-->
                                <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->manage_Product==1)){
								?>
								<li class="b">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-cubes" aria-hidden="true"></i>Manage Product<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>product/product_add"> <i class="fa fa-plus" aria-hidden="true"></i> Add Product</a>
                            </li>
                             <!--li>
                                <a href="<?php echo base_url(); ?>product/multiproduct"> <i class="fa fa-plus" aria-hidden="true"></i> Multishop Product</a>
                            </li-->
                            <li>
                                <a href="<?php echo base_url(); ?>show_product/s_product"> <i class="fa fa-eye" aria-hidden="true"></i>Product List</a>
                            </li>
							 <li>
                                <a href="<?php echo base_url(); ?>deal"> <i class="fa fa-eye" aria-hidden="true"></i>Deal of the day</a>
                            </li>
                        </ul>
                    </li>
					<?php
						}
						?>
                            <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->manage_commission==1)){
									if($this->session->userdata('usertype')!=2){
								?>
                                <li class="b">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo123"><i class="fa fa-cubes" aria-hidden="true"></i>Manage Sales Plan<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo123" class="collapse">
                                <li class="hh">
                                    <a href="<?php echo base_url(); ?>admin/add_comission"> <i class="fa fa-history" aria-hidden="true"></i> <span>ADD Commission in Sale</span> </a>
                                </li>
                                <li class="hh">
                                    <a href="<?php echo base_url(); ?>admin/comission_list"> <i class="fa fa-history" aria-hidden="true"></i> <span>Comission List</span> </a>
                                </li>
                        
                        </ul>
                    </li>
                           <?php
							}
						}
						?>
                            <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->commission_in_sale==1)){
								?>
                    
                                        
                    <li class="h">
                                    <a href="<?php echo base_url(); ?>seller/commissions"> <i class="fa fa-history" aria-hidden="true"></i> <span>Commission in Sale</span> </a>
                    </li>

                    <li class="g">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-line-chart" aria-hidden="true"></i> My Sale <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>seller/action_pending"><i class="fa fa-angle-right" aria-hidden="true">
								</i>  Action Pending</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>product/cancelled_order"><i class="fa fa-angle-right" aria-hidden="true"> 
								</i> Cancelled Orders</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>seller/track_order"> <i class="fa fa-angle-right" aria-hidden="true">
								</i> Track Orders </a>
                            </li>
                       
                  
                    <li>
                                <a href="<?php echo base_url(); ?>seller/returned_orders"> <i class="fa fa-angle-right" aria-hidden="true">
								</i> Returned Orders</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>seller/email_order"> <i class="fa fa-angle-right" aria-hidden="true">
								</i> Email Order Report</a>
                            </li>
							</ul>
							 </li>
							 <?php
						}
						?>
                            <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->manage_commission==1)){
								?>
                             <li class="b">
                                    <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-desktop" aria-hidden="true"></i> MySite <i class="fa fa-fw fa-caret-down"></i></a>
                                    </a>
                                
<ul id="demo2" class="collapse">
								<!--li>
								                           
                                    <a href="<?php echo base_url(); ?>seller/banner"><i class="fa fa-history" aria-hidden="true"></i>Domain</a>
                                </li-->
                                <li>
                                    <a href="<?php echo base_url(); ?>seller/banner"> <i class="fa fa-history" aria-hidden="true"></i> <span>Banners</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>seller/pages"> <i class="fa fa-history" aria-hidden="true"></i> <span>Pages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>seller/socials"> <i class="fa fa-history" aria-hidden="true"></i> <span>Social</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>seller/analytics1"> <i class="fa fa-history" aria-hidden="true"></i> <span>Analytics</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>seller/guide1"> <i class="fa fa-history" aria-hidden="true"></i> <span>Guide</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>seller/term1"> <i class="fa fa-history" aria-hidden="true"></i> <span>Terms & conditions</span>
                                    </a>
                                </li>
                                </ul>
                                </li>
								<?php
						}
						?>
						<?php 
								if(($this->session->userdata('usertype')!=4)||($permission->manage_commission==1)){
								?>
                                
                                <li class="b">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo9"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Shop Details<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo9" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>shop/shop_details"> <i class="fa fa-plus" aria-hidden="true"></i> Add Shop Detail</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>shop/shop_detail_view"> <i class="fa fa-eye" aria-hidden="true"></i>View Shop Detail</a>
                            </li>
                        </ul>
                    </li>
					<?php
						}
						?>
 <!--ADMIN SECTION MANGE CATEGORIES START-->
                                <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->manage_coupons==1)){
									if($this->session->userdata('usertype')!=2){
								?>
                               <li class="b">
                        <a href="javascript:;" data-toggle="collapse" data-target="#manage_coupon"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Manage Coupons<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="manage_coupon" class="collapse">
                            <li>
                                <a href="<?php echo base_url('admin/add_coupon'); ?>"> <i class="fa fa-plus" aria-hidden="true"></i> ADD COUPON</a>
                            </li>
							 
                            <li>
                                <a href="<?php echo base_url('admin/coupon_list'); ?>"> <i class="fa fa-pencil-square " aria-hidden="true"></i> COUPON LIST</a>
                            </li>
                            
                        </ul>
                   </li>
                        <?php
						}
						}
						?>
                                <!--ADMIN SECTION MANGE CATEGORIES END-->                                
                           <?php 
								if(($this->session->userdata('usertype')!=4)||($permission->bank_details==1)){
								?>     
                                
								<li class="b">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo7"><i class="fa fa-cubes" aria-hidden="true"></i>Bank Details<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo7" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>seller/bank_details"> <i class="fa fa-plus" aria-hidden="true"></i> Add Bank Detail</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>seller/bank_detail_view"> <i class="fa fa-eye" aria-hidden="true"></i>View Bank Detail</a>
                            </li>
                        </ul>
                    </li>
					<?php } ?>
					<?php if(($this->session->userdata('usertype')!=4)||($permission->participate_in_sale==1)){ ?> 
					<li class="f">
                        <a href="<?php echo base_url(); ?>seller/parti"> <i class="fa fa-history" aria-hidden="true"></i> <span>Participate in Sale</span> </a>
                    </li>
 
                    
                                <!--li class="b">
                                    <a href="<?php echo base_url(); ?>order_item_show/item_order_show"> <i class="fa fa-first-order" aria-hidden="true"></i> <span>Order History</span>
                                    </a>
                                </li-->
								<?php } ?>
					<?php if(($this->session->userdata('usertype')!=4)||($permission->payment_history==1)){ ?> 
                                	 <li class="c">
                                    <a href="<?php echo base_url(); ?>show_order/s_order"> <i class="fa fa-history" aria-hidden="true"></i> <span>payment History</span> </a>
                                </li>
					<?php } ?>
					

                                <!--ADMIN SECTION MANGE COMISSION START-->
                                <?php if(($this->session->userdata('usertype')!=4)||($permission->settings ==1)){
											if($this->session->userdata('usertype')!=2){?> 
                                <li class="b">
                                    <a href="javascript:;" data-toggle="collapse" data-target="#demo78"><i class="fa fa-cubes" aria-hidden="true"></i>Settings<i class="fa fa-fw fa-caret-down"></i></a>
                                    <ul id="demo78" class="collapse">
                                        <li>
                                            <a href="<?php echo base_url('setting/comission'); ?>"> <i class="fa fa-plus" aria-hidden="true"></i> Comission</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                               <?php } } ?>
                                <!--ADMIN SECTION MANGE COMISSION START-->


                                 <!--ADMIN SECTION MANGE COMISSION START-->
                                <?php if(($this->session->userdata('usertype')!=4)||($permission->settings ==1)){
											if($this->session->userdata('usertype')!=2){?> 


                                <li class="b">
                                    <a href="javascript:;" data-toggle="collapse" data-target="#demo89"><i class="fa fa-cubes" aria-hidden="true"></i>Manage Section<i class="fa fa-fw fa-caret-down"></i></a>
                                    <ul id="demo89" class="collapse">
                                        <!--<li>
                                            <a href="<?php echo base_url('setting/comission'); ?>"> <i class="fa fa-plus" aria-hidden="true"></i> Slider</a>
                                        </li>-->
                                        <li>
                                            <a href="<?php echo base_url('setting/hompage'); ?>"> <i class="fa fa-plus" aria-hidden="true">Slider Section</i></a>
                                        </li>
										<li>
                                            <a href="<?php echo base_url('setting/homepage_list'); ?>"> <i class="fa fa-plus" aria-hidden="true">View List</i></a>
                                        </li>
                                    </ul>
                                </li>
                               <?php } } ?>
                                <!--ADMIN SECTION MANGE COMISSION START-->
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>
