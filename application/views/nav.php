<!---Header-section-->
<header id="header">
	<div class="container">
	<div class="top-header">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
					<div class="top-left">
						<span class="title">Shopping for Real Life</span>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="top-right">
						<ul class="list-inline align-right">
						 <?php if($this->session->userdata('id')) {?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account 
		  <span class="caret"></span></a>
          <ul class="dropdown-menu acc_dropdown">
		   <li>
		   
		   <div class="acc_head">
				<div class="acc_text1">
                  <a href="https://amshoppie.com/user/profile"><span class="abc">A</span>
				  <span class="abc2"> Hi Ammy<br>
				 </a>
				  
				  </span>
			    </div>
			    
					
			    
		   </div>
		    
		   </li>
		   
		    <li>
		   
		   <div class="acc_head1">
				<div class="acc_text2">
                    <span class="store text_color">
					Store credit<br>
					 Rs. 0
					</span>
					
					<span class="reward text_color">
					Reward Credit<br>
					 Rs. 0
					</span>
			    </div>
			    
					
			    
		   </div>
		    
		   </li>
            <li><a href="#">My orders</a></li>
            <li><a href="#">Address Book</a></li>
            <li><a href="#">Help Center</a></li>            
            <li><a href="http://amshoppie.com/user/logout" style="border-bottom: none !important;">Logout</a></li>
          </ul>
        </li>
	   <?php } ?>	
						
							<li><a href="<?php echo base_url('seller/login'); ?>">Sell with us</a></li>
							
      	
							<li><!--a href="#" onclick="document.getElementById('id01').style.display='block'><i class="fa fa-user-o" aria-hidden="true"></i> Register</a> <span>or</span> <a href="#">Sign in</a-->
							<?php if(!$this->session->userdata('id')){?>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">Sign In</button>
							<?php } ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div>
				<!-- Large modal -->
				<div class="modal fade" tabindex="1" role="dialog" aria-labelledby="gridSystemModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  </div>
					  <div class="modal-body">
						<div class="row">
						  <div class="col-md-12">
							<!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#sign-in" aria-controls="sign-in" class="signin_btn" role="tab" data-toggle="tab">sign-in</a></li>
								<li role="presentation"><a href="#sign-up" aria-controls="sign-in" class="signup_btn" role="tab" data-toggle="tab">sign-up</a></li>
							  </ul>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-12">
							<!-- Tab panes sign up -->
							  <div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="sign-in">
									<div class="row">
									  <div class="col-md-6">
										<a href=""><div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Connect with facebook</div></a>
									  </div>
									  <div class="col-md-6">
										<a href=""><div class="gooleplus"><i class="fa fa-google-plus" aria-hidden="true"></i> Connect with googleplus</div></a>
									  </div>
									</div>
									<div class="row">
										<div class="col-md-12">
										<p class="paraline"> " We'll never post without your permission "</p></div>
									</div>
									<div class="col-md-12">
							
								
								<h4 class="or_text"> OR </h4>
								</div>
									
									<div class="row">
										<div class="col-md-12">
											<div class="alert alert-success log_success" role="alert"></div>
											<div class="alert alert-danger log_error" role="alert"></div>
											<form method="POST" action="" id="login_form">
											  <div class="form-group has-icon">
												<input type="text" name="mobile" class="form-control" id="mobile_log" placeholder="Enter your Mobile no. or Email ID">
												<span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
											  </div>
											  <div class="form-group has-icon">
												<input type="password" name="password" class="form-control" id="password_log" placeholder="Password">
												<span class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
											  </div>
											 
											  <button type="submit" id="btn_login" class="signin_sub">Sign in</button>
											  <div class="msg1"></div>
											  <div class="err" id="add_err"></div>
											</form>
										</div>
										<div class="row">
											<div class="col-md-6">
												Dont have an account?
											</div>
											<div class="col-md-6">
											<a href="#sign-up" aria-controls="sign-in" class="signup_btn1" role="tab" data-toggle="tab">Create An Account</a>
											</div>
										</div>
										 
												<div class="row">
												 <div class="col-md-6">
													<a href="#forgot-password" aria-controls="forgot-password" role="tab" data-toggle="tab">Forgot Password?</a>
												 </div>
												 <div class="col-md-6"></div>
												 </div>
											   </div>
									</div>
								<div role="tabpanel" class="tab-pane" id="sign-up">
									<div class="row">
									  <div class="col-md-6">
										<a href=""><div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Connect with facebook</div></a>
									  </div>
									  <div class="col-md-6">
										<a href=""><div class="gooleplus"><i class="fa fa-google-plus" aria-hidden="true"></i> Connect with googleplus</div></a>
									  </div>
									</div>
									<div class="row">
										<div class="col-md-12">
										
										<p class="paraline"> " We'll never post without your permission "</p></div>
									</div>
									<div class="col-md-12">
							
								<h4 class="or_text"> OR </h4>
								</div>
									<div class="row">										
									   <div class="col-md-12">
									   <div class="alert alert-success success1" role="alert"></div>
									   <div class="alert alert-success success2 " role="alert" ></div>
									   <div class="alert alert-danger error" role="alert"></div>
									   <div class="alert alert-info success" role="alert"></div>
										 <form id="form_signup" action="" method="POST">
											<div class="form-group has-icon hidden_div">
												<input type="email" name="email" class="form-control" id="Email1" placeholder="Enter your Email ID">
												<span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
											  </div>
											  <div class="form-group has-icon hidden_div">
												<input type="text" name="mobile" class="form-control" id="mobile1" placeholder="Enter your Mobile no.">
												<span class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
											  </div>
											  <div class="form-group has-icon hidden_div">
												<input type="password" name="password" class="form-control" id="password1" placeholder="Password">
												<span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
											  </div>
											   <input type="hidden" name="usertype" value="1">
													
											   <button type="submit" id="sign-up_js"class="signin_sub">Sign up</button>
											   <div class="form-group" style="display:none" id="codediv"> 
											   <div class="col-sm-12 verifyy">
											   <script>
													$('#mobile1').change(function() {
													$('#mob').val($(this).val());
													});
											   </script>
											   <input type="text" name="otp" class="form-control checkNum" id="code" placeholder="OTP">
											   <input type="hidden" name="mobile" class="form-control checkNum"  id="mob" placeholder="OTP">
											   <button type="submit" id="sign-up1"class="btn btn-default signin_sub">verify otp</button>
												</div>
												
												</div>
											  <div class="form-group">
												 <div class="col-md-12">
												
								
												<p class="tcpv">By signin up,you can agree to our <span style="color:#6cabeb;">T & C </span>and<span style="color:#6cabeb;">Privacy Policy</span></p>
												
												
												 </div>
											  </div>
											 
											</form>
											
											
											
											<div class="error1"></div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<h4 class="account">Already have an account?</h4>
											</div>
											<div class="col-md-4">
												<a href="#sign-in" aria-controls="sign-in" class="signin_btn1" role="tab" data-toggle="tab">sign-in</a>
											</div>
										</div>
									</div>
								</div>
								
							  </div>
						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="forgot-password" style="display:none;">
									
							  <div class="row">
									  <div class="col-md-6">
										<a href=""><div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Connect with facebook</div></a>
									  </div>
									  <div class="col-md-6">
										<a href=""><div class="gooleplus"><i class="fa fa-google-plus" aria-hidden="true"></i> Connect with googleplus</div></a>
									  </div>
									</div>
								
								
								
							<!-- <h2>Email</h2> -->
								<form method="POST" action="" id="login_form">
											  <div class="form-group has-icon">
												<input type="text" name="mobile" class="form-control" id="mobile_log" placeholder="Enter your Mobile no. or Email ID">
												<span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
											  </div>
								
								</form>
							</div>
						</div>
					  </div>
					   </div>
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
	
<!---/Top-header-section-->
	<div class="middle-header">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="site-logo">
						<a href="<?= base_url(); ?>" class="logo-center">
							<img src="<?= base_url('assets/user/img/logo.png'); ?>" height="60">
						</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
					<div class="searchbox">
						<form id="search" class="navbar-form search" action="/search" method="get">
						  <input id="bc-product-search" type="text" name="q" class="form-control" placeholder="Search for item" autocomplete="off">
						  <button type="submit" class="search-icon btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 top-cart-row">
					<div class="top-cart-row-container">
					<ul class="list-inline align-right">
					<li> 
						<a href="#" class="num-items-in-compare show-compare border-dash" title="Coin">
									<i class="fa fa-database" aria-hidden="true"></i>
									<span class="">Coin</span> <span class="compare-icon"><span class="number">0</span></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('welcome/add_to'); ?>" class="dropdown-on-hover border-dash" data-toggle="dropdown" title="Cart">
								  <i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="">Cart</span><span class="number"> <span class="n-item">
								  	<?php 
								  		$this->db->select('*');
								  		$this->db->from('cart');
								  		$this->db->where('user_id',$this->session->userdata('id'));
								  		$query = $this->db->get();
								  		print_r($query->num_rows());
								  	?>
								  </span></span>
						</a>
						<div class="cart-dd">
									<div id="cart-info">
										<div id="cart-content" class="cart-content">
											<div class="cart-item-empty text-center">
												<h4>An empty cart</h4>
												<p>You have no item in your shopping cart.</p>
											</div>
										</div>
									</div>
						</div>
					</li>
					</ul>
					</div>
				</div>
			</div>
	</div>
<!--/middle-header-->


<nav class="megamenuiqit" id="topmenuContener" role="navigation">
	<ul class="clearfix" id="megamenuiqit">
		<li class="megamenu_home"><a class="megamenu_home_lnk" href="<?= base_url(); ?>" id="topmenutitle" title="Home"><i class="fa fa-home fa-lg"></i></a></li>
		<?php $a=0;  foreach ($cat as $value) { ?>
			
		
		<li class="mainmegamenu id_menu<?php echo $a++; ?> has_submenu2">

			<a class="main_menu_link id_menu_link<?php echo $a++; ?>" href="<?= base_url(); ?>welcome/category?cat=<?php echo $value->cat_id; ?>"><?php echo ($value->cat_name); ?></a>

				<div class="submenu submenuid3 clearfix" style="left: 0px;">
					<div class="submenu_triangle" style="left: 80.0938px;"></div>
						<div class="submenu_triangle2" style="left: 79.0938px;"></div>
							<div class="clearfix">
								<div class="left_panel">
									
									<?php $i=0; foreach ($value->sub as $key) { ?>				
									<ul class="left_column_cats">

										<li class="position_<?php echo $i++; ?> " style="min-height: 0px;"><a href="<?= base_url(); ?>welcome/subcategory?cat=<?php echo $key->cat_id; ?>"><?php echo $key->cat_name; ?></a>
											
											<ul class="">
											
											<?php $k=0; foreach ($key->sub as $keyy) { ?>
												<li class="position_<?php echo $k++; ?> "><a href="<?= base_url(); ?>welcome/innercategory?cat=<?php echo $keyy->cat_id; ?>"><?php echo $keyy->cat_name; ?></a></li>
															<li class="position_3 has_submenu2">
																	<?php foreach ($keyy->sub as $keyyy) {?>
																	
																	
																<a href="<?= base_url(); ?>welcome/subcategory"><?php echo $keyyy->cat_name; ?></a>
																	<ul class="">
																	<?php $l=0; foreach ($keyyy->sub as $key4) {?>
																	
																		<li class="position_<?php echo $l++; ?> "><a href="<?= base_url(); ?>welcome/innercategory"><?php echo $key4->cat_name; ?></a></li>
																		<?php } ?>
																	</ul>
															<?php } ?>
															</li>
												<?php	} ?>
											</ul>

										</li>

									
				</ul>
				<!--Goes here-->
				<?php } ?>
			</div>
							<div class="right_panel "><span class="mmtitle"> We recommend</span><ul class="right_column_product">
								<li>
    								<a href="<?= base_url(); ?>full-sleeve-tees/74795-nologo-navy-maroon-round-neck-t-shirt.html">
        								<img data-src="https://static5.cilory.com/226242-home_default/nologo-navy-maroon-round-neck-t-shirt.jpg" src="https://static5.cilory.com/226242-home_default/nologo-navy-maroon-round-neck-t-shirt.jpg"></a>
        									<a href="<?= base_url(); ?>full-sleeve-tees/74795-nologo-navy-maroon-round-neck-t-shirt.html">NoLogo Navy &amp; Maroon Round Neck T-Shirt</a>
    						</li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</li>
    	<?php } ?>
	
<script>
	jQuery('.mainmegamenu').hover(function(){
	  jQuery(this).find('.submenu').toggle();
	});
</script>
</nav>

<ul  class="cd-accordion-menu animated">
		<li class="has-children">
			<input type="checkbox" name ="group-1" id="group-1">
			<label for="group-1">Menu</label>

      		<ul>
      			<li class="has-children">
				<div class="has-children-category">
					<div  class="has-children-category-name">
					<a href="#">Men</a>
					</div>
				</div>
      				<input type="checkbox" name ="sub-group-1" id="sub-group-1">
					<label for="sub-group-1">Men</label>

					<ul>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
								<a href="#">T-Shirts</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-1a" id="sub-group-level-1a">
							<label for="sub-group-level-1a">T-Shirts</label>

							<ul>
								<li><a href="">Super Hero</a></li>
								<li><a href="">Graphic T-Shirts</a></li>
								<li><a href="">Slogan T-Shirts</a></li>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
										<a href="#">Polos</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-1a" id="sub-group-level-level-1a">
									<label for="sub-group-level-level-1a">Polos</label>

									<ul>
										<li><a href="">Solid Polos</a></li>
										<li><a href="">Stripes</a></li>
										<li><a href="">Printed Polos</a></li>
										<li><a href="">Pocket Polos</a></li>
									</ul>
								</li><!--/Polos-->
								<li><a href="">Cartoon Characters</a></li>
								<li><a href="">Music Lovers</a></li>
								<li><a href="">Henley</a></li>
								<li><a href="">Sports Tees</a></li>
								<li><a href="">Full Sleeve Tees</a></li>
								<li><a href="">V-Necks</a></li>
								<li><a href="">Solid Round Necks</a></li>
							</ul>
						</li><!--/T-Shirts-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Shirts</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-1b" id="sub-group-level-1b">
							<label for="sub-group-level-1b">Shirts</label>

							<ul>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Casual Wear</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-1b" id="sub-group-level-level-1b">
									<label for="sub-group-level-level-1b">Casual Wear</label>

									<ul>
										<li><a href="">Denim Shirts</a></li>
										<li><a href="">Solid Casual Shirts</a></li>
										<li><a href="">Printed Casual Shirt</a></li>
										<li><a href="">Checks Casual Shirts</a></li>
										<li><a href="">Stripes Casual Shirts</a></li>
										<li><a href="">Half Sleeves Casual Shirts</a></li>
									</ul>
								</li>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Formal Shirts</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-1b1" id="sub-group-level-level-1b1">
									<label for="sub-group-level-level-1b1">Formal Shirts</label>

									<ul>
										<li><a href="">Solid Formal Shirts</a></li>
										<li><a href="">Formal Checks Shirts</a></li>
										<li><a href="">Formal Stripes Shirts</a></li>
										<li><a href="">Formal Printed Shirts</a></li>
										<li><a href="">Half Sleeves Formal Shirts</a></li>
									</ul>
								</li>
								<li><a href="">Party Wear</a></li>
							</ul>
						</li><!--/Shirts-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Jeans</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-1c" id="sub-group-level-1c">
							<label for="sub-group-level-1c">Jeans</label>

							<ul>
								<li><a href="">Regular Fit Jeans</a></li>
								<li><a href="">Slim Fit Jeans</a></li>
								<li><a href="">Skinny Fit Jeans</a></li>
							</ul>
						</li><!--/Jeans-->
						<li><a href="">Trousers</a></li>
						<li><a href="">Shorts</a></li>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Personal Care</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-1d" id="sub-group-level-1d">
							<label for="sub-group-level-1d">Personal Care</label>

							<ul>
								<li><a href="">Shaving</a></li>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Sexual Wellbeing</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-1d" id="sub-group-level-level-1d">
									<label for="sub-group-level-level-1d">Sexual Wellbeing</label>

									<ul>
										<li><a href="">Condoms</a></li>
										<li><a href="">Lubes &amp; Stimulators</a></li>
									</ul>
								</li>
							</ul>
						</li><!--/Personal Care-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Men's Briefs</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-1e" id="sub-group-level-1e">
							<label for="sub-group-level-1e">Men's Briefs</label>

							<ul>
								<li><a href="">Boxer Shorts</a></li>
								<li><a href="">Trunks</a></li>
								<li><a href="">Briefs</a></li>
								<li><a href="">Shapewear</a></li>
								<li><a href="">Lowers/Pyjamas</a></li>
								<li><a href="">Thermal Wear</a></li>
							</ul>
						</li><!--/Men's Briefs-->
						<li><a href="">Men's Vests</a></li>
						<li><a href="">Kurtas</a></li>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Men's Jewellery</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-1f" id="sub-group-level-1f">
							<label for="sub-group-level-1f">Men's Jewellery</label>

							<ul>
								<li><a href="">Men's Bracelets</a></li>
								<li><a href="">Men's Pendants</a></li>
								<li><a href="">Men's Earrings</a></li>
								<li><a href="">Men's Ring</a></li>
							</ul>
						</li><!--/Men's Jewellery-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Accessories</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-1g" id="sub-group-level-1g">
							<label for="sub-group-level-1g">Accessories</label>

							<ul>
								<li><a href="">Ties</a></li>
								<li><a href="">Wallets</a></li>
								<li><a href="">Cufflinks</a></li>
								<li><a href="">Backpacks/Laptop Bags</a></li>
								<li><a href="">Belts</a></li>
								<li><a href="">Socks</a></li>
								<li><a href="">Handkerchiefs</a></li>
								<li><a href="">Sunglasses</a></li>
								<li><a href="">Watches</a></li>
								<li><a href="">Caps</a></li>
								<li><a href="">Bow</a></li>
								<li><a href="">Cravat</a></li>
								<li><a href="">Suspenders</a></li>
								<li><a href="">Men Scarves</a></li>
							</ul>
						</li><!--/Accessories-->
						<li><a href="">Slippers &amp; Flip Flops</a></li>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Winter Wear</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-1h" id="sub-group-level-1h">
							<label for="sub-group-level-1h">Winter Wear</label>

							<ul>
								<li><a href="">Hoodie</a></li>
								<li><a href="">Sweatshirt</a></li>
								<li><a href="">Sweater</a></li>
								<li><a href="">Zipper</a></li>
								<li><a href="">Jackets</a></li>
								<li><a href="">Sleeveless</a></li>
								<li><a href="">Track Suit</a></li>
							</ul>
						</li><!--/Winter Wear-->
						<li><a href="">Swimwear</a></li>
					</ul>
      			</li><!--/Men-->
				
				
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Women</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-2" id="sub-group-2">
					<label for="sub-group-2">Women</label>

					<ul>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Western Wear</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2a" id="sub-group-level-2a">
							<label for="sub-group-level-2a">Western Wear</label>

							<ul>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Dress</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2a" id="sub-group-level-level-2a">
									<label for="sub-group-level-level-2a">Dress</label>

									<ul>
										<li><a href="">Maxi Dress</a></li>
										<li><a href="">Clubwear</a></li>
										<li><a href="">Jumpsuits</a></li>
										<li><a href="">Mini Dress</a></li>
										<li><a href="">Midi Dress</a></li>
										<li><a href="">A Line Dress</a></li>
										<li><a href="">Gowns</a></li>
										<li><a href="">Skater Dress</a></li>
										<li><a href="">Bodycon Dress</a></li>
										<li><a href="">Peplum Dress</a></li>
										<li><a href="">Skirt Set</a></li>
										<li><a href="">Plus Size</a></li>
									</ul>
								</li><!--/Dress-->
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Tops, Tees &amp; Shirts</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2a1" id="sub-group-level-level-2a1">
									<label for="sub-group-level-level-2a1">Tops, Tees &amp; Shirts</label>

									<ul>
										<li><a href="">Tops</a></li>
										<li><a href="">Tees</a></li>
										<li><a href="">Shirts</a></li>
									</ul>
								</li>
								<li><a href="">Skirts</a></li>
								<li><a href="">Trousers</a></li>
								<li><a href="">Shorts</a></li>
								<li><a href="">Jeans</a></li>
							</ul>
						</li><!--/Western Wear-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Ethnic Wear</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2b" id="sub-group-level-2b">
							<label for="sub-group-level-2b">Ethnic Wear</label>

							<ul>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Ethnic Suits</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2b" id="sub-group-level-level-2b">
									<label for="sub-group-level-level-2b">Ethnic Suits</label>

									<ul>
										<li><a href="">Straight Suits</a></li>
										<li><a href="">Anarkalis</a></li>
										<li><a href="">Daily Wear</a></li>
										<li><a href="">Ethnic Gowns</a></li>
										<li><a href="">Fusion Suits</a></li>
										<li><a href="">Palazzo Suits</a></li>
										<li><a href="">Patiala Salwar Suits</a></li>
										<li><a href="">Stitched Ethnic Suits</a></li>
										<li><a href="">Winter Collection</a></li>
									</ul>
								</li><!--/Ethnic Suits-->
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Kurtis</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2b1" id="sub-group-level-level-2b1">
									<label for="sub-group-level-level-2b1">Kurtis</label>

									<ul>
										<li><a href="">Party Wear</a></li>
										<li><a href="">Regular Wear</a></li>
										<li><a href="">Cotton Kurtis</a></li>
										<li><a href="">Winter Kurtis</a></li>
									</ul>
								</li><!--/Kurtis-->
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Sarees</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2b2" id="sub-group-level-level-2b2">
									<label for="sub-group-level-level-2b2">Sarees</label>

									<ul>
										<li><a href="">Designer Sarees</a></li>
										<li><a href="">Printed Sarees</a></li>
										<li><a href="">Lehenga</a></li>
									</ul>
								</li><!--/Sarees-->
							</ul>
						</li><!--/Ethnic Wear-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Jewellery</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2c" id="sub-group-level-2c">
							<label for="sub-group-level-2c">Jewellery</label>

							<ul>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Pendants &amp; Necklaces</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2c" id="sub-group-level-level-2c">
									<label for="sub-group-level-level-2c">Pendants &amp; Necklaces</label>

									<ul>
										<li class="has-children">
											<div class="has-children-category">
												<div  class="has-children-category-name">
													<a href="#">Ethnic Pendants</a>
												</div>
											</div>
											<input type="checkbox" name ="sub-group-level-level-level-2c" id="sub-group-level-level-level-2c">
											<label for="sub-group-level-level-level-2c">Ethnic Pendants</label>

											<ul>
												<li><a href="">Kundan Sets</a></li>
												<li><a href="">Polki Work Sets</a></li>
												<li><a href="">Ginni Sets</a></li>
												<li><a href="">Meenakari Work Sets</a></li>
											</ul>
										</li><!--/Ethnic Pendants-->
										<li><a href="">American Diamond Pendants</a></li>
										<li><a href="">Handicraft Pendants</a></li>
										<li><a href="">Western Pendants</a></li>
										<li><a href="">Mangalsutra</a></li>
									</ul>
								</li><!--/Pendants &amp; Necklaces-->
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Earrings</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2c1" id="sub-group-level-level-2c1">
									<label for="sub-group-level-level-2c1">Earrings</label>

									<ul>
										<li class="has-children">
											<div class="has-children-category">
												<div  class="has-children-category-name">
													<a href="#">Ethnic Earrings</a>
												</div>
											</div>
											<input type="checkbox" name ="sub-group-level-level-level-2c1" id="sub-group-level-level-level-2c1">
											<label for="sub-group-level-level-level-2c1">Ethnic Earrings</label>

											<ul>
												<li><a href="">Polki &amp; Kundan</a></li>
												<li><a href="">Meenakari Work Earrings</a></li>
												<li><a href="">Fusion</a></li>
												<li><a href="">Antique Victorian</a></li>
											</ul>
										</li><!--/Ethnic Earrings-->
										<li><a href="">Western Earrings</a></li>
										<li><a href="">Handicraft Earrings</a></li>
										<li><a href="">American Diamond Earrings</a></li>
									</ul>
								</li><!--/Earrings-->
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Braclets &amp; Bangles</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2c2" id="sub-group-level-level-2c2">
									<label for="sub-group-level-level-2c2">Braclets &amp; Bangles</label>

									<ul>
										<li><a href="">Ethnic Bangles</a></li>
										<li><a href="">Western Bangles</a></li>
										<li><a href="">Handicraft Bangles</a></li>
										<li><a href="">American Diamond Bangles</a></li>
									</ul>
								</li><!--/Braclets &amp; Bangles-->
								<li><a href="">Rings</a></li>
								<li><a href="">Hair Accessories</a></li>
								<li><a href="">Anklets and Bajubandh</a></li>
								<li><a href="">Toe Rings</a></li>
							</ul>
						</li><!--/Jewellery-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Lingerie</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2d" id="sub-group-level-2d">
							<label for="sub-group-level-2d">Lingerie</label>

							<ul>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Night Wear</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2d" id="sub-group-level-level-2d">
									<label for="sub-group-level-level-2d">Night Wear</label>

									<ul>
										<li><a href="">Babydoll and Chemise</a></li>
										<li><a href="">Bikini</a></li>
										<li><a href="">Nighty and Sleepwear</a></li>
										<li><a href="">Teddy</a></li>
										<li><a href="">Pyjamas &amp; Lounge Wear</a></li>
									</ul>
								</li><!--/Night Wear-->
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Brassiere</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2d1" id="sub-group-level-level-2d1">
									<label for="sub-group-level-level-2d1">Brassiere</label>

									<ul>
										<li><a href="">Padded</a></li>
										<li><a href="">Underwired</a></li>
										<li><a href="">Non Padded</a></li>
										<li><a href="">No Wire</a></li>
										<li><a href="">T-Shirt Bra</a></li>
										<li><a href="">Strapless</a></li>
										<li><a href="">Bridal</a></li>
										<li><a href="">Sportswear</a></li>
									</ul>
								</li><!--/Brassiere-->
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Panties</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2d2" id="sub-group-level-level-2d2">
									<label for="sub-group-level-level-2d2">Panties</label>

									<ul>
										<li><a href="">No Panty Lines</a></li>
										<li><a href="">Hipster</a></li>
										<li><a href="">Bikini Brief</a></li>
										<li><a href="">Regular Panty</a></li>
										<li><a href="">Boy Shorts</a></li>
									</ul>
								</li><!--/Panties-->
								<li><a href="">Plus Size</a></li>
								<li><a href="">Stockings</a></li>
								<li><a href="">Swimwear / Beachwear</a></li>
								<li><a href="">Shapewear</a></li>
								<li><a href="">Thermal Wear</a></li>
								<li><a href="">G-Strings &amp; Thongs</a></li>
								<li><a href="">Lingerie Bags</a></li>
								<li><a href="">Camisoles</a></li>
							</ul>
						</li><!--/Lingerie-->
						<li><a href="">Winter Wear</a></li>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Leggings / Jeggings / Palazzos</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2e" id="sub-group-level-2e">
							<label for="sub-group-level-2e">Leggings / Jeggings / Palazzos</label>

							<ul>
								<li><a href="">Printed Leggings/Jeggings</a></li>
								<li><a href="">Solid Color Leggings</a></li>
								<li><a href="">Palazzos</a></li>
							</ul>
						</li><!--/Leggings / Jeggings / Palazzos-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Sports and Gym Wear</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2f" id="sub-group-level-2f">
							<label for="sub-group-level-2f">Sports and Gym Wear</label>

							<ul>
								<li><a href="">T-Shirts</a></li>
								<li><a href="">Track Pants and Capris</a></li>
								<li><a href="">Sports Bras</a></li>
								<li><a href="">Shorts</a></li>
								<li><a href="">Boy Shorts</a></li>
							</ul>
						</li><!--/Sports and Gym Wear-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Footwear</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2g" id="sub-group-level-2g">
							<label for="sub-group-level-2g">Footwear</label>

							<ul>
								<li><a href="">Flats</a></li>
								<li><a href="">Heels</a></li>
								<li><a href="">Flip Flops</a></li>
							</ul>
						</li><!--/Footwear-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Bags</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2h" id="sub-group-level-2h">
							<label for="sub-group-level-2h">Bags</label>

							<ul>
								<li><a href="">Handbags</a></li>
								<li><a href="">Clutches</a></li>
								<li><a href="">Ladies Wallets</a></li>
								<li><a href="">Shopping Bags</a></li>
							</ul>
						</li><!--/Bags-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Personal Care</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2i" id="sub-group-level-2i">
							<label for="sub-group-level-2i">Personal Care</label>

							<ul>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Beauty</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2i1" id="sub-group-level-level-2i1">
									<label for="sub-group-level-level-2i1">Beauty</label>

									<ul>
										<li><a href="">Eyes</a></li>
										<li><a href="">Face</a></li>
										<li><a href="">Lips</a></li>
										<li><a href="">Nails</a></li>
									</ul>
								</li><!--/Beauty-->
								<li><a href="">Shaving and Hair Removal</a></li>
								<li><a href="">Female contraceptives</a></li>
								<li><a href="">Pregnancy Test Kit</a></li>
							</ul>
						</li><!--/Personal Care-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Accessories</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-2j" id="sub-group-level-2j">
							<label for="sub-group-level-2j">Accessories</label>

							<ul>
								<li><a href="">Women Watches</a></li>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Fragrance</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-2j1" id="sub-group-level-level-2j1">
									<label for="sub-group-level-level-2j1">Fragrance</label>

									<ul>
										<li><a href="">Deodorants for Women</a></li>
										<li class="has-children">
											<div class="has-children-category">
												<div  class="has-children-category-name">
													<a href="#">Perfumes</a>
												</div>
											</div>
											<input type="checkbox" name ="sub-group-level-level-level-2j1" id="sub-group-level-level-level-2j1">
											<label for="sub-group-level-level-level-2j1">Perfumes</label>

											<ul>
												<li><a href="">For Her</a></li>
											</ul>
										</li><!--/Perfumes-->
										
									</ul>
								</li><!--/Fragrance-->
								<li><a href="">Women Socks</a></li>
								<li><a href="">Belts</a></li>
								<li><a href="">Sunglasses</a></li>
								<li><a href="">Gloves</a></li>
								<li><a href="">Scarves</a></li>
							</ul>
						</li><!--/Accessories-->
					</ul>
      			</li><!--/Women-->
				
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Night Wear</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-3" id="sub-group-3">
					<label for="sub-group-3">Night Wear</label>

					<ul>
						<li><a href="">Babydoll and Chemise</a></li>
						<li><a href="">Bikini</a></li>
						<li><a href="">Nighty and Sleepwear</a></li>
						<li><a href="">Teddy</a></li>
						<li><a href="">Pyjamas &amp; Lounge Wear</a></li>
					</ul>
      			</li><!--/Night Wear-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Jewellery</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-4" id="sub-group-4">
					<label for="sub-group-4">Jewellery</label>

					<ul>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Pendants &amp; Necklaces</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-4a" id="sub-group-level-4a">
							<label for="sub-group-level-4a">Pendants &amp; Necklaces</label>

							<ul>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Ethnic Pendants</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-4a" id="sub-group-level-level-4a">
									<label for="sub-group-level-level-4a">Ethnic Pendants</label>

									<ul>
										<li><a href="">Kundan Sets</a></li>
										<li><a href="">Polki Work Sets</a></li>
										<li><a href="">Ginni Sets</a></li>
										<li><a href="">Meenakari Work Sets</a></li>
									</ul>
								</li><!--/Ethnic Pendants-->
								<li><a href="">American Diamond Pendants</a></li>
								<li><a href="">Handicraft Pendants</a></li>
								<li><a href="">Western Pendants</a></li>
								<li><a href="">Mangalsutra</a></li>
							</ul>
						</li><!--/Pendants &amp; Necklaces-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Earrings</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-4b" id="sub-group-level-4b">
							<label for="sub-group-level-4b">Earrings</label>

							<ul>
								<li class="has-children">
									<div class="has-children-category">
										<div  class="has-children-category-name">
											<a href="#">Ethnic Earrings</a>
										</div>
									</div>
									<input type="checkbox" name ="sub-group-level-level-4b" id="sub-group-level-level-4b">
									<label for="sub-group-level-level-4b">Ethnic Earrings</label>

									<ul>
										<li><a href="">Kundan Sets</a></li>
										<li><a href="">Polki Work Sets</a></li>
										<li><a href="">Ginni Sets</a></li>
										<li><a href="">Meenakari Work Sets</a></li>
									</ul>
								</li><!--/Ethnic Earrings-->
								<li><a href="">American Diamond Pendants</a></li>
								<li><a href="">Handicraft Pendants</a></li>
								<li><a href="">Western Pendants</a></li>
								<li><a href="">Mangalsutra</a></li>
							</ul>
						</li><!--/Earrings-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Braclets &amp; Bangles</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-4c" id="sub-group-level-4c">
							<label for="sub-group-level-4c">Braclets &amp; Bangles</label>

							<ul>								
								<li><a href="">Ethnic Bangles</a></li>
								<li><a href="">Western Bangles</a></li>
								<li><a href="">Handicraft Bangles</a></li>
								<li><a href="">American Diamond Bangles</a></li>
							</ul>
						</li><!--/Braclets &amp; Bangles-->
						<li><a href="">Rings</a></li>
						<li><a href="">Hair Accessories</a></li>
						<li><a href="">Anklets and Bajubandh</a></li>
						<li><a href="">Toe Rings</a></li>
					</ul>
      			</li><!--/Jewellery-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Kurtis</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-5" id="sub-group-5">
					<label for="sub-group-5">Kurtis</label>

					<ul>
						<li><a href="">Party Wear</a></li>
						<li><a href="">Regular Wear</a></li>
						<li><a href="">Cotton Kurtis</a></li>
						<li><a href="">Winter Kurtis</a></li>
					</ul>
      			</li><!--/Kurtis-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">T-Shirts</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-6" id="sub-group-6">
					<label for="sub-group-6">T-Shirts</label>

					<ul>
						<li><a href="">Super Hero</a></li>
						<li><a href="">Graphic T-Shirts</a></li>
						<li><a href="">Slogan T-Shirts</a></li>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Polos</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-6a" id="sub-group-level-6a">
							<label for="sub-group-level-6a">Polos</label>

							<ul>
								<li><a href="">Solid Polos</a></li>
								<li><a href="">Stripes</a></li>
								<li><a href="">Printed Polos</a></li>
								<li><a href="">Pocket Polos</a></li>
							</ul>
						</li><!--/Polos-->
						<li><a href="">Cartoon Characters</a></li>
						<li><a href="">Music Lovers</a></li>
						<li><a href="">Henley</a></li>
						<li><a href="">Sports Tees</a></li>
						<li><a href="">Full Sleeve Tees</a></li>
						<li><a href="">V-Necks</a></li>
						<li><a href="">Solid Round Necks</a></li>
					</ul>
      			</li><!--/Kurtis-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Home Decor</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-7" id="sub-group-7">
					<label for="sub-group-7">Home Decor</label>

					<ul>
						<li><a href="">Cushion Covers</a></li>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Bed Linen</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-7a" id="sub-group-level-7a">
							<label for="sub-group-level-7a">Bed Linen</label>

							<ul>
								<li><a href="">Double Bedsheet Set</a></li>
							</ul>
						</li><!--/Polos-->
					</ul>
      			</li><!--/Home Decor-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Gifts</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-8" id="sub-group-8">
					<label for="sub-group-8">Gifts</label>

					<ul>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Greeting Cards</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-8a" id="sub-group-level-8a">
							<label for="sub-group-level-8a">Greeting Cards</label>

							<ul>
								<li><a href="">Rakhi</a></li>
								<li><a href="">Friendship</a></li>
								<li><a href="">Anniversary</a></li>
								<li><a href="">Birthday</a></li>
								<li><a href="">For Your Love</a></li>
								<li><a href="">For Sister</a></li>
							</ul>
						</li><!--/Greeting Cards-->
						<li><a href="">Idols</a></li>
						<li><a href="">Contemporary Gifts</a></li>
						<li><a href="">Gifts for Your Love</a></li>
						<li><a href="">Rakhi</a></li>
					</ul>
      			</li><!--/Gifts-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Lingerie</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-9" id="sub-group-9">
					<label for="sub-group-9">Lingerie</label>

					<ul>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Night Wear</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-9a" id="sub-group-level-9a">
							<label for="sub-group-level-9a">Night Wear</label>

							<ul>
								<li><a href="">Babydoll and Chemise</a></li>
								<li><a href="">Bikini</a></li>
								<li><a href="">Nighty and Sleepwear</a></li>
								<li><a href="">Teddy</a></li>
								<li><a href="">Pyjamas &amp; Lounge Wear</a></li>
							</ul>
						</li><!--/Night Wear-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Brassiere</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-9b" id="sub-group-level-9b">
							<label for="sub-group-level-9b">Brassiere</label>

							<ul>
								<li><a href="">Padded</a></li>
								<li><a href="">Underwired</a></li>
								<li><a href="">Non Padded</a></li>
								<li><a href="">No Wire</a></li>
								<li><a href="">T-Shirt Bra</a></li>
								<li><a href="">Strapless</a></li>
								<li><a href="">Bridal</a></li>
								<li><a href="">Sportswear</a></li>
							</ul>
						</li><!--/Brassiere-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Panties</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-9c" id="sub-group-level-9c">
							<label for="sub-group-level-9c">Panties</label>

							<ul>
								<li><a href="">No Panty Lines</a></li>
								<li><a href="">Hipster</a></li>
								<li><a href="">Bikini Brief</a></li>
								<li><a href="">Regular Panty</a></li>
								<li><a href="">Boy Shorts</a></li>
							</ul>
						</li><!--/Panties-->
						<li><a href="">Plus Size</a></li>
						<li><a href="">Stockings</a></li>
						<li><a href="">Swimwear / Beachwear</a></li>
						<li><a href="">Shapewear</a></li>
						<li><a href="">Thermal Wear</a></li>
						<li><a href="">G-Strings &amp; Thongs</a></li>
						<li><a href="">Lingerie Bags</a></li>
						<li><a href="">Camisoles</a></li>v
					</ul>
      			</li><!--/Lingerie-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Sarees</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-10" id="sub-group-10">
					<label for="sub-group-10">Sarees</label>

					<ul>
						<li><a href="">Designer Sarees</a></li>
						<li><a href="">Printed Sarees</a></li>
						<li><a href="">Lehenga</a></li>
					</ul>
      			</li><!--/Sarees-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Ethnic Suits</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-11" id="sub-group-11">
					<label for="sub-group-11">Ethnic Suits</label>

					<ul>
						<li><a href="">Straight Suits</a></li>
						<li><a href="">Anarkalis</a></li>
						<li><a href="">Daily Wear</a></li>
						<li><a href="">Ethnic Gowns</a></li>
						<li><a href="">Fusion Suits</a></li>
						<li><a href="">Palazzo Suits</a></li>
						<li><a href="">Patiala Salwar Suits</a></li>
						<li><a href="">Stitched Ethnic Suits</a></li>
						<li><a href="">Winter Collection</a></li>
					</ul>
      			</li><!--/Ethnic Suits-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Sexual Wellbeing</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-12" id="sub-group-12">
					<label for="sub-group-12">Sexual Wellbeing</label>

					<ul>
						<li><a href="">Condoms</a></li>
						<li><a href="">Lubes &amp; Stimulators</a></li>
					</ul>
      			</li><!--/Sexual Wellbeing-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Kids</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-13" id="sub-group-13">
					<label for="sub-group-13">Kids</label>

					<ul>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Boys Clothing</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-13a" id="sub-group-level-13a">
							<label for="sub-group-level-13a">Boys Clothing</label>

							<ul>
								<li><a href="">Infants</a></li>
								<li><a href="">Boys 2-6 yrs</a></li>
								<li><a href="">Boys 7-14 yrs</a></li>
								<li><a href="">Innerwear</a></li>
								<li><a href="">Winter Wear</a></li>
								<li><a href="">Sleepwear</a></li>
							</ul>
						</li><!--/Boys Clothing-->
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Girls Clothing1</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-13b" id="sub-group-level-13b">
							<label for="sub-group-level-13b">Girls Clothing</label>

							<ul>
								<li><a href="">Infants</a></li>
								<li><a href="">Girls 2-6 yrs</a></li>
								<li><a href="">Girls 7-14 yrs</a></li>
								<li><a href="">Innerwear</a></li>
								<li><a href="">Sleepwear</a></li>
								<li><a href="">Girls Winter Wear</a></li>
								<li><a href="">Ethnic Wear</a></li>
								<li><a href="">Party Dresses</a></li>
							</ul>
						</li><!--/Girls Clothing-->
						<li><a href="">Kids Bedsheet Set</a></li>
						<li><a href="">Kids Jewellery</a></li>
						<li><a href="">Kid's Bag</a></li>
						<li><a href="">Pencil Box</a></li>
						<li><a href="">Water Bottle</a></li>
						<li><a href="">Lunch Box</a></li>
						<li><a href="">Books and More</a></li>
						<li><a href="">Toys &amp; Games</a></li>
						<li><a href="">Accessories</a></li>
					</ul>
      			</li><!--/Kids-->
				
				<li><a href="">Clubwear</a></li>
				<li><a href="">Tops</a></li>
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Bags</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-14" id="sub-group-14">
					<label for="sub-group-14">Bags</label>

					<ul>
						<li><a href="">Handbags</a></li>
						<li><a href="">Clutches</a></li>
						<li><a href="">Ladies Wallets</a></li>
						<li><a href="">Shopping Bags</a></li>
					</ul>
      			</li><!--/Bags-->
				
				<li class="has-children">
					<div class="has-children-category">
						<div  class="has-children-category-name">
							<a href="#">Shirts</a>
						</div>
					</div>
      				<input type="checkbox" name ="sub-group-15" id="sub-group-15">
					<label for="sub-group-15">Shirts</label>

					<ul>
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Casual Wear</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-15a" id="sub-group-level-15a">
							<label for="sub-group-level-15a">Casual Wear</label>

							<ul>
								<li><a href="">Denim Shirts</a></li>
								<li><a href="">Solid Casual Shirts</a></li>
								<li><a href="">Printed Casual Shirt</a></li>
								<li><a href="">Checks Casual Shirts</a></li>
								<li><a href="">Stripes Casual Shirts</a></li>
								<li><a href="">Half Sleeves Casual Shirts</a></li>
							</ul>
						</li><!--/Casual Wear-->
						
						<li class="has-children">
							<div class="has-children-category">
								<div  class="has-children-category-name">
									<a href="#">Formal Shirts</a>
								</div>
							</div>
							<input type="checkbox" name ="sub-group-level-15b" id="sub-group-level-15b">
							<label for="sub-group-level-15b">Formal Shirts</label>

							<ul>
								<li><a href="">Solid Formal Shirts</a></li>
								<li><a href="">Formal Checks Shirts</a></li>
								<li><a href="">Formal Stripes Shirts</a></li>
								<li><a href="">Formal Printed Shirts</a></li>
								<li><a href="">Half Sleeves Formal Shirts</a></li>
							</ul>
						</li><!--/Formal Shirts-->
						
						<li><a href="">Party Wear</a></li>
					</ul>
      			</li><!--/Shirts-->
				<li><a href="">Trousers</a></li>				
      		</ul>
		</li>
	</ul> <!-- cd-accordion-menu -->
 
 
</div>
</header>
