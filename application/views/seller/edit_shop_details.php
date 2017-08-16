<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
        <section class="content">
						
						 <div class="row">
                	<div class="col-md-12">
                    	<div class="panel panel-default">
                          <div class="panel-heading">Edit Shop Detail</div>
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
                          <form method="post" action="<?php echo base_url();?>shop/edit_shop?id=<?php echo $_GET['id']; ?>"<class="form-horizontal" enctype="multipart/form-data">
                           <?php
								foreach($records as $row):
								 ?>
						
                    	<div class="row">
                        	<!--<div class="col-md-2"><!--left side--> <!--</div>-->
                            <div class="col-md-12">
                            	<div class="row detail">
                            	 
                        	
                           <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">EMAIL<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="email" class="form-control" id="inputText3" value="<?=$row->email;?>"> </div>
						   
                            
                               
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">SHOP NAME<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="shope_name" class="form-control" id="inputText3" value="<?=$row->shope_name;?>"> </div>
                              
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">ADDRESS<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="address" class="form-control" id="inputText3" value="<?=$row->address;?>"> </div>
                                
                           <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">LOCALITY<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="locality" class="form-control" id="inputText3" value="<?=$row->locality;?>"> </div>
                                
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">LANDMARK<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="landmark" class="form-control" id="inputText3" value="<?=$row->landmark;?>"> </div>
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">pan<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="pan" class="form-control" id="inputText3" value="<?=$row->pan;?>"> </div>
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">GSTIN<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="gstin" class="form-control" id="inputText3" value="<?=$row->gstin;?>"> </div>
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">PHONE<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="phone" class="form-control" id="inputText3" value="<?=$row->phone;?>"> </div>
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">STATE<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="state" class="form-control" id="inputText3" value="<?=$row->state;?>"> </div>
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">VAT<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="vat" class="form-control" id="inputText3" value="<?=$row->vat;?>"> </div>
                             
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">SHIP IN<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="ship_in" class="form-control" id="inputText3" value="<?=$row->ship_in;?>"> </div>
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">ship_within<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="ship_within" class="form-control" id="inputText3" value="<?=$row->ship_within;?>"> </div>
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">PINCODE<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="pincode" class="form-control" id="inputText3" value="<?=$row->pincode;?>"> </div>
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">CITY<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="city" class="form-control" id="inputText3" value="<?=$row->city;?>"> </div>
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">COUNTRY<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="country" class="form-control" id="inputText3" value="<?=$row->country;?>"></div>
                             
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">Logo<span class="required" style="color:#F00">*</span></label></div>  <div class="col-md-8" style="margin-bottom:10px;">  
                             <tr><td><input type="file" class="form-control" name="userfile" value="<?= $row->logo; ?>" /><span><?php echo form_error('userfile'); ?></span></td></tr><br>

                    </tr>
                    
                    <tr>
                        <th></th><td><img src="<?= base_url('uploads/'.$row->logo); ?>" width="100px" height="100px"></td>
                    </tr>
                    </div>
                    
                   <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">Banner<span class="required" style="color:#F00">*</span></label></div>  <div class="col-md-8" style="margin-bottom:10px;">  
                             <tr><td><input type="file" class="form-control" name="userfile1" value="<?= $row->banner; ?>" /><span><?php echo form_error('userfile1'); ?></span></td></tr><br>

                    </tr>
                    
                    <tr>
                        <th></th><td><img src="<?= base_url('uploads/'.$row->banner); ?>" width="100px" height="100px"></td>
                    </tr>   </div>
                          

                                <!--div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">LOGO<span class="" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="file" name="userfile"  class="form-control" /></div>
                                <!--div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">BANNER<span class="" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="file" name="userfile" class="form-control" /></div!-->
								 <?php endforeach; ?>
							 <div class="col-md-10" style="margin-bottom:10px;"> </div>
						   <div class="col-md-2" style="margin-bottom:10px;">
						   <input type="submit" name="submit" class="form-control bank-btn" value="Update Detail"/></div>
						   
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
		
		
	
		
		
		
		
		</section>
		
		</aside>
		<?php }else{
    redirect('seller/login?msg=Please login to continue');
} ?>