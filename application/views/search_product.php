<form action="<?(base_url() . 'products/search');?>" method="POST">
<input type="text" name="search" placeholder="Search Record.."></br>
<input type="submit" name="submit" value="Search Record..">
</form>




<?php if(!empty($query) && is_array($query)){ ?>
		 
		 
		 <?php foreach($query  as $obj): ?>
		 
		
 <table>
<tr><th>ID</th><th>product_name</th><th>compostion</th><th>packing</th><th>mrp</th><th>net_rates</th></tr>

<tr>
<td>
<?php echo $obj->id;  ?>
</td>
<td>
<?php echo $obj->product_name;  ?>
</td>
<td>
<?php echo $obj->compostion;  ?>
</td>
<td>
<?php echo $obj->packing;  ?>
</td>
<td>
<?php echo $obj->mrp;  ?>
</td>
<td>
<?php echo $obj->net_rates;  ?>
</td>

 </tr>
		 <?php endforeach; ?>


<?php
		 }  
?>		
