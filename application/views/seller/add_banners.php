<aside class="right-side">
    <section class="content">
               <section class="box-shadow"> 
				<div class="box-title">
				<h2 class="section-title add-p"> Add Banner </h2>
					<!--div class="box-tools pull right">
						<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
						</button>
					</div-->
				</div>
				
				<form method="post" action="<?php echo base_url();?>seller/bnr_details1" class="form-horizontal" enctype="multipart/form-data">
				
					  <div class="form-group">
						<label class="control-label col-sm-2" for="image">Banner</label>
						<div class="col-sm-10">
						  
						   <input type="file" name="userfile" class="form-control" id="exampleInputFile">
                           <span><?php echo form_error('userfile'); ?></span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-2" for="text">Banner Link Url</label>
						<div class="col-sm-10">  
						 <input type="text" name="banner_link" class="form-control" id="exampleInputName2" placeholder="banner_link">
                         <span><?php echo form_error('banner_link'); ?></span>
						</div>
					  </div>
					   <div class="form-group">
						<label class="control-label col-sm-2" for="text">Priority</label>
						<div class="col-sm-10">  
						 <input type="text" name="priority" class="form-control" id="exampleInputName2" placeholder="priority">
                         <span><?php echo form_error('priority'); ?></span>
						</div>
					  </div>
					 
					 
					 <div class="row">
					 <div class="bnr_btnrow">
						 <div class="col-md-10"></div>
						   <div class="col-md-2">
								<button type="submit"  name="button" class="btn btn-default bnr_btn">Add</button>
						  </div>
					</div></form>
					</div>
			</section>	
	</section>	
</aside>
			