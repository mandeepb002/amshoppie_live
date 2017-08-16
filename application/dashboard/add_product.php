			
			
	<aside class="right-side">
            <section class="content">
               <div class="row"> 
				
					 <div class="col-md-12"> 
						<h2 class="section-title"> Add Product </h2>
						
				<div class="row">
					<!-- <div class="col-md-2 col-sm-2 col-xs-2"></div> -->
				
					<div class="col-md-12 col-sm-12 col-xs-12">
				
				<form method="post" action="<?php echo base_url();?>seller/add_product" class="form-horizontal" enctype="multipart/form-data">
				
						
											
						 <div class="form-group">
							<div class="col-md-4">
								<label for="product_name" class="control-label">Name</label>
							</div>
							<div class="col-md-8">
								  <input type="text" required="required" name="product_name" class="form-control" id="product_name" value="<?php echo set_value('product_name'); ?>">
                                  <span class="error"><?php echo form_error('product_name', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4">
								<label for="quantity" class="control-label">Category</label>
							</div>
							<div class="col-md-8">
								<select name="category_name" class="btn btn-default">
                                  <option selected="selected">Select Category</option>
								   <option>1</option>
								   <option>2</option>
								   <option>3</option>
                                  
                                  </select>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4">
								<label for="rate" class="control-label">Description</label>
							</div>	
							<div class="col-md-8">
								 <input type="text" placeholder="Enter the Description" name="rate" class="form-control" id="rate">
                                
							</div>
						</div>
							  
							<div class="form-group">
							<div class="col-md-4">
								<label for="choose_brand" class="control-label">Merchant SKU</label>
							</div>	
							<div class="col-md-8"> 
                             <input type="text" placeholder="Merchant SKU" name="rate" class="form-control" id="rate">
								
							</div>
								</div>
                              	<div class="form-group">
							<div class="col-md-4">
								<label for="rate" class="control-label">Quantity</label>
							</div>	
							<div class="col-md-8">
								 <input type="text" placeholder="Quantity" name="rate" class="form-control" id="rate">
                                
							</div>
						</div>  
							
                            <div class="form-group">
								<div class="col-md-4">
								<label for="file" class="control-label">Upload Image</label>
								</div>
								<div class="col-md-8">
								  <input type="file" required="required" name="userfile" class="btn btn-default" value="<?php echo set_value('userfile'); ?>"><br />
                                  <span class="error"><?php echo form_error('image', '<div class="error" style="color:red;">', '</div>'); ?></span>
                                  
								</div>
                                
						</div>	
                            
							<div class="form-group">
							<div class="col-md-4"></div> 
                            <div class="col-md-8">
									<input type="submit" class="btn btn-default btn-yellow-bg" value="Add Product">
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
<div class="col-md-8">						 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Pricing
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="form-group">
							<div class="col-md-4">
								<label for="product_name" class="control-label">Item Price</label>
							</div>
							<div class="col-md-8">
								  <input type="text" placeholder="Max Retail Price" name="product_name" class="form-control" id="product_name">
                                  <span class="error"></span>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4">
								<label for="quantity" class="control-label">Price after Discount</label>
							</div>
							<div class="col-md-8">
								<input type="text" placeholder="Price after Discount"  name="product_name" class="form-control" id="product_name">
                                <span class="error"></span>
							</div>
						</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Shipping  
		  </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
         <div class="form-group">
							<div class="col-md-4">
								<label for="product_name" class="control-label">Weight</label>
							</div>
							<div class="col-md-8">
								  <select name="category_name" class="btn btn-default">
                                  <option selected="selected">Select weight</option>
								   <option>0-5</option>
                                  
                                  </select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label for="product_name" class="control-label">Shipping Fee</label>
							</div>
							<div class="col-md-8">
								 <input type="text" name="product_name" class="form-control" id="product_name">
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4">
								<label for="quantity" class="control-label">Ship In</label>
							</div>
							<div class="col-md-8">
								<select name="category_name" class="btn btn-default">
                                  <option selected="selected">Select Duration</option>
								   <option>1-2 days</option>
								   <option>2-3 days</option>
								   <option>4-7 days</option>
                                  
                                  </select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-4">
								<label for="quantity" class="control-label">Paid By</label>
							</div>
							<div class="col-md-8">
								<form action="">
								  <input type="radio" name="gender" value="male"> Me<br>
								  <input type="radio" name="gender" value="female"> By seller<br>
							</div>
						</div>
      </div>
    </div>
  </div>
 
</div>
</div>
 <div class="col-md-4">
                         
                         <table class="table" style="margin-top:220px;">
 <tr style="background:lightgrey">
<td><h2 >CALCULATION</h2></td>
</tr>
<tr>
<td>Mrp:</td>
</tr>
<tr>
<td>Shipping Fee:</td>
</tr>
<tr>
<td>10% Commission</td>
</tr>
<td>15% Service Tax</td>
</tr>
<td>On Commission:</td>
</tr>
<tr>
<td>You Earn: &#8377;</td>
</tr>
</table>
                         </div>


					
						 
						 

				 
	
            </section>
				
</aside>
				
				
 
