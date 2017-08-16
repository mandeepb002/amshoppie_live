<?php if($this->session->userdata('id')==true){ ?>
 <aside class="right-side">
			  <section class="content">
              <form method="post" action="<?php echo base_url('admin/add_coupon_hit'); ?>" enctype="multipart/form-data">
              	<table class="table">
                	<tr>
                    	<th><label for="name">Name:</label> </th><td><input type="text" class="form-control" name="name" /><span><?php echo form_error('name'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>Description</th><td><input type="text" class="form-control" name="description" /><span><?php echo form_error('description'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>Type</th><td>
                        <select name="type" class="form-control">
                        	<option selected="selected" value="">Choose Coupon Type</option>
                        	<option value="1">FLAT</option>
                            <option value="1">Percentage(%)</option>
                        </select><span><?php echo form_error('type'); ?></span>
                        </td>
                    </tr>
                    <tr>
                    	<th>Value</th><td><input type="text" class="form-control" name="value" /><span><?php echo form_error('value'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>Code</th><td><input type="text" class="form-control" name="code" /><span><?php echo form_error('code'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>Start</th><td><input type="date" class="form-control" name="start" /><span><?php echo form_error('start'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>End</th><td><input type="date" class="form-control" name="end" /><span><?php echo form_error('end'); ?></span></td>
                    </tr>
                    <tr>
                        <th>Minimum Purchease</th><td><input type="text" class="form-control" name="min_pur" /><span><?php echo form_error('min_pur'); ?></span></td>
                    </tr>

                    <tr>
                    	<th>Image</th><td><input type="file" class="form-control" name="userfile" /><span><?php echo form_error('userfile'); ?></span></td>
                    </tr>
                    <tr>
                    	<th></th><td><input type="submit" class="form-control btn btn-info" value="ADD" /></td>
                    </tr>
                    <!--tr>
                        <th><button class="btn btn-info" onclick="goBack()">Go Back</button></th><td><a class="btn btn-success" href="<?php echo base_url('admin/coupon_list'); ?>">GO TO COUPON LIST</a> </td>
                    </tr--> 
                </table>
                </form>

			  </section>
              
</aside>

 <script>
     function goBack() {
         window.history.back();
     }
 </script>
<?php }else{

} ?>