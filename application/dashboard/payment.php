             <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->


				
				<!-- Main content -->
                <section class="content">
                
                <h2 class="section-title"> View payment Details </h2>

                   
                    
               
				
				
				<!-- table -->
				
				<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
				
				 <table class="table table-hover">
    <thead>
      <tr>
       <th>ID</th>
        <th>ORDER DATE</th>
        <th>TOTAL AMOUNT</th>
        <th>DISCOUNT</th>
        <th>GRAND TOTAL</th>
        <th>PAID</th>
        <th>VIEW DETAILS</th>
      </tr>
    </thead>
    <tbody>
     <?php
        foreach($records as $row):
    ?>
    <tr>
        <td><?=$row->id?></td>
       <!-- <td><!?=$row->user_id?></td-->
        <td><?=$row->order_date?></td>
        <td><?=$row->total_amount?></td>
        <td><?=$row->discount?></td>
        <td><?=$row->grand_total?></td>
        <td><?=$row->paid?></td>
        <td><button class="btn btn-default"><a href="http://amshoppie.com/show_order/payment_order?id=<?=$row->id?>">VIEW</a></button></td>

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
           
        
		
		
	
		
