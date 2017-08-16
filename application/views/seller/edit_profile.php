<style>
.ui-datepicker{
	background: rgb(248, 159, 18) none repeat scroll 0% 0%;
	padding: 15px;
}
.ui-icon-circle-triangle-e{
float:right;
}
</style>
<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
        <section class="content">
						
						 <div class="row">
                	<div class="col-md-12">
                    	<div class="panel panel-default">
                          <div class="panel-heading">Edit Profile Detail</div>
                          <div class="panel-body">
                          
                          <div class="col-md-12">
                          
                          
                          <?php 
									if(!empty($_GET['msg'])){
										?>
                          	<center><h3><span class="label label-warning">
										<?php echo $_GET['msg']; ?>
                            </span></h3></center>
                            <?php
							}
								?>
                          <form method="post" action="<?php echo base_url();?>profile/edit_profile?id=<?php echo $id; ?>"<class="form-horizontal" enctype="multipart/form-data">
                          <?php $row = $records; ?> 
						
                    	<div class="row">
                        	<!--<div class="col-md-2"><!--left side--> <!--</div>-->
                            <div class="col-md-12">
                            	<div class="row detail">
                            	 
                        	
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">Name<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="name" class="form-control" id="inputText3" value="<?=isset($row['name'])? $row['name'] : '';?>"> </div>
                              <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">Gender<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="gender" class="form-control" id="inputText3" value="<?=isset($row['gender'])? $row['gender'] : '';?>"> </div>
                              
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">Bio<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="bio" class="form-control" id="inputText3" value="<?=isset($row['bio']) ? $row['bio'] : '';?>"> </div>
                                
                           <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">Dob<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="dob" class="form-control datepicker"  value="<?=isset($row['dob']) ? $row['dob'] : '';?>"> </div>
                                
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">City<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="city" class="form-control" id="inputText3" value="<?=isset($row['city']) ? $row['city'] : '';?>"> </div>

                              <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">Image</label></div><div class="col-md-8" style="margin-bottom:10px;">  
                             <tr><td><input type="file" class="form-control" name="userfile" value="<?=isset($row['image']) ? $row['image'] : ''; ?>" /><span><?php echo form_error('userfile'); ?></span></td></tr><br>

                    </tr>
                    
                    <tr>
                        <th></th><td>
						<?php if(isset($row['image']) && !empty($row['image'])) { ?>
						<img src="<?= base_url('uploads/'.$row['image']); ?>" width="100px" height="100px">
						<?php } ?>
						</td>
                    </tr>   </div> 
							 <div class="col-md-10" style="margin-bottom:10px;"></div>
						   <div class="col-md-2" style="margin-bottom:10px;">
						   <input type="submit" name="submit" class="btn btn-default btn-product" value="Update Detail"/></div>
						   
						</form>
                        </div>            
                            </div>
                            <div class="col-md-2"><!--right side--></div>
                        </div>
                        
                        </div>        
                        <div class="col-md-2">
                        </div>
                          </div>
                        </div>
                    </div>
                </div>
						</div>
						</div>
		
		
		</section>
		
		
	<script>
$('body').on('focus',".datepicker", function(){
    $(this).datepicker();
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="input-line-control removeMe"><div class="col-md-8"><div class="form-group"><input type="text" class="form-control datepicker" placeholder="Pick the date"></div></div><div class="col-md-4"><button class="btn btn-danger remove-date"><i class="fa fa-remove"></i>Remove</button></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove-date", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMe').remove(); x--;
    })
});	
</script>
		
		
		
		
		</section>
		
		</aside>
		<?php }else{
    redirect(base_url('seller/login?msg=Please login to continue'));
} ?>