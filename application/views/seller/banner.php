<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
	    <section class="content">
		 <div class="row">
  <div class="col-md-12">
  <!-- Tab panes -->
  <div class="tab-content tab-banner">
   <div class="row btn-row1"> 
   <div class="col-md-12 col-sm-6 col-xs-6">
   <a href="https://amshoppie.com/seller/added_baner"><button type="button" class="btn btn-warning product_btn3">Add Banners</button></a>
   </div>
   </div>

    <div role="tabpanel" class="tab-pane active active-prod" id="home">
	<div class="row row-head02">
	<div class="col-md-2 col-sm-12 col-xs-12">
        
	<h2 class="prod-head2">Banner </h2></div>
	<div class="col-md-3 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Banner Link URL </h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Priority </h2>
	</div>
	<div class="col-md-1 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Status</h2>
	</div>
	<div class="col-md-4 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Actions</h2>
	</div>
	</div>
    <?php
	if(!empty($records)){
        foreach($records as $row):
    ?>

	<div class="row row-content02">

	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	  <img src="<?= base_url()."uploads/".$row->image; ?>" width="100px" height="100px" />	
		
	
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	 <?php echo $row->banner_link; ?>  
	
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	<?php echo $row->priority?>
	</div>
	
	<div class="col-md-1 col-sm-12 col-xs-12 prod-ddetail">
	<p class="enable"><?php echo $row->status;?></p>
	</div>
	<div class="col-md-4 col-sm-12 col-xs-12 prod-ddetail">
    <a href="https://amshoppie.com/seller/edit_banner_detail?id=<?=$row->id?>"><button type="button" class="btn btn-warning Edit-btn">Edit</button></a>
		<a href="https://amshoppie.com/seller/delete_banner_detail?id=<?=$row->id?>"><button type="button" class="btn btn-info delete-btn">Delete</button></a>
	
	</div>
	
	
	</div>
     <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
    ?>
    
		</div>
    
	
    <!--div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div-->
  </div>
    	
</div>
</div>
		
		
        </section>
 </aside>
<?php }else{
    redirect('seller/login?msg=Please login to continue');

} ?>