<aside class="right-side">
			  <section class="content">
              	<center><h2>CATEGORIES LIST</h2></center>
                <?php if(!empty($_GET['msg'])){ ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h2><?php echo $_GET['msg']; ?></h2>
                </div>
              <?php } ?>
              	<table class="table">
                	<tr>
                    	<th>CATEGORIES</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                    	<?php foreach($record as $row){ ?>
                    <tr>
                    	
                    	<td><?php echo $row->cat_name; ?></td>
                        			<td><a class="btn btn-info" href="<?php echo base_url()."admin/edit_cat?id=".$row->cat_id; ?>">EDIT</a></td>
                        			<td><a class="btn btn-danger" href="<?php echo base_url()."admin/delete_cat?id=".$row->cat_id; ?>">DELETE</a></td>
                                    </tr>
                             <?php foreach($row->sub as $child){ ?>       
                            <tr>        
                        	
									<td><?php echo $row->cat_name." > ".$child->cat_name; ?></td>
                                    <td><a class="btn btn-info" href="<?php echo base_url()."admin/edit_cat?id=".$child->cat_id; ?>">EDIT</a></td>
                        			<td><a class="btn btn-danger" href="<?php echo base_url()."admin/delete_cat?id=".$child->cat_id; ?>">DELETE</a></td>
							</tr>
                            		<?php foreach($child->sub as $grand){ ?>	
                                    <tr>
                        				<td><?php echo $row->cat_name." > ".$child->cat_name." > ".$grand->cat_name; ?></td>
                                    	<td><a class="btn btn-info" href="<?php echo base_url()."admin/edit_cat?id=".$grand->cat_id; ?>">EDIT</a></td>
                        				<td><a class="btn btn-danger" href="<?php echo base_url()."admin/delete_cat?id=".$grand->cat_id; ?>">DELETE</a></td>
                                    </tr>
                                    		<?php foreach($grand->sub as $grand_child){ ?>	
                                    <tr>
                        				<td><?php echo $row->cat_name." > ".$child->cat_name." > ".$grand->cat_name." > ".$grand_child->cat_name; ?></td>
                                    	<td><a class="btn btn-info" href="<?php echo base_url()."admin/edit_cat?id=".$grand_child->cat_id; ?>">EDIT</a></td>
                        				<td><a class="btn btn-danger" href="<?php echo base_url()."admin/delete_cat?id=".$grand_child->cat_id; ?>">DELETE</a></td>
                                    </tr>
                                    	<?php foreach($grand_child->sub as $grand_child1){ ?>	
                                    <tr>
                        				<td><?php echo $row->cat_name." > ".$child->cat_name." > ".$grand->cat_name." > ".$grand_child->cat_name." > ".$grand_child1->cat_name; ?></td>
                                    	<td><a class="btn btn-info" href="<?php echo base_url()."admin/edit_cat?id=".$grand_child1->cat_id; ?>">EDIT</a></td>
                        				<td><a class="btn btn-danger" href="<?php echo base_url()."admin/delete_cat?id=".$grand_child1->cat_id; ?>">DELETE</a></td>
                                    </tr>
                                    	<?php foreach($grand_child1->sub as $grand_child2){ ?>	
                                    <tr>
                        				<td><?php echo $row->cat_name." > ".$child->cat_name." > ".$grand->cat_name." > ".$grand_child->cat_name." > ".$grand_child1->cat_name." > ".$grand_child2->cat_name; ?></td>
                                    	<td><a class="btn btn-info" href="<?php echo base_url()."admin/edit_cat?id=".$grand_child2->cat_id; ?>">EDIT</a></td>
                        				<td><a class="btn btn-danger" href="<?php echo base_url()."admin/delete_cat?id=".$grand_child2->cat_id; ?>">DELETE</a></td>
                                    </tr>
                    	<?php } ?>
                    	<?php } ?>
                    	<?php } ?>
                    	<?php } ?>
                     <?php } ?>
                    <?php } ?>
                </table>
			  </section>
</aside>