
             <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->


				
				<!-- Main content -->
                <section class="content">
                
                <h2 class="section-title"> View Payment History Details </h2>

                   
                    
               
				
				
				<!-- table -->
				
				<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
				
				 <table class="table">
   
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
        	<th>ORDER DATE</th>
            <td>
			  <?php
        
            foreach($records as $row):
            echo $row->order_date;
             endforeach; 
        
                ?>
        </td>
        </tr>    
        <tr>
        	<th>SUB TOTAL</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->sub_total;
             endforeach; 
        
                ?>
        </td>
        </tr>    
        <tr>
        	<th>VAT</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->vat;
             endforeach; 
        
                ?>
        </td>
        </tr>    
        <tr>
        	<th>TOTAL AMOUNT</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->total_amount;
             endforeach; 
        
                ?>
        </td>
        </tr>
         <tr>
        	<th>DISCOUNT</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->discount;
             endforeach; 
        
                ?>
        </td>
        </tr>
 <tr>
        	<th>GRAND TOTAL</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->grand_total;
             endforeach; 
        
                ?>
        </td>
        </tr>
  
 <tr>
        	<th>ORDER STATUS</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->order_status;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>
        <td colspan="2"><a href="<?php base_url(); ?>https://amshoppie.com/show_order/s_order" class="btn btn-default back-btn">BACK</a></td>

        	
        </tr>
    
    
  </table>
  
  </div>
  
  <div class="col-md-1"></div>
  
				
				</div>
		<!-- /table -->
               </section><!-- /.content --> 
            </aside><!-- /.right-side -->
           
        
		
		
	
		
