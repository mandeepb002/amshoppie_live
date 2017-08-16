
  <?php
  if(!$this->session->userdata('id')){
	  $url = base_url()."admin/login";
	  redirect($url);
	  }else{
   ?>
    <aside class="right-side">
			  <section class="content">
				
	<div class="row">
  <h2><center>Edit User</center></h2>
                                                                                       
  <div class="table-responsive">          
  <?php if(!empty($_GET['msg'])){ ?>
  <center><h1 style="background-color:#f89f12; color:#FFF;"><?php echo $_GET['msg']; ?></h1></center>
  <?php } ?>
  <table class="table" style="width:100%;">
  <form method="post" action="<?php echo base_url()."admin/eedit_user?id=".$_GET['id']; ?>">
  <tr>
    <th>ID</th>
 	<td><input type="text" name="id" class="form-control" value="<?php print_r($records[0]->id); ?>" disabled="disabled" /></td>	
  </tr>
  <tr>
    <th>COUNTRY CODE</th>
 	<td><input type="text" class="form-control" value="<?php print_r($records[0]->country_code); ?>" disabled="disabled" /></td>	
  </tr>
  <tr>
    <th>MOBILE</th>
 	<td><input type="text" class="form-control" value="<?php print_r($records[0]->mobile); ?>" disabled="disabled" /></td>	
  </tr>
  <tr>
    <th>EMAIL</th>
 	<td><input type="text" name="email" class="form-control" value="<?php print_r($records[0]->email); ?>" /></td>	
  </tr>
  <tr>
    <th>NAME</th>
 	<td><?php if(empty($record[0]->name)){ ?>
		<input type="text" name="name" class="form-control" value="No record" />
	<?php	}else{
			?>
			<input type="text" name="name" class="form-control" value="<?php print_r($record[0]->name); ?>" />
            <?php
			} ?></td>	
  </tr>  
  <tr>
    <th>GENDER</th>
 	<td><?php if(empty($record[0]->gender)){ ?>
		<input type="text" name="gender" class="form-control" value="No record" />
	<?php	}else{
			?>
			<input type="text" name="gender" class="form-control" value="<?php print_r($record[0]->gender); ?>" />
            <?php
			} ?></td>	
  </tr>  
  <tr>
    <th>DOB</th>
 	<td><?php if(empty($record[0]->dob)){ ?>
			<input type="text" id="datepicker" name="dobs" value="No record" /><br />
            <input type="date" name="dob" /> 
	<?php	}else{
			?>
			<input type="text" id="datepicker" name="dobs" value="<?php print_r($record[0]->dob); ?>" /><br />
            <input type="date" name="dob" value="<?php print_r($record[0]->dob); ?>"/>  
            <?php
			} ?></td>	
            
  </tr>
  <tr>
  	<td></td><td><input type="submit" name="submit" style="background-color:#f89f12;" class="btn btn-default" /> </td>
  </tr>
  <tr>
  	<td><button onclick="goBack()" class="btn btn-info">Go Back</button></td>
  </tr>
    
  </table>
  </div>
</div>
</section>
</aside>
<?php
	  }
?>
<script>
function goBack() {
    window.history.back();
}
</script>

