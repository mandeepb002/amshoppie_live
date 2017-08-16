<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <table border="1">  
      <tbody>  
         <tr>  
            <td>product Id</td>  
            <td>product Name</td>  
			<td>composition</td>  
			<td>packing</td>  
			<td>MRP</td>  
			<td>Net_Rates</td>  
         </tr>  
       
	 <?php if(!empty($products) && is_array($products)){ ?>
		 
		 
		 <?php foreach($products  as $obj): ?>
		 
		
 
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
		
      </tbody>  
   </table>  
<body>  
</body>  
</html> 