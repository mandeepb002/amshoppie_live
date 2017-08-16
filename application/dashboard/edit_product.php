<aside class="right-side">
            <section class="content">
               <div class="row"> 
					<div class="col-md-2"></div> 
					 <div class="col-md-6"> 
						<h2 class="section-title"> Edit Product </h2>
						
				<div class="row">
					<!-- <div class="col-md-2 col-sm-2 col-xs-2"></div> -->
				
					<div class="col-md-12 col-sm-12 col-xs-12">
				
				<form method="post" action="<?php echo base_url();?>product/edit_product?id=<?php echo $_GET['id']; ?>" class="form-horizontal" enctype="multipart/form-data">
				
						<?php
								foreach($records as $row):
								 ?>
											
						 <div class="form-group">
							<div class="col-md-4">
								<label for="product_name" class="control-label">Product Name</label>
							</div>
							<div class="col-md-8">
								  <input type="text" required="required" name="product_name" class="form-control" id="inputText3" value="<?=$row->product_name;?>"> <span><?php echo form_error('product_name', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4">
								<label for="quantity" class="control-label">Quantity</label>
							</div>
							<div class="col-md-8">
								<input type="number" required="required" name="quantity" class="form-control" id="inputNumber3" value="<?=$row->quantity;?>"><span><?php echo form_error('quantity', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4">
								<label for="rate" class="control-label">Rate</label>
							</div>	
							<div class="col-md-8">
								 <input type="number" required="required" name="rate" class="form-control" id="inputNumber3" value="<?=$row->rate;?>">
                                 <span><?php echo form_error('rate', '<div class="error" style="color:red;>', '</div>'); ?></span>
							</div>
						</div>
							  
							<div class="form-group">
							<div class="col-md-4">
								<label for="choose_brand" class="control-label">Choose Brand</label>
							</div>	
							<div class="col-md-8"> 
                             
								  <select name="brand_name" class="btn btn-default" id="choose_brand">
                                  <option selected="selected">Select Brand</option>
                                  <?php $brands= $this->products->select_brands(); 
							foreach($brands as $brand){
								?>
									<option value="<?= $brand->id;  ?>"><?= $brand->name;  ?></option>
								<?php	} 
							?>
                                  </select>
                                  <span><?php echo form_error('brand_name', '<div class="error">', '</div>'); ?></span>
							</div>
								</div>
                                
							<div class="form-group">
							<div class="col-md-4">
								<label for="category_name" class="control-label">Choose Category</label>
							</div>	
							<div class="col-md-8">
                            	  <select name="category_name" class="btn btn-default">
                                  <option selected="selected">Select Category</option>
                                  <?php $category= $this->products->select_category(); 
							foreach($category as $category){
								?>
									<option value="<?= $category->id;  ?>"><?= $category->category_name;  ?></option>
								<?php	} 
							?>
                                  </select>
                                  <span><?php echo form_error('category_name', '<div class="error">', '</div>'); ?></span>
							</div>
							</div>
                            
							<div class="form-group">
							<div class="col-md-4">
								<label for="status" class="control-label">Status</label>
							</div>	
							<div class="col-md-8">
									<select name="status" class="btn btn-default">
                                    <!--option selected="selected">STATUS</option-->
                                    <option value="ACTIVE">Active</option>
                                    <option value="INACTIVE">Inactive</option>
                                    </select>
                                   <span><?php echo form_error('status', '<div class="error">', '</div>'); ?></span>
							</div>
                            </div>
                            <div class="form-group">
								<div class="col-md-4">
								<label for="file" class="control-label">Upload Image</label>
								</div>
								<div class="col-md-8">
								 <input type="file" required="required" name="image" class="btn btn-default" value=""><br />
                                  <span><?php echo form_error('image', '<div class="error" style="color:red;">', '</div>'); ?></span>
								</div>
						</div>	
                            <?php endforeach; ?>
							<div class="form-group">
							<div class="col-md-4"></div> 
                            <div class="col-md-8">
									<input type="submit" class="btn btn-default btn-yellow-bg" value="Update">
							</div>
						</div>
				</form>
				</div>
				</div>
										
						
						 </div>
							</div> 
	
            </section>
				
</aside>
			
 
