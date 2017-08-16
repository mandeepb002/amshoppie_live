<style>
.ui-datepicker{
	background: rgb(248, 159, 18) none repeat scroll 0% 0%;
	padding: 15px;
}
.ui-icon-circle-triangle-e{
float:right;
}
</style>

<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">

<div class="panel panel-primary" style="width: 100%; margin: 0 auto;">
    <div class="col-xs-12 order-report-inst">
            <h4 class="head-mail">An email will be sent to your registered email id with report of all your orders.</h4>
        </div>
    <div class="panel-body">
	<form method="post" action="export_order_report">
	<div class="col-xs-12 col-md-6">
		<div class="col-md-8">
		 <div class="col-xs-12 col-md-8">
                    Start Date
                </div>
			<div class="form-group">
				<input type="text" name="start" class="form-control datepicker" placeholder="Pick the date">
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6">
		<div class="col-md-8">
		 <div class="col-xs-12 col-md-8">
                    End Date
                </div>
			<div class="form-group">
				<input type="text" name="end" class="form-control datepicker" placeholder="Pick the date">
			</div>
		</div>
	</div>
	<div class="col-xs-12 padding-top-45 padding-left-33">
                <button class="btn btn-primary1" type="submit">Email Order Report</button>
                <div>
	</form>
		<!--<div class="col-md-4">
			<button class="btn btn-primary add_field_button"><i class="fa fa-plus"></i> Add More</button>
		</div>-->
		<div class="input_fields_wrap">
			<!-- Dynamic Fields go here -->
		</div>
	</div>
</div>

           <!--<section class="content">
			<div class="container-fluid padding-top-15 padding-bottom-25 ng-scope" ng-init="orderReport_init();">
    <div class="row">
        <div class="col-xs-12 order-report-inst">
            <h4 class="head-mail">An email will be sent to your registered email id with report of all your orders.</h4>
        </div>
        <div id="date_filter" class="col-xs-12 col-md-12">
            <div class="col-xs-12 col-md-6">
                <div class="col-xs-12 col-md-8">
                    Start Date
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="input-append date" id="datepicker" data-date="" data-date-format="dd-mm-yyyy" onchange="angular.element(this).scope().hideDate();">
                     <input id="from_date" class="col-xs-10 date-display form-control calender-icon ng-pristine ng-valid ng-not-empty ng-touched" size="14" type="date" value="" ng-model="report_from_date" ng-click="toDate();">
                       <span class="add-on col-xs-2"></span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 padding-top-xs-30">
                <div class="col-xs-12 col-md-8">
                    End Date
                </div>

                <div class="col-xs-12 col-md-8">
                   <div class="input-append date" id="datepicker_1" data-date="" data-date-format="dd-mm-yyyy" onchange="angular.element(this).scope().hideDate();">
                        <input id="to_date" class="col-xs-10 form-control calender-icon ng-pristine ng-untouched ng-valid ng-not-empty" size="14" type="date" value="" ng-model="report_to_date" ng-click="fromDate();">
                        <span class="add-on col-xs-2"></span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 padding-top-45 padding-left-33">
                <button class="btn btn-primary1" ng-click="exportOrderReport();">Email Order Report</button>
                <div>
                    <!-- ngIf: order_export_mail_msg != undefined -->
                    <!-- ngIf: date_error != undefined -->
                <!--</div>
            </div>
        </div>
    </div>
</div>
</section>-->	
<script>
$('body').on('focus',".datepicker", function(){
    $(this).datepicker();
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="input-line-control removeMe"><div class="col-md-8"><div class="form-group"><input type="text" class="form-control datepicker" placeholder="Pick the date"></div></div><div class="col-md-4"><button class="btn btn-danger remove-date"><i class="fa fa-remove"></i>Remove</button></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove-date", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('div.removeMe').remove(); x--;
    })
});	
</script>	
</aside>
<?php }else{
    redirect('seller/login?msg=Please login to continue');
} ?>