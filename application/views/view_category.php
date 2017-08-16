<html>
<head>
<title>view category details</title>
</head>
<body>
    <table>
    <tr>
        <th>ID</th>
        <th>PARENT ID</th>
        <th>CATEGORY NAME</th>
    </tr>
    <?php
        foreach($records as $row):
    ?>
    <tr>
        <td><?=$row->id?></td>
        <td><?=$row->parent_id?></td>
        <td><?=$row->category_name?></td>
    </tr>
    <?php
        endforeach;
    ?>