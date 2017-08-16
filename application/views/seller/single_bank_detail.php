<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
				<!-- Main content -->
                <section class="content">
                 <section class="box-shadow1"> 
                
				<div class="box-title">
				<h2 class="section-title"> View Bank Details </h2>
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
				echo "<img src='".$row->image."'>";
				endforeach;
				?>
				<!--img style="height:400px" src="<!?php echo base_url() ?>/assets/seller/img/product-img1.jpg"-->
				
				
				</div>
				</div>
				
				<div class="col-md-6 col-sm-6 col-xs-6">
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
					  BANK ACCOUNT NO:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						foreach($records as $row):
						echo $row->ban;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						IFSC CODE:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
        
						foreach($records as $row):
						echo $row->ifsc;
						 endforeach; 
					
						?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						FULL NAME:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						 <?php
					
						foreach($records as $row):
						echo $row->full_name;
						 endforeach; 
					
							?>
					 </div>
						</div>
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						BANK NAME:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						foreach($records as $row):
						echo $row->bank_name;
						 endforeach; 
					
							?>
					 </div>
						</div>
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						BANK BRANCH:</div>
					 
					  <div class="col-md-6 col-sm-6 col-xs-6 view-titlecntnt">
						<?php
					
						foreach($records as $row):
						echo $row->bank_branch;
						 endforeach; 
					
						?>
					 </div>
						</div>
					
						
						
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 view-title">
					  
						</div>
					 
					  <div><a href="<?php base_url(); ?>http://amshoppie.com/seller/bank_detail_view" class="btn btn-default back-btn">BACK</a></div>

					</div>
						
						
						
						
					</div>
					</div>
					<div class="col-md-1 col-sm-12 col-xs-12">
					</div>
					
					</div>
				

		<!-- /table -->
		 </section>
               </section><!-- /.content --> 
            </aside><!-- /.right-side -->
           
        
		
	
		
