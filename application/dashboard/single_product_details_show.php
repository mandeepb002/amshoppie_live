
             <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->


				
				<!-- Main content -->
                <section class="content">
                
                <h2 class="section-title"> View Product Details </h2>

                   
                    
               
				
				
				<!-- table -->
				
				<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
				
				 <table class="table table-hover">
    <thead>
      <tr>
      
        <th>ID</th>
        <td>
      <?php

	foreach($records as $row):
	echo $row->id;
	 endforeach; 

		?>
        </td>
        </tr>
        <tr>
        	<th>PRODUCT NAME</th>
            <td>
			  <?php
        
            foreach($records as $row):
            echo $row->product_name;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        	<th>QUANTITY</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->quantity;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>    
        	<th>RATE</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->rate;
             endforeach; 
        
                ?>
        </td>
        </tr>    
        <tr>
        	<th>BRAND NAME</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->brand_name;
             endforeach; 
        
                ?>
        </td>
        </tr>    
        <tr>
        	<th>CATEGORY NAME</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->category_name;
             endforeach; 
        
                ?>
        </td>
        </tr>    
        <tr>
        	<th>STATUS</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->status;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        	<th>IMAGE</th>
            <td>
             <?php
        
            foreach($records as $row):
			?>
            <img src="<?php echo $row->image;?>" width="200px" height="300px" />
            <?php
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        	<td><a href="<?php base_url(); ?>s_product" class="btn btn-default">BACK</a></td>
        </tr>
    </thead>
    
  </table>
  
  </div>
  
  <div class="col-md-1"></div>
  
				
				</div>
		<!-- /table -->
               </section><!-- /.content --> 
            </aside><!-- /.right-side -->
           
        
		
		
	
		
