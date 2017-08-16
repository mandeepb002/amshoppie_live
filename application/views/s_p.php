<?php if($pro){ foreach ($pro as $value) { ?>
<section>
	<div class="container">
		<div class="row">
        
		  <div class="col-md-4">
		  <div class="sp_img">
		      <img src="<?php echo base_url();?>assets/user/image/polo-t-shirt.jpg" style="width: 360px;
    height: 480px;">
		  </div></div>
		   <div class="col-md-8">
				<div class="sp_cart">
				<div class="row">
				   <div class="col-md-12">
				   <h2 class="sp_1st"><?php echo $value->product_name; ?></h2>
					<p class="ref_txt"><?php echo $value->product_sku; ?></p>
				   </div>
				</div>
				 
				 <div class="row">
				   <div class="col-md-12">
				    <div class="sp_size">Size:
				    <?php if($size){ foreach ($size as $sizes) {?>
				    	
					<button class="btn btn-default" type="submit"><?php echo $sizes->attr_id; ?></button>
					<?php }} ?>
					</div>
				</div>
				
				 <div class="row">
				 <div class="price_btn">
				   <div class="col-md-6">
				   	<?php if($value->price_d){?>
				    <p class="sp_head">&#8377; <strike><small><?php echo $value->item_price; ?></small></strike></p>
				   <?php }else{ ?>
				   	<p class="sp_head">&#8377; <?php echo $value->item_price; ?></p>
				   	<?php } ?>
				    <span><strong>Discount </strong> &#8377; <?php echo $value->price_d; ?></span>
					<p>(Free Home Delivery)</p>
				   </div>
				   
				    <div class="col-md-6">
				    <form method="post" action="<?php echo base_url('welcome/add_cart'); ?>">
				    <input type="hidden" name="item_price" value="<?php echo $value->item_price; ?>">
				    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('id'); ?>">
				    <input type="hidden" name="product_id" value="<?php echo $this->uri->segment(3); ?>">
				    <span class="label label-info">QUANTITY</span><input type="text" class="form-control" name="quantity" value="1">
					<a href="<?php echo base_url();?>welcome/add_to"><button type="submit" class="btn btn-default sp_buybtn">Add To Cart</button></a>
					</form>
				    <a href="<?php echo base_url();?>payment"><button type="button" class="btn btn-default sp_buybtn">Buy Now</button></a>

				   </div>
				</div>
				
				</div>
				
				<div class="row">
				   <div class="col-md-12">
				    <div class="cod_row">
				    <p class="sp_cod">To place a quick Cash on Delivery Order <a href="#" style="color:#f89f12;">click here</a>.</p>
					<p class="sp_cod1">To buy this product, WhatsApp "BUY 21457" at 09900 457 784</p>
					<p class="sp_cod1">For any enquiries  call us at 07458 4567 123</p>
				   </div>
				    </div>
				</div>
				<div class="row">
				<div class="social-iicon_sp">
	<ul class="sip">
	<li><i class="fa fa-facebook fb-circle_sp" aria-hidden="true"></i></li>
	<li><i class="fa fa-google-plus gplus-circle_sp" aria-hidden="true"></i></li>
	<li><i class="fa fa-twitter twitter-circle_sp" aria-hidden="true"></i></li>
	</ul>
	</div></div>
				
				</div>
		   </div>		
	</div>
</section>

<?php } } ?>