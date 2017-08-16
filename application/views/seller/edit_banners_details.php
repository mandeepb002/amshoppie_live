<aside class="right-side">
    <section class="content">
               <section class="box-shadow"> 
				<div class="box-title">
				<h2 class="section-title add-p"> Edit Banner </h2>
					<!--div class="box-tools pull right">
						<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
						</button>
					</div-->
				</div>
				
				 <form method="post" action="<?php echo base_url();?>seller/edit_banner?id=<?php echo $_GET['id']; ?>"<class="form-horizontal" enctype="multipart/form-data">
                  <?php
								foreach($records as $row):
								 ?>
						

					  <div class="form-group">
						<label class="control-label col-sm-2" for="image">Banner<span class="required" style="color:#F00"></span></label>
						<div class="col-sm-10">
						 
						  <input type="file" class="form-control" name="userfile" value="<?=$row->image; ?>" /><span><?php echo form_error('userfile'); ?></span>
                          
						</div>
                       
					  </div>
                       <div class="form-group">
                       <div class="col-sm-2"></div>
                        <div class="col-sm-10"><img src="<?= base_url('uploads/'.$row->image); ?>" width="100px" height="100px"></div>
                    </div> 
					  <div class="form-group">
						<label class="control-label col-sm-2" for="text">Banner Link Url</label>
						<div class="col-sm-10">  
						 <input type="text" required="required" name="banner_link" class="form-control" id="exampleInputName2" value="<?= $row->banner_link; ?>">
						</div>
					  </div>
					   <div class="form-group">
						<label class="control-label col-sm-2" for="text">Priority</label>
						<div class="col-sm-10">  
						 <input type="text" required="required" name="priority" class="form-control" id="exampleInputName2" value="<?=$row->priority;?>">
						</div>
					  </div>
					  <?php endforeach; ?>
		
					 <div class="row">
					 <div class="bnr_btnrow">
						 <div class="col-md-10"></div>
						   <div class="col-md-2">
								<button type="submit" name="update" class="btn btn-default">Edit</button>
						  </div>
					</div>			 </form>
					</div>
			</section>	
	</section>	
</aside>
			