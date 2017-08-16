<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
        <section class="content">
						
						 <div class="row">
                	<div class="col-md-12">
                    	<div class="panel panel-default">
                          <div class="panel-heading">Edit data Detail</div>
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
                          <form method="post" action="<?php echo base_url();?>setting/edit_homepage?id=<?php echo $_GET['id']; ?>"<class="form-horizontal" enctype="multipart/form-data">
                           <?php
//echo "<pre>";print_r($records);die;
if(!empty($records)) {
								foreach($records as $row):
								 ?>
						
                    	<div class="row">
                        	<!--<div class="col-md-2"><!--left side--> <!--</div>-->
                            <div class="col-md-12">
                            	<div class="row detail">
                            	 
                        	
                           <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">NAME<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="name" class="form-control" id="inputText3" value="<?=$row->name;?>"> </div>
						   
                            
                               
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">LINK<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="link" class="form-control" id="inputText3" value="<?=$row->link;?>"> </div>
                              
                                <!--div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">PRICE<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="price" class="form-control" id="inputText3" value="<?=$row->price;?>"> </div-->
                                
                           <!--div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">CATEGORY<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;"><input type="text" required="required" name="category" class="form-control" id="inputText3" value="<?=$row->category;?>"> </div-->
                                <div class="col-md-4" style="margin-bottom:10px;"><label style="float:right;">Image<span class="required" style="color:#F00">*</span></label></div><div class="col-md-8" style="margin-bottom:10px;">  
                             <tr><td><input type="file" class="form-control" name="userfile" value="<?//=$row->image; ?>" /><span><?php echo form_error('userfile'); ?></span></td></tr><br>

                    </tr>
                    
                    <tr>
                        <th></th><td>
<?php if(isset($row->image) && !empty($row->image)) { ?>
<img src="<?php echo $row->image; ?>" width="100px" height="100px></td>
<?php } ?>
                    </tr>   </div> <?php endforeach; } ?>
							 <div class="col-md-10" style="margin-bottom:10px;"> </div>
						   <div class="col-md-2" style="margin-bottom:10px;">
						   <input type="submit" name="submit" class="form-control btn btn-default btn-product" value="Update Detail"/></div>
						   
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