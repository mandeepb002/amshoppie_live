<?php if($this->session->userdata('id')==true){ ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
			  <section class="content">
					<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
                   
					<div class="col-md-6 col-sm-6 col-xs-12">
				
					<!--a href="<!?php echo base_url('seller/bank_details'); ?>"><button type="button" class="btn btn-warning product_btn1">Add Bank Detail</button></a-->
				
				
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
  <div class="tab-content tab-product">
   <div class="row btn-row"> 
   <div class="col-md-12 col-sm-6 col-xs-6">
      </div>
   </div>

    <div role="tabpanel" class="tab-pane active active-prod" id="home">
	<div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Image </h2>
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Name.</h2>
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Gender.</h2>
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Bio.</h2>
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Dob.</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">City.</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Action</h2>
	</div>
	</div>
    <?php
	if(!empty($records)){
        foreach($records as $row):
    ?>
	<div class="row row-content1">

	<div class="col-md-2 col-sm-2 col-xs-12 prod-ddetail">
	 
	<img src="<?= base_url()."uploads/".$row->image; ?>" width="100px" height="100px" />	
			
		</div>
	
	<div class="col-md-2 col-sm-2 col-xs-12 prod-ddetail">
	
	<p class="mrp-text">Name.:<?php
	echo $row->name;
	 

		?></p></div>
	<div class="col-md-1 col-sm-1 col-xs-12 prod-ddetail">
	
	<p class="mrp-text">Gender.:<?php
	echo $row->gender;
	 

		?></p></div>
<div class="col-md-1 col-sm-1 col-xs-12 prod-ddetail">
<p class="mrp-text">Bio:<?php
	echo $row->bio;
	
	?>
	<p></div>
	<div class="col-md-2 col-sm-2 col-xs-12 prod-ddetail">
<p class="mrp-text">Dob:<?php
	echo $row->dob;
	
	?>
	</div>
	<div class="col-md-1 col-sm-1 col-xs-12 prod-ddetail">
<p class="mrp-text">City:<?php
	echo $row->city;
	
	?>
	</div>


	
	

	<div class="col-md-1 col-sm-1 col-xs-12 prod-ddetail">
	
	<a href="<?= base_url('profile/edit_profile_detail?id='.$row->id); ?>"><button type="button" class="btn btn-warning Edit-btn">Edit Profile</button></a>

     <!--a href="<!?= base_url('seller/delete_bank_detail?id='.$row->id); ?>"><button type="button" class="btn btn-info delete-btn">Delete</button></a>
     <a href="<!?= base_url('seller/single_bank_detail?id='.$row->id); ?>"><button type="button" class="btn btn-link view-btn">View</button></a-->
	
	</div>
	
	
	</div>
     <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
    ?>
        <!-- content end for tab 1 -->
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
    redirect(base_url('seller/login?msg= Please login to continue'));
} ?>