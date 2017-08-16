<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
				<!-- Main content -->
                <section class="content">
                <section class="box-shadow02"> 
				<div class="box-title02">
				<h2 class="section-title add-p02"> View Product Detail </h2>
					<!--div class="box-tools pull right">
						<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
						</button>
					</div-->
					
				</div>
				<!-- table -->
				<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="viewprdct-img">
				

				
				 <?php 
				 		foreach($records as $row):
	 $condition = array(
	 'p_id' => $row->id,
	 'main_image' => 1,
	 );
	 $this->db->select('*');
	 		$this->db->from('product_image');
			$this->db->where($condition); 
			$query = $this->db->get();
			if($query->num_rows()>0){?>
            <?php foreach($query->result() as $rows){ ?>
				<img src="<?= base_url()."uploads/".$rows->image; ?>" width="400px" height="400px" />			
			
			<?php	} }
			endforeach; 		
	 ?>
	
				
				</div>
				</div>
				
				<div class="col-md-8 col-sm-6 col-xs-6">
						 <div class="viewprdct-detail">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Id:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php

						foreach($records as $row):
						echo $row->id;
						 endforeach; 

						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						PRODUCT NAME:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						foreach($records as $row):
						echo $row->product_name;
						 endforeach; 
					
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						QUANTITY:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
				
					foreach($records as $row):
					echo $row->quantity;
					 endforeach; 
        
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						DESCRIPTION:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						foreach($records as $row):
						echo $row->description;
						 endforeach; 
					
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						MER SKU:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
        
						foreach($records as $row):
						echo $row->mer_sku;
						 endforeach; 
					
							?>
					 </div>
						</div>
                        <div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Product SKU:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
        
						foreach($records as $row):
						echo $row->product_sku;
						 endforeach; 
					
							?>
					 </div>
						</div>

						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						CATEGORY NAME:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						foreach($records as $row):
						echo $row->category_name;
						 endforeach; 
					
					?>
					 </div>
						</div>
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						ITEM PRICE:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						foreach($records as $row):
						echo $row->item_price;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						PRICE DISCOUNT:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
        
						foreach($records as $row):
						echo $row->price_d;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						SHIPPING FEE:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
					
						foreach($records as $row):
						echo $row->shipping_fee;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						SHIP IN:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						foreach($records as $row):
						echo $row->ship_in;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Return:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						foreach($records as $row):
						echo isset($row->return_days) ? $row->return_days : '';
						 endforeach; 
					
							?>
					 </div>
						</div>
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Exchange:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						foreach($records as $row):
						echo isset($row->exchange_days) ? $row->exchange_days : '';
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						WEIGHT:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						foreach($records as $row):
						echo $row->weight;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						COUNTRY CODE:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						foreach($records as $row):
						echo $row->country_code;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						PAID BY:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						foreach($records as $row):
						echo $row->paid_by;
						 endforeach; 
					
						?>
					 </div>
					 

					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						</div>
					 
					  <div><a href="<?php base_url(); ?>https://amshoppie.com/show_product/s_product" class="btn btn-default back-btn">BACK</a></div>

					</div>
						
						
						
						
					</div>
					</div>
					</div>
					
			
		
		<!-- /table -->
		 </section>
               </section><!-- /.content --> 
            </aside><!-- /.right-side -->
           
        
		
		
	
		
