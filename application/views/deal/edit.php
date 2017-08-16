<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
	<section class="content">
		<div>
				
				<table style="border: 1px solid #f89f12;float: left;">
					<thead>
						<tr style="background-color: #f89f12; color: #ffffff;">
							<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">product Id</th>
							<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">product Name</th>
							<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">Offer Price</th>
							<!--<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">Name</th>-->
							<!--<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">Image</th>-->
							<th style="padding: 10px;width: 15%;text-align: center;">Action</th>	
						</tr>
					</thead>
					<tbody style="text-align: center;">
				<?php foreach($deal_product as $row){?>
				<tr>
				<form method="post" action="<?php echo base_url();?>deal/deal_edit_hit">
				<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;"><?php echo $row['product_id']; ?></td>
				<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;"><?php echo $row['product_name']; ?></td>
				<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;"><input type="text" name="offer_price" value="<?php echo $row['offer_price']; ?>" ></td>
				<!--<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;"><img src="<?php echo base_url('uploads');?>/<?php echo $row['image'];?>"  /></td>-->
				<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;">
					<input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>" ><button type="submit" class="btn btn-default">Edit</button>
					
				</td>
				</form>
				</tr>
				<?php }?>
				</tbody>
				</table>
				</div>
</section>
		
	
</aside>
<?php }?>