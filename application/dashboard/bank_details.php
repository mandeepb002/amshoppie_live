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
                          <form action="<?php echo base_url()."seller/bank_detail"; ?>" method="post" enctype="multipart/form-data">
                    	<div class="row">
                        	<!--<div class="col-md-2"><!--left side--> <!--</div>-->
                            <div class="col-md-12">
                            	<div class="row detail">
                            	<h3 style="color:#ff7300; margin-top:-50px">Bank Details</h3>
                        	
                           <div class="col-md-4"> BANK ACCOUNT NUMBER<label class="required" style="color:#F00">*</label></div><div class="col-md-8"><input type="text" required="required" name="ban" class="form-control"/></div>
                            
                               
                                <div class="col-md-4"> IFSC CODE<label class="required" style="color:#F00">*</label></div><div class="col-md-8"><input type="text" required="required" name="ifsc" class="form-control" /></div>
                              
                                <div class="col-md-4"> FULL NAME<label class="required" style="color:#F00">*</label></div><div class="col-md-8"><input type="text" required="required" name="full_name" class="form-control" /></div>
                           <div class="col-md-4"> BANK NAME<label class="required" style="color:#F00">*</label></div><div class="col-md-8"><input type="text" required="required" name="bank_name" class="form-control" /></div>
                                
                             <div class="col-md-4">   BANK BRANCH<label class="required" style="color:#F00">*</label></div><div class="col-md-8"><input type="text" required="required" name="bank_branch" class="form-control" /></div>
                             
                                <div class="col-md-4"> CANCELLED CHEQUE<label class="required" style="color:#F00">*</label></div><div class="col-md-8"><input type="file" name="userfile" class="form-control" /></div>
                             
                               <div class="col-md-4"> CANCELLED CHEQUE<label class="required" style="color:#F00">*</label></div><div class="col-md-8"><input type="checkbox" name="check" required="required" />I agree that the Account Details furnished are correct to my knowledge. I allow Kraftly to save the details for my account.
                           <input type="submit" name="submit" class="form-control" /></div>
                               
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