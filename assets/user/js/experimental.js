$(document).ready(function() {

        $("#name, #country").keypress(function(e){
            var key = e.keyCode;
            if(key >= 48 && key <= 57){
                e.preventDefault();
            }

        });



        $('#mobile, #pincode').bind('keypress', function (event) {
            var regex = new RegExp("^[0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });

       $('#myform').submit(function(){
           var name = $('#name').val();
           var mobile = $('#mobile').val();
           var pincode = $('#pincode').val();
           var address = $('#address').val();
           var locality = $('#locality').val();
           var landmark = $('#landmark').val();
           var country = $('#country').val();
           console.log(name);
       });




});