<?php
  if(!$this->session->userdata('id')){
	  $url = base_url()."admin/login";
	  redirect($url);
	  }else{ ?>
<aside class="right-side">
		  <section class="content">
		  		<h2><center>AVAILABLE IMAGES</center></h2>
		  		<table class="table">
		  			<tr>
		  				<th>Sr.No.</th>
		  				<th>Image</th>
		  				<th>Status</th>
		  				<th>Action</th>
		  			</tr>
		  			<?php if($slider_image){ $i=0; foreach ($slider_image as $value) { ?>
		  			<tr>
		  				<td><?php echo $i++; ?></td>
		  				<td><img src="<?php echo base_url()."slider_image/".$value->image; ?>"></td>
		  				<td>
		  				<?php 
		  					if($value->status){ ?>
		  					<input type="submit" class="btn btn-info" value="ACTIVATED">
		  				<?php }else{ ?>
		  					<input type="submit" class="btn btn-danger" value="DEACTIVATED">
		  				<?php } ?>
		  					
		  				</td>
		  			</tr>
		  			<?php } } ?>
		  		</table>
		  </section>
</aside>
<?php } ?>