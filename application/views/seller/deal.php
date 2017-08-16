<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
	<section class="content">
		<div class=""style=" margin-bottom: 20px;">
			<div class="col-md-3 col-sm-3 col-xs-12 field set-padding" >
				<label for="quantity" class="control-label">Select the Category</label>
			</div>
			<form method="post" action="<?php echo base_url();?>deal/fetch" >
			<div class="col-md-4 col-sm-4 col-xs-12 set-padding11 " id="parent_id">
				
				<select name="category_name" class="btn btn-default cat_btn23 get_parentid" id="get_parentid" >
                    <option selected="selected" id="child_id" >Select Category</option>
					<?php  
					foreach($records as $row){ ?>
						<option value="<?php print_r($row->cat_id); ?>"><?php print_r($row->cat_name); ?></option>
					<?php  } ?>
				</select>
			</div>
			<button type="submit" >Fetch Products</button>
			</form>
		</div>
		<div>
		
		<table style="border: 1px solid #f89f12;float: left;">
			<thead>
				<tr style="background-color: #f89f12; color: #ffffff;">
					<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">product Id</th>
					<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">product Name</th>
					<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">Offer Price</th>
					<!--<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">Name</th>-->
					<th style="padding: 10px;width: 15%;text-align: center; border-right: 1px solid #fff;">Image</th>
					<th style="padding: 10px;width: 15%;text-align: center;">Action</th>	
				</tr>
			</thead>
			<tbody style="text-align: center;">
		<?php foreach($deal_product as $row){?>
		<tr>
		<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;"><?php echo $row['product_id']; ?></td>
		<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;"><?php echo $row['product_name']; ?></td>
		<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;"><?php echo $row['offer_price']; ?></td>
		<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;"><img src="<?php echo base_url('uploads');?>/<?php echo $row['image'];?>"  /></td>
		<td style="border: 1px solid #f89f12; padding: 10px; background-color: white;">
			<form method="post" action="<?php echo base_url();?>deal/deal_edit"><input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>" ><button type="submit" class="btn btn-default">Edit</button></form>
			<form method="post" action="<?php echo base_url();?>deal/deal_remove"><input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>" ><button type="submit" class="btn btn-default">Remove</button></form>
		</td>
		
		</tr>
		<?php }?>
		</tbody>
		</table>
		</div>
		</section>
		
	
</aside>
<script>
$(document).on('change', '.get_parentid', function () {
  var indexid = $(this).index() ;
 //alert(indexid );
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
<?php }?>
