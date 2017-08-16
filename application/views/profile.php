<!--<section style="width:100%;margin-bottom:20px">
<div class="container">
	<div style=" box-shadow: 10px 1px 20px #cccccc; padding:15px 0px">
	<div class="row">
		<div class="col-md-3"> 
			<p><img src="http://amshoppie.com/assets/user/image/wallet.png" width="35px" height="35px"/><b style="margin-left:5px">Rs 0</b></p>
		</div>
		<div class="col-md-7" style="margin-top: 9px"> 
			<span><input type="text" class="form-control form-control1" placeholder="Enter your Amount" style="float:left"/><p><a href="#">Have a Promo Code</a></p></span>
		</div>
		<div class="col-md-2" style="margin-top:7px">
			<span><button type="button" class="btn btn-warning" style= "padding:10px 15px !important">Add Money</button></span>
		</div>
	</div>
	</div>
</div>
</section>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
	/*session_start();
    if(!isset($_SESSION['id']) || !isset($_SESSION['mobile']) || !isset($_SESSION['email']) || !isset($_SESSION['usertype'])){
        redirect('http://amshoppie.com/');
    }*/
?>
<section id="profile-section">
	<div class="container">
		<div class="userp_tab">
			<div class="row">
				<div class="hidden-lg hidden-md col-sm-12">
					<div class="tab">
						<h3 class="acnt_head">My Account</h3>
						<ul class="my_account-list">
							<li><button class="tablinks" onclick="openCity(event, 'user2')"  id="defaultOpen">Address</button></li>
							<li><button class="tablinks" onclick="openCity(event, 'user6')">Add New Address</button></li>
							<li><button class="tablinks" onclick="openCity(event, 'user8')">Edit Profile</button></li>
							<li><button class="tablinks" onclick="openCity(event, 'user5')"> Order</button></li>
							<li><button class="tablinks" onclick="openCity(event, 'user9')">Review Purchases</button></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 hidden-sm hidden-xs">
					<div class="tab">
						<h3 class="acnt_head">My Account</h3>
						<h4 class="tab_head"><i class="fa fa-address-book" aria-hidden="true"></i> Address </h4>
						<button class="tablinks add_open" onclick="openCity(event, 'user2')"  id="defaultOpen">
						Address</button>
						<button class="tablinks" onclick="openCity(event, 'user6')">Add New Address</button>
						<h4 class="tab_head"><i class="fa fa-user" aria-hidden="true"></i> Profile </h4>
						<button class="tablinks" id="edit_prof" onclick="openCity(event, 'user8')">Edit Profile</button>
						<h4 class="tab_head"><i class="fa fa-address-book" aria-hidden="true"></i> My Order</h4>
						<button class="tablinks" onclick="openCity(event, 'user5')"> Order</button>
						<h4 class="tab_head"><i class="fa fa-eye" aria-hidden="true"></i> Rate and Reviews </h4>
						<button class="tablinks" onclick="openCity(event, 'user9')">Review Purchases</button>
					</div>
				</div>
			<div class="col-md-9">
			<div id="user2" class="tabcontent">
			   <div class="row" >
				 <div class="addrs_row1">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="addrs_title">
						   View Address Detail
						</div>
						</div>
					</div>
				 </div>
			   <div class="row" id="hidden_view">
				 <div class="addrs_row2">
				   <?php if(!empty ($ship_address)){
					foreach($ship_address as $row):?>
					
					<div class="col-sm-6 col-xs-12">

					
					
							<div class="addrs_content" style="margin-bottom:10px;">
						   <p class="addrs"> <?php echo $row->name; ?> </p>
						   <p class="addrs"> <?php echo $row->mobile; ?></p>
						   <p class="addrs"> <?php echo $row->pincode;?></p>
						   <p class="addrs"> <?php echo $row->address;?></p>
							<p class="addrs"><?php echo $row->locality;?></p>
							<p class="addrs"><?php echo $row->landmark;?></p>
							<p class="addrs"><?php echo $row->country;?></p>
							
					
					 <a href="https://amshoppie.com/user/delete_address?id=<?=$row->id?>"><button type="button" Onclick="return ConfirmDelete();" id="delete_add" class="btn btn-default del_btn">delete</button></a>
					 <input type='button' class="edit_button btn btn-default del_btn" id="<?php echo $row->id;?>" value="edit" onclick="<?php echo $row->id;?>">
						  
					
					</div>
					</div>
					<?php endforeach;}else{ ?>
						<button type="button" id="add_address1" class="btn btn-default del_btn" style="margin-left: 15px;">Add Address</button>
					<?php } ?>
					
					
				 </div>
			  </div>
			</div>
			<div id="user6" class="tabcontent">
							
				<div class="row">
					<div class="addrs_row1">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="addrs_title">
							   Add a New Address
							</div>
						</div>
					</div>
				</div>
				<div class="table_row">
					<form method="POST" id="form_add" action="">
					<div class="alert alert-success msg" role="alert"></div>
					  <div class="form-group">
						<div class="col-sm-4">
							<label for="exampleInputEmail1">Name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="name" id="name_add" class="form-control addrs_tb" placeholder="type your name">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-4">
							<label for="exampleInputEmail1">Mobile No.</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="mobile" id="mobile_add" class="form-control addrs_tb" placeholder="+91">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-4">
							<label for="exampleInputEmail1">Pincode</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="pincode" id="pincode_add"class="form-control addrs_tb" placeholder="pincode">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-4">
							<label for="exampleInputEmail1">Address</label>
						</div>
						<div class="col-sm-8">
							<textarea name="address" id="address_add"class="form-control addrs_tb"></textarea>
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-4">
							<label for="exampleInputEmail1">Locality</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="locality" id="locality_add" class="form-control addrs_tb" placeholder="">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-4">
							<label for="exampleInputEmail1">Landmark</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="landmark" id="landmark_add" class="form-control addrs_tb" placeholder="">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-4">
							<label for="exampleInputEmail1">Country</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="country" id="country_add" class="form-control addrs_tb" placeholder="India">
						</div>
					  </div>
					  <input type="hidden" name="user_id" id="User_add">
					  <div class="form-group">
						<div class="col-sm-4">
						</div>
						<div class="col-sm-8">
						<button type="submit" id="butn_add" class="addrssave_btn">Save Here</button>
						</div>
					  </div>

					</form>
				</div>		
			</div>


				<div id="user5" class="tabcontent">
					 <div class="row">
					 <div class="addrs_row1">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="addrs_title">
							   Orders
							   <a href="https://amshoppie.com/contact" class="contact_return">Customer Support</a>
							</div>
						
						</div>
						</div>
						</div>
						
						
					
					
					<div class="row">
						<div class="col-md-12">
							<div class="order_row">
								<table class="table">
									<tr>
										<td></td>
									</tr>
								</table>
								<p class="order_icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i><p>
								<p class="order_text">You have not purchased anything yet</p>
								<h3 class="order_shop"> Shop by Category</h3>
								<p class="order_cat">Men|Women|Baby and Kids|Electronics</p>
							 </div>
						</div>
					</div>
					
					
					
				</div>

				<div id="user8" class="tabcontent">
					
				
					<form method="post" id="edituser_form" action="">
					<div class="alert alert-success msg" role="alert"></div>
					<div class="alert alert-danger log_error" role="alert"></div>
				
				   <div class="row">
					 <div class="addrs_row1">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="addrs_title">
							   Account Detail
							</div>
						</div>
					</div>
				  </div>
				  
				  
				<div class="table_row">
							<div class="col-sm-6">
							  <div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							  </div>
							</div>
							<div class="col-sm-6">
							  <div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							  </div>
							</div>
				</div>
				   
				<div class="row">
					 <div class="addrs_row1">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="addrs_title">
							   Primary Information
							</div>
						</div>
					</div>
				</div>
				<div class="table_row">
					  <div class="form-group">
						<label for="Name">Name</label>
						<input type="text" class="form-control" name="name" id="name_edit" placeholder="Name">
						<span><?php echo form_error('name'); ?></span>
					  </div>
					  <div class="form-group">
					  <label for="Last_Name">Last Name</label>
						<input type="text" class="form-control" name="lastname" id="Last_Name" placeholder="Last Name">
					  </div>
					<div class="form-group">
						<label for="Phone_Number">Phone Number</label>
						<input type="text" name="mobile" class="form-control" id="Phone_Number" placeholder="Phone Number">
					  </div> 
					  <div class="form-group">
						<label for="date_birth">Date of Birth</label>
						<input type="date" name="dob" class="form-control" id="date_birth" placeholder="">
					  </div>
					  <div class="form-group">
						<label for="radio">Gender</label>
					  <div class="radio"  id="radio">
						  <label>
							<input type="radio" name="gender" id="Male" value="Male" checked>
							Male
						  </label> 
						  <label>
							<input type="radio" name="gender" id="Female" value="Female" checked>
							Female
						  </label>
						</div>
					</div>
					  <div class="form-group">
						<label for="Bio">Bio</label>
						<textarea class="form-control" name="bio" id="Bio" placeholder="Bio"> </textarea>
					  </div>
					  <div class="form-group">
						<label for="City">City</label>
						<input type="text" class="form-control" name="city" id="City" placeholder="City">
					  </div>
					  <div class="form-group">
							<label for="file">File input</label>
							<input type="file" id="file">
					</div>
					<button type="submit"  id="sub_profile" class="btn btn-default addrssave_btn">Save</button>
				</div>
					
				  </form>
				  
				</div>
				<div id="user10" class="tabcontent"> 

						
							 <div class="row">
					 <div class="addrs_row1">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="addrs_title">
							   Update Address
							</div>
						</div>
					</div>
				  </div>
				  <div class="row">
					<div class="table_row">
				   <div class="col-md-12">
				    
					<form method="post" id="form-id" action="">
					<div class="alert alert-success msg" role="alert"></div>
					<table class="table table2">
					 
					   <tr>
						 <td class="usertb_head">
						   Name*
						 </td>
						 <td class="usertb_head">
							<input type="text" name="name" id="name_add1" class="form-control addrs_tb">
						 </td>
					   </tr>
					   <tr>
						 <td class="usertb_head">
						   Mobile No.*
						 </td>
						 <td class="usertb_head">
							<input type="text" name="mobile" id="mobile_add1" class="form-control addrs_tb"  >
						 </td>
					   </tr>
					   <tr>
					   <td>
					   <input type="hidden" name="id" class="edit_button" id="edit_id" class="form-control addrs_tb" >
					   </td>
					   </tr>
					   <tr>
					   <td>
					   <input type="hidden" name="user_id" class="edit_button" id="user_id1" class="form-control addrs_tb" >
					   </td>
					   </tr>
						<tr>
						<td class="usertb_head">
						   Pincode*
						 </td>
						 <td class="usertb_head">
							<input type="text" name="pincode" id="pincode_add1" class="form-control addrs_tb" >
						 </td>
						</tr>
						
						<tr>
						 <td class="usertb_head">
						   Address*
						 </td>
						 <td class="usertb_head">
							<textarea name="address"  id="address_add1" class="form-control addrs_tb"></textarea>
						 </td>
						</tr>
						
						 <tr>
						 <td class="usertb_head">
						   Locality*
						 </td>
						 <td class="usertb_head">
							<input type="text" name="locality" id="locality_add1"class="form-control addrs_tb" placeholder="">
						 </td>
					   </tr>
					   
						<tr>
						 <td class="usertb_head">
						   Landmark*
						 </td>
						 <td class="usertb_head">
							<input type="text" name="landmark" id="landmark_add1"  class="form-control addrs_tb">
						 </td>
					   </tr>
					   
						<tr>
						<td class="usertb_head">
						   Country*
						 </td>
						 <td class="usertb_head">
							<input type="text" name="country" id="country_add1"  class="form-control addrs_tb" >
						 </td>
					   </tr>
					   <tr>
					   <td></td>
					   <td class="usertb_head">
					   <button type="submit" id="updata_sub" class="addrssave_btn">Save Here</button>
					   </td>
					   </tr>
					 </table>
					
						
					</form>
					
					
				   </div>
					</div>
				  </div>		
		
			</div>

				<div id="user9" class="tabcontent">
					<div class="row">
					 <div class="addrs_row1">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="addrs_title">
							   Rate and Reviews
							</div>
						</div>
					</div>
				  </div>
				 
				 
				 
				 <div class="row">
				  <!-- Nav tabs -->
				  <div class="col-md-12">
				  <ul class="nav nav-tabs tabmenu_order" role="tablist">
					<li role="presentation" class="active"><a style="color:#000;" href="#home1" aria-controls="home" role="tab" data-toggle="tab">Product Review</a></li>
					<li role="presentation"><a style="color:#000;" href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">Shop Review</a></li>
				  </ul>
				  </div>
				</div>

				<div class="row">
					  <div class="col-md-12">
					  <!-- Tab panes -->
						  <div class="tab-content tab-shipment">
							<div role="tabpanel" class="tab-pane active" id="home1">
							No more product available to be reviewed 1
							</div>
							<div role="tabpanel" class="tab-pane" id="profile1">
							No more product available to be reviewed 2
							</div>
							</div>
						</div>
				</div>

				</div>

				</div>
			</div>
		</div>
	</div>
</section> <!--profile section end-->

<!--div id="user7" class="tabcontent">
  settings
</div-->

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


</script>



<!-- Latest compiled and minified JavaScript -->
   <script src="<?php echo base_url(); ?>assets/user/js/bootstrap.min.js"></script>