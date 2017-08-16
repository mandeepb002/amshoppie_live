<?php if($this->session->userdata('id')==true){ ?>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />		
		<link href="<?php echo base_url('assets/seller/css/chosen.css'); ?>" rel="stylesheet">		
	<aside class="right-side">
            <section class="content">
               <section class="box-shadow" style="height:528px;"> 
				<div class="box-title">
				<h2 class="section-title add-p"> Product Information </h2>
					<!--div class="box-tools pull right">
						<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
						</button>
					</div-->
					   
				</div>
		
				<div class="row padding1" style="padding-top: 27px;">
					<!-- <div class="col-md-2 col-sm-2 col-xs-2"></div> -->
				
					<div class="col-md-12 col-sm-12 col-xs-12 cover">

				
				<form method="post" action="<?php echo base_url();?>product/edit_productt?id=<?php echo $_GET['id']; ?>" class="form-horizontal" enctype="multipart/form-data" style="margin-top:0;">
				
						  <?php
								$i= sizeOf($categorydata);
								 ?>
									
											
											
						 <div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="product_name" class="control-label">Name</label>
							</div>
							<div class="col-md-10 set-padding11">
								  <input type="text" required="required" name="product_name" class="form-control" id="inputText3" value="<?=$row->product_name;?>" /> 
							</div>
						</div>
							  

                          
                              <div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="quantity" class="control-label">Category</label>
							</div>
							<div class="col-md-4 set-padding11" id="parent_id">
							
						
					
					<?php 
					$j=($i-1);
					
					for($j;$j>=0;$j--){?>
					<select name="category_name" class="btn btn-default cat_btn23 get_parentid aaa" id="get_parentid">
					<option selected="selected" value= <?php echo $categorydata[$j]['id']; ?>><?php echo  $categorydata[$j]['name']; ?></option>
					
					<?php 
					$cats=$categorydata[$j]['allcats'];
					
					foreach($all as $row1){?>
                                <option value= <?php  echo $row1->cat_id; ?> <?php  if($row->cat_id == $categorydata[$j]['id']) echo 'selected="selected"'; ?> > <?php echo  $row1->cat_name; ?> </option>
    				<?php }
    				 ?>
                          </select>
					<?php }
				 ?> 
				
				
                          
					
                          
						</div>
						
						
						
							<div class="col-md-2 field set-padding">
								<span><label for="commission" class="control-label">TP/Commission</label></span>
							</div>
							<div class="col-md-4 set-padding11">
                            
								<select name="commission_type" class="form-control border11" id="com" style="background: #f0efef">
									<option value="">Choose</option>
									<option value="1" <?php  if($row->commission_type == '1') echo 'selected="selected"'; ?>>TP</option>
									<option value="2" <?php  if($row->commission_type == '2') echo 'selected="selected"'; ?>>COMMISSION</option>
								</select>
                              </div>
                              
                              
                            </div>  
                              
                              
                              
                              
                              
                              
                              
						<div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="description" class="control-label">Description</label>
							</div>	
							<div class="col-md-10 set-padding11">
								 <textarea placeholder="Enter the Description" name="description" class="form-control" id= "description" value=""><?=$row->description;?></textarea>
                                
							</div>
						</div>  
						
						<div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="country_code" class="control-label">Country Code</label>
							</div>
							<div class="col-md-4 set-padding11">
								   <input type="text" placeholder="Country Code" name="country_code" class="form-control" id= "country_code" value="<?=$row->country_code;?>">
							</div>
						
							  
						
							<div class="col-md-2 field set-padding">
								<label for="mer_sku" class="control-label">Merchant SKU</label>
							</div>	
							<div class="col-md-4 set-padding11">
								 <input type="text" placeholder="Merchant SKU" name="mer_sku" class="form-control" id="mer_sku"  value="<?=$row->mer_sku;?>">
                                
							</div>
						</div>
                        
                        
                        <div class="form-group">
                              	
							<div class="col-md-2 field set-padding">
								<label for="quantity" class="control-label">Quantity</label>
							</div>	
							<div class="col-md-4 set-padding11">
								 <input type="text" placeholder="Quantity" name="quantity" class="form-control" id="quantity" 						                                   value="<?=$row->quantity;?>">
                                
							</div>
						 
                      
							<div class="col-md-2 field set-padding">
								<label for="product_sku" class="control-label">Product SKU</label>
							</div>	
							<div class="col-md-4 set-padding11">
								 <input type="text" placeholder="Product SKU" name="product_sku" class="form-control" id="product_sku"                                   value="<?=$row->product_sku;?>">
                                
							</div>
			              </div>

				
		               	<div class="form-group">
							<div class="col-md-2 field set-padding">
								<label for="mer_sku" class="control-label">Colour</label>
							</div>	
							<div class="col-md-4 set-padding11">
							<?php //echo "<pre>";print_r($colour_attr);die; ?>
								 <select multiple="multiple" name="colour[]" class="form-control drop chosen-select" id="color_id" data-value ="1"  tabindex="4">
								<?php /*foreach($colour_attr as $color ){ ?>
								<option value="<?php echo $color->id; ?>" selected><?php echo $color->name; ?></option>
								<?php }*/ ?>
								 	<?php if($colour){ 
											foreach($colour as $row1){
												$selected = '';
												if(!empty($colour_attr)) {
													foreach($colour_attr as $color ){
														if($color->name == $row1->name) {
															$selected = 'selected="selected"';
															break;
														}
													}
												}
										?>
								 			<option value="<?php echo $row1->id; ?>" <?php echo $selected;?>><?php echo $row1->name; ?></option>
								 		<?php }} ?>
								 </select>
								 <a id="c_in" class="btn btn-default" href="" style="color:black; margin-top: 20px;">Add More Color</a>
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
								 <select multiple="multiple" name="size[]" class="form-control drop1 chosen-select" id="size_id" data-value = "2"  tabindex="4">
								 
                                     <?php if($size){ 
											foreach($size as $row2){
												$selected = '';
												if(!empty($size_attr)) {
													foreach($size_attr as $size_m ){
														if($size_m->name == $row2->name) {
															$selected = 'selected="selected"';
															break;
														}
													}
												}
										?>
								 			<option value="<?php echo $row2->id; ?>" <?php echo $selected;?>><?php echo $row2->name; ?></option>
								 		<?php }} ?>
								 
								 
								 </select> 

                                <a id="s_in" class="btn btn-default" href="" style="color:black; margin-top: 20px;">Add More Size</a>
							<br>
							<div id="sn" hidden>
								<input id="size-to-add" type="text" class="form-control" value="">
                                <a id="new-size" class="btn btn-default" href="" style="color:black">Add</a>
							</div>	
							</div>  	
							
						</div> 	


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
		





<div id="integration-list" style="margin-top:64px;">
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
                   
  
				<div class="detail detail33" style="padding: 20px 15px 4px 15px;">
					<div class="form-group">
							<div class="col-md-2 set-padding field">
								<label for="item_price" class="control-label">Item Price</label>
							</div>
							<div class="col-md-4 set-padding12">
								  <input type="text" placeholder="Max Retail Price" name="item_price" class="form-control" id="item_price" value="<?=$row->item_price;?>">
                                  <span class="error"></span>
							</div>
						
							  
						  
							<div class="col-md-2 set-padding field">
								<label for="price_d" class="control-label">Price after Discount</label>
							</div>
							<div class="col-md-4 set-padding12">
								<input type="text" placeholder="Price after Discount"  name="price_d" class="form-control" id="price_d" value="<?=$row->price_d;?>">
                                <span class="error"></span>
							</div>
							
							
							
		          </div>
				  
				  <div class="form-group">
				  
				  
				  <?php 

				  if($row->commission_type == '1' && $this->session->userdata('usertype')== '3' || $this->session->userdata('usertype')== '4') {?>
							<div class="col-md-2 set-padding field">
								<label for="price_tp" class="control-label">TP Price</label>
							</div>
							<div class="col-md-4 set-padding12">
								<input type="text" placeholder="TP Price"  name="tp_price" class="form-control" id="price_d" value="<?=$row->tp_price;?>">
                                <span class="error"></span>
							</div>
							<?php } ?>
				  
				  </div>
				  
				  <div>
				  
				  
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
					<h5 style="line-height: 26px;">MRP: </h5>
					<h5 style="line-height: 26px;">Shipping fee: </h5>
					<h5 style="line-height: 26px;">10% Commission</h5>
					<h5 style="line-height: 26px;" class="border-btm">15% Service Tax<br>
						On Commission: </h5>
					
				</div>
				
				<div class="col-md-6">
					<h5 class="pd-top">You Earn: </h5>
				</div>
				<div class="col-md-6">
					<h5 class="pd-top">$ 0 </h5>
				</div>
			</div>
</div>             
</div>





<div class="col-md-9 col-sm-9 col-xs-12 price-colmn shipping" style="margin-top: -201px;">
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
								
                                  <option selected="selected" value=""><?=$row->weight;?></option>
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
								 <input type="text" name="shipping_fee" class="form-control" id="shipping_fee" value="<?=$row->shipping_fee;?>">
							</div>
						</div>
							  
						<div class="form-group margin-btm">
							<div class="col-md-2 set-padding field">
								<label for="ship_in" class="control-label">Ship In</label>
							</div>
							
						
						<div class="col-md-4 margin-btm set-padding12">
								<select name="ship_in" class="btn btn-default">
                                  <option selected="selected"><?=$row->ship_in;?></option>
								   <option>1-2 days</option>
								   <option>2-3 days</option>
								   <option>4-7 days</option>
                                  
                                  </select>
							</div>
						
						
						
						<div class="form-group">
							<div class="col-md-2 set-padding field">
								<label for="paid_by" class="control-label">Paid By</label>
							</div>
							<div class="col-md-4 set-padding12" style="line-height: 2.4;">
						
								  <input type="radio" checked class="ks" name="paid_by" value="<?=$row->paid_by;?>" id="me"> Me
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
					<?php $return_days = isset($row->return_days) ? $row->return_days : ''; ?>
					<div class="form-group" title="At Amshoppie, our aim is to provide 100% satisfaction to our customers. If user has some issue with this product, it should be in its original packaging with all the parts and freebies with your original receipt for a refund/replacement. Please make sure that the product(s) are properly packed when you are returning it.">
							<div class="col-md-2 set-padding field">
								<label for="item_price" class="control-label">Return</label>
							</div>
							<div class="col-md-4 set-padding12">
								  <input name="return" id="return" class="form-control" type="checkbox" <?php echo !empty($return_days) ? 'checked="checked"' : ''; ?>>
                                  <span style="color: #ff0000;"></span>
                                  
							</div>
							<div class="col-md-2 set-padding field return_days_parent" style="display:none;">
								<label for="price_d" class="control-label">Return Days</label>
							</div>
							<div class="col-md-4 set-padding12 return_days_parent" style="display:none;">
								<input placeholder="Return Days" name="return_days" class="form-control" type="text" value="<?=$return_days;?>">
                                <span style="color: #ff0000;"></span>
							</div>
							
							
							
					</div>
					
				</div>
				<div class="detail detail33" style="padding: 20px 15px 10px 15px;">
				<?php $exchange_days = isset($row->exchange_days) ? $row->exchange_days : ''; ?>
					<div class="form-group" title="At Amshoppie, our aim is to provide 100% satisfaction to our customers. If user has to exchange product for color/size, it should be in its original packaging with all the parts and freebies with your original receipt for a refund/replacement. Please make sure that the product(s) are properly packed when you are returning it.">
						<div class="col-md-2 set-padding field">
								<label for="item_price" class="control-label">Exchange</label>
							</div>
						<div class="col-md-4 set-padding12">
								  <input name="exchange" id="exchange" class="form-control" type="checkbox" <?php echo !empty($exchange_days) ? 'checked="checked"' : ''; ?>>
                                  <span style="color: #ff0000;"></span>
                                  
							</div>
							<div class="col-md-2 set-padding field exchange_days_parent" style="display:none;">
								<label for="price_d" class="control-label">Exchange Days</label>
							</div>
							<div class="col-md-4 set-padding12 exchange_days_parent" style="display:none;">
								<input placeholder="Exchange Days" name="exchange_days" class="form-control" type="text" value="<?=$exchange_days;?>">
                                <span style="color: #ff0000;"></span>
							</div>
					</div>
				</div>
			</li>
		
	</div>
</div>


    </ul>
</div>

  <!--section class="box-shadow"> 
				<div class="box-title">
				<h2 class="section-title add-p"> Variants </h2>
				</div>
				<div class="row">
				</div>
  
			</section-->
  
		  
		   
  

                   
			
			

			<!--  important -->
			
			<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						
					</div>
			</div>

  
 


			<section class="box-shadow"> 
				<div class="box-title">
				<h2 class="section-title add-p"> Variants </h2>
				</div>
				<div class="row">
				</div>
  
			</section>

   
 	
  
 <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						
					</div>
			</div>


			<!--<section class="box-shadow">
				<div class="box-title">
				<h2 class="section-title add-p"> Variants </h2>
				</div>
				<div class="row">
				</div>
  
			</section>-->

   
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
						     
		  
						<div class="detail detail22">
							<div class="row padding11">
								<!--label class="camera" for="camera"></label>
									<input id="camera" type="file">
									<!--i class="fa fa-picture-o" aria-hidden="true"></i-->
                                    
<div class="row">

			
			
			 <?php 
	 $condition = array(
	 'p_id' => $row->id,
	 
	 //'main_image' => 1,
	 );
	 $this->db->select('*');
	 		$this->db->from('product_image');
			$this->db->where($condition); 
			$query = $this->db->get();
			if($query->num_rows()>0){?>
            <?php foreach($query->result() as $rows){

			?>
				<div class="col-md-3">
				<img src="<?= base_url()."uploads/".$rows->image; ?>" class="imageThumb1" /><br><br>
				<span class="remove edit-remove" onclick="del_img(<?php echo $rows->id ;?>);">Remove image</span><br>
				</div>		
			
			<?php	} }
	 ?>
			
              <input type="file" name="userfiles[]" value="fileupload" id="fileupload"  multiple>
			  <div class="col-md-3">
				<label for="fileupload" class="fileupload"></label>
			</div>                                  
 </div> 



								</div>
							</div>
						
				</li>
				</div>
			</div>
		
	</ul>
</div>
    <?php //endforeach; ?>
<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
								<div class="col-md-3"></div> 
								<div class="col-md-9" style="float:right">
										<input type="submit" class="btn btn-default btn-product" value="Update Product">
								</div>
						</div>
					</div>
			</div>

</form>
</div>
				<!-- <div class="col-sm-2 col-xs-2"></div> -->
				</div>
</section> 		
</section>
  
			
</aside>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
										<script src="<?php echo base_url('assets/seller/js/chosen.jquery.js'); ?>"></script>
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
      
	
$(document).on('change', '.get_parentid', function () {
  var indexid = $(this).index() ;
     var get_parentid = $(this).val();
   //  alert(get_parentid);
    var sel = $(this).attr('id');
  // alert(sel );
     
   // alert(length);
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
	if($('#return').is(':checked')) {
		$('.return_days_parent').show();
	}
	if($('#exchange').is(':checked')) {
		$('.exchange_days_parent').show();
	}
	$(document).on('change', '#return', function() {
	  if($(this).is(':checked')) {
		  //display popup and return days input box here
		  $('#return_days').val();
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
		  $('#exchange_days').val();
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
		     
 
<?php }else{
    redirect('seller/login?msg=Please login to continue');
}?>