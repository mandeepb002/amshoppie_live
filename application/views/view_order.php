<html>
<head>
<title>view order list</title>
</head>
<body>
    <table>
    <tr>
        <th>ID</th>
        <th>USER ID</th>
        <th>ORDER DATE</th>
        <th>CLIENT NAME</th>
        <th>CLIENT CONTACT</th>
        <th>SUB TOTAL</th>
        <th>VAT</th>
        <th>TOTAL AMOUNT</th>
        <th>DISCOUNT</th>
        <th>GRAND TOTAL</th>
        <th>PAID</th>
        <th>DUE</th>
        <th>PAYMENT TYPE</th>
        <th>PAYMENT STATUS</th>
        <th>ORDER STATUS</th>
        
    </tr>
    <?php
        foreach($records as $row):
    ?>
    <tr>
        <td><?=$row->id?></td>
        <td><?=$row->user_id?></td>
        <td><?=$row->order_date?></td>
        <td><?=$row->client_name?></td>
        <td><?=$row->client_contact?></td>
        <td><?=$row->sub_total?></td>
        <td><?=$row->vat?></td>
        <td><?=$row->total_amount?></td>
        <td><?=$row->discount?></td>
        <td><?=$row->grand_total?></td>
        <td><?=$row->paid?></td>
        <td><?=$row->due?></td>
        <td><?=$row->payment_type?></td>
        <td><?=$row->payment_status?></td>
        <td><?=$row->order_status?></td>
    </tr>
    <?php
        endforeach;
    ?>