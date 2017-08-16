
<!DOCTYPE html>
<html ng-app="mymodule">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>test2</title>
 
    <!-- Bootstrap core CSS -->
   


 


  </head>



<body>
<table>
<thead>
<tr>
<th>id</th><th>user_id</th><th>order_date</th><th>sub_total</th><th>total_amount</th><th>discount</th><th>grand_total</th><th>order_status]</th><th> 
</tr>
</thead>
<tbody>
<?php foreach($reco as $row){
	 ?>
<tr>
<td><?php echo $row->id;?> </td><td><?php echo $row->user_id;?> </td><td><?php echo $row->order_date;?></td><td><?php echo $row->sub_total; ?></td><td><?php echo $row->vat;?> </td><td><?php echo $row->total_amount;?> </td><td><?php echo $row->discount;?></td><td><?php echo $row->grand_total;?> </td><td><?php echo $row->order_status;?></td>
</tr>
<?php } ?>
</tbody>
</table>
</body>
</html>