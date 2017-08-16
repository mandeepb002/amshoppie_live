 <script src="https://www.amshoppie.com/assets/user/js/jssor.slider-25.0.7.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 3000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin double-tail-spin css */

        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#000;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>


<!--side-navigation-->
<section id="menu-section">
<div class="row">
	<div class="col-md-1 col-lg-1 hidden-lg hidden-md hidden-sm hidden-xs">
	
<nav class="v-navig left-nav">
  <ul class="navig-ul">
    <li class="nav-li">
	<a href="#">
	 <div class=icon> 
			<img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/prepaid.png" alt="prepaid">
      </div>
	</a>
      <!-- mega menu for Mobile -->
      <div class="mega-shop mega-menu">
			<div class="row">
          <div class="col-sm-12">
		  <h2 class="top-heading">Recharge Prepaid Mobile</h2>
		  </div></div>
	  <div class="row">
          <div class="col-sm-6">
					<form class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Mobile Number">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
		<select class="form-control"> 
            <option value="" disabled="" selected="">Operator</option> 
            <option value="airtel">Airtel</option>  
			<option value="voda">Vodafone</option>  
			<option value="idea">Idea</option>   
			<option value="bsnl">Bsnl</option>  
        </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Amount">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-color">Proceed to Recharge</button>
    </div>
  </div>
</form>	          
          </div>
		  
		 <div class="col-sm-6">
			<div class="mobile-offer">
			<div class="row">
				<div class="col-sm-12">
					<img class="icon icons8-Cell-Phone" width="200" height="200" src="<?php echo base_url(); ?>assets/user/img/nav/icon/prepaid.png">
				</div>
			</div>
			
			</div>
		 </div>
          
    </div><!--row-->

      </div>
      <!-- end mega menu for Mobile -->
    </li>
	<li class="nav-li"><a href="#">
	<div class=icon> 
        <img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/postpaid.png" alt="postpaid">
        </div>
	</a>
      <!-- mega menu for Mobile -->
      <div class="mega-shop mega-menu">
			<div class="row">
          <div class="col-sm-12">
		  <h2 class="top-heading">Recharge Postpaid Mobile</h2>
		  </div></div>
	  <div class="row">
          <div class="col-sm-6">
					<form class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Mobile Number">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
		<select class="form-control"> 
            <option value="" disabled="" selected="">Operator</option> 
            <option value="airtel">Airtel</option>  
			<option value="voda">Vodafone</option>  
			<option value="idea">Idea</option>   
			<option value="bsnl">Bsnl</option>  
        </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Amount">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-color">Proceed to Recharge</button>
    </div>
  </div>
</form>	          
          </div>
		  
		 <div class="col-sm-6">
			<div class="mobile-offer">
			<div class="row">
				<div class="col-sm-12">
					<img class="icon icons8-Cell-Phone" width="200" height="200" src="<?php echo base_url(); ?>assets/user/img/nav/icon/postpaid.png">
				</div>
			</div>
			
			</div>
		 </div>
          
    </div><!--row-->

      </div>
      <!-- end mega menu for Mobile -->
    </li>
	  <li class="nav-li"><a href="#">
	  <div class=icon> 
        <img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/dth.png" alt="Dth">
        </div>
	  </a>
       <!-- mega menu for Mobile -->
      <div class="mega-shop mega-menu">
			<div class="row">
          <div class="col-sm-12">
		  <h2 class="top-heading">Recharge DTH</h2>
		  </div></div>
	  <div class="row">
          <div class="col-sm-6">
					<form class="form-horizontal">
					 <div class="form-group">
    <div class="col-sm-12">
		<select class="form-control"> 
            <option value="" disabled="" selected="">Operator</option> 
            <option value="airtel">Airtel</option>  
			<option value="voda">Vodafone</option>  
			<option value="idea">Idea</option>   
			<option value="bsnl">Bsnl</option>  
        </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Customer ID">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Amount">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-color">Proceed to Recharge</button>
    </div>
  </div>
</form>
</div> 
		  
		 <div class="col-sm-6">
			<div class="mobile-offer">
			<div class="row">
				<div class="col-sm-12">
					<img class="icon icons8-Cell-Phone" width="200" height="200" src="<?php echo base_url(); ?>assets/user/img/nav/icon/dth.png">
				</div>
			</div>
			
			</div>
		 </div>
          
    </div><!--row-->

      </div>
      <!-- end mega menu for Mobile -->
    </li>
	 <li class="nav-li"><a href="#">
	 <div class=icon> 
        <img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/idea.png" alt="Electricity">
        </div>
	</a>
       <!-- mega menu for Mobile -->
      <div class="mega-shop mega-menu">
			<div class="row">
          <div class="col-sm-12">
		  <h2 class="top-heading">PAY Electricity Bill</h2>
		  </div></div>
	  <div class="row">
         <div class="col-sm-6">
					<form class="form-horizontal">
					 <div class="form-group">
    <div class="col-sm-12">
		<select class="form-control"> 
            <option value="" disabled="" selected="">State</option> 
            <option value="airtel">New Delhi</option>  
			<option value="voda">Punjab</option>  
			<option value="idea">Chandigarh</option>   
			<option value="bsnl">Himancal Pardesh</option>  
        </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Electricity Board">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Consumer Number">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-color">Get Bill</button>
    </div>
  </div>
</form>
</div>  
		  
		 <div class="col-sm-6">
			<div class="mobile-offer">
			<div class="row">
				<div class="col-sm-12">
					<img class="icon icons8-Cell-Phone" width="200" height="200" src="<?php echo base_url(); ?>assets/user/img/nav/icon/idea.png">
				</div>
			</div>
			
			</div>
		 </div>
          
    </div><!--row-->

      </div>
      <!-- end mega menu for Mobile -->
    </li>
	 <li class="nav-li"><a href="#">
	 <div class=icon> 
        <img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/home.png" alt="Municipal Tax">
        </div>
		</a>
       <!-- mega menu for Mobile -->
      <div class="mega-shop mega-menu">
			<div class="row">
          <div class="col-sm-12">
		  <h2 class="top-heading">PAY Municipal Tax</h2>
		  </div></div>
	  <div class="row">
          <div class="col-sm-6">
					<form class="form-horizontal">
					 
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Corporation">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Tax Type">
    </div>
  </div>
  
   <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Property ID">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Full Name">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Address">
    </div>
  </div>
  
   <div class="form-group">
    <div class="col-sm-12">
      <input type="Email" class="form-control" id="inputPassword3" placeholder="Email ID">
    </div>
  </div>
  
   <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Mobile Number">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-color">Get Tax Amount</button>
    </div>
  </div>
</form>
</div>  
		 <div class="col-sm-6">
			<div class="mobile-offer">
			<div class="row">
				<div class="col-sm-12">
					<img class="icon icons8-Cell-Phone" width="200" height="200" src="<?php echo base_url(); ?>assets/user/img/nav/icon/home.png">
				</div>
			</div>
			
			</div>
		 </div>
          
    </div><!--row-->

      </div>
      <!-- end mega menu for Mobile -->
    </li>
  </ul>
</nav>


	
	
	</div>
	
	
	<div class="col-sm-12 col-md-9 col-lg-9">
	
	<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:938px;height:330.084px;overflow:hidden;visibility:hidden;">
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:938px;height:330.084px;overflow:hidden;">
            <!-- <div> -->
                <!-- <img data-u="image" src="img/red.jpg" /> -->
                <!-- <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">TOUCH SWIPE SLIDER</div> -->
                <!-- <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div> -->
                <!-- <div style="position:absolute;top:120px;left:650px;width:470px;height:220px;z-index:0;"> -->
                    <!-- <img style="position:absolute;top:0px;left:0px;width:470px;height:220px;z-index:0;" src="img/c-phone-horizontal.png" /> -->
                    <!-- <div style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0; overflow:hidden;"> -->
                        <!-- <img data-u="caption" data-t="0" style="position:absolute;top:0px;left:0px;width:379px;height:213px;z-index:0;" src="img/c-slide-1.jpg" /> -->
                        <!-- <img data-u="caption" data-t="1" style="position:absolute;top:0px;left:379px;width:379px;height:213px;z-index:0;" src="img/c-slide-3.jpg" /> -->
                    <!-- </div> -->
                    <!-- <img style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0;" src="img/c-navigator-horizontal.png" /> -->
                    <!-- <img data-u="caption" data-t="2" style="position:absolute;top:476px;left:454px;width:63px;height:77px;z-index:0;" src="img/hand.png" /> -->
                <!-- </div> -->
            <!-- </div> -->
            <div>
                <img data-u="image" src="<?php echo base_url(); ?>assets/user/img/nav/slider/slider-01.jpg" />
            </div>
			      <div>
                <img data-u="image" src="<?php echo base_url(); ?>assets/user/img/nav/slider/slider-02.jpg" />
            </div>
			      <div>
                <img data-u="image" src="<?php echo base_url(); ?>assets/user/img/nav/slider/slider-03.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url(); ?>assets/user/img/nav/slider/slider-04.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:14px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:18px;height:18px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>

	
	</div>
	 <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
	<div class="col-sm-12 col-md-3 col-lg-3 hidden-sm hidden-xs">
		<div card-stack>

  <input id="card-0" name="card-set" type="radio" checked/>
  <div card>
    <div class="content">
	  <div class="superDealText">In the Spotlight !</div>
		<div class="superDealImage">
			<div class="superImage">
				<a href=""><img src="<?php echo base_url(); ?>assets/user/image/dress1.jpg"></a>
			</div>
		</div>
		<div class="superDealName">
			<div class="superNme">Buy 1 High Back Executive Leatherette Office</div>
			<div class="suprPrice">Rs 9,999</div>
		</div>
		<div class="superDealbtn">
			<div class="viewDetails"><button>View Details</button></div>
			<div class="Next"><label for="card-1">Next</label></div>
		</div>
    </div>
  </div>

  <input id="card-1" name="card-set" type="radio"/>
  <div card>
    <div class="content">
	  <div class="superDealText">In the Spotlight !</div>
		<div class="superDealImage">
			<div class="superImage">
				<a href=""><img src="<?php echo base_url(); ?>assets/user/image/dress1.jpg"></a>
			</div>
		</div>
		<div class="superDealName">
			<div class="superNme">Buy 1 High Back Executive Leatherette Office</div>
			<div class="suprPrice">Rs 9,999</div>
		</div>
		<div class="superDealbtn">
			<div class="viewDetails"><button>View Details</button></div>
			<div class="Next"><label for="card-2">Next</label></div>
		</div>
    </div>
  </div>

  <input id="card-2" name="card-set" type="radio" />
  <div card>
    <div class="content">
	  <div class="superDealText">In the Spotlight !</div>
		<div class="superDealImage">
			<div class="superImage">
				<a href=""><img src="<?php echo base_url(); ?>assets/user/image/dress1.jpg"></a>
			</div>
		</div>
		<div class="superDealName">
			<div class="superNme">Buy 1 High Back Executive Leatherette Office</div>
			<div class="suprPrice">Rs 9,999</div>
		</div>
		<div class="superDealbtn">
			<div class="viewDetails"><button>View Details</button></div>
			<div class="Next"><label for="card-3">Next</label></div>
		</div>
    </div>
  </div>
 
  <input id="card-3" name="card-set" type="radio" />
  <div card>
    <div class="content">
	  <div class="superDealText">In the Spotlight !</div>
		<div class="superDealImage">
			<div class="superImage">
				<a href=""><img src="<?php echo base_url(); ?>assets/user/image/dress1.jpg"></a>
			</div>
		</div>
		<div class="superDealName">
			<div class="superNme">Buy 1 High Back Executive Leatherette Office</div>
			<div class="suprPrice">Rs 9,999</div>
		</div>
		<div class="superDealbtn">
			<div class="viewDetails"><button>View Details</button></div>
			<div class="Next"><label for="card-4">Next</label></div>
		</div>
    </div>
  </div>
 
  <input id="card-4" name="card-set" type="radio" />
  <div card>
    <div class="content">
	  <div class="superDealText">In the Spotlight !</div>
		<div class="superDealImage">
			<div class="superImage">
				<a href=""><img src="<?php echo base_url(); ?>assets/user/image/dress1.jpg"></a>
			</div>
		</div>
		<div class="superDealName">
			<div class="superNme">Buy 1 High Back Executive Leatherette Office</div>
			<div class="suprPrice">Rs 9,999</div>
		</div>
		<div class="superDealbtn">
			<div class="viewDetails"><button>View Details</button></div>
			<div class="Next"><label for="card-5">Next</label></div>
		</div>
    </div>
  </div>
 
  <input id="card-5" name="card-set" type="radio" />
  <div card>
    <div class="content">
	  <div class="superDealText">In the Spotlight !</div>
		<div class="superDealImage">
			<div class="superImage">
				<a href=""><img src="<?php echo base_url(); ?>assets/user/image/dress1.jpg"></a>
			</div>
		</div>
		<div class="superDealName">
			<div class="superNme">Buy 1 High Back Executive Leatherette Office</div>
			<div class="suprPrice">Rs 9,999</div>
		</div>
		<div class="superDealbtn">
			<div class="viewDetails"><button>View Details</button></div>
			<div class="Next"><label for="card-6">Next</label></div>
		</div>
    </div>
  </div>
 
  <input id="card-6" name="card-set" type="radio" />
  <div card>
    <div class="content">
	  <div class="superDealText">In the Spotlight !</div>
		<div class="superDealImage">
			<div class="superImage">
				<a href=""><img src="<?php echo base_url(); ?>assets/user/image/dress1.jpg"></a>
			</div>
		</div>
		<div class="superDealName">
			<div class="superNme">Buy 1 High Back Executive Leatherette Office</div>
			<div class="suprPrice">Rs 9,999</div>
		</div>
		<div class="superDealbtn">
			<div class="viewDetails"><button>View Details</button></div>
			<div class="Next"><label for="card-7">Next</label></div>
		</div>
    </div>
  </div>
 
  <input id="card-7" name="card-set" type="radio" />
  <div card>
    <div class="content">
	  <div class="superDealText">In the Spotlight !</div>
		<div class="superDealImage">
			<div class="superImage">
				<a href=""><img src="<?php echo base_url(); ?>assets/user/image/dress1.jpg"></a>
			</div>
		</div>
		<div class="superDealName">
			<div class="superNme">Buy 1 High Back Executive Leatherette Office</div>
			<div class="suprPrice">Rs 9,999</div>
		</div>
		<div class="superDealbtn">
			<div class="viewDetails"><button>View Details</button></div>
			<div class="Next"><label for="card-8">Next</label></div>
		</div>
    </div>
  </div>
 
  <input id="card-8" name="card-set" type="radio" />
  <div card>
    <div class="content">
	  <div class="superDealText">In the Spotlight !</div>
		<div class="superDealImage">
			<div class="superImage">
				<a href=""><img src="<?php echo base_url(); ?>assets/user/image/dress1.jpg"></a>
			</div>
		</div>
		<div class="superDealName">
			<div class="superNme">Buy 1 High Back Executive Leatherette Office</div>
			<div class="suprPrice">Rs 9,999</div>
		</div>
		<div class="superDealbtn">
			<div class="viewDetails"><button>View Details</button></div>
			<div class="Next"><label for="card-0">Next</label></div>
		</div>
    </div>
  </div>
  
</div>
	</div>
	
	
	<div class="col-md-1 col-lg-1 hidden-lg hidden-md hidden-sm hidden-xs">
	<!--right-nav-->
<nav class="v-navig right-nav">
  <ul class="navig-ul">
  
  <li class="nav-li"><a href="#">
	 <div class=icon> 
        <img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/home.png" alt="home">
        </div>
		</a>
    </li>
  
    <li class="nav-li">
	<a href="#">
	<div class=icon> 
        <img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/airplane.png" alt="Flight Booking">
        </div>
	</a>
      <!-- mega menu for Mobile -->
      <div class="mega-shop mega-menu">
			<div class="row">
          <div class="col-sm-12">
		  <h2 class="top-heading">Flight Booking</h2>
		  </div></div>
	  <div class="row">
          <div class="col-sm-6">
					<form class="form-horizontal">
				 <div class="form-group">
    <div class="col-lg-12 col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="From">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-lg-12 col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="To">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-12 col-sm-12">
      <input type="date" class="form-control" id="inputPassword3" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-color">Search Flight</button>
    </div>
  </div>
</form>
</div>  
		  
		 <div class="col-sm-6">
			<div class="mobile-offer">
			<div class="row">
				<div class="col-sm-12">
					<img class="icon icons8-Cell-Phone" width="200" height="200" src="<?php echo base_url(); ?>assets/user/img/nav/icon/airplane.png">
				</div>
			</div>
			
			</div>
		 </div>
          
    </div><!--row-->

      </div>
      <!-- end mega menu for Mobile -->
    </li>
	<li class="nav-li"><a href="#">
	<div class=icon> 
        <img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/bus.png" alt="Bus Booking">
        </div>
	</a>
      <!-- mega menu for Mobile -->
      <div class="mega-shop mega-menu">
			<div class="row">
          <div class="col-sm-12">
		  <h2 class="top-heading">Bus Booking</h2>
		  </div></div>
	  <div class="row">
          <div class="col-sm-6">
					<form class="form-horizontal">
				 <div class="form-group">
    <div class="col-lg-12 col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="From">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-lg-12 col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="To">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-12 col-sm-12">
      <input type="date" class="form-control" id="inputPassword3" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-color">Search Bus</button>
    </div>
  </div>
</form>
</div>  
		  
		 <div class="col-sm-6">
			<div class="mobile-offer">
			<div class="row">
				<div class="col-sm-12">
					<img class="icon icons8-Cell-Phone" width="200" height="200" src="<?php echo base_url(); ?>assets/user/img/nav/icon/bus.png">
				</div>
			</div>
			
			</div>
		 </div>
          
    </div><!--row-->

      </div>
      <!-- end mega menu for Mobile -->
    </li>
	  <li class="nav-li"><a href="#">
	  <div class=icon> 
        <img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/gas.png" alt="Book Your Gas">
        </div>
	  </a>
       <!-- mega menu for Mobile -->
      <div class="mega-shop mega-menu">
			<div class="row">
          <div class="col-sm-12">
		  <h2 class="top-heading">Book Your Gas</h2>
		  </div></div>
	  <div class="row">
          <div class="col-sm-6">
					<form class="form-horizontal">
				 <div class="form-group">
    <div class="col-lg-12 col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Gas Provider">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-lg-12 col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Customer Number">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-color">Book Now</button>
    </div>
  </div>
</form>
</div>  
		  
		 <div class="col-sm-6">
			<div class="mobile-offer">
			<div class="row">
				<div class="col-sm-12">
					<img class="icon icons8-Cell-Phone" width="200" height="200" src="<?php echo base_url(); ?>assets/user/img/nav/icon/gas.png">
				</div>
			</div>
			
			</div>
		 </div>
          
    </div><!--row-->

      </div>
      <!-- end mega menu for Mobile -->
    </li>
	 <li class="nav-li"><a href="#">
	 <div class=icon> 
        <img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/popcorn.png" alt="movie-ticket">
        </div>
	</a>
       <!-- mega menu for Mobile -->
      <div class="mega-shop mega-menu">
			<div class="row">
          <div class="col-sm-12">
		  <h2 class="top-heading">Book Your Movie Ticket</h2>
		  </div></div>
	  <div class="row">
         <div class="col-sm-6">
					<form class="form-horizontal">
				 <div class="form-group">
    <div class="col-lg-12 col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your city name">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-color">Search</button>
    </div>
  </div>
</form>
</div>  
		  
		 <div class="col-sm-6">
			<div class="mobile-offer">
			<div class="row">
				<div class="col-sm-12">
					<img class="icon icons8-Cell-Phone" width="200" height="200" src="<?php echo base_url(); ?>assets/user/img/nav/icon/popcorn.png">
				</div>
			</div>
			
			</div>
		 </div>
          
    </div><!--row-->

      </div>
      <!-- end mega menu for Mobile -->
    </li>
	
	 
  </ul>
</nav>

	
	</div>
</div>

<!-- horizon menu start -->
<div class="icon-menu hidden-lg hidden-md hidden-sm hidden-xs">
		<ul class="list-style-order">
			<li>
				<a href="<?php echo base_url(); ?>welcome/mobilerecharge.php"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/prepaid.png" alt="prepaid"></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>welcome/dth.php"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/dth.png" alt="Dth"></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>welcome/mobilerecharge.php"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/postpaid.png" alt="postpaid"></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>welcome/electricity.php"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/idea.png" alt="Electricity"></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>welcome/municiple.php"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/home.png" alt="Municipal Tax"></a>
			</li>
			<li>
				<a href="#"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/airplane.png" alt="Flight Booking"></a>
			</li>
			<li>
				<a href="#"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/home.png" alt="home"></a>
			</li>
			<li>
				<a href="#"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/bus.png" alt="Bus Booking"></a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>welcome/gas.php"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/gas.png" alt="Book Your Gas"></a>
			</li>
			<li>
				<a href="#"><img class="icon icons8-Cell-Phone" width="40" height="40" src="<?php echo base_url(); ?>assets/user/img/nav/icon/popcorn.png" alt="movie-ticket"></a>
			</li>
			
		</ul>
	
</div>






</section>