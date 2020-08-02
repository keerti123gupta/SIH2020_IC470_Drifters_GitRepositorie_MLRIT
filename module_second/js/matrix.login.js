
$(document).ready(function(){

	var login = $('#loginform');
	var recover = $('#registerform');
	var speed = 400;

	$('#to-recover').click(function(){
		
		$("#loginform").slideUp();
		$("#registerform").fadeIn();
	});
	$('#to-login').click(function(){
		
		$("#registerform").hide();
		$("#loginform").fadeIn();
	});
	
	$("#registerform").hide();
	$('#to-login').click(function(){
	
	});
    
    if($.browser.msie == true && $.browser.version.slice(0,3) < 10) {
        $('input[placeholder]').each(function(){ 
       
        var input = $(this);       
       
        $(input).val(input.attr('placeholder'));
               
        $(input).focus(function(){
             if (input.val() == input.attr('placeholder')) {
                 input.val('');
             }
        });
       
        $(input).blur(function(){
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.val(input.attr('placeholder'));
            }
        });
    });

        
        
    }
});
$(document).on('click','#btnRegis',function(){
	var error_cnt=0;
	var fulname =$('#fulname').val();
	var email = $('#email').val();
	var contact_no = $("#contact_no").val();
	var pass = $('#pass').val();
	if (fulname == '') 
	{
		error_cnt++;
		$('#fulname_error').html('<i class="icon icon-warning"></i> Field Required !');
	}
	if (email == '') 
	{
		error_cnt++;
		$('#email_error').html('<i class="icon icon-warning"></i> Field Required !');
	}
	if (contact_no == '') 
	{
		error_cnt++;
		$('#contact_error').html('<i class="icon icon-warning"></i> Field Required !');
	}
	if (pass == '') 
	{
		$error_cnt++;
		$('#pass_error').html('<i class="icon icon-warning"></i> Field Required !');
	}
	if (error_cnt==0) 
	{
		$.ajax({
			url:'register.php',
			dataType:'JSON',
			type:'POST',
			data:{fulname:fulname,email:email,contact_no:contact_no,pass:pass},
			success:function(res)
			{
				console.log(res);
				if (res.status=='success') 
				{
					alert('Account Created Successfully..!');
				}else{
					alert('Please try again later.!');
				}
			}
		});
	}
});
function validate(){
	var log_error_cnt=0;
	var login_username = $("#login_username").val();
	var login_password = $("#login_password").val();
	if (login_username == '') 
	{
		log_error_cnt++;
		$("#login_username_error").html('<i class="fa fa-warning"> Username required</i>');
	}
	if (login_password == '') 
	{
		log_error_cnt++;
		$("#login_password_error").html('<i class="fa fa-warning"> password required</i>');
	}
	if (log_error_cnt==0) 
	{
		return true;
	}else{
		return false;
	}
}