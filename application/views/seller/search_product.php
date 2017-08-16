<?php if($this->session->userdata('id')==true){ ?>
           <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
			  <section class="content">
					<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
                   <form method="post" action="<?php echo base_url();?>search/search_detail">
				
					<div class="input-group">
					  <input type="text" name="product_name" class="form-control search-bar" placeholder="Search by product name or SKU">
                      
					  <span class="input-group-btn">
						<button class="btn btn-default search-btn1" type="submit"><span style="color:#fff;">Search</span></button>
					  </span>
					</div><!-- /input-group -->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
				
					<button type="button" class="btn btn-warning product_btn1">Add Product</button>
				
					<button type="button" class="btn btn-warning product_btn2">Bulk Product</button>
					</div>
					</form>
					</div>
				
	<div class="row">
  <!-- Nav tabs -->
  <div class="col-md-12 col-xs-12 col-sm-12">
  <ul class="nav nav-tabs tabmenu_product" role="tablist">
    <li role="presentation" class="active"><a style="color:#000;" href="#home" aria-controls="home" role="tab" data-toggle="tab">Active Products</a></li>
    <li role="presentation"><a style="color:#000;" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Inactive Products</a></li>
	 <li role="presentation"><a style="color:#000;" href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Out Of Stock Products</a></li>
	 <li role="presentation"><a style="color:#000;" href="#profile2" aria-controls="profile" role="tab" data-toggle="tab">QC failed Products</a></li>
	  
    <!--li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li-->
  </ul>
  </div>
	</div>
<div class="row">
  <div class="col-md-12">
  <!-- Tab panes -->
  <div class="tab-content tab-product">
   <div class="row btn-row"> 
   <div class="col-md-12 col-sm-6 col-xs-6">
   <button type="button" class="btn btn-warning product_btn3">Next</button>
   </div>
   </div>

    <div role="tabpanel" class="tab-pane active active-prod" id="home">
	<div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
        
	<h2 class="prod-head2">Image </h2></div>
	<div class="col-md-3 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Product Details </h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Price </h2>
	</div>
	<div class="col-md-1 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Qty</h2>
	</div>
	<div class="col-md-4 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Action</h2>
	</div>
	</div>
    <!-- content start for tab 1 -->
    <?php
        foreach($records as $row):
    ?>
	<div class="row row-content1">

	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	 
	 <img src="<?php echo base_url() ?>/assets/seller/img/product-img1.jpg">
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	   
	<a class="prod-text" href="#">Designer Table For Your Living Room</a>
	<p class="text-sku1">My SKU: <?php
	echo $row->mer_sku;
	?></p>

		
	<div class="social-iicon">
	<ul>
	<li><i class="fa fa-facebook fb-circle" aria-hidden="true"></i></li>
	<li><i class="fa fa-google-plus gplus-circle" aria-hidden="true"></i></li>
	<li><i class="fa fa-twitter twitter-circle" aria-hidden="true"></i></li>
	</ul>
	</div>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	
	<p class="mrp-text">MRP: Rs.<?php
	echo $row->item_price;
	 

		?></p>
	<p class="discount-text">Discounted: Rs.<?php
	echo $row->price_d;
	 

		?></p>
	</div>
	
	<div class="col-md-1 col-sm-12 col-xs-12 prod-ddetail">
<?php
	echo $row->quantity;
	
	?>
	</div>
	
	<div class="col-md-4 col-sm-12 col-xs-12 prod-ddetail">
	
	<a href="http://amshoppie.com/product/edit_product?id=<?=$row->id?>"><button type="button" class="btn btn-warning Edit-btn">Edit</button></a>
	<button type="button" class="btn btn-danger Deactivate-btn">De-Activate</button>
     <a href="http://amshoppie.com/product/delete_product?id=<?=$row->id?>"><button type="button" class="btn btn-info delete-btn">Delete</button></a>
	<a href="http://amshoppie.com/product/single_product_detail?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>
	</div>
	
	
	</div>
     <?php
        endforeach;
    ?>
        <!-- content end for tab 1 -->
		</div>
    <div role="tabpanel" class="tab-pane" id="profile">
    <!--content endfor tab 2-->
	<div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Image </h2></div>
	<div class="col-md-3 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Product Details </h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Price </h2>
	</div>
	<div class="col-md-1 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Qty</h2>
	</div>
	<div class="col-md-4 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Action</h2>
	</div>
	</div>
    <?php
        
		foreach($rec as $row):
		
    ?>
	<div class="row row-content1">
	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail"> 
	 <img src="<?php echo base_url() ?>/assets/seller/img/product-img2.jpg">
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	
	<p class="prod-text1">Designer Table</p>
	<p class="text-sku1">>My SKU: <?php
	echo $row->mer_sku;
	?></p>
	
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	
	<p class="mrp-text">MRP: Rs.<?php
	echo $row->item_price;
	 

		?></p>
	<p class="discount-text">Discounted: Rs.<?php
	echo $row->price_d;
	 

		?></p>

	</div>
	
	<div class="col-md-1 col-sm-12 col-xs-12 prod-ddetail">
	<?php
	echo $row->quantity;
	
	?>

	</div>
	
	<div class="col-md-4 col-sm-12 col-xs-12 prod-ddetail">
	
	<button type="button" class="btn btn-danger Deactivate-btn1">Activate</button>
    <a href="http://amshoppie.com/product/inactive_delete_product?id=<?=$row->id?>"><button type="button" class="btn btn-info delete-btn">Delete</button></a>
	 <a href="http://amshoppie.com/product/inactive_product_detail?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>
	</div>
	</div>
     <?php
        endforeach;
		
    ?>
    <!--end2-->
	</div>
	<!--tab3-->
	<div role="tabpanel" class="tab-pane tabpane-product" id="profile1">
	<div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Image </h2></div>
	<div class="col-md-3 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Product Details </h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Price </h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Qty</h2>
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Action</h2>
	</div>
	</div>
    <?php
        
		foreach($rec as $row):
		
    ?>
	<div class="row row-content1">
	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail"> 
	 <img src="<?php echo base_url() ?>/assets/seller/img/product-img2.jpg">
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	
	<p class="prod-text1">Designer Table</p>
	<p class="text-sku1">>My SKU: <?php
	echo $row->mer_sku;
	?></p>
	
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	
	<p class="mrp-text">MRP: Rs.<?php
	echo $row->item_price;
	 

		?></p>
	<p class="discount-text">Discounted: Rs.<?php
	echo $row->price_d;
	 

		?></p>

	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	<?php
	echo $row->quantity;
	
	?>

	</div>
	
	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	
	
	 <a href="http://amshoppie.com/product/inactive_product_detail?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>

	</div>
	</div>
     <?php
        endforeach;
		
    ?>
	
	<!--end3-->
	</div>
	<div role="tabpanel" class="tab-pane" id="profile2">
   
    <div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Image </h2></div>
	<div class="col-md-4 col-sm-12 col-xs-12">
	<h2 class="prod-head2" style="float:left">Product Details </h2>
	</div>
	<div class="col-md-6 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Failure Reason</h2>
	</div>
	</div>
	<div class="row row-content1">
	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail"> 
	 <img src="<?php echo base_url() ?>/assets/seller/img/product-img3.jpg">
	</div>
	<div class="col-md-4 col-sm-12 col-xs-12 prod-ddetail">
	
	<p class="prod-text1">Designer Table For Your Office</p>
	<p class="text-sku1">My SKU: CK-PM-TBL-003(White)</p>

	<p class="text-sku1">Kraftly SKU: DETAFO55404QGJ024077</p>

	</div>
    
	<div class="col-md-6 col-sm-12 col-xs-12 prod-ddetail">

	</div>

	</div>
	
	</div>
	
    <!--div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div-->
  </div>
    	
</div>
</div>
</div>
<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			   </section>
            </aside>
    <?php }else{
    redirect(base_url('seller/login?msg=Please login to continue'));
} ?>