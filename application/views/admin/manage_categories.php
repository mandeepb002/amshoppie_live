 <aside class="right-side">
			  <section class="content">
              <?php if(!empty($_GET['msg'])){ ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h2><?php echo $_GET['msg']; ?></h2>
                </div>
              <?php } ?>
              <form method="post" action="<?php echo base_url('admin/add_category'); ?>">
             <table class="table" border="1px">
             	<tr>
                	<td>CATEGORY</td><td><select class="form-control" name="parent_id" required>
                    <option selected="selected" value="0">Choose Category</option>
				<?php  foreach($record as $row){ ?>
                
					<option value="<?php print_r($row->cat_id)." "; ?>"><?php print_r($row->cat_name)." "; ?></option>
				<?php foreach ($row->sub as $child){ ?>
					<option value="<?php print_r($child->cat_id)." "; ?>"><?php print_r($row->cat_name." > " .$child->cat_name)." "; ?></option>
                <?php foreach($child->sub as $grand){ ?>
											<option value="<?php print_r($grand->cat_id); ?>"><?php print_r($row->cat_name." > ".$child->cat_name." > ".$grand->cat_name); ?></option>
                                            <?php foreach($grand->sub as $grand_child){ ?>
												<option value="<?php print_r($grand_child->cat_id); ?>"><?php print_r($row->cat_name." > ".$child->cat_name." > ".$grand->cat_name." > ".$grand_child->cat_name); ?></option>
												<?php } ?>
                                            
									<?php	} ?>
							<?php	}
						//print_r($row->sub[0]->cat_name);
						?>
                    
					<!--print_r($row->cat_name); -->
                    
				 <?php 	} ?>
                 </select></td>
                </tr>
                <tr>
                	<td>ADD NEW CATEGORY</td><td><input type="text" name="cat_name" class="form-control"  /></td>
                </tr>
				                <tr>
                	<td>COMMISSION</td><td><input type="text" name="commission" class="form-control" /></td>
                </tr>
                <tr>
                	<td></td><td><input type="submit" value="ADD" class="btn btn-default" /></td>
                </tr>
             </table>
              </form>
              </section>
 </aside>