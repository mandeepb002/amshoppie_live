			
			
	<aside class="right-side">
            <section class="content">
               <div class="row"> 
					
					 <div class="col-md-12"> 
						<h2 class="section-title"> MY SHOPE </h2>
						
				<div class="row">
					<!-- <div class="col-md-2 col-sm-2 col-xs-2"></div> -->
				
					<div class="col-md-6 col-sm-12 col-xs-12">
				
				<form method="post" action="<?php echo base_url();?>shope_action/shop_act" class="form-horizontal" enctype="multipart/form-data">
				
						
											
						 <div class="form-group">
							<div class="col-md-4">
								<label for="email" class="control-label">EMAIL<label class="required" style="color:#F00">*</label></label>
							</div>
							<div class="col-md-8">
								  <input type="text" required="required" name="email" class="form-control" id="email" value="<?php echo set_value('email'); ?>">
                                  <span class="error"><?php echo form_error('email', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4">
								<label for="shope_name" class="control-label">SHOPE NAME<label class="required" style="color:#F00">*</label></label>
							</div>
							<div class="col-md-8">
								<input type="text" required="required" name="shope_name" class="form-control" id="shope_name" value="<?php echo set_value('shope_name'); ?>">
                                <span class="error"><?php echo form_error('shope_name', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4">
								<label for="address" class="control-label">ADDRESS<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="address" class="form-control" id="address" value="<?php echo set_value('address'); ?>">
                                 <span class="error"><?php echo form_error('address', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
							  
							<div class="form-group">
							<div class="col-md-4">
								<label for="address" class="control-label">LOCALITY<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="locality" class="form-control" id="locality" value="<?php echo set_value('locality'); ?>">
                                 <span class="error"><?php echo form_error('locality', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
                        <div class="form-group">
							<div class="col-md-4">
								<label for="landmark" class="control-label">LANDMARK<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="landmark" class="form-control" id="landmark" value="<?php echo set_value('landmark'); ?>">
                                 <span class="error"><?php echo form_error('landmark', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
						    
							<div class="form-group">
							<div class="col-md-4">
								<label for="pan" class="control-label">PAN<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="pan" class="form-control" id="pan" value="<?php echo set_value('pan'); ?>">
                                 <span class="error"><?php echo form_error('pan', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
						
							<div class="form-group">
							<div class="col-md-4">
								<label for="gstin" class="control-label">GSTIN<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="gstin" class="form-control" id="gstin" value="<?php echo set_value('gstin'); ?>">
                                 <span class="error"><?php echo form_error('gstin', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
							<div class="col-md-4">
								<label for="phone" class="control-label label1">PHONE<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="phone" class="form-control label12" id="phone" value="<?php echo set_value('phone'); ?>">
                                 <span class="error"><?php echo form_error('phone', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
                        <div class="form-group">
							<div class="col-md-4">
								<label for="pincode" class="control-label label2">PINCODE<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="pincode" class="form-control label13" id="pincode" value="<?php echo set_value('pincode'); ?>">
                                 <span class="error"><?php echo form_error('pincode', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label for="city" class="control-label label2">CITY<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="city" class="form-control label13" id="city" value="<?php echo set_value('city'); ?>">
                                 <span class="error"><?php echo form_error('city', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label for="state" class="control-label label2">STATE<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="state" class="form-control label13" id="state" value="<?php echo set_value('state'); ?>">
                                 <span class="error"><?php echo form_error('state', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-4">
								<label for="country" class="control-label label2">COUNTRY<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="country" class="form-control label13" id="country" value="<?php echo set_value('country'); ?>">
                                 <span class="error"><?php echo form_error('country', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label for="vat" class="control-label label2">VAT<label class="required" style="color:#F00">*</label></label>
							</div>	
							<div class="col-md-8">
								 <input type="text" required="required" name="vat" class="form-control label13" id="vat" value="<?php echo set_value('vat'); ?>">
                                 <span class="error"><?php echo form_error('vat', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
						
							<div class="form-group">
							<div class="col-md-4"></div> 
                            <div class="col-md-8">
									<input type="submit" class="btn btn-default btn-yellow-bg" value="UPDATE">
							</div>
						</div>




							  
							  
							  
							  <!-- <div class="form-group"> -->
								<!-- <div class="col-sm-offset-2 col-sm-10"> -->
								  <!-- <button type="submit" class="btn btn-default">Sign in</button> -->
								<!-- </div> -->
							  <!-- </div> -->
				</form>
				</div>
				<!-- <div class="col-sm-2 col-xs-2"></div> -->
				</div>
										
										
						
						
						
						
						
						
						 
						 
                         </div>
					</div> 
	
            </section>
			 <section class="content">
               <div class="row"> 
					
					 <div class="col-md-12"> 
						<h2 class="section-title">SHOP SETTING</h2>
						
				<div class="row">
					<!-- <div class="col-md-2 col-sm-2 col-xs-2"></div> -->
				
					<div class="col-md-6 col-sm-12 col-xs-12">
				
					 <div class="form-group">
							<div class="col-md-4">
								<label for="cod-avail" class="control-label lab15">COD Available</label>
							</div>
							<div class="col-md-8">
								<div class="radio-btn">
							<input type="radio" name="gender"> Yes
                            <input type="radio" name="gender"> No
                                 <span class="error"></span></div>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4">
								<label for="ship-within" class="control-label lab16">Ship Within</label>
							</div>
							<div class="col-md-8">
								<select name="category_name" class="btn btn-default btn-size">
                                  <option selected="selected">Select</option>
								   <option>Within Area</option>
								   <option>State</option>
								   <option>National</option>
                                  
                                  </select>
							</div>
						</div>
			      </div>
				  <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
							<div class="col-md-4">
								<label for="code" class="control-label label1 lab14">COD Paid By</label>
							</div>	
							<div class="col-md-8"><div class="radio-btn">
							<input type="radio" name="gender"> Me
                            <input type="radio" name="gender"> Buyer
                                 <span class="error"></span></div>
							</div>
						</div>
                        <div class="form-group">
							<div class="col-md-4">
								<label for="ship-in" class="control-label label1 lab17">Ship In</label>
							</div>	  
							<div class="col-md-8">
								 <select name="category_name" class="btn btn-default btn-size1">
                                  <option selected="selected">Select Duration</option>
								   <option>1-2 days</option>
								   <option>2-3 days</option>
								   <option>4-7 days</option>
                                  
                                  </select>
							</div>
						</div>
						</div>
				</div>
				</div>
				</div>
				</section>
				<section class="content">
				<div class="row"> 
					
					 <div class="col-md-12"> 
						      <div class="row">
							  <div class="col-md-6">
							  <h2 class="section-title">Shop Logo</h2>
							     <div class="form-group">
							<div class="col-md-4">
								<label for="code" class="control-label label1 lab14">Update Shop Logo</label>
							</div>	
							<div class="col-md-8">
						<input id="shoplogo" style="margin-top: 35px" class="shop_banner form-control" type="file" name="file" file="" onchange="angular.element(this).scope().uploadShopLogo(this,'logo');">
							</div>
						</div>
							  
							  </div>
							  <div class="col-md-6">
							  	  <h2 class="section-title">Shop Banner</h2>
								  <div class="form-group">
							<div class="col-md-4">
								<label for="code" class="control-label label1 lab14">Update Shop Banner</label>
							</div>	
							<div class="col-md-8">
						<input id="shoplogo" style="margin-top: 35px" class="shop_banner form-control" type="file" name="file" file="" onchange="angular.element(this).scope().uploadShopLogo(this,'logo');">
							</div>
						</div>
							  
							  </div>
				</section>
</aside>
				
				
 
