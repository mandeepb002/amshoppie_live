
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
        	<th>CLIENT NAME</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->client_name;
             endforeach; 
        
                ?>
        </td>
        </tr>
        <tr>    
        	<th>CLIENT CONTACT</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->client_contact;
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
        	<th>PAID</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->paid;
             endforeach; 
        
                ?>
        </td>
        </tr>
 <tr>
        	<th>DUE</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->due;
             endforeach; 
        
                ?>
        </td>
        </tr>
 <tr>
        	<th>PAYMENT TYPE</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->payment_type;
             endforeach; 
        
                ?>
        </td>
        </tr>
 <tr>
        	<th>PAYMENT STATUS</th>
            <td>
             <?php
        
            foreach($records as $row):
            echo $row->payment_status;
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
        	<td><a href="<?php base_url(); ?>s_order" class="btn btn-default">BACK</a></td>
        </tr>
    </thead>
    
  </table>
  
  </div>
  
  <div class="col-md-1"></div>
  
				
				</div>
		<!-- /table -->
               </section><!-- /.content --> 
            </aside><!-- /.right-side -->
           
        
		
		
	
		
