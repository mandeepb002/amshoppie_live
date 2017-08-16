<!-- navigation/start -->
<nav class="navbar navbar-default navbar-cstm">
  <div class="container">
  <div class="row">
    <!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>"><img class="my-logo" src="assets/user/img/ucp-logo.png"></a>
    </div>
	<div class="gap"></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li-->
         <li><a href="<?php echo base_url();?>about">About Us</a></li>
        <li><a href="<?php echo base_url();?>store">Store</a></li>
		<li><a href="<?php echo base_url();?>contact">Contact</a></li>
		<li><a href="<?php echo base_url();?>help">Help</a></li>
        <!--li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li-->
      </ul>
      <!-- <div class="nav navbar-nav navbar-left"> -->
	    <!-- <li><a href="About.html">About Us</a></li> -->
        <!-- <li><a href="store.html">Store</a></li> -->
		<!-- <li><a href="contact.html">Contact</a></li> -->
		<!-- <li><a href="help.html">Help</a></li> -->
	  <!-- </div> -->
      <ul class="nav navbar-nav navbar-right">
		<!-- <li><a href="checkout.html">CheckOut <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li> -->
	   <li><button type="button" class="btn btn-primary btn-lg btn-checkout" data-toggle="modal" data-target="#myModal">
			Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i> 0
			</button></li>
		<!-- <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li> -->
		<li><button onclick="document.getElementById('id01').style.display='block'" class="w3-button sign-btn">Sign Up <i class="fa fa-user" aria-hidden="true"></i></button></li>
		<!-- <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li> -->
		<li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
		<!--li><a href="#"><img src="img/india.png"></a></li-->
        <!--li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/india.png"><span class="caret"></span></a>
		  <ul class="dropdown-menu"-->
            <!-- <li><a href="#"><img src="img/india.png"></a></li> -->
			<!-- <li><a href="#"><img src="img/united-states.png"></a></li> -->
			<!--li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li-->
		  <!-- </ul> -->
        <!-- </li> -->
		<li>
			<select class="language">
				<option>Hindi</option>
				<option>English</option>
			</select>
		</li>
		<!-- <li><select> -->
  <!-- <option value="volvo"><img src="india.png"height="15px" width="15px" border="0"align="center"></option> -->
 <!-- <option value="saab"><img src="united-states.png"height="15px" width="15px" border="0"align="center"></option> -->
	<!-- </select></li>	 -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
  </div><!-- /.container-fluid -->
</nav>