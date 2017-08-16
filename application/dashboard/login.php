
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
              <form action="<?php echo base_url(); ?>seller/validate_login"  method="post" class="form-horizontal" id="loginform">
				<div class="form-group">
							<div class="col-md-4 mobile-box">
								<label for="mobile" class="control-label">Mobile:-</label>
                            </div>
							<div class="col-md-8 marg-left">
					    	<input type="text" required="required" name="mobile" maxlength="10" class="form-control" id="mobile" placeholder="Please enter mobile number">
                             </div>
				</div>
							  
				<div class="form-group">
							<div class="col-md-4 pass-box">
								<label for="password" class="control-label">Password:-</label>
							</div>
							<div class="col-md-8 marg-left1">
								<input type="password" required="required" name="password"  class="form-control" id="password" placeholder="Please enter a valid password">
                       <span class="reg-color">If you are not registered <a href="<?php echo base_url(); ?>seller/register">Register here</a></span>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-4"></div>
							<div class="col-md-8">
                            <input type="submit" class="btn btn-default btn-yellow-bg btn-marg" value="LOGIN">
                            </div>
						</div>
						<h2 class="or-head">Or</h2>
						<button type="button" class="btn btn-primary btn11"> <i class="fa fa-facebook fb" aria-hidden="true"></i>&nbsp Sign in with Facebook</button>
                        <button type="button" class="btn btn-primary btn22"> <i class="fa fa-google-plus fb" aria-hidden="true"></i>&nbsp Sign in with GooglePlus</button>

				</form>
                
            </div>
          </div>
        </div>
		</div>
    </div>
	</div>      
</section>

