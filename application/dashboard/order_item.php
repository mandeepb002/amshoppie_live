             <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->


				
				<!-- Main content -->
                <section class="content">
                
                <h2 class="section-title"> View Order Details </h2>

                   
                    
               
				
				
				<!-- table -->
				
				<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
				
				 <table class="table table-hover">
    <thead>
      <tr>
       <th>ID</th>
        <th>ORDER ID</th>
        <th>PRODUCT ID</th>
        <th>QUANTITY</th>
        <th>RATE</th>
        <th>TOTAL</th>
        <th>ORDER ITEM STATUS</th>
              </tr>
    </thead>
    <tbody>
     <?php
        foreach($records as $row):
    ?>
    <tr>
        <td><?=$row->id?></td>
        <td><?=$row->order_id?></td>
        <td><?=$row->product_id?></td>
        <td><?=$row->quantity?></td>
        <td><?=$row->rate?></td>
        <td><?=$row->total?></td>
        <td><?=$row->order_item_status?></td>
            </tr>
    <?php
        endforeach;
    ?>
    </tbody>
  </table>
  
  </div>
  
  <div class="col-md-1"></div>
  
				
				</div>
		<!-- /table -->
               </section><!-- /.content --> 
            </aside><!-- /.right-side -->
           
        
		
		
	
		
