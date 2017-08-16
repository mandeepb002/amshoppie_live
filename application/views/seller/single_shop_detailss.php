<?php if($this->session->userdata('id')==true){ ?>
<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
				<!-- Main content -->
                <section class="content">
                <section class="box-shadow02"> 
				<div class="box-title02">
				<h2 class="section-title add-p02"> View Shop Detail </h2>
					<!--div class="box-tools pull right">
						<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
						</button>
					</div-->
					
				</div>
				<!-- table -->
				<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
                <h2>Logo </h2>
				<div class="viewprdct-img">
				
				
				<img src="<?= base_url()."uploads/".$row->logo; ?>" width="300px" height="300px" />
				
				
				
				</div>
				</div>
				
                <div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
                <h2>Banner </h2>
				<div class="viewprdct-img">
				
				
				<img src="<?= base_url()."uploads/".$row->banner; ?>" width="300px" height="300px" />
				
				
				
				</div>
				</div>
				
                
                
				<div class="col-md-8 col-sm-6 col-xs-6">
						 <div class="viewprdct-detail">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						Id:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php

						
						echo $row->id;
						 
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						EMAIL:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						
						echo $row->email;
					
					
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						SHOP NAME:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
				
				
					echo $row->shope_name;
					 
        
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						ADDRESS:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
					
						echo $row->address;
				 
					
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						PHONE:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
        
						
						echo $row->phone;
						 
					
							?>
					 </div>
						</div>
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						ADDRESS:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
			
						echo $row->address;
			 
					
					?>
					 </div>
						</div>
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						LOCALITY:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						
						echo $row->locality;
				
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						LANDMARK:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
        
						
						echo $row->landmark;
					
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						PAN:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
					
						
						echo $row->pan;
						 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						GSTIN:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						
						echo $row->gstin;
						  
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						PINCODE:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						
						echo $row->pincode;
						
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						//foreach($records as $row):
						//echo $row->country_code;
						 //endforeach; 
					
							?>
					 </div>
						</div>
						
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						CITY:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						
						echo $row->city;
						 
						?>
					 </div>
					 

					</div>
                    <div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						STATE:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						
						echo $row->state;
						
					
						?>
					 </div>
					 

					</div>
			<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						SHIP IN:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						
						echo $row->ship_in;
						
					
						?>
					 </div>
					 

					</div>
                    <div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						SHIP WITHIN:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						
						echo $row->ship_within;
						 
					
						?>
					 </div>
					 

					</div>
			
			
                    
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						</div>
					 
					  <div><a href="<?php base_url(); ?>http://amshoppie.com/shop/shop_detail_view" class="btn btn-default back-btn">BACK</a></div>

					</div>
						
						
						
						
					</div>
					</div>
					</div>
					
			
		
		<!-- /table -->
		 </section>
               </section><!-- /.content --> 
            </aside><!-- /.right-side -->
           
        
		
		
	
		
<?php }else{
    redirect(base_url('seller/login?msg=Please login to continue'));
} ?>