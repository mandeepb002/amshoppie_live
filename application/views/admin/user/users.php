  
<?php

if (!$this->session->userdata('id')) {
    $url = base_url() . "admin/login";
    redirect($url);
} else {
    ?>
    <aside class="right-side">
        <section class="content">

            <div class="row">
                <h2><center>Total User List</center></h2>

                <div class="table-responsive">  
                    <div class="row" style="float: right; margin-right: 10px;"><a href="javascript:;" class="exportData">Export List To CSV</a></div>
                    <table class="table exportTable" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>ID</th>
                                <th>MOBILE</th>
                                <th>EMAIL</th>
                                <th class="notInclude">EDIT</th>
                                <th class="notInclude">ACTION<br /><small>Activate/Block</small></th>
                                <th class="notInclude">DETAIL</th>
                            </tr>
                        </thead>
                        <?php
                        $i = $this->uri->segment(3, 0) + 1;
                        if (!empty($records)) {
                            foreach ($records as $result):
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?= $result->id ?></td>
                                        <td><?= $result->mobile ?></td>
                                        <td><?= $result->email ?></td>
                                        <td class="notInclude"><a href="<?php echo base_url() . "admin/edit_user?id=" . $result->id; ?>" class="btn" style="background-color:#f89f12">EDIT</a></td>
                                        <td class="notInclude">
                                            <?php if ($result->status == 1) { ?>
                                                <a href="<?php echo base_url() . "admin/make_ac?id=" . $result->id . "&status=2"; ?>" class="btn" style="background-color:#f89f12">ACTIVE</a>
                                            <?php } else if ($result->status == 2) { ?>
                                                <a href="<?php echo base_url() . "admin/make_ac?id=" . $result->id . "&status=1"; ?>" class="btn btn-danger" >BLOCKED</a>        
                                            <?php } else if ($result->status == 3) { ?>
                                                <a href="<?php echo base_url() . "admin/make_ac?id=" . $result->id . "&status=1"; ?>" class="btn btn-default" >PENDING</a>
            <?php } ?>
                                        </td>
                                        <td class="notInclude">
                                            <a href="<?php echo base_url() . "admin/detail_user?id=" . $result->id; ?>" class="btn btn-danger">VIEW</a>
                                            <?php if($this->input->get('seller')=='active'){ ?>
                                            <a href="<?php echo base_url('commission/add_commission?id=' . $result->id); ?>" class="btn btn-danger">SELLER INVOICE</a>
                                            <?php } ?>

                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                            endforeach;
                        } else {
                            echo "No records found";
                        }
                        ?>

                    </table>
    <?php echo $this->pagination->create_links(); ?>

                </div>
            </div>
        </section>
    </aside>
    <?php
}
?>

<script>
    $("body").on("click", ".pagination a", function() {
        var theUrl = $(this).attr('href');
        $("#content").load(theUrl);
        return false;
    });
</script>
