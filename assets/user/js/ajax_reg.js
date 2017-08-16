	
/******* user register ajax ******/	
	$(document).ready(function(){
			/* validation */
    $("#form_signup").validate({
        rules:
        {
            mobile: {
                required: true,
                minlength: 10,
				maxlength: 10,
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 15,
            },
            email: {
                required: true,
                email: true,
            },
        },
        messages:
        {
            mobile: {
				required: "Enter a Valid mobile no..",
				minlength: "mobile Needs To Be Minimum of 10 Characters"
				
			},
            password:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            email: "Enter a Valid Email",
            
        },
		        highlight: function (element) {
                $(element).parent().addClass('error01')
            },
			unhighlight: function (element) {
                $(element).parent().removeClass('error01')
            },
		
        submitHandler: submitForm
    });
		});
    /* validation */
	//if( $('#codediv').css('display') =='none'){		
		function submitForm(){
		   var dataa = $("#form_signup").serialize();
			$.ajax({
					type : "POST",
					url : base_url+"user/register_user", 
					datatype : "json",
					data : dataa,
					success : function(data){
					var obj = jQuery.parseJSON( data );
					if(obj.status == 'true')
					{
					$(".error").hide();
					$('.hidden_div').hide();
					$('#sign-up_js').hide();
					$("#codediv").show();
					$(".success").html('OTP SENT ON YOUR MOBILE');
					} 
					else {
					$(".error").html(obj.result);
					} 
					},
				})
		}
		
		$("#sign-up1").click(function(event){
			 event.preventDefault();
		var mobile = $("#mob").val();
		var otp = $("#code").val(); 
			//alert(otp);
		$.ajax({
		url : base_url+"user/match_otp",
		type : "POST", 
		data : {mobile:mobile,otp:otp},
		datatype: "json",
		success : function(data){
		var obj = jQuery.parseJSON( data );
		if(obj.status == 'false'){
		$(".success").hide();
		$(".error").html('Wrong OTP');
		$(".error").show();
		$("#code").focus();
		scroll();
		}
		else {
       //alert('true');
	    $(".success").hide();
		$(".error").hide();
	    $("#codediv2").show();
		$(".success1").html('YOUR OTP MATCH');
		window.setTimeout(function(){
		window.location.href = base_url;
		}, 5000);
		$(".success1").hide();
		$(".success2").html("you successfully register & login ");
		$('#code').prop('disabled', true);
		
		//window.location = base_url;
		
		}
		},
		}) 
		});
    
	/******* close user register ajax ******/
			
	/********login ajax***************/
		
	$(document).ready(function(){
			/* validation */
	$("#login_form").validate({
        rules:
        {
            mobile: {
                required: true,
                minlength: 10
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            
        },
        messages:
        {
            mobile: {
				required: "Enter a Valid mobile no..",
				minlength: "mobile Needs To Be Minimum of 10 Characters"
				
			},
            password:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
           
            
        },
		        highlight: function (element) {
                $(element).parent().addClass('error01')
            },
			unhighlight: function (element) {
                $(element).parent().removeClass('error01')
            },
		
        submitHandler: submitForm
    });
		});
    /* validation */
	 	$("#btn_login").click(function(event){
			 event.preventDefault();
		var mobile = $("#mobile_log").val();
		var password = $("#password_log").val(); 
			//alert(otp);
		$.ajax({
		url : base_url+"user/user_login",
		type : "POST", 
		data : {mobile:mobile,password:password},
		datatype: "json",
		success : function(data){
		var obj = jQuery.parseJSON( data );
		if(obj.status == 'true'){
		window.setTimeout(function(){
		window.location.href = base_url;
		}, 3000);
		$(".log_error").hide();
		$(".log_success").show();
		$(".log_success").html(obj.result);
		}
		else {
		//alert(obj.result);
		$(".log_success").hide();
		$(".log_error").html(obj.result);
		}
		},
		}) 
		});
	/******* close user login ajax*********/
	
	
	  
	  /* user add address ajax jquery **********/
	  
	  		$(document).ready(function(){
				
			/* validation */
		$("#form_add").validate({
	    //errorLabelContainer: ".error01",
			 
        rules:
        {
			name: {
				required: true,
				minlength: 5,
               
			},
            mobile: {
                required: true,
                minlength: 10,
				maxlength: 10,
            },
            pincode: {
                required: true,
                minlength: 6,
            },
			address: {
                required: true,
               
            },
			locality: {
                required: true,
              
            },
			landmark:{
				required: true,
               
			},
            country: {
                required: true,
                
            },
        },
		 messages:
        {
			name: {
				required: "Name field is required..",
				minlength: "Name Needs To Be Minimum of 5 Characters"
				
			},
            mobile: {
				required: "Enter a Valid mobile no..",
				minlength: "Mobile Needs To Be Minimum of 10 Characters",
				maxlength: "Name Needs To Be Maximum of 10 Characters",
				
			},
            pincode:{
                required: "Enter valid pincode",
				
            },
			address: "Address field is required",
			locality:"Locality field is required",
			landmark:"Landmark field is required",
            country: "Country field is required",
            
        },
     
		        highlight: function (element) {
                $(element).parent().addClass('error01')
            },
			unhighlight: function (element) {
                $(element).parent().removeClass('error01')
            },
		
        
    });
		});
    /* validation */
			 $("#butn_add").click(function(event){
				event.preventDefault();
			var data = $("#form_add").serialize();
			$.ajax({
					type : "POST",
					url : base_url+"user/user_add_address", 
					datatype : "json",
					data : data,
					success: function(data) {
					var obj = jQuery.parseJSON( data );
						if(obj.status == 'true'){
							
							//$(document).on('click', '#butn_add', function(event) { 
							event.preventDefault(); 
							window.setTimeout(function(){
							$(".add_open").click(); 
							$("#defaultOpen").addClass('active');
							}, 3000);
							//});
						$(".msg").html("Add address successfully");
						$("#form_add")[0].reset();
					}else{
						$(".msg").html(obj.result);
					}
					},
				})
			
				});
/* user add address ajax closed*****************/

/* delete alert jquery */
  
  function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
/* edit user address */
$(document).ready(function(){
    $(".edit_button").click(function(){
			$("#user2").hide();
			$("#user10").show();
		var id =$(this).attr('id');
		$.ajax({
			method:'post',
			datatype:'json',
			url: base_url+"user/edit_users",
			data:{id:id},
			success:function(result){ 
			var obj = jQuery.parseJSON(result);
			if(obj.status == 'true'){
			//alert(obj.result[0].id);
			
			$("#name_add1").val(obj.result[0].name);
			$("#edit_id").val(obj.result[0].id);
			$("#user_id1").val(obj.result[0].user_id);
			$("#mobile_add1").val(obj.result[0].mobile);
			$("#pincode_add1").val(obj.result[0].pincode);
			$("#address_add1").val(obj.result[0].address);
			$("#locality_add1").val(obj.result[0].locality);
			$("#landmark_add1").val(obj.result[0].landmark);
			$("#country_add1").val(obj.result[0].country);
			}
			},
			
        })
    });
});
$(document).ready(function(){
			/* validation */
		$("#form-id").validate({
	    //errorLabelContainer: ".error01",
			 
        rules:
        {
			name: {
				required: true,
				minlength: 5,
               
			},
            mobile: {
                required: true,
                minlength: 10,
				maxlength: 10,
            },
            pincode: {
                required: true,
                minlength: 6,
            },
			address: {
                required: true,
               
            },
			locality: {
                required: true,
              
            },
			landmark:{
				required: true,
               
			},
            country: {
                required: true,
                
            },
        },
		 messages:
        {
			name: {
				required: "Name field is required..",
				minlength: "Name Needs To Be Minimum of 5 Characters"
				
			},
            mobile: {
				required: "Enter a Valid mobile no..",
				minlength: "Mobile Needs To Be Minimum of 10 Characters",
				maxlength: "Name Needs To Be Maximum of 10 Characters",
				
			},
            pincode:{
                required: "Enter valid pincode",
				
            },
			address: "Address field is required",
			locality:"Locality field is required",
			landmark:"Landmark field is required",
            country: "Country field is required",
            
        },
     
		        highlight: function (element) {
                $(element).parent().addClass('error01')
            },
			unhighlight: function (element) {
                $(element).parent().removeClass('error01')
            },
	
    });
		});
    /* validation */
			
			$("#updata_sub").click(function(event){
			event.preventDefault();
			var data = $("#form-id").serialize();
			$.ajax({
					type : "POST",
					url : base_url+"user/user_edit_address", 
					datatype : "json",
					data :data,
					success: function(data){
					var obj = jQuery.parseJSON( data );
					if(obj.status == 'true'){
					window.setTimeout(function(){
					window.location.href = base_url+"user/profile";
					}, 5000);
					$(".msg").html("Add address successfully");
					
					}
					},

				})
			});

/***** user edit profile****/

$(document).ready(function(){
    $("#edit_prof").click(function(){
		$.ajax({
			method:'post',
			datatype:'json',
			url: base_url+"user/view_profile",
			data:{},
			success:function(result){ 
			var obj = jQuery.parseJSON(result);
			if(obj.status == 'true'){
				
			$("#exampleInputEmail1").val(obj.result[0].email);
			$("#Phone_Number").val(obj.result[0].mobile);
			$("#name_edit").val(obj.result[0].name);
			$("#Last_Name").val(obj.result[0].lastname);
			$("#Bio").val(obj.result[0].bio);
			$("#date_birth").val(obj.result[0].dob);
			$("#City").val(obj.result[0].city);
			
			$('input[type=radio]').each(function(){
			if($(this).val() === obj.result[0].gender){
              $(this).prop('checked', true);
           }
         });
       
			}
			},
			
        })
    });
});

/*validation edit profile */
$(document).ready(function(){
			/* validation */
			$("#edituser_form").validate({
	    //errorLabelContainer: ".error01",
			 
       rules:
        {
			name: {
				required: true,
				minlength: 5,
               
			},
            mobile: {
                required: true,
                minlength: 10,
				maxlength: 10,
            },
			lastname: {
                required: true,
               
            },
			gender: {
                required: true,
              
            },
			bio:{
				required: true,
               
			},
            
        },
		 messages:
        {
			name: {
				required: "Name field is required..",
				minlength: "Name Needs To Be Minimum of 5 Characters"
				
			},
			lastname: {
				required: "Name field is required..",
				minlength: "Name Needs To Be Minimum of 5 Characters"
				
			},
            mobile: {
				required: "Enter a Valid mobile no..",
				minlength: "Mobile Needs To Be Minimum of 10 Characters",
				maxlength: "Name Needs To Be Maximum of 10 Characters",
				
			},
           
			
			bio:"bio field is required",
            city: "city field is required",
            
        },
     
		        highlight: function (element) {
                $(element).parent().addClass('error01')
            },
			unhighlight: function (element) {
                $(element).parent().removeClass('error01')
            },
		
    });
		});
    /* validation */
			
			$("#sub_profile").click(function(event){
				event.preventDefault();
			var data = $("#edituser_form").serialize();
				
			$.ajax({
					type : "POST",
					url : base_url+"user/edit_userpro", 
					datatype : "json",
					data :data,
					success: function(data){
					var obj = jQuery.parseJSON( data );
					if(obj.status == 'true'){
					window.setTimeout(function(){
					window.location.href = base_url+"user/profile";
					}, 5000);
					$(".msg").html("Add address successfully");
				
					
					}else{
					$(".log_error").html(obj.result);
					}
					},

				})
			});
			
	$(document).ready(function(){
	$("#add_address1").click(function(){
			$("#user2").hide();
			$("#user6").show();
	});
	});