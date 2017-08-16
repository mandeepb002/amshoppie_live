<aside class="right-side">
    <section class="content">
        <h1 align="center">
            ADD SELLER
        </h1>
        <table class="table">
            <tr><form method="POST" action="<?php echo base_url('admin/add_seller_hit'); ?>">
                    <th>Mobile</th><td><input type="text" name="mobile" class="form-control" placeholder="Enter mobile number" value="<?php echo set_value('mobile'); ?>" ></td><td style="color: red;"><?php echo form_error('mobile'); ?></td>
            </tr>
            <tr>
                <th>Email</th><td><input type="text" name="email" class="form-control" placeholder="Enter valid email" value="<?php echo set_value('email'); ?>" ></td><td style="color: red;"><?php echo form_error('email'); ?></td>
            </tr>
            <tr>
                <th>Password</th><td><input type="text" name="password" class="form-control" placeholder="Enter password" value="<?php echo set_value('password'); ?>" ></td><td style="color: red;"><?php echo form_error('password'); ?></td>
            </tr>
            <tr>
                <th></th><td><input type="submit" value="ADD SELLER" class="btn btn-info"></td>
            </tr>
        </table></form>
    </section>
</aside>