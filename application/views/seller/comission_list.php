<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
  <section class="content">
  <?php
  	if(!empty($_GET['msg'])){ ?>
  		<div class="alert alert-success">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  			<strong><?php echo $_GET['msg']; ?></strong>
		</div>
  	<?php }
  ?>
	  <table class="table table-bordered">
	  	<tr>
	  		<th>Sr.No</th>
	  		<th>Name</th>
	  		<th>Marketing</th>
	  		<th>Objective</th>
	  		<th>EDIT</th>
	  		<th>DELETE</th>
	  	</tr>
	  	<?php $i = 0; foreach($record as $row){ ?>
	  	<tr>
	  	<td><?= $i++; ?></td>	
	  	<td><?= $row->name; ?></td>
	  	<td><?= $row->marketing; ?></td>
	  	<td><?= $row->objective; ?></td>
	  	<td><a href="<?= base_url('admin/edit_comission?id='.$row->id); ?>" class="btn btn-info">EDIT</a></td>
	  	<td><a href="<?= base_url('admin/del_com?id='.$row->id); ?>" class="btn btn-danger">DELETE</a></td>
	  	</tr>
	  	<?php } ?>
	  </table>
  </section>
</aside>  
<?php } ?>