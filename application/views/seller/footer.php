    </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script-->
        <!--script src="<?php echo base_url(); ?>assets/seller/js/jquery.min.js" type="text/javascript"></script-->

    <!-- Extra Js-->
    <script src="<?php echo base_url(); ?>assets/seller/js/experimental.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        
        <!-- Bootstrap -->
        
        <!-- daterangepicker -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <!--script src="<?php echo base_url(); ?>assets/seller/js/plugins/chart.js" type="text/javascript"></script-->

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/seller/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
     
        <!-- Director App -->
        <!--script src="<?php echo base_url(); ?>assets/seller/js/Director/app.js" type="text/javascript"></script-->

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <!--script src="<?php echo base_url(); ?>assets/seller/js/Director/dashboard.js" type="text/javascript"></script-->
      <!--script src="<?php echo base_url(); ?>assets/seller/js/editor.js" type="text/javascript"></script-->
	<script src="<?php echo base_url(); ?>assets/seller/js/nice_editor.js" type="text/javascript"></script>
	<!-- For exporting table records -->
	<script src="<?=base_url()?>assets/admin/js/export.js"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    /*$(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });*/
            // Chart.defaults.global.responsive = true;
</script>

<script src="https://use.fontawesome.com/ab7824a66f.js"></script>
</body>
</html>