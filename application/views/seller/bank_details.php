<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
            <section class="content">
            	<div class="row">
                	<div class="col-md-12">
                    	<div class="panel panel-default">
                          <div class="panel-heading">To transfer your money, please provide your bank account details.</div>
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
                          <form action="<?php //echo base_url()."seller/bnk_detailss1"; ?>" method="post" enctype="multipart/form-data">
                    	<div class="row">
                        	<!--<div class="col-md-2"><!--left side--> <!--</div>-->
                            <div class="col-md-12">
                            	<div class="row detail">
                            	 
                        	
                           <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">BANK ACCOUNT NUMBER<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="ban" class="form-control"/>
                           <span style="color:#F00;"><?php echo form_error('ban'); ?></span></div>
						   
                            
                               
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">IFSC CODE<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="ifsc" class="form-control" />
                                <span><?php echo form_error('ifsc'); ?></span></div>
                              
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">FULL NAME<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="full_name" class="form-control" />
                                <span style="color:#F00"><?php echo form_error('full_name'); ?></span></div>
                           <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;"> BANK NAME<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="bank_name" class="form-control" />
                           <span><?php echo form_error('bank_name'); ?></span></div>
                                
                             <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">BANK BRANCH<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="bank_branch" class="form-control" />
                             <span><?php echo form_error('bank_branch'); ?></span></div>
                             
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">CANCELLED CHEQUE<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="file" name="userfile" class="form-control" />
                                <span><?php echo form_error('userfile'); ?></span></div>
                             
                               <div class="col-md-4" style="margin-bottom:10px;"> </div><div class="col-md-8" style="margin-bottom:10px;"><input type="checkbox" name="check" required="required" />I agree that the Account Details furnished are correct to my knowledge. I allow amshopie to save the details for my account.</div>
                           <div class="col-md-10" style="margin-bottom:10px;"> </div>
						   <div class="col-md-2" style="margin-bottom:10px;">
						   <input type="submit" name="submit" class="form-control bank-btn" value="Save Details"/></div>
                               
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
            </section>
</aside>
<?php }else{
    redirect(base_url('seller/login?msg=Please login to continue'));
} ?>