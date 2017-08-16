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
                <?php
               	if(!empty($_GET['msg'])){
					?>
				<h3><span class="label label-warning"><?php echo $_GET['msg']; ?></span></h3>
                <?php
				}
                ?>
				 <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>PRODUCT NAME</th>
        <th>QUANTITY</th>
        <th>RATE</th>
        <th>VIEW DETAIL</th>
        <th>EDIT</th>
        <th>DELETE</th>
              </tr>
    </thead>
    <tbody>
      <?php
        foreach($records as $row):
    ?>
    <tr>
        <td><?=$row->id?></td>
       <!-- <td><!?=$row->user_id?></td>-->
        <td><?=$row->product_name?></td>
        <td><?=$row->quantity?></td>
        <td><?=$row->rate?></td>
        <!--<td><!?=$row->brand_name?></td>
        <td><1?=$row->category_name?></td>
        <td><1?=$row->status?></td>-->
        <td><a href="http://amshoppie.com/show_product/product_detail?id=<?=$row->id?>"><button class="btn btn-default">VIEW</button></a></td>
        <td><a href="http://amshoppie.com/product/view_edit_product?id=<?=$row->id?>"><button class="btn btn-warning">EDIT</button></a></td>
        <td><a href="http://amshoppie.com/product/delete_product?id=<?=$row->id?>"><button class="btn btn-danger">DELETE</button></a></td>
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
           
        
		
		
	
		
