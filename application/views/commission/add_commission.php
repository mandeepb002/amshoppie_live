<?php
$this->load->view('admin/header');
$this->load->model('admins');
$this->load->view('seller/nav');
?>    
<aside class="right-side">

    <section class="content">
        <div class="table-responsive">          
            <table class="table" style="width:100%;">

                <tr>
                    <th>Total Sale</th>
                    <th>Commission Amount</th>
                    <th>Commission(on <?php
                        if ($commission) {
                            print_r($commission);
                        } else {
                            echo 0;
                        }
                        ?> %)</th>
                    <th>TP Based Commission</th>
                    <th>Balance</th>

                </tr>
                <tr>
                    <td>
                        <?php
                        if ($grand_total) {
                            print_r($grand_total);
                        } else {
                            echo 0;
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($cal_commission) {
                            print_r($cal_commission);
                        } else {
                            echo 0;
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $calcommission = 0;
                        if ($cal_commission) {
                            $calcommission = ($cal_commission * $commission) / 100;
                        }
                        echo $calcommission;
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($tp_based_commission) {
                            print_r($tp_based_commission);
                        } else {
                            echo 0;
                        }
                        ?>
                    </td>
                    <td>
                        <div id="bal_amount">
                            <?php
                            $balance = 0;
                            $balance = ($cal_commission - $calcommission) + $tp_based_commission;
//                        if (count($seller_invoice_data) >= 1) {
//
//                            $seller_amount = $sellerdata->amount
//                            $total_amount = $balance - $seller_amount;
//
//                            echo $total_amount;
//                        } else {
                            echo $balance;
//                        }
                            ?>
                        </div>
                        <input type="hidden" name="balance_amt" id="balance_amt" value="<?php echo $balance; ?>">
                        <input type="hidden" name="inv_amt" id="inv_amt" value="">
                    </td>
                </tr>
<!--                <tr>
                    <td><button onclick="goBack()" class="btn btn-info">Invoice Payment</button></td>
                </tr>-->


            </table>
            <table>
                <tr>
                <button type="button" class="btn btn-primary" name="save_invoice" data-toggle="modal" data-target="#invoiceModal">
                    Invoice Payment
                </button></tr>
            </table>
        </div>

        <?php if (count($seller_invoice_data) >= 1) { ?>
            <div class="table-responsive">          
                <table class="table" id="invoiceTable" style="width:100%;">
                    <h2 style="text-align: center"><b>Invoice Detail List</b></h2>
                    <tr>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>

                    <?php foreach ($seller_invoice_data as $sellerdata) {
                        ?>
                        <tr>
                            <td><?php echo $sellerdata->amount; ?></td>
                            <td><?php echo $sellerdata->date; ?></td>
                        </tr>


                    <?php } ?>



                    <tbody id="invoicebody"></tbody>
                </table>
            </div>
        <?php } ?>
    </section>
</aside>
<!-- Modal -->
<div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="invoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 style="text-align: center" class="modal-title" id="invoiceModalLabel">Invoice Payment</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('commission/save_bank_details'); ?>" method="post">
                    <table>
                        <tr>
                            <td>Enter Amount to Seller Account</td>
                            <td>
                                <input type="text" name="invoice_amount" id="invoice_amount" required="">
                                <span id="inv_amt"></span></td>
                            <?php
                            $balance = 0;
                            $balance = ($cal_commission - $calcommission) + $tp_based_commission;
                            ?>
                        <input type="hidden" name="balance_amount" id="balance_amount" value="<?php echo $balance; ?>"></td>
                        </tr>
                        <tr>
                            <td>Seller Account Number:</td>
                            <?php // foreach($bank_details as $bank) {   ?>
                            <td><select class="form-control" id="bank_id" name="bank_id">
                                    <!--<option value="">Select Account</option>-->
                                    <?php
                                    foreach ($bank_details as $val) {
                                        ?><option value="<?php echo $val->id; ?>"><?php echo $val->ban; ?></option>';
                                    <?php }
                                    ?>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <button type="button" name="save_inv" id="save_inv">Save changes</button></td>
                        <div id="invoice_save"></div>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary invoice-color" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
                    $(document).ready(function() {

                        $('#save_inv').on('click', function() {
                            var balance = $('#balance_amount').val();
                            var invoice_amount = $('#invoice_amount').val();
                            var bank_id = $('#bank_id').val();

                            var valid = true;
//                            $("#bank_id").change(function() {
//                                var bank_id = $(#bank_id option:selected).val();
//                                        if (bank_id == "")
//                                {
//                                    $("#bank_id").html("Please select");
//                                    return false;
//                                }
//                            });
//            alert(invoice_amount + balance);
//            if (invoice_amount < balance) {
//                $("#inv_amt").css('background-color', '#FFFFDF');
//                $("#inv_amt").css('color', 'red');
//                $("#inv_amt").html('Invoice amount should not be greater than balance amount');
//                valid = false;
//            }
                            if (!$("#invoice_amount").val()) {
                                $("#invoice_amount").css('border-color', 'red');
                                $("#invoice_amount").css('background-color', '#FFFFDF');
                                $("#inv_amt").css('color', 'red');
                                $("#inv_amt").html('Please enter amount in seller account');
                                valid = false;
                            }
                            var ajaxurl = "<?= base_url('commission/save_bank_details') ?>";
                            if (valid == true) {
                                $.ajax({
                                    url: ajaxurl,
                                    dataType: "json",
                                    type: 'POST',
                                    data: {'bank_id': bank_id, 'invoice_amount': invoice_amount},
//                    alert(data);
                                    success: function() {

                                        $("#invoice_save").html('<h2 style="color:red;"><b>Invoice saved successfully</b></h2><br>');
                                    }
                                });
                            }
                        });
                    });
</script>
<script>
    $(document).ready(function() {
		//calculate balance amount
		var inv = 0;
		$('table#invoiceTable tr').not(':first').each(function() {
			inv += parseInt($.trim($(this).find('td').eq(0).text()));
		});
		var newBal = parseInt($('#bal_amount').text()) - inv;
		$('#bal_amount').text(newBal);
		$('#balance_amt').val(newBal);
        $('#save_inv').click(function() {

            var balance_amt = $('#balance_amt').val();
            var inv_amt = $('#invoice_amount').val();
            $('#inv_amt').val(inv_amt);
            var balance_deduction = balance_amt - inv_amt;
            //$('#balancebalance_deduction_amt').val(balance_deduction);
//                    alert(bal_amt);
            $('#bal_amount').text(balance_deduction);

        });
    });
</script>

<?php $this->load->view('admin/footer'); ?>