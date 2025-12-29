
	$(document).ready(function(){
		var role_id = $('#create_role').val();  
        if(role_id == 3)
        {
            $('#show_admin_option').css({'display':'block'});
        }
        else
        {
            $('#show_admin_option').css({'display':'none'});
        }
	});

	$('#create_role').change(function(){
        var role_id = $(this).val();  
        if(role_id == 3)
        {
            $('#show_admin_option').css({'display':'block'});
        }
        else
        {
            $('#show_admin_option').css({'display':'none'});
        }
    });


    $(document).ready(function(){
        var role_id = $('#create_role').val();  
        if(role_id == 4)
        {
            $('.extra_field_show_hide').css({'display':'none'});
        }
        else
        {
            $('.extra_field_show_hide').css({'display':'block'});
        }
    });

    $('#create_role').change(function(){
        var role_id = $(this).val();  
        if(role_id == 4)
        {
            $('.extra_field_show_hide').css({'display':'none'});
        }
        else
        {
            $('.extra_field_show_hide').css({'display':'block'});
        }
    });

    

    $("#create_formm").validate({
        rules:{
            uname:{
                required:true
            },
            email:{
                required:true,
            },
            password:{
                required: true,
                minlength:6,
                maxlength:20
            },
            cpassword:{
                required:true,
                minlength:6,
                maxlength:20,
                equalTo:"#password"
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    $("#create_formm1").validate({
        rules:{
            uname:{
                required:true
            },
            email:{
                required:true,
            },
            
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    $("#create_formmcc").validate({
        rules:{
            uname:{
                required:true
            },
            email:{
                required:true,
            },
            password:{
                required: true,
                minlength:6,
                maxlength:20
            },
            cpassword:{
                required:true,
                minlength:6,
                maxlength:20,
                equalTo:"#password"
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    

