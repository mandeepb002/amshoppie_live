<!-- sign-up-popup start -->



<div class="container">

<div id="id01" class="w3-modal">

    <div class="w3-modal-content">

      <div class="w3-container">

	  <div class="w3-bar">

  <button class="w3-bar-item w3-button sign-in-btn" onclick="opentab('sign-in')">Sign-in</button>

  <button class="w3-bar-item w3-button sign-up-btn" onclick="opentab('sign-up')">Sign-up</button>

</div>

        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="font-size: 25px; float:right; margin-top:-62px; cursor:pointer">&times;</span>



		<div id="sign-in" class="w3-container form">

  <h1 class="sign">Sign In</h1>



							<form>

							<h2>Email</h2>

								<input type="email" name="email" class="form-field" placeholder="Enter your Email...">



								<h2>Password</h2>

								<input type="password" name="password" class="form-field" placeholder="Enter your Password...">

								<div class="passtime">

								<input type="checkbox" name="checkbox" class="form-checkbox">

								<span class="remember">Remember me</span><span class="forgot"> <a href="#">Forgot Password?</a></span>

								</div>

								<input type="submit" name="sign-in" class="form-submit-btn" value="Sign In">



								<h2 class="account">Dont have an account?</h2>



							  <h2 class="account"> <a class="in" onclick="opentab('sign-up')">Create an account</a></h2>



							</form>

</div>



<div id="sign-up" class="w3-container form" style="display:none">

  <h1 class="sign">Sign Up</h1>



							<form>

							<h2>Full Name</h2>

								<input type="text" name="name" class="form-field" placeholder="Enter your name...">

								<h2>Email</h2>

								<input type="email" name="email" class="form-field" placeholder="Enter your email...">
								<h2>Mobile</h2>

								<input type="number" name="mobile" class="form-field" placeholder="Enter your mobile...">

								<h2>Password</h2>

								<input type="password" name="password" class="form-field" placeholder="Enter your password...">
								
								
								<h2>Confirm Password</h2>

								<input type="password" name="confirmpassword" class="form-field" placeholder="Enter your password...">

								<div class="passtime">

								<input type="checkbox" name="checkbox" class="form-checkbox">

								<span class="remember">I agree all statements  <a href="#">terms of services</a></span>

								</div>

								<input type="submit" name="sign-in" class="form-submit-btn" value="Sign Up">



								<h2 class="account">Already have an account?</h2>



							  <h2 class="account"> <a class="in" onclick="opentab('sign-in')">Sign In</a></h2>



							</form>



</div>



      </div>

    </div>

  </div>

</div>
<script>

function opentab(formtab) {

    var i;

    var x = document.getElementsByClassName("form");

    for (i = 0; i < x.length; i++) {

       x[i].style.display = "none";

    }

    document.getElementById(formtab).style.display = "block";

}

</script>

<!-- sign-up-popup start -->
