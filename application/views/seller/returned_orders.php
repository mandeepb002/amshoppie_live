
<style>
.tabmenu3
{
	width:1020px;
}

.tabmenu3 li
 {
	 width:25%;
	 border:1px solid #f7f7f7;
	 
 }
.tabmenu3>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus 
 { 
	background-color: #f89f12 !important;
	text-align: center !important;
}

.tabmenu3>li>a 
{
 
	text-align: center !important;  
}
.tabmenu3>li>a:hover
{   
   
	text-align: center !important;
	background:#f7f7f7;
	color:#000;
}

 .tab-return 
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
  <ul class="nav nav-tabs tabmenu3" role="tablist">
    <li role="presentation" class="active"><a style="color:#000;" href="#home" aria-controls="home" role="tab" data-toggle="tab">Return Initiated</a></li>
    <li role="presentation"><a style="color:#000;" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Return picked-up</a></li>
	 <li role="presentation"><a style="color:#000;" href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Return Delivered</a></li>
	  <li role="presentation"><a style="color:#000;" href="#profile2" aria-controls="profile" role="tab" data-toggle="tab">Return Cancelled</a></li>
	  
    <!--li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li-->
  </ul>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
  <!-- Tab panes -->
  <div class="tab-content tab-return">
    <div role="tabpanel" class="tab-pane active" id="home">No Returns Found</div>
    <div role="tabpanel" class="tab-pane" id="profile">No Returns Found</div>
	<div role="tabpanel" class="tab-pane" id="profile1">No Returns Found</div>
	<div role="tabpanel" class="tab-pane" id="profile2">No Returns Found</div>
	<div role="tabpanel" class="tab-pane" id="profile3">No Returns Found</div>
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
