  <?php
  if(!$this->session->userdata('id')){
	  $url = base_url()."admin/login";
	  redirect($url);
	  }else{
   ?>
    <aside class="right-side">
			  <section class="content">
				
	<div class="row">
  <h2><center>Total Registered</center></h2>
                                                                                       
  <div class="table-responsive">          
  <table class="table" style="width:100%;">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>ID</th>
        <th>MOBILE</th>
        <th>EMAIL</th>
        <th>EDIT</th>
        <th>DETAIL</th>
      </tr>
    </thead>
    <?php $i=1; foreach($records as $result): ?>
    <tbody>
      <tr>
        <td><?php echo $i++; ?> </td>
        <td><?= $result->id ?></td>
        <td><?= $result->mobile ?></td>
        <td><?= $result->email ?></td>
        <td><a href="<?php echo base_url(); ?>" class="btn btn-default">EDIT</a></td>
        <td><a href="#" class="btn btn-primary">VIEW</a></td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
  </div>
</div>
</section>
</aside>
<?php
	  }
?>