<aside class="right-side">
    <section class="content">

        <h1><center>Comission Values</center></h1>
        <table class="table">
            <tr>
                <th>NAME</th>
                <th>VALUE</th>
                <th>EDIT</th>
            </tr>
            <?php if($record){ foreach ($record as $row){ ?>
                <tr><form method="post" action="<?php echo base_url('setting/hit_com?id='.$_GET['id']); ?>">
                    <td><?php echo $row->name; ?></td>
                    <td><input type="text" name="val" class="form-control" value="<?php echo $row->val; ?>"></td>
                    <td><input type="submit" name="submit" value="CHANGE" class="btn btn-info"></td>
                </tr></form>
            <?php } }else{

                echo "No record Found";
            }?>
        </table>
    </section>
</aside>