<aside class="right-side">
			  <section class="content">
              <?php foreach($record as $row): ?>
              <form method="post" action="<?php echo base_url('admin/edit_coupon_hit?id='.$_GET['id']); ?>" enctype="multipart/form-data">
              	<table class="table">
                	<tr>
                    	<th>Name</th><td><input type="text" class="form-control" name="name" value="<?= $row->name; ?>" /><span><?php echo form_error('name'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>Description</th><td><input type="text" class="form-control" name="description" value="<?= $row->description; ?>" /><span><?php echo form_error('description'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>Type</th><td>
                        <select name="type" class="form-control">
                        	<option value="">Choose Coupon Type</option>
                            <?php if($row->type==1){ ?>
                        	<option value="1" selected>FLAT</option>
                            <option value="2">Percentage(%)</option>
                            <?php }else if($row->type==2){ ?>
                                <option value="1">FLAT</option>
                                <option value="2" selected>Percentage(%)</option>
                            <?php } ?>
                        </select><span><?php echo form_error('type'); ?></span>
                        </td>
                    </tr>
                    <tr>
                    	<th>Value</th><td><input type="text" class="form-control" name="value" value="<?= $row->value; ?>" /><span><?php echo form_error('value'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>Code</th><td><input type="text" class="form-control" name="code" value="<?= $row->code; ?>" /><span><?php echo form_error('code'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>Start</th><td><input type="date" class="form-control" name="start" value="<?= $row->start; ?>" /><span><?php echo form_error('start'); ?></span></td>
                    </tr>
                    <tr>
                    	<th>End</th><td><input type="date" class="form-control" name="end" value="<?= $row->end; ?>" /><span><?php echo form_error('end'); ?></span></td>
                    </tr>
                    <tr>
                        <th>Minimum Purchease</th><td><input type="text" class="form-control" name="min_pur" value="<?= $row->minimum_purchase; ?>" /><span><?php echo form_error('min_pur'); ?></span></td>
                    </tr>
                    <tr>

                    	<th>Image</th><td><input type="file" class="form-control" name="userfile" value="<?= $row->image; ?>" /><span><?php echo form_error('userfile'); ?></span></td><br>

                    </tr>
                    <tr>
                        <th></th><td><img src="<?= base_url('coupon/'.$row->image); ?>" width="100px" height="100px"></td>
                    </tr>
                    <tr>
                    	<th></th><td><input type="submit" class="form-control btn btn-info" value="EDIT" /></td>
                    </tr>
                    <tr>
                        <td><button onclick="goBack()" class="btn btn-info">Go Back</button>
                        </td>
                    </tr>
                </table>
                </form>
                <?php endforeach; ?>
			  </section>
              
</aside>

<script>
    function goBack() {
        window.history.back();
    }
</script>