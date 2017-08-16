<html>
<head>
<title>view product details</title>
</head>
<body>
    <table>
    <tr>
        <th>ID</th>
        <th>USER ID</th>
        <th>PRODUCT NAME</th>
        <th>QUANTITY</th>
        <th>RATE</th>
        <th>BRAND NAME</th>
        <th>CATEGORY NAME</th>
        <th>STATUS</th>
    </tr>
    <?php
        foreach($records as $row):
    ?>
    <tr>
        <td><?=$row->id?></td>
        <td><?=$row->user_id?></td>
        <td><?=$row->product_name?></td>
        <td><?=$row->quantity?></td>
        <td><?=$row->rate?></td>
        <td><?=$row->brand_name?></td>
        <td><?=$row->category_name?></td>
        <td><?=$row->status?></td>
    </tr>
    <?php
        endforeach;
    ?>