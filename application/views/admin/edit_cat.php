<aside class="right-side">
			  <section class="content">
              	<h1>EDIT CATEGORY</h1>
                	<form action="<?php echo base_url('admin/hit_cat?id='.$_GET['id']); ?>" method="post">
                    	<input type="text" name="cat_name" class="form-control" value="<?php  
						foreach($record as $row){
							print_r($row->cat_name);
							}
						?>" required="required" />
                        <span style="color:#F00;"><?php echo form_error('cat_name'); ?></span>
                        <input type="submit" value="EDIT" class="btn btn-info form-control"/>
                    </form>
			  </section>
</aside>