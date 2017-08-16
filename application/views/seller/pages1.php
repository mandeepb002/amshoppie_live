
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/seller/js/nice_editor.js" type="text/javascript"></script>
  </script>
  
 <aside class="right-side">
    <section class="content">
	<section class="box-shadow"> 
				<div class="box-title">
				<h2 class="section-title add-p"> Add Page </h2>
					<!--div class="box-tools pull right">
						<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
						</button>
					</div-->
				</div>
				
				<form method="post" action="<?php echo base_url();?>seller/pagess?id=<?php echo $this->session->userdata('id'); ?>">
				<div class="row">
				<div class="rowpadding">
					<!-- <div class="col-md-2 col-sm-2 col-xs-2"></div> -->
					<div class="col-md-12 col-sm-12 col-xs-12 cover">
				
						<div class="form-group">
							<label for="exampleInputEmail1">Title<span class="#f00">*</span></label>
							<input type="text" name="title" class="form-control" placeholder="">
						 </div>
						 
						 <div class="form-group">
							<label for="exampleInputEmail1">Html<span class="#f00">*</span></label>
							 <div id="sample">
							 <script src="<?php echo base_url(); ?>assets/seller/js/nice_editor.js" type="text/javascript"></script>
<script>
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
  <textarea name="description" id="description" cols="40">
</textarea><br /> 
						 </div>
						 
						 <div class="form-group">
							<label for="exampleInputEmail1">Meta Title</label>
							<input type="text" name="meta_title" class="form-control" placeholder="">
						 </div>
						 
						  <div class="form-group">
							<label for="exampleInputEmail1">Meta Description</label>
							<input type="text" class="form-control" name="meta_description" rows="3" style="height:100px;">
						 </div>
						 <div class="form-group">
							<label for="exampleInputEmail1">Priority</label><br>
						 <select name="priority" class="btn btn-default ">
                                  <option selected="selected">Select</option>
								   <option value="1">1</option>
								   <option value="2">2</option>
								   <option value="3">3</option>
                                  
                                  </select>
								  </div>
								  
								  
								  <div class="form-group">
							<label for="exampleInputEmail1">Status</label><br>
						 <select name="status" class="btn btn-default">
                                  <option selected="selected">Select</option>
								   <option value="enabled">Enable</option>
								   <option value="disabled">Disable</option>
								 
                                  
                                  </select>
								  </div>
		
		
				
		
					
				</div>
				</div>
				
				
				<div class="row">
				  <div class="col-md-10"></div>
				
				  <div class="col-md-2">
					<button type="submit" name="submit" class="btn btn-default subpage_btn">Submit</button>
				  </div>
				</div>
				</div>
				</div>
   
  </form>
 
		</section>
    </section>
</aside>
