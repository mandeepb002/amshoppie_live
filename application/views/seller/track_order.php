<?php if($this->session->userdata('id')==true){ ?>
<style>
.tabmenu2
{
	width:1020px;
}

.tabmenu2 li
 {
	 width:20%;
	 border:1px solid #f7f7f7;
	 
 }
.tabmenu2>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus 
 { 
	background-color: #f89f12 !important;
	text-align: center !important;
}

.tabmenu2>li>a 
{
 
	text-align: center !important;  
}
.tabmenu2>li>a:hover
{   
   
	text-align: center !important;
	background:#f7f7f7;
	color:#000;
}

 .tab-shipment 
{
    height: 100px !important;
    background: #fff !important;
    text-align: center !important;
    padding-top: 32px !important;
    font-size: 24px !important;
    font-weight: 600 !important;
}
</style>

<aside class="right-side">
            <section class="content">
		
<div class="row">
  <!-- Nav tabs -->
  <div class="col-md-12">
  <ul class="nav nav-tabs tabmenu2" role="tablist">
    <li role="presentation" class="active"><a style="color:#000;" href="#home" aria-controls="home" role="tab" data-toggle="tab">Pickup schedule</a></li>
    <li role="presentation"><a style="color:#000;" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Shipped</a></li>
	 <li role="presentation"><a style="color:#000;" href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Delivered</a></li>
	  <li role="presentation"><a style="color:#000;" href="#profile2" aria-controls="profile" role="tab" data-toggle="tab">RTO</a></li>
	   <li role="presentation"><a style="color:#000;" href="#profile3" aria-controls="profile" role="tab" data-toggle="tab">Cancelled</a></li>
    <!--li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li-->
  </ul>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
  <!-- Tab panes -->
  <div class="tab-content tab-shipment">
    <div role="tabpanel" class="tab-pane active" id="home">
    <div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Id</h2></div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Order-Date</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">STATUS</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Discount</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Grand-Total</h2>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Action</h2>
	</div>
	</div>
     <?php
        if(!empty($reco)){
		foreach($reco as $row):
		
    ?>
	<div class="row row-content1">
	<div class="col-md-2 col-sm-12 col-xs-12"> 
	<?php
	echo $row->user_id;
	?>
	
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->order_date;
	?>	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->order_status;
	?>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->discount;
	?>

	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->grand_total;
	?>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<a href="https://amshoppie.com/seller/single_track?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>
	</div>
	
	</div>
     <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
		
    ?>
	
	<!--end3-->
	</div>
    
    
    

    <div role="tabpanel" class="tab-pane" id="profile">
	 <div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Id</h2></div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Order-Date</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Vat</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Discount</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Grand-Total</h2>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Action</h2>
	</div>
	</div>
     <?php
        if(!empty($re)){
		foreach($re as $row):
		
    ?>
	<div class="row row-content1">
	<div class="col-md-2 col-sm-12 col-xs-12"> 
	<?php
	echo $row->user_id;
	?>
	
	
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->order_date;
	?>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->order_status;
	?>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->discount;
	?>


	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->grand_total;
	?>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<a href="https://amshoppie.com/seller/single_shipped?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>

	</div>
	
	</div>
 <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
		
    ?>
	</div>
	
	
	
	
	<div role="tabpanel" class="tab-pane" id="profile1">
	 <div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Id</h2></div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Order-Date</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Vat</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Discount</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Grand-Total</h2>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Action</h2>
	</div>
	</div>
      <?php
        if(!empty($recc)){
		foreach($recc as $row):
		
    ?>
	<div class="row row-content1">
	<div class="col-md-2 col-sm-12 col-xs-12"> 
	<?php
	echo $row->user_id;
	?>
	
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->order_date;
	?>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->vat;
	?>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->discount;
	?>

	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->grand_total;
	?>

	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<a href="https://amshoppie.com/seller/single_deliverd?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>
	</div>
	
	</div>
    <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
		
    ?>

	</div>
	
	
	
	<div role="tabpanel" class="tab-pane" id="profile2">
	 <div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Id</h2></div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Order-Date</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Vat</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Discount</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Grand-Total</h2>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Action</h2>
	</div>
	</div>
      <?php
        if(!empty($recco)){
		foreach($recco as $row):
		
    ?>
	<div class="row row-content1">
	<div class="col-md-2 col-sm-12 col-xs-12"> 
	<?php
	echo $row->user_id;
	?>

	
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->order_date;
	?>

	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->vat;
	?>

	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->discount;
	?>


	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->grand_total;
	?>

	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<a href="https://amshoppie.com/seller/single_rto?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>
	</div>
	
	</div>
      <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
		
    ?>
	</div>
	<div role="tabpanel" class="tab-pane" id="profile3">
	 <div class="row row-head1">
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Id</h2></div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Order-Date</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Vat</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Discount</h2>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Grand-Total</h2>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<h2 class="prod-head2">Action</h2>
	</div>
	</div>
     <?php
        if(!empty($recr)){
		foreach($recr as $row):
		
    ?>
	<div class="row row-content1">
	<div class="col-md-2 col-sm-12 col-xs-12"> 
	<?php
	echo $row->user_id;
	?>
	
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->order_date;
	?>
	</div>
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->vat;
	?>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->discount;
	?>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<?php
	echo $row->grand_total;
	?>
	</div>
	
	<div class="col-md-2 col-sm-12 col-xs-12">
	<a href="https://amshoppie.com/seller/single_track_cancels?id=<?=$row->id?>"><button type="button" class="btn btn-link view-btn">View</button></a>

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

<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

</section>
</aside>
    <?php  }else{
    redirect(base_url('seller/login?msg=Please login to continue'));
} ?>