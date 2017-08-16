<?php $c = 0; ?>
<?php if($this->session->userdata('id')==true){ ?>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />		

		<link href="<?php echo base_url('assets/seller/css/chosen.css'); ?>" rel="stylesheet">		
	<aside class="right-side">
		
        <section class="content">
		<form method="post" action="<?php echo base_url();?>seller/add_product1" class="form-horizontal" enctype="multipart/form-data">
			
				
		<?php
		if(!empty($_GET['msg'])){
			echo "<h1 style='background-color:#f89f12; color:white;'>"."<center>".$_GET['msg']."</center>"."</h1>";
			}
		?>
		
				
               <section class="box-shadow"> 
				<div class="box-title">
				<h2 class="section-title add-p"> Add Product </h2>
				
				</div>
		
				<div class="row padding1" style="padding-bottom: 10px;">
					
				
					<!--div class="col-md-12 col-sm-12 col-xs-12 cover">

							<div class="col-md-4 set-padding11">
						   
							   <!?php if($this->session->userdata('usertype')==2){ ?>
							 <select name="shop_id" class="btn btn-default" style="width: 100%;">
									  <option selected="selected" value="">Select Shop</option>
									 
									  <!?php foreach($recordss as $result){?>
										
									   <option value="<!?php echo $result->user_id; ?>"><!?php echo $result->shope_name." "."(".$result->user_id.")"  ?></option>
								  <!?php } } ?>
								   
                                  
                                  </select>
							</div-->
				
						  
								
					
				
						<div class="col-md-12 col-sm-12 col-xs-12 cover">

				
				
						   <div class="form-group" style="padding-bottom:15px;">
						    <div class="col-md-2 field set-padding">
								<span><label for="commission" class="control-label">Shop</label></span>
							</div>
							
							 <div class="col-md-4" style="padding: 0 35px 0 0;">
							 <?php if($this->session->userdata('usertype')==2){ ?>
							 <select name="shop_id" class="btn btn-default" style="width: 100%;">
									  <option selected="selected" value="" required="required">Select Shop</option>
									 
									  <?php foreach($recordsss as $result){?>
										
									   <option value="<?php echo $result->user_id; ?>"><?php echo $result->shope_name." "."(".$result->user_id.")"  ?></option>
								  <?php } } ?>
								   
                                  
                                  </select>
                           <?php if($this->session->userdata('usertype')==3){ ?>
                         <select name="p_a" class="btn btn-default" style="width: 100%;">
                                  <option selected="selected" value="">Select Seller</option>
                                 
                                  <?php foreach($record as $result){?>
							  <option value="<?php echo $result->name; ?>"><?php echo $result->shope_name." "."(".$result->name.")"  ?></option>
						   <?php } } ?>
								   
                                  
                                  </select>
                         
                         </div>
							
							
                         
                         


						
							<div class="col-md-2 field set-padding">
								<span><label for="commission" class="control-label">TP/Commission</label></span>
							</div>
							<div class="col-md-4 set-padding11">
                            
								<select name="commission_type" class="form-control border11" id="com" style="background: #f0efef">
									<option value="">Choose</option>
									<option value="1">TP</option>
									<option value="2">COMMISSION</option>
								</select>
														


							
							<div id="dvPassport" style="display: none">
								
								<body>50% Commission </body>
							</div>	
							</div>
						</div>
						
						
											
						 <div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="product_name" class="control-label">Name</label>
                                
							</div>
							<div class="col-md-10 set-padding11">
								  <input type="text" placeholder="product_name" name="product_name" class="form-control" id="product_name">
                                  <span style="color: #ff0000;"><?php echo form_error('product_name'); ?></span>
							</div>
						</div>
							  
						<div class="form-group">
							<div class="col-md-2 field set-padding" >
								<label for="quantity" class="control-label">Category</label>
							</div>
							<div class="col-md-10 set-padding11 " id="parent_id">
							<select name="category_name" class="btn btn-default get_parentid">
                                  <option selected="selected" id="child_id" >Select Category</option>
								   <?php  foreach($records as $row){ ?>
                
     <option value="<?php print_r($row->cat_id); ?>"><?php print_r($row->cat_name); ?></option>
      
                    
     <?php  } ?>
							</select>
							</div>
							<!--div class="col-md-3"><label for="" class="control-label">Category Commission</label></div>
							<div class="col-md-2">
							<div class="offer_box" style="border: 1px solid #ededed;padding: 6px 12px;text-align: center;border-radius: 2px;background-color: #f5f5f5;">
							<!-?php  foreach($records as $row){ ?>
                
<!?php print_r($row->commission); ?>
      
                    
     <1?php  } ?>
	 
	 26%
							</div>
							</div-->
							</div>
						
						
						
						
						
						
						
						
						<div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="description" class="control-label">Description</label>
							</div>	
							<div class="col-md-10 set-padding11">
								 <textarea placeholder="Enter the Description" name="description" class="form-control" id="description"></textarea>
                                 <span style="color: #ff0000;"><?php echo form_error('description'); ?></span>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="country_code" class="control-label">Country Code</label>
							</div>
							<div class="col-md-4 set-padding11">
								   <input type="text" placeholder="Country Code" name="country_code" class="form-control" id="country_code">
                                   <span style="color: #ff0000;"><?php echo form_error('country_code'); ?></span>
							</div>
                            
                            
                            
                            <div class="col-md-2 field set-padding">
								<label for="quantity" class="control-label">Quantity</label>
							</div>	
							<div class="col-md-4 set-padding11">
								 <input type="text" placeholder="Quantity" name="quantity" class="form-control" id="quantity">
                                <span style="color: #ff0000;"><?php echo form_error('quantity'); ?></span>
							</div>
                            
						</div>
							  
						<div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="mer_sku" class="control-label">Merchant SKU</label>
							</div>	
							<div class="col-md-4 set-padding11">
								 <input type="text" placeholder="Merchant SKU" name="mer_sku" class="form-control" id="mer_sku">
                                <span style="color: #ff0000;"><?php echo form_error('mer_sku'); ?></span>
							</div>
						
                            <div class="col-md-2 field set-padding">
								<label for="product_sku" class="control-label">Product SKU</label>
							</div>	
							<div class="col-md-4 set-padding11">
								 <input type="text" placeholder="Product SKU" name="product_sku" class="form-control" id="product_sku" value="PSKU<?php echo $last->id; ?>" readonly>
                                 <span style="color: #ff0000;"><?php echo form_error('product_sku'); ?></span>
                                
							</div>  	
							
						</div> 

						<div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="mer_sku" class="control-label">Colour</label>
							</div>	
							<div class="col-md-4 set-padding11">
								 <select multiple="multiple" name="colour[]" class="form-control drop chosen-select" id="color_id" data-value ="1"  tabindex="4">
								
								 	<?php if($colour){ foreach($colour as $row){?>
								 			<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
								 		<?php }} ?>
								 </select>
								 <a id="c_in" class="btn btn-default" href="" style="color:black; margin-top:20px;">Add More Color</a>
							<br>
							<div id="fn" hidden>
								 <input id="text-to-add" type="text" class="form-control" value="" >
                                                     <a id="new-item" class="btn btn-default" href="" style="color:black">Add </a>
							</div>
							
							</div>
							
							
													
                            <div class="col-md-2 field set-padding">
								<label for="product_sku" class="control-label">Size</label>
							</div>	
							<div class="col-md-4 set-padding11">
								 <select multiple="multiple" name="size[]" class="form-control drop1 chosen-select" id="size_id" data-value = "2" tabindex="4">
								
								 <?php if($size){ foreach($size as $row){?>
								 			<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
								 		<?php }} ?>
								 </select> 

                                <a id="s_in" class="btn btn-default" href="" style="color:black; margin-top:20px;">Add More Size</a>
							<br>
							<div id="sn" hidden>
								<input id="size-to-add" type="text" class="form-control" value="">
                                <a id="new-size" class="btn btn-default" href="" style="color:black">Add</a>
							</div>	
							</div>  	
							
						</div> 	



				</div>
				
				</div>
		</section> 








<div id="integration-list">
    <ul>    
	
	
<div class="col-md-9 col-sm-9 col-xs-12 price-colmn">
	<div class="box-shadow">
		
	
	
			<li>
				<a class="expand">
					<div class="right-arrow">-</div>
						<div class="heading" style="height:37px;background-color:#f89f12;padding:1px 15px 3px 15px">
							<h4 class="cal"><b>PRICING</b></h4>
						</div>
				</a>

                <div class="detail detail33" style="padding: 20px 15px 10px 15px;">
					<div class="form-group">
							<div class="col-md-2 set-padding field">
								<label for="item_price" class="control-label">Item Price</label>
							</div>
							<div class="col-md-4 set-padding12">
								  <input type="text" placeholder="Max Retail Price" name="item_price"  id="number1"  class="form-control">
                                  <span style="color: #ff0000;"><?php echo form_error('item_price'); ?></span>
                                  
							</div>
							<div class="col-md-2 set-padding field">
								<label for="price_d" class="control-label">Price after Discount</label>
							</div>
							<div class="col-md-4 set-padding12">
								<input type="text" placeholder="Price after Discount" id="number2" onkeyup="second();" name="price_d" class="form-control">
                                <span style="color: #ff0000;"><?php echo form_error('price_d'); ?></span>
							</div>
					</div>
				</div>
			</li>
		
	</div>
</div>
        <div class="col-md-3 col-sm-12 col-xs-12 set-padding cal-col">
		<div class="box-shadow">
		<div class="heading" style="height:37px;background-color:#f89f12;padding:1px 15px 3px 15px">
		 <h4 class="cal"><b>CALCULATION</b></h4></div>
		 <div class="row" style="padding: 25px 0px 25px 15px">	  
				<div class="col-md-12">

					    <h5 style="line-height: 26px;" id="num1">MRP: </h5>
                    <h5 style="line-height: 26px;" id="num2"></i></h5>
                    <h5 style="line-height: 26px;">Transaction Fee: <i class="fa fa-inr"></i><span style="line-height: 26px;" id="sh_fee"></span></h5>
                    <h5 style="line-height: 26px;">Shipping Fee: <i class="fa fa-inr"></i><span style="line-height: 26px;" id="shipping_fee2"></span></h5>
					<h5 style="line-height: 26px;">Category Commission: <i class="fa fa-inr"></i><span style="line-height: 26px;" id="category_comm_calc"></span></h5>
                   <h5 style="line-height: 26px;"  id="tocs"><?php
				  // echo "<pre>";print_r($coms);die;
				   if(!empty($coms)){
        
		foreach($coms as $rows):
    ?>
				   
				  
                
                  <?php 
				
                         $a = $rows->platform;
                        $b = $rows->marketing;
                        $c = $a + $b;
                        echo $c."%"; 
                  ?>
               
              <?php
        endforeach;
		} 
    ?>
               Plan Commission Subscribe:</h5>
					<h5 style="line-height: 26px;" class="border-btm" id="comiss"><?php print_r($com[1]->val); ?>% GST</h5>
				
				   </div>
			
				<div class="col-md-6">
					<h5 class="pd-top" >You Earn:<i class="fa fa-inr"></i> </h5>
				</div>
				<div class="col-md-6">
					<h5 class="pd-top" id="tot"></h5>
				</div>
			</div>
</div>             
</div>

<div class="col-md-9 col-sm-9 col-xs-12 price-colmn shipping">
	<div class="box-shadow">
			<li>
				<a class="expand">
					<div class="right-arrow">-</div>
						<div class="heading" style="height:37px;background-color:#f89f12;padding:1px 15px 3px 15px">
						<h4 class="cal"><b>SHIPPING</b></h4>
						</div>
				</a>

				<div class="detail detail2 set-padding">
					<div class="form-group">
							<div class="col-md-2 set-padding field">
								<label for="weight" class="control-label">Weight</label>
							</div>
							<div class="col-md-10 margin-btm set-padding12">
								  <select name="weight" id="weights" onchange="run()" class="btn btn-default">

                                  <option selected="selected" value="">Select weight</option>
								   <option value="60">0-5</option>
                                   <option value="120">.5-1</option>
                                   <option value="180">1-2</option>
                                   <option value="420">2-5</option>
                                  </select>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-2 set-padding field">
								<label for="shipping_fee" class="control-label">Shipping Fee</label>
							</div>
							<div class="col-md-10 margin-btm1 set-padding12">
								 <input type="text" name="shipping_fee" class="form-control" id="shipping_fee1">
                                 <span style="color: #ff0000;"><?php echo form_error('shipping_fee'); ?></span>
							</div>
						</div>
							  
						<div class="form-group margin-btm">
							<div class="col-md-2 set-padding field">
								<label for="ship_in" class="control-label">Ship In</label>
							</div>
							<div class="col-md-4 margin-btm set-padding12">
								<select name="ship_in" class="btn btn-default">
                                  <option selected="selected">Select Duration</option>
								   <option>1-2 days</option>
								   <option>2-3 days</option>
								   <option>4-7 days</option>
                                  
                                  </select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-2 set-padding field">
								<label for="paid_by" class="control-label">Paid By</label>
							</div>
							<div class="col-md-4 margin-btm set-padding12">
								  <input type="radio" checked class="ks" name="paid_by" value="1" id="me"> Me
								  <input type="radio" name="paid_by"  class="ks" value="2" id="buyer"> By Buyer<br>
							</div>
						</div>
				</div>
			</li>
			<li>
				<a class="expand">
					<div class="right-arrow">-</div>
						<div class="heading" style="height:37px;background-color:#f89f12;padding:1px 15px 3px 15px">
							<h4 class="cal"><b></b></h4>
						</div>
				</a>

                <div class="detail detail33" style="padding: 20px 15px 10px 15px;">
					<div class="form-group" title="At Amshoppie, our aim is to provide 100% satisfaction to our customers. If user has some issue with this product, it should be in its original packaging with all the parts and freebies with your original receipt for a refund/replacement. Please make sure that the product(s) are properly packed when you are returning it.">
							<div class="col-md-2 set-padding field">
								<label for="item_price" class="control-label">Return</label>
							</div>
							<div class="col-md-4 set-padding12">
								  <input name="return" id="return" class="form-control" type="checkbox">
                                  <span style="color: #ff0000;"></span>
                                  
							</div>
							<div class="col-md-2 set-padding field return_days_parent" style="display:none;">
								<label for="price_d" class="control-label">Return Days</label>
							</div>
							<div class="col-md-4 set-padding12 return_days_parent" style="display:none;">
								<input placeholder="Return Days" name="return_days" class="form-control" type="text" value="7">
                                <span style="color: #ff0000;"></span>
							</div>
							
							
							
					</div>
					
				</div>
				<div class="detail detail33" style="padding: 20px 15px 10px 15px;">
					<div class="form-group" title="At Amshoppie, our aim is to provide 100% satisfaction to our customers. If user has to exchange product for color/size, it should be in its original packaging with all the parts and freebies with your original receipt for a refund/replacement. Please make sure that the product(s) are properly packed when you are returning it.">
						<div class="col-md-2 set-padding field">
								<label for="item_price" class="control-label">Exchange</label>
							</div>
						<div class="col-md-4 set-padding12">
								  <input name="exchange" id="exchange" class="form-control" type="checkbox">
                                  <span style="color: #ff0000;"></span>
                                  
							</div>
							<div class="col-md-2 set-padding field exchange_days_parent" style="display:none;">
								<label for="price_d" class="control-label">Exchange Days</label>
							</div>
							<div class="col-md-4 set-padding12 exchange_days_parent" style="display:none;">
								<input placeholder="Exchange Days" name="exchange_days" class="form-control" type="text" value="7">
                                <span style="color: #ff0000;"></span>
							</div>
					</div>
				</div>
			</li>
		
	</div>
</div>


    </ul>
</div>
			

			<!--  important -->
			
			<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						
					</div>
			</div>

  
   
 <div id="integration-list">
    <ul>
	
		<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0px 0px;">
			<div class="box-shadow">
		
				<li>
					<a class="expand">
						<div class="right-arrow">-</div>
							<div class="heading" style="height:37px;background-color:#f89f12;padding:1px 15px 3px 15px">
								<h4 class="cal"><b>UPLOAD IMAGE</b></h4>
							</div>
					</a>
					<div class="col-md-12 col-sm-12 col-xs-12 boxx">
						<input type="file" name="userfiles[]" value="fileupload" id="fileupload"  multiple>
							<div class="col-md-3"><label for="fileupload" class="fileupload">
							</label> </div>
																
						 </div> 
						     
		  
						<div class="detail detail22">
							<div class="row padding11">
							
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
										<script src="<?php echo base_url('assets/seller/js/chosen.jquery.js'); ?>"></script>
										
	<script>
		
$(function() {
  $(".expand").on( "click", function() {
    $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});

</script>		
										
										
				<script type="text/javascript">
var shipping = 0;
var category_comm = 0;
$(document).ready(function(){
$('#shipping_fee1').on('keyup', function(){
	if($("input[name='paid_by']:checked").val() == 2) {
		shipping = 0;
	} else {
		shipping = $('#shipping_fee1').val();
	}
	calc();
});
	$('input[name="paid_by"]').on('click', function(){
		if($(this).val() == 2) {
			shipping = 0;
		}
		calc();
	});
	
});
	  $('#number1, #number2').keypress(function(e) {

        if(isNaN(this.value+""+String.fromCharCode(e.charCode))) return false;
    })
        .on("cut copy paste",function(e){
            e.preventDefault();
        });
    $(".kk").click(function(){
        ks =   $("input[name='gender']:checked").val();
        $('#s').text(ks);
    });




    $('#weight').click(function(){
        textinput3 = $('#weight').val();
        $('#shipping').text(textinput3);
    });


    trcharge = '';
    comission = '';
    
    $('#com').on('change', function(){
        if($('#com').val() == 1){
            trcharge = 0;

            $('#sh_fee').text(trcharge).show();

        }else{
            trcharge = <?php print_r($com[0]->val); ?>;
            $('#sh_fee').text(trcharge).show();

            comission = (Number(<?php echo isset($c) ? $c : 0; ?>)*Number(textinput2)*Number(category_comm)/100)/100 *18;

            toc = <?php echo isset($c) ? $c : 0; ?>*Number(textinput2)*Number(category_comm)/100;

        }
        calc();

    });



    $("#number1, #number2").on('keyup', function(){

        calc();
    });

//});

function calc(){
	category_comm = parseInt($.trim($('#commission').text()));
	//alert(category_comm);
	if($("input[name='paid_by']:checked").val() == 1) {
		shipping = $('#shipping_fee1').val();
	}
	$('#shipping_fee2').text(shipping);
    textinput = $('#number1').val().substring(0,8);

    $('#num1').text(('Item Price : ') + textinput)

    textinput2 = $('#number2').val();
    $('#num2').text(('Discount Price : ') + textinput2);

    if(textinput2==false){
        if(trcharge == 0){
            comission = 0;
            toc = 0;
        }else{
            comission = (Number(<?php echo $c; ?>)*Number(textinput2)*Number(category_comm)/100)/100 *18;

            toc = <?php echo $c; ?>*Number(textinput2)*Number(category_comm)/100;
        }
        t =   Number(trcharge)+Number(textinput2)+Number(toc);
        c =(Number(textinput2)-Number(shipping))-Number(toc)-Number(trcharge)-Number(comission)-Number(category_comm);
        $('#tocs').text(('<?php echo $c; ?>% Plan Commission Subscribe : ') + toc);
        $('#comiss').text(('18 GST on Comssion : ') + comission.toFixed(2) + (''));

        $('#tot').text(c.toFixed(2));
    }else{
        if(trcharge == 0){
            comission = 0;
            toc = 0;
        }else{
            comission =(Number(<?php echo $c; ?>)*Number(textinput2)*Number(category_comm)/100)/100 *18;
			
            toc = <?php echo $c; ?>*Number(textinput2)*Number(category_comm)/100;
        }
        t =   Number(trcharge)+Number(textinput2)+Number(toc);

        c =(Number(textinput2)-Number(shipping))-Number(toc)-Number(trcharge)-Number(comission)-Number(category_comm);

        $('#tocs').text(('<?php echo $c; ?>% Plan Commission Subscribe: ') + toc);
        $('#comiss').text(('18 GST on Comission : ') + comission.toFixed(2) + (''));
        $('#tot').text(c.toFixed(2));
    }
	//textinput2 = $('#shipping_fee1').val();
    //$('#shipping_fee2').text(('shipping_fee : ') + textinput2);

}
</script>						
										
										
										
										
										
										
										
<script>

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#fileupload").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
		 
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='col-md-3 box-img'>" + "<span class=\"pip\">" +
            "<div class=\"picture\"><img class=\"imageThumb1\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
			"<span class=\"remove\">x</span>"+
			"<br><br>"+
			"<div class=\"\"><label><input type=\"radio\" value=\"1\" name='main_image"+i+"'>Make Primary Image</label></div>"+
            "</span>" + "</div>").insertAfter("#fileupload"); 
          //$('span').click(function(){
			  
		  //});
		  $(".remove").click(function(){
			 // confirm("Are You Sure To Delete This Image?");
			 if (window.confirm('Are you sure to delete?')) 
    {
            $(this).parent(".pip").remove();
	}
          });
		   
		   
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API");
  }
  
  
});
</script>

</div>
</div>

						                     
				
				</li>
			</div>
		</div>
	</ul>
</div>

<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
								<div class="col-md-3"></div> 
								<div class="col-md-9" style="float:right">
										<input type="submit" class="btn btn-default btn-product" value="Add Product">
								</div>
						</div>
					</div>
			</div>

</form>		
</section>
  
			
</aside>
<script>

function del_img(id){
 
  var deleteid = id;
  alert(deleteid);
  //alert(deleteid);
    if (window.confirm('Are you sure to delete?')) 
    {
           // alert("yes");
      $.ajax({
     type: 'POST',
     url: 'delete_img',
     data: 'deleteid='+deleteid,
     success: function(data){
     //alert(data);die;
      data = JSON.parse(data);
    if(data.message=='Not')
     {
      //alert("Impossible to delete this category");
     $("#msg").html("Can't be deleted this image").fadeIn(3000).fadeOut(6000);
         } 
       else if(data.message=='Success')
       {
       location.reload(); 
       }
        else
       {
       alert("Something wrong please try again") 
       } 
       
     },
     error:function(error){
     
     alert("error");
     }
  
                     }); 
                   return false;
      
             }
    else
    {
    //alert("No"); 
    }
  }


<?php }else{
    redirect(base_url('seller/login?msg = Please login to continue'));
} ?>
	

$(document).on('change', '.get_parentid', function () {
  
  var indexid = $(this).index() ;
 //alert(indexid );
	$('#commission').remove();
    var si =  this.selectedIndex;
     
     var get_parentid = $(this).val();
   
    var sel = $(this).attr('id');
    //alert(sel);

     var length = $("select.get_parentid").length;
  
  var BASE_URL = "<?php echo base_url();?>";

$('select.get_parentid').each(function (i) {
    var indexNew = $(this).index();
    if(indexNew > indexid) {
        $(this).remove();
    }
});
    $.ajax({
   method:'post',
   data:{get_parentid:get_parentid},
   datatype:'html',
   url:BASE_URL+'product/cat_add',
   success:function(result){
   var response= result;


 $('#parent_id').append(result);



 //$('#parent_id').remove();
 
 
  
//});
   },
   
        })
        
});
</script>
<script>
$("#c_in").click(function(e) {
	 e.preventDefault();
	
  $("#fn").show();
  
});

$("#new-item").click(function(e) {
	 e.preventDefault();
	
  $("#fn").hide();
  
});


</script>


<script>
$("#s_in").click(function(e) {
	 e.preventDefault();
	
  $("#sn").show();
  
});

$("#new-size").click(function(e) {
	 e.preventDefault();
	
  $("#sn").hide();
  
});


</script>
<script>
$(document).ready(function () {
    $('#new-item').click(function() {
		
		  
		 
		 // alert($(this).attr('data-value'));
		           var colour   = $('#text-to-add').val();
				   var color_parentid =  $("#color_id").attr("data-value")
		//  alert(color_parentid);
    	console.log($('#text-to-add').val());
        $('select.drop').append( '<option>' + $('#text-to-add').val() + '</option>selected' );
	
        //  $("#text-to-add")[0].reset();
         // $('#text-to-add').val('');
		  var BASE_URL = "<?php echo base_url();?>";
		  $.ajax({
   method:'post',
   data:{colour:colour,color_parentid:color_parentid},
   datatype:'html',
   url:BASE_URL+'product/color_add',
   success:function(result){
   var response= result;


   },
   
        })
		$('#text-to-add').val('');
  return false;
    });
});
</script>
<script>
$(document).ready(function () {
    $('#new-size').click(function() {

	 var size   = $('#size-to-add').val();
		var size_parentid =  $("#size_id").attr("data-value")
	//	  alert(size_parentid);		   
    	console.log($('#size-to-add').val());
        $('select.drop1').append( '<option>' + $('#size-to-add').val() + '</option>' );
	
  
		  var BASE_URL = "<?php echo base_url();?>";
		  $.ajax({
   method:'post',
   data:{size:size,size_parentid:size_parentid},
   datatype:'html',
   url:BASE_URL+'product/size_add',
   success:function(result){
   var response= result;


   },
   
        })
		$('#size-to-add').val('');
  return false;
    });
	
	$(document).on('change', '#return', function() {
	  if($(this).is(':checked')) {
		  //display popup and return days input box here
		  $('#return_days').val(7);
		  $('.return_days_parent').show();
	  } else {
		  //hide return days input box
		  $('#return_days').val(0);
		  $('.return_days_parent').hide();
	  }
  });
  $(document).on('change', '#exchange', function() {
	  if($(this).is(':checked')) {
		  //display popup and return days input box here
		  $('#exchange_days').val(7);
		  $('.exchange_days_parent').show();
	  } else {
		  //hide return days input box
		  $('#exchange_days').val(0);
		  $('.exchange_days_parent').hide();
	  }
  });
});

$(".chosen-select").chosen();
</script>
