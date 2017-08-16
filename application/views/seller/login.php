<?php if($this->session->userdata('id')==true){
    redirect('seller');
}else{ ?>
<section id="am-form">
<div class="opacity">
	<div class="container">
	<div class="row">
  <div class="col-md-12 box321">          
    	<div class="row">
        	<div class="col-md-8">
	<img class="logo-posi logo-posi1" src="<?php echo base_url()."assets/seller/img/"; ?>m-logo.png">

			</div>
            <div class="col-md-4 login-box">
			<div class="opacity1">
                
            	<h2 class="section-title1"> LOGIN </h2>
                <?php if(isset($_GET['msg']) && !empty($_GET['msg'])){ ?>
                <p style="color: #ff7300;margin-left: 15px;"><?php echo $_GET['msg']; ?></p>
                <?php } ?>
                <?php if(isset($_GET['smsg']) && !empty($_GET['smsg'])){ ?>
                <p style="color: #32CD32;margin-left: 15px;"><?php echo $_GET['smsg']; ?></p>
                <?php } ?>
              <form action="<?php echo base_url(); ?>seller/validate_login"  method="post" class="form-horizontal" id="loginform">
				<div class="form-group">
							
							<div class="col-md-12">
					    	<input type="text" required="required" name="mobile" minlength="10" class="form-control frm-cn" id="mobile" placeholder="Please enter mobile number">
                             </div>
				</div>
							  
				<div class="form-group">
							
							<div class="col-md-12">       
								<input type="password" required="required" name="password" minlength="8"  class="form-control frm-cn" id="password" placeholder="Please enter a valid password">
                       <!--span class="reg-color">If you are not registered <a class="reg" href="<?php echo base_url(); ?>seller/register">Register here</a></span-->
							</div>
						</div>
							  
						<div class="form-group">
							
							<div class="col-md-12">
                            <input type="submit" class="btn btn-default btn-yellow-bg btn-marg" value="LOGIN">
							<span class="reg-color">If you are not registered <a class="reg" href="<?php echo base_url(); ?>seller/register"><u>Register here</u></a></span>
                            </div>
						</div>
						<!--h2 class="or-head">Or</h2>
						<button type="button" class="btn btn-primary btn11"> <i class="fa fa-facebook fb" aria-hidden="true"></i>&nbsp Sign in with Facebook</button>
                        <button type="button" class="btn btn-primary btn22"> <i class="fa fa-google-plus fb" aria-hidden="true"></i>&nbsp Sign in with GooglePlus</button-->

				</form>
                
            </div>
          </div>
        </div>
		</div>
    </div>
	</div>      
</section>

<?php } ?>