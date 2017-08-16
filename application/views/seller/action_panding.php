<?php if($this->session->userdata('id')==true){ ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
			  <section class="content">
					<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
                   </div>
					<div class="col-md-6 col-sm-6 col-xs-12">
					</div>
					
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
	<div class="col-md-2 col-sm-6 col-xs-12">
	<h2 class="prod-head2">Id</h2>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
	<h2 class="prod-head2">Order-Date</h2>
	</div>
	<div class="col-md-2 col-sm-6 col-xs-12">
	<h2 class="prod-head2">Vat</h2>
	</div>
	<div class="col-md-2 col-sm-6 col-xs-12">
	<h2 class="prod-head2">Discount</h2>
	</div>
    
	<div class="col-md-3 col-sm-6 col-xs-12">
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
	echo $row->user_id;
	?>
		
		</div>
	
	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	<?php
	echo $row->order_date;
	?></div>
		<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">
	<?php
	echo $row->order_status;
	?>
</div>
<div class="col-md-2 col-sm-12 col-xs-12 prod-ddetail">

       <?php
	echo $row->discount;
	?>	</div>		
	

	<div class="col-md-3 col-sm-12 col-xs-12 prod-ddetail">
	
	<a href="https://amshoppie.com/product/cancel_product?id=<?=$row->id?>"><button type="button" class="btn btn-warning Edit-btn">Cancel Order</button></a>

     <a href="https://amshoppie.com/seller/single_action_pending1?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>
	
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

<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			   </section>
            </aside>
<?php }else{

    redirect(base_url('seller/login'));
} ?>