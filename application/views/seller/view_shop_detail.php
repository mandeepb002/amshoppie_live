<?php if($this->session->userdata('id')==true){ ?>
<em>            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
			  <section class="content">
					<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
                   
					<div class="col-md-6 col-sm-6 col-xs-12">
				
					<a href="<?php echo base_url('shop/shop_details'); ?>"><button type="button" class="btn btn-warning product_btn1">Add Shop Detail</button></a>
				
				
					</div>
					</form>
					</div>
				
	<div class="row">
  <!-- Nav tabs -->
  <div class="col-md-12 col-xs-12 col-sm-12">
  <ul class="nav nav-tabs tabmenu_product" role="tablist">
    
	  
    <!--li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li-->
  </ul>
  </div>
	</div>
<div class="row">
  <div class="col-md-12">
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active active-prod" id="home">
	<table class="table">
		<tr>
			<th>Email</th>
			<th>Shop Name</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Action</th>
		</tr>
		 <?php
	if(!empty($records)){
        foreach($records as $row):
    ?>
		<tr>
		
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->shope_name; ?></td>
			<td><?php echo $row->address; ?></td>
			<td><?php echo $row->phone; ?></td>
			<td>
				<a href="<?= base_url('shop/edit_shop_detail?id='.$row->id); ?>"><button type="button" class="btn btn-warning Edit-btn">Edit</button></a>
				 <a href="<?= base_url('shop/delete_shop_detail?id='.$row->id); ?>"><button type="button" class="btn btn-info delete-btn">Delete</button></a>
				 <a href="<?= base_url('shop/single_shop_detail?id='.$row->id); ?>"><button type="button" class="btn btn-link view-btn">View</button></a>
			</td>
	
		</tr>
		<?php
        endforeach;
		} else{
			?>
			<tr><td>
		<?php echo 'No Record Found';?>
		</td><td></td><td></td><td></td><td></td></tr>
		<?php 
	}
    ?>

	</table>
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
            </aside></em>
<?php }else{
    redirect(base_url('seller/login/msg=Please login to continue'));
}?>