<aside class="right-side">
    <section class="content">
        <h1 align="center">
            ADD SUBADMIN
        </h1>
		<form method="POST" action="<?php echo base_url('admin/add_subadmin_hit'); ?>">
        <table class="table">
            <tr>
                    <th>Mobile</th><td><input type="text" name="mobile" class="form-control" placeholder="Enter mobile number" value="<?php echo set_value('mobile'); ?>" ></td><td style="color: red;"><?php echo form_error('mobile'); ?></td>
            </tr>
            <tr>
                <th>Email</th><td><input type="text" name="email" class="form-control" placeholder="Enter valid email" value="<?php echo set_value('email'); ?>" ></td><td style="color: red;"><?php echo form_error('email'); ?></td>
            </tr>
            <tr>
                <th>Password</th>
				<td><input type="text" name="password" class="form-control" placeholder="Enter password" value="<?php echo set_value('password'); ?>" ></td>
				<td style="color: red;"><?php echo form_error('password'); ?></td>
            </tr>
			<tr>                
				<th>Permission</th>
				<td><input type="checkbox" name="manage_user" class="form-control" >Manage Users</td>
				<td><input type="checkbox" name="manage_seller" class="form-control" >Manage Seller</td>
				<td><input type="checkbox" name="manage_subadmin" class="form-control" >Manage Subadmin</td>
				<td><input type="checkbox" name="manage_categories" class="form-control" >Manage Categories</td>
				<td><input type="checkbox" name="manage_Product" class="form-control" >Manage Product</td>
				<td><input type="checkbox" name="manage_commission" class="form-control" >Manage Commission</td>
				<td><input type="checkbox" name="manage_user" class="form-control" >Commission in Sale</td>
				<td><input type="checkbox" name="my_sale" class="form-control" >My Sale</td>
				<td><input type="checkbox" name="my_site" class="form-control" >My Site</td>
				<td><input type="checkbox" name="shop_details" class="form-control" >Shop Details</td>
				<td><input type="checkbox" name="manage_coupons" class="form-control" >Manage Coupons</td>
				<td><input type="checkbox" name="bank_details" class="form-control" >BanK Details</td>
				<td><input type="checkbox" name="participate_in_sale" class="form-control" >Participation in Sale</td>
				<td><input type="checkbox" name="payment_history" class="form-control" >Payment History</td>
				<td><input type="checkbox" name="settings" class="form-control" >Settings</td>
				<td><input type="checkbox" name="set_homepage" class="form-control" >Set Homepage</td>
            </tr>
            <tr>
                <th></th><td><input type="submit" value="ADD SELLER" class="btn btn-info"></td>
            </tr>
        </table></form>
    </section>
</aside>