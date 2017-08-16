<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
        <section class="content">
						
						 <div class="row">
                	<div class="col-md-12">
                    	<div class="panel panel-default">
                          <div class="panel-heading">Edit Bank Detail</div>
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
                          <form method="post" action="<?php echo base_url();?>seller/edit_banked?id=<?php echo $_GET['id']; ?>"<class="form-horizontal" enctype="multipart/form-data">
                           <?php
								foreach($records as $row):
								 ?>
						
                    	<div class="row">
                        	<!--<div class="col-md-2"><!--left side--> <!--</div>-->
                            <div class="col-md-12">
                            	<div class="row detail">
                            	 
                        	
                           <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">BANK ACCOUNT NUMBER<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="ban" class="form-control" id="inputText3" value="<?=$row->ban;?>"> </div>
						   
                            
                               
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">IFSC CODE<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="ifsc" class="form-control" id="inputText3" value="<?=$row->ifsc;?>"> </div>
                              
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">FULL NAME<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="full_name" class="form-control" id="inputText3" value="<?=$row->full_name;?>"> </div>
                                
                           <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;"> BANK NAME<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="bank_name" class="form-control" id="inputText3" value="<?=$row->bank_name;?>"> </div>
                                
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">BANK BRANCH<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="bank_branch" class="form-control" id="inputText3" value="<?=$row->bank_branch;?>"> </div>
                             
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">Image<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;">  
                             <tr><td><input type="file" class="form-control" name="userfile" value="<?=$row->image; ?>" /><span><?php echo form_error('userfile'); ?></span></td></tr><br>

                    </tr>
                    
                    <tr>
                        <th></th><td><img src="<?= base_url('uploads/'.$row->image); ?>" width="100px" height="100px"></td>
                    </tr>   </div> <?php endforeach; ?>
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
    redirect(base_url('seller/login?msg=Please login to continue'));
} ?>