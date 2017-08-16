<aside class="right-side">
    <section class="content">
        <h1 align="center">
            ADD USER
        </h1>
<form id="AddUserForm" method="POST" action="<?php echo base_url('admin/add_user_hit'); ?>">
        <table class="table">
            <tr>
                <th>Mobile</th><td><input type="text" name="mobile" class="form-control" placeholder="Enter mobile number" value="<?php echo set_value('mobile'); ?>" required></td><td style="color: red;"><?php echo form_error('mobile'); ?></td>
            </tr>
            <tr>
                <th>Email</th><td><input type="email" name="email" class="form-control" placeholder="Enter valid email" value="<?php echo set_value('email'); ?>" required></td><td style="color: red;"><?php echo form_error('email'); ?></td>
            </tr>
            <tr>
                <th>Password</th><td><input type="password" name="password" id="password" class="form-control" placeholder="Enter password" value="" required></td><td style="color: red;"><?php echo form_error('password'); ?></td>
            </tr>
            <tr>
                <th>Confirm Password</th><td><input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm password" value="" required></td><td style="color: red;"><?php echo form_error('cpassword'); ?></td>
            </tr>
            <tr>
                <th></th><td><input type="submit" value="ADD USER" class="btn btn-info"></td>
            </tr>
        </table></form>
    </section>
</aside>
<script>
$(document).ready(function(){
  $('#AddUserForm').submit(function(e){
    //e.preventDefault();
    var pass = $.trim($('#password').val());
    var cpass = $.trim($('#cpassword').val());
    if(pass != cpass) {
        $('#password').addClass('errorClr');
        $('#cpassword').addClass('errorClr');
        return false;
    }
  });
});
</script>
<style>.errorClr {border:1px solid red !important;} </style>