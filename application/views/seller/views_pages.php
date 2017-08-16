<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
  <section class="content">
	<div class="row">
	 <div class="col-md-12">
  <!-- Tab panes -->
	<div class="tab-content tab-banner">
	<div class="row btn-row1"> 
	  <div class="col-md-12 col-sm-6 col-xs-6">
      
		<a href="<?php echo base_url('seller/pagess');?>" type="button" class="btn btn-warning product_btn3">Add Page</button></a>
       </div>
     </div>
   
   <div class="row row-head02">
	<div class="col-md-2 col-sm-12 col-xs-12">   
	  <h2 class="prod-head2">Title </h2>
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12">
		<h2 class="prod-head2">description</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
		<h2 class="prod-head2">Priority</h2>
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
	<?php
	echo $row->title;
	?>
	</div>
	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	<?php
	echo $row->description;
	?>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	<?php
	echo $row->priority;
	?>
	</div>
	
	<div class="col-md-1 col-sm-12 col-xs-12 prod-ddetail">
	<?php
	echo $row->status;
	?>
	</div>
	<div class="col-md-4 col-sm-12 col-xs-12 prod-ddetail">
    <a href="https://amshoppie.com/seller/edit_page_detail?id=<?=$row->id?>"><button type="button" class="btn btn-warning Edit-btn">Edit</button></a>
	<a href="https://amshoppie.com/seller/delete_page_detail?id=<?=$row->id?>"><button type="button" class="btn btn-info delete-btn">Delete</button></a>
    
	
	</div>
	
	
	</div>
	<?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
    ?>
   </div>
	
   
     </div>
    </div>
  </section>
 </aside>
 <?php }else{
    redirect(base_url('seller/login?msg= Please login to continue'));
} ?>