<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Book Display</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#book-table').DataTable({
		"pageLength" : 5,
        "ajax": {
            url : "<?php echo base_url("Books/books_page") ?>",
            type : 'GET'
        },
    });
});
</script> 
    </head>
    <div class="container">
    <div class="row">
    <div class="col-md-12">

    <h1>Book List</h1>

    <table id="book-table" class="table table-bordered table-striped table-hover" >
     <thead>
     <tr><td>ID</td><td>PRODUCT NAME</td><td>DESCRIPTION</td><td>STATUS</td><td>PRICE</td></tr>
     </thead>
     <tbody>
     </tbody>
     </table>

    </div>
    </div>
    </div>
    
    </html>