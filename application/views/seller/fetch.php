<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
	<section class="content">
	<form method="post" action="<?php echo base_url();?>deal/add_product" ?>
	<table clas="table">
		<tr>
		<th>Product ID</th><th>Product Name</th><th>Deal of the day</th><th>Offer Price</th>
		</tr>
	<?php foreach($records as $row){?>
	
		<tr>
		<td><?php echo $row->id;?><input type="hidden" name="product_id[]" value=<?php echo $row->id;?> ></td>
		<td><?php echo $row->product_name;?><input type="hidden" name="product_name[]" value="<?php echo $row->product_name;?>" ></td>
		<td><input type="checkbox" name="dealcheck[] class="form-control"></td>
		<td><input type="text" name="offer_price[]" class="form-control"></td>
		</tr>
	
	<?php }?>
	<tr>
	<td><button type="submit" class="btn btn-info" >Submit</buttton></td>
	</tr>
	</table>
	</form>
	</section>
</aside>
<?php }?>