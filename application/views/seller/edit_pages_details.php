
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://js.nicedit.com/nicEdit-latest.js"></script>;
 
  </script>
  
 <aside class="right-side">
    <section class="content">
	<section class="box-shadow"> 
				<div class="box-title">
				<h2 class="section-title add-p"> Edit Page </h2>
					<!--div class="box-tools pull right">
						<button class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
						</button>
					</div-->
				</div>
				<form method="post" action="<?php echo base_url();?>seller/edit_page?id=<?php echo $_GET['id']; ?>">
				<div class="row">
				<div class="rowpadding">
				
					<!-- <div class="col-md-2 col-sm-2 col-xs-2"></div> -->
					<div class="col-md-12 col-sm-12 col-xs-12 cover">
				
						<div class="form-group">
							<label for="exampleInputEmail1">Title<span class="#f00">*</span></label>
							<input type="text" name="title" required="required" class="form-control" value="<?php print_r($records[0]->title); ?>">
						 </div>
						 
						 <div class="form-group">
							<label for="exampleInputEmail1">Html<span class="#f00">*</span></label>
							 <div id="sample">
  <script type="text/javascript" src="https://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
  <textarea name="description" required="required" id="description" cols="40" value="<?php print_r($records[0]->description); ?>">
</textarea><br /> 
						 </div>
						 
						 <div class="form-group">
							<label for="exampleInputEmail1">Meta Title</label>
							<input type="text" name="meta_title"  required="required" class="form-control" placeholder="" value="<?php print_r($records[0]->meta_title); ?>">
						 </div>
						 
						  <div class="form-group">
							<label for="exampleInputEmail1">Meta Description</label>
							<input type="text" class="form-control" name="meta_description" required="required" rows="3" style="height:100px;" value="<?php print_r($records[0]->meta_description); ?>">
						 </div>
						 <div class="form-group">
							<label for="exampleInputEmail1">Priority</label><br>
						 <select name="priority" class="btn btn-default">
                                  <option value="<?php echo $records[0]->priority; ?> " selected="selected"><?php echo $records[0]->priority; ?></option>
								   <option value="1">1</option>
								   <option value="2">2</option>
								   <option value="3">3</option>
                                  
                                  </select>
								  </div>
								  
								  
								  <div class="form-group">
							<label for="exampleInputEmail1">Status</label><br>
						 <select name="status" class="btn btn-default">
                                   <option value="<?php echo $records[0]->status; ?> " selected="selected"><?php echo $records[0]->status; ?></option>
								   <option value="enabled">Enable</option>
								   <option value="disabled">Disable</option>
								 
                                  
                                  </select>
								  </div>
		
		
				
		
					
				</div>
				</div>
				
				<div class="row">
				  <div class="col-md-2">
                  <a href="<?php echo base_url('seller/view_pages');?>" type="button" class="btn btn-default subpage_btn1">Cancel</a>
				  
				  </div>
				  <div class="col-md-8"></div>
				
				  <div class="col-md-2">
					<!--button type="submit" name="submit" class="btn btn-default subpage_btn">Save Changes</button-->
                    <button class="btn btn-default subpage_btn" name="submit" type="submit">Save Change</button>
                   
				  </div>
				</div>
                 
				</div>
				</div>
                </form>

 
		</section>
    </section>
</aside>
