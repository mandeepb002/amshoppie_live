  <?php
  if(!$this->session->userdata('id')){
	  $url = base_url()."admin/login";
	  redirect($url);
	  }else{
   ?>
    <aside class="right-side">
			  <section class="content">
				
	<div class="row">
  <h2><center>Total User</center></h2>
  <div class="row">
  <div class="col-md-4">
          <div class="panel panel-info">
                  <div class="panel-body" style="background-color:#F90; color:#FFF;">
                    Basic panel example
                  </div>
        </div>
  </div>
  <div class="col-md-4">
          <div class="panel panel-info">
                  <div class="panel-body" style="background-color:#F90; color:#FFF;">
                    Basic panel example
                  </div>
        </div>
  </div>
  <div class="col-md-4">
          <div class="panel panel-info">
                  <div class="panel-body" style="background-color:#F90; color:#FFF;">
                    Basic panel example
                  </div>
        </div>
  </div>
  </div>                                                                                     
  <div class="table-responsive">          
  <table class="table" style="width:100%;">
  <tr>
    <th>ID</th>
 	<td><?php print_r($records[0]->id); ?></td>	
  </tr>
  <tr>
    <th>COUNTRY CODE</th>
 	<td><?php print_r($records[0]->country_code); ?></td>	
  </tr>
  <tr>
    <th>MOBILE</th>
 	<td><?php print_r($records[0]->mobile); ?></td>	
  </tr>
  <tr>
    <th>EMAIL</th>
 	<td><?php print_r($records[0]->email); ?></td>	
  </tr>
  <tr>
    <th>USER TYPE</th>
 	<td><?php if($records[0]->usertype==1){
		echo "User";
		}else if($records[0]->usertype==2){
			echo "Seller";
			} ?></td>	
  </tr>
  <tr>
    <th>DEVICE ID</th>
 	<td><?php print_r($records[0]->device_id); ?></td>	
  </tr>
  <tr>
    <th>STATUS</th>
 	<td><?php 
	if($records[0]->status == 1){
		echo "Active"; 
		}else if($records[0]->status == 2){
			echo "Block";
			}else if($records[0]->status == 3){
				echo "Pending";
				}
	
	 ?></td>	
  </tr>
  <tr>
    <th>NAME</th>
 	<td><?php if(empty($record[0]->name)){
		echo "No data";
		}else{
			print_r($record[0]->name);
			} ?></td>	
  </tr>  
  <tr>
    <th>GENDER</th>
 	<td><?php if(empty($record[0]->gender)){
		echo "No data";
		}else{
			print_r($record[0]->gender);
			} ?></td>	
  </tr>  
  <tr>
    <th>DOB</th>
 	<td><?php if(empty($record[0]->dob)){
		echo "No data";
		}else{
			print_r($record[0]->dob);
			} ?></td>	
            
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