<?php if($this->session->userdata('id')==true){ ?>
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
        	<th>DESCRIPTION</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->description;
             endforeach; 
        
                ?>
        </td>
        </tr>    
        <tr>
        	<th>MER SKU</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->mer_sku;
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
        	<th>ITEM PRICE</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->item_price;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        	<th>PRICE DISCOUNT</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->price_d;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        	<th>SHIPPING FEE</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->shipping_fee;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        	<th>SHIPP IN</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->ship_in;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        	<th>WEIGHT</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->weight;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        	<th>COUNTRY CODE</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->country_code;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        	<th>PAID BY</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->paid_by;
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
        	<td><a href="<?php base_url(); ?>https://amshoppie.com/show_product/s_product" class="btn btn-default">BACK</a></td>
        </tr>
    </thead>
    
  </table>
  
  </div>
  
  <div class="col-md-1"></div>
  
				
				</div>
		<!-- /table -->
               </section><!-- /.content --> 
            </aside><!-- /.right-side -->
           
        
		
		
	
		
<?php }else{
    redirect('seller/login?msg=Please login to continue');
} ?>