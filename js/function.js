$(document).ready(function(){	
	$("#headercontactForm").submit(function(event){	
		//alert('111111');
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		var name = $('#name').val();
		var email = $('#email').val();
		var zip = $('#zip').val();
		//var city=$( "#city option:selected" ).val();
		//var state=$( "#state option:selected" ).text();
		//alert(city);
		//var state=$('#state').val();
		//var message = $('#inputMessage').val();
		if(name.trim() == '' ){
        //alert('Please enter your name.');
		$("#nameError").show();
        $('#name').focus();
        return false;
    }else if(email.trim() == '' ){
		$("#nameError").hide();
        //alert('Please enter your email.');
        $('#email').focus();
		$("#emailError").show();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
		//$("#nameError").hide();
        //alert('Please enter valid email.');
		$("#nameError").hide();
        $('#email').focus();
		$("#emailError").show();
        return false;
    }else if(zip.trim() == '' ){
        //alert('Please enter your name.');
		$("#zipError").show();
        $('#zip').focus();
        return false;
    }
	/*else if(city.trim() == '' || city=='City'){
		$("#emailError").hide();
		$("#cityError").show();
        $('#city').focus();
        return false;
    }else if(state.trim() == '' || state=='State'){
		$("#cityError").hide();
		$("#stateError").show();
        $('#state').focus();
        return false;
    }*/
	/*else if(message.trim() == '' ){
        alert('Please enter your message.');
        $('#inputMessage').focus();
        return false;
    }*/
	else{
		$("#stateError").hide();
		submitForm();
		
	}
		
		
		return false;
	});
	
	
	
	$("#testercontactForm").submit(function(event){	
		//alert('222222');
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var email2 = $('#email2').val();
		//var phonetype = $('#phonetype').val(); 
		var phone = $('#phone').val();
		var zip = $('#zip2').val();
		var type = $(".typec:checked").val();
		//alert('<>'+email2);
		//alert('<type:>'+type);
		if(fname.trim() == '' )
		{
		$("#fnameError").show();
        $('#fname').focus();
        return false;
       }else if(lname.trim() == '' ) 
		{
		$("#fnameError").hide();	
		$("#lnameError").show();
        $('#lname').focus();
        return false;
		}
		else if(email2.trim() == '' ){
		$("#lnameError").hide();
        //alert('Please enter your email.');
		$("#email2Error").show();
        $('#email').focus();
		
        return false;
    }else if(email2.trim() != '' && !reg.test(email2)){
		//$("#nameError").hide();
        //alert('Please enter valid email2222.');
		$("#lnameError").hide();
		$("#email2Error").show();
        $('#email2').focus();		
        return false;
    }
    else if(phone.trim() == '' ){
        //alert('Please enter your name.');
		$("#email2Error").hide();
		$("#phoneError").show();
        $('#phone').focus();
        return false;
    }
	else if(zip.trim() == '' ){
		$("#phoneError").hide();
		$("#zip2Error").show();
        $('#zip2').focus();
        return false;
    }
	else if(type.trim() == '' ){
		$("#zip2Error").hide();
		$("#typecError").show();
        
        return false;
    }
	/*else if(city.trim() == '' || city=='City'){
		$("#emailError").hide();
		$("#cityError").show();
        $('#city').focus();
        return false;
    }else if(state.trim() == '' || state=='State'){
		$("#cityError").hide();
		$("#stateError").show();
        $('#state').focus();
        return false;
    }*/
	/*else if(message.trim() == '' ){
        alert('Please enter your message.');
        $('#inputMessage').focus();
        return false;
    }*/
	else{
		$("#phoneError").hide();
		
		submitTesterForm();
		
	}
		
		
		return false;
	});
	
	
	$("#NewsletterForm").submit(function(event){
	    //alert('p.....');
	   var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i; 
	   var newsemail = $('#newsemail').val();
	   $("#emailError").hide();
	   if(newsemail.trim() == '' ){
		$("#lnameError").hide();
        //alert('Please enter your email.');
		$("#emailError").show();
        $('#newsemail').focus();
		
        return false;
    }else if(newsemail.trim() != '' && !reg.test(newsemail)){
		//$("#nameError").hide();
        //alert('Please enter valid email2222.');
		$("#emailError").show();
        $('#newsemail').focus();		
        return false;
    }else{
        $("#emailError").hide();
        submitNewsletter();
        
    }
	   
	    return false;
	});    

	
	/**/
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
		
	});
	
	/* $(".fancybox-media")
    .attr('rel', 'gallery')
    .fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        nextEffect  : 'none',
        prevEffect  : 'none',
        padding     : 0,
        margin      : [20, 60, 20, 60] // Increase left/right margin
    });*/
	
	/**/
	
	
	
});

// Fires whenever a player has finished loading
function onPlayerReady(event) {
    event.target.playVideo();
}

function myOnloadFunc() {
   $('#success_msg').modal('show');
}

function myOnloadFunc2() {
   $('#success_msg2').modal('show');
}

function gohomeFunc() {
    
	 $("#success_msg").modal('hide');
}

function pupupOpen(){
	
	$('#myModal').modal('show');
}

function pupupBetaOpen(){
	
	$('#myModal2').modal('show');
}

function learn_more(){
  $('#myModal').modal('show');  
}


function submitNewsletter(){
    var result;
	 $.ajax({
		type: "POST",
		url: "savenewsleter.php",
		cache:false,
		data: $('form#NewsletterForm').serialize(),
		success: function(response){
			//$("#contact").html(response)
			//$('#success_msg').modal('show');
			//$('#headercontactForm').hide();
			 result = response;
			//alert('<>'+handleData(response));
			//	alert('<<>>'+result);
				if(result==0){
				    $("#alertE").show();
				    setTimeout(function() { $("#alertE").hide(); }, 5000);
				}else if(result==1){
				    $("#alertS").show();
				    setTimeout(function() { $("#alertS").hide(); }, 5000);
				}
			//myOnloadFunc();
			//$("#myModal").modal('hide');
			//$("#headercontactForm")[0].reset();
			
			//$("#alertH").show();
			//setTimeout(function() { $("#alertH").hide();$("#myModal").modal('hide');$("#headercontactForm")[0].reset(); }, 5000);
			
			
			//$('#msg').html("data insert successfully").fadeIn('slow')
			//$('#msg').delay(5000).fadeOut('slow');
			//$("#myModal").modal('hide');
			//alert('Yes+++++++'+response); 
		},
		error: function(){
			alert("Error");
		}
	});
}



function submitForm(){
	 $.ajax({
		type: "POST",
		url: "saveheaderContact.php",
		cache:false,
		data: $('form#headercontactForm').serialize(),
		success: function(response){
			//$("#contact").html(response)
			//$('#success_msg').modal('show');
			//$('#headercontactForm').hide();
			
			
			myOnloadFunc();
			$("#myModal").modal('hide');
			$("#headercontactForm")[0].reset();
			
			//$("#alertH").show();
			//setTimeout(function() { $("#alertH").hide();$("#myModal").modal('hide');$("#headercontactForm")[0].reset(); }, 5000);
			
			
			//$('#msg').html("data insert successfully").fadeIn('slow')
			//$('#msg').delay(5000).fadeOut('slow');
			//$("#myModal").modal('hide');
			//alert('Yes+++++++'+response); 
		},
		error: function(){
			alert("Error");
		}
	});
}






function submitTesterForm(){
	//alert('*************************');
	 $.ajax({
		type: "POST",
		url: "savetesterContact.php",
		cache:false,
		data: $('form#testercontactForm').serialize(),
		success: function(response){
			//$("#contact").html(response)
			//$('#success_msg').modal('show');
			//$('#headercontactForm').hide();
			
			myOnloadFunc2();
			$("#myModal2").modal('hide');
			$("#testercontactForm")[0].reset();
			
			
			//$("#alertL").show();
			//setTimeout(function() { $("#alertL").hide();$("#myModal2").modal('hide');$("#testercontactForm")[0].reset(); }, 5000);
			
			//$('#msg').html("data insert successfully").fadeIn('slow')
			//$('#msg').delay(5000).fadeOut('slow');
			//$("#myModal").modal('hide');
			//alert('Yes++++2222+++'+response);
		},
		error: function(){
			alert("Error");
		}
	});
}