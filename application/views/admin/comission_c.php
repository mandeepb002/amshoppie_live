<aside class="right-side">
    <section class="content">
        <?php if(!empty($_GET['msg'])){ ?>
            <div class="alert alert-success" role="alert">

                <h2>

                    <?php echo $_GET['msg']; ?>


                </h2>

            </div>
        <?php }?>
        <h1><center>Comission Values</center></h1>
        <table class="table">
            <tr>
                <th>NAME</th>
                <th>VALUE</th>
                <th>EDIT</th>
            </tr>
            <?php foreach ($record as $row){ ?>
            <tr>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->val; ?></td>
                <td><a href="<?php echo base_url('setting/edit_comission?id='.$row->id); ?>" class="btn btn-info">CHANGE</a> </td>
            </tr>
            <?php } ?>
        </table>
    </section>
</aside>