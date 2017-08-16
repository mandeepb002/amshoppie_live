<html>
<head>
<title>view product details</title>
</head>
<body>
    <table>
    <tr>
        <th>ID</th>
        <th>MOBILE</th>
        <th>EMAIL</th>
        <th>OTP</th>
        <th>USERTYPE</th>
        <th>PASSWORD</th>
        
    </tr>
    <?php
        foreach($records as $row):
    ?>
    <tr>
        <td><?=$row->id?></td>
        <td><?=$row->mobile?></td>
        <td><?=$row->email?></td>
        <td><?=$row->otp?></td>
        <td><?=$row->usertype?></td>
        <td><?=$row->password?></td>
            </tr>
    <?php
        endforeach;
    ?>