<?php if($this->session->userdata('id')==true){ ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side" >
			  <section class="content" >
					<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
                   <form method="post" action="<?php echo base_url();?>search/search_detail">
				
					<div class="input-group">
					  <input type="text" name="product_name" class="form-control search-bar" placeholder="Search by product name">
                      
					  <span class="input-group-btn">
						<button class="btn btn-default search-btn1" type="submit"><span style="color:#fff;">Search</span></button>
					  </span>
                      
					</div><!-- /input-group -->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="row">
				    <div class="col-md-5"></div>
					<div class="col-md-7">
					<a href="https://amshoppie.com/product/product_add"><button type="button" class="btn btn-warning product_btn03">Add Product</button></a>
				
					<a href="<?php echo base_url('csv/bulk'); ?>" type="button" class="btn btn-warning product_btn04">Bulk Product</a>
					
					
					</div>
					
					</div>
					
					</div>
                    <div class="row btn-row" style=""> 
  
   </div>
    
				</form>
	<div class="row">
  <!-- Nav tabs -->
  <div class="col-md-12 col-xs-12 col-sm-12">
  <ul class="nav nav-tabs tabmenu_product" role="tablist">
    <li role="presentation" class="active"><a style="color:#000;" href="#home" aria-controls="home" role="tab" data-toggle="tab">Active Products</a></li>
    <li role="presentation"><a style="color:#000;" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Inactive Products</a></li>
	 <li role="presentation"><a style="color:#000;" href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Out Of Stock Products</a></li>
	 <li role="presentation"><a style="color:#000;" href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Approved product</a></li>
	 <!--li role="presentation"><a style="color:#000;" href="#profile2" aria-controls="profile" role="tab" data-toggle="tab">QC failed Products</a></li-->
	  
    <!--li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li-->
  </ul>
          	
  </div>
	</div>

<div class="row">
  <div class="col-md-12">
  <!-- Tab panes -->
  <div class="tab-content tab-product">
   

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
	if(!empty($records)){
        foreach($records as $row):
    ?>
	<div class="row row-content1">

	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	 <?php 
	 $condition = array(
	 'p_id' => $row->id,
	 'main_image' => 1,
	 );
	 $this->db->select('*');
	 		$this->db->from('product_image');
			$this->db->where($condition); 
			$query = $this->db->get();
			if($query->num_rows()>0){?>
            <?php foreach($query->result() as $rows){ ?>
				<img src="<?= base_url()."uploads/".$rows->image; ?>" width="100px" height="100px" />			
			
			<?php	} }
	 ?>
	  
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	   
	<p> <a class="prod-text" href="https://www.amshoppie.com/product/single_product_detail">Product Name: <?php
	echo $row->product_name;
	?> </a> </p>	
	<p class="text-sku1"> My SKU: <?php
	echo $row->mer_sku;
	?>  </p>

		
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
	
<a href="<?= base_url('product/edit_product?id='.$row->id); ?>"><button type="button" class="btn btn-warning Edit-btn">Edit</button></a>
    <?php if($row->status==1){?>   
	<button type="button" class="btn btn-danger Deactivate-btn"><a href="<?php echo base_url('show_product/change_p_status?status=2&id='.$row->id); ?>">De-Activate</a></button>
        <?php }else if($row->status==2){?>
        <button type="button" class="btn btn-danger Deactivate-btn">Inactive</button>
        <?php } ?>
     <a href="<?= base_url('product/delete_product?id='.$row->id); ?>"><button type="button" class="btn btn-info delete-btn">Delete</button></a>
	<a href="<?= base_url('product/single_product_detail?id='.$row->id); ?>"><button type="button" class="btn btn-link view-btn">View</button></a>
	</div>
	
		
	</div>
   
     <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
    ?>
     <div class="row">
        <div class="col-md-4">
       		 <?= $this->pagination->create_links() ?>
        </div>
    </div>
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
        if(!empty($rec)){
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
	
        <button type="button" class="btn btn-danger Deactivate-btn1"><a href="<?php echo base_url('show_product/change_p_status?status=1&id='.$row->id); ?>">Activate</a></button>
    <a href="https://amshoppie.com/product/inactive_delete_product?id=<?=$row->id?>"><button type="button" class="btn btn-info delete-btn">Delete</button></a>
	 <a href="https://amshoppie.com/product/inactive_product_detail?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>
	</div>
	</div>
     <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
		
    ?>
    <!--end2-->
	</div>
	<!--tab3-->
	<div role="tabpanel" class="tab-pane tabpane-product" id="profile1" style="font-size: inherit;">
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
        if(!empty($rec)){
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
	
	
	 <a href="https://amshoppie.com/product/inactive_product_detail?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>

	</div>
	</div>
    
     <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
    ?>
	
	<!--end3-->
	<?php
	if(!empty($unapproved)){
        foreach($unapproved as $row):
    ?>
	<div class="row row-content1">

	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	 <?php 
	 
	 $condition = array(
	 'p_id' => $row->id,
	 'main_image' => 1,
	 );
	 $this->db->select('*');
	 		$this->db->from('product_image');
			$this->db->where($condition); 
			$query = $this->db->get();
			if($query->num_rows()>0){?>
            <?php foreach($query->result() as $rows){ ?>
				<img src="<?= base_url()."uploads/".$rows->image; ?>" width="100px" height="100px" />			
			
			<?php	} }
	 ?>
	  
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	   
	<p> <a class="prod-text" href="https://www.amshoppie.com/product/single_product_detail">Product Name: <?php
	echo $row->product_name;
	?> </a> </p>	
	<p class="text-sku1"> My SKU: <?php
	echo $row->mer_sku;
	?>  </p>

		
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
	
<a href="<?= base_url('product/edit_product?id='.$row->id); ?>"><button type="button" class="btn btn-warning Edit-btn">Edit</button></a>
    <?php if($row->status==1){?>   
	<button type="button" class="btn btn-danger Deactivate-btn"><a href="<?php echo base_url('show_product/change_p_status?status=2&id='.$row->id); ?>">De-Activate</a></button>
        <?php }else if($row->status==2){?>
        <button type="button" class="btn btn-danger Deactivate-btn">Inactive</button>
        <?php } ?>
     <a href="<?= base_url('product/delete_product?id='.$row->id); ?>"><button type="button" class="btn btn-info delete-btn">Delete</button></a>
	<a href="<?= base_url('product/single_product_detail?id='.$row->id); ?>"><button type="button" class="btn btn-link view-btn">View</button></a>
	<a href="<?= base_url('product/approval?id='.$row->id); ?>"><button type="button" class="btn btn-info delete-btn">Approve</button></a>
	</div>
	
		
	</div>
   
     <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
    ?>
     <div class="row">
        <div class="col-md-4">
       		 <?= $this->pagination->create_links() ?>
        </div>
    </div>
	</div>
	<!--div role="tabpanel" class="tab-pane" id="profile2">
   
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
	
	</div-->
	
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

<script>
	$("body").on("click",".pagination a", function(){
	var theUrl = $(this).attr('href');
	$("#content").load(theUrl);
	return false;
	});
</script>
<?php }else{
    redirect(base_url('seller/login?msg=Please login to continue'));
} ?>