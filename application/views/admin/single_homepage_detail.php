<?php if($this->session->userdata('id')==true){ ?>
<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
				<!-- Main content -->
                <section class="content">
                <section class="box-shadow02"> 
				<div class="box-title02">
				<h2 class="section-title add-p02"> View Homepage Detail </h2>
					<!--div class="box-tools pull right">
						<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
						</button>
					</div-->
					
				</div>
				<!-- table -->
				<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
                <h2>IMAGE</h2>
				<div class="viewprdct-img">
				
				
				<img src="<?= base_url()."uploads/".$row->image; ?>" width="300px" height="300px" />
				
				
				
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
					  
						NAME:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						
						echo $row->name;
					
					
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						LINK:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
				
				
					echo $row->link;
					 
        
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						CATEGORY:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
					
						echo $row->category;
				 
					
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						PRICE:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
        
						
						echo $row->price;
						 
					
							?>
					 </div>
						</div>
						    
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						</div>
					 
					  <div><a href="<?php base_url(); ?>http://amshoppie.com/setting/homepage_list" class="btn btn-default back-btn">BACK</a></div>

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