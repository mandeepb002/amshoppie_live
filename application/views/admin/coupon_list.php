<aside class="right-side">

			  <section class="content">
                  <?php if(!empty($_GET['msg'])){ ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h2><?php echo $_GET['msg']; ?></h2>
                      </div>
                  <?php } ?>
              <center><h1>COUPON LIST</h1></center>
				<table class="table">
                	<tr>
                    	<th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>TYPE</th>
                        <th>CODE</th>
                        <th>START</th>
                        <th>END</th>
                        <th>IMAGE</th>
                        <th>STATUS</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                    <?php if($record){ foreach($record as $row): ?>
                    <tr>
                    	<td><?= $row->name; ?></td>
                        <td><?= $row->description; ?></td>
                        <td>
						<?php
						 if($row->type==1){
							 echo "FLAT";
							 }else{
							 echo "Percentage(%)";	 
								 }
                        ?>
                        </td>
                        <td><?= $row->code; ?></td>
                        <td><?= $row->start; ?></td>
                        <td><?= $row->end;; ?></td>
                        <td><img src="<?= base_url()."coupon/".$row->image; ?>" width="100px" height="100px" /></td>
                        <td><?php
							if($row->status==1){
							 echo "ACTIVE";
							 }else{
							 echo "INACTIVE";	 
								 }
                        	?>
                        </td>
                        <td><a href="<?= base_url('admin/edit_coupon?id='.$row->id); ?>" class="btn btn-info">EDIT</a></td>
                        <td><a href="<?php echo base_url('admin/delete_coupon?id='.$row->id.'&img='.$row->image); ?>" class="btn btn-danger">DELETE</a></td>
                    </tr>
                    <?php endforeach; }else{ ?>
                    <tr>
                        <th>No coupons added yet
                            <a href="<?php echo base_url('admin/add_coupon'); ?>" class="btn btn-info">ADD ONE</a>
                        </th>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td><button class="btn btn-info" onclick="goBack()">Go Back</button></td>
                    </tr>
                </table>
			  </section>
</aside>


<script>
    function goBack() {
        window.history.back();
    }
</script>