<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
				<!-- Main content -->
                <section class="content">
                <section class="box-shadow02"> 
				<div class="box-title02">
				<h2 class="section-title add-p02"> View track Detail </h2>
					<!--div class="box-tools pull right">
						<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
						</button>
					</div-->
					
				</div>
				<!-- table -->
				<div class="row">
				<div class="col-md-2 col-sm-4 col-xs-4">
				<!--div class="viewprdct-img">
				
				<img style="height:400px" src="<!?php echo base_url() ?>/assets/seller/img/product-img1.jpg">
				
				
				</div-->
				</div>
				
				<div class="col-md-8 col-sm-4 col-xs-4">
						 <div class="viewprdct-detail1">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Id:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php

						foreach($recco as $row):
						echo $row->id;
						 endforeach; 

						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Order Date:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						foreach($recco as $row):
						echo $row->order_date;
						 endforeach; 
					
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Sub total:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
				
					foreach($recco as $row):
					echo $row->sub_total;
					 endforeach; 
        
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Vat:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						foreach($recco as $row):
						echo $row->vat;
						 endforeach; 
					
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Total amount:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
        
						foreach($recco as $row):
						echo $row->total_amount;
						 endforeach; 
					
							?>
					 </div>
						</div>
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Discount:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						foreach($recco as $row):
						echo $row->discount ;
						 endforeach; 
					
					?>
					 </div>
						</div>
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Grand total:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						foreach($recco as $row):
						echo $row->grand_total;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Status:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
        
						foreach($recco as $row):
						echo $row->order_status;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						
			
			
                    
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						</div>
					 
					  <div><a href="<?php base_url(); ?>http://amshoppie.com/seller/track_order" class="btn btn-default back-btn">BACK</a></div>

					</div>
						
						
						
						
					</div>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-4">
				<!--div class="viewprdct-img">
				
				<img style="height:400px" src="<!?php echo base_url() ?>/assets/seller/img/product-img1.jpg">
				
				
				</div-->
					</div>
				
					
					</div>
					
			
		
		<!-- /table -->
		 </section>
               </section><!-- /.content --> 
            </aside><!-- /.right-side -->
           
        
		
		
	
		
