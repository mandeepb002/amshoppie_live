<?php
	if($this->session->userdata('id')){
?>
<form method="post" action="">
<section>
<div class="container">

<div class="row">
<div class="col-md-12">

<h3> Shopping cart summary</h3>
	<?php
		if(!empty($_GET['msg'])){?>
				<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong><?php echo $_GET['msg']; ?></strong>
				</div>
	<?php	}
	?>
</div>
</div>
<?php if($cart){?>
	<div class="row">
	  <div class="row_cart1">
		<div class="col-md-3">
		  <h5> PRODUCT </h5>
		</div>
		<div class="col-md-2">
		    <h5> DESCRIPTION </h5>
		</div>
		<div class="col-md-2">
		    <h5> SKU </h5>
		</div>
		<div class="col-md-2">
		    <h5> UNIT PRICE </h5>
		</div>
		<div class="col-md-1">
		    <h5> QTY </h5>
		</div>
		<div class="col-md-1">
		    <h5> TOTAL </h5>
		</div>
		<div class="col-md-1">
			<h5>ACTION</h5>
		</div>
	</div>

	</div>
	<?php }else{
		echo "No items added in cart";
		} ?>

	<?php if($cart){ foreach ($cart as $carts) {?>

			<div class="row">
			  <div class="row_cart2">
				<div class="col-md-3">
				<?php if($carts->image){ ?>
				   <img src="<?php echo base_url('uploads/'.$carts->image); ?>" style="width: 100px;>
				   <?php }else{ ?>
				   	<img src="http://queensquinoa.com/images/default-image.png" style="width: 100px;
				   	<?php } ?>
		    height: 100px;"> 
				</div>
				<div class="col-md-2">
				    <p><?php echo $carts->product_name; ?></p>
				</div>
				<div class="col-md-2">
				    <p><?php echo $carts->product_sku; ?></p>
				</div>
				<div class="col-md-2">
				   <p><?php echo $carts->item_price; ?></p>
				</div>
				<div class="col-md-1">
				    <input type="text" value="<?php echo $carts->quent; ?>" class="form-control" name="">
				</div>
				<div class="col-md-1">
				    <?php echo $carts->item_price; ?>
				</div>
				<div class="col-md-1">
				    <a href="<?php echo base_url().'welcome/del_cart?user_id='.$this->session->userdata('id').'&product_id='.$carts->id ; ?>" class="btn btn-danger">DELETE</a>
				</div>
			</div>
			</div>
	<?php }} ?>
	<?php if($cart){ ?>
		<div class="row">
			<div class="row_cart2">
			<div class="col-md-10">
				<h2>TOTAL</h2>
			</div>
			
			<div class="col-md-2">
			<h3>

				<?php
					$sum = 0;
					$result=$cart;
					
					foreach($result as $key){

					if(isset($key->item_price))   
					    $sum += $key->item_price*$key->quent;
					}
					
					echo "<input type='text' name='total_amount' value='".$sum."' style='padding:30px; font-size:30px;' class='form-control' disabled>";

					?>			
			</h3>		
			</div>		
			
			</div>
			
		</div>
		<?php } ?>	
</div>	
<div class="row">
<div class="col-md-8">


</div>
<?php if($cart){ ?>
	<div class="col-md-4">
	<a href="<?php echo base_url();?>payment"><button type="button" class="btn btn-default sp_buybtn2">Continue >></button></a>
	</div>
	<?php } ?>
</div>
</form>
</section>
<?php }else{
redirect(base_url('?msg=Please login'));

	} ?>