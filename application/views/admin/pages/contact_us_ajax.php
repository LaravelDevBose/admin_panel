<script>
	function showHideDiv(id_name) {
		$('#'+id_name).toggle();
	}

	function success_message(message) {
		swal({
            text: message,
            icon: "success",
            buttons: false,
            timer: 1500,
          });
	}

	function error_message(message) {
		swal({
            text: message, 
            icon: "error",
            buttons: false,
            timer: 1500,
          });
	}

	/*========= About us ===========*/

	$('.about_us').on('click', function(){

		var about_us = $('textarea[name="about_us"]').val();

		if(about_us.trim().length >0){
			$.ajax({
				url: '<?= base_url();?>about_us',
				type:'POST',
				dataType: 'json',
				data: {'about_us': about_us},
				success:function(data){
					if(data == 1){
						success_message('About Us Updated Successfully');
						showHideDiv('about_us');
						$('.about_us_text').html(about_us);
					}else{
						error_message('Some Thing Went Wrong Try again Later');
					}
					
				},
				error:function(error){
					console.log(error);
					error_message('Some Thing Went Wrong Try again Later');
				}
			});
		}else{
			$('#about_error').attr('style', ' ');
			setTimeout( function() {
                  $('#about_error').attr('style', ' display:none;');
               },1220);
		}
	});


	/*========= Address ===========*/

	$('.address').on('click', function(){

		var address = $('textarea[name="address"]').val();

		if(address.trim().length >0){
			$.ajax({
				url: '<?= base_url();?>address',
				type:'POST',
				dataType: 'json',
				data: {'address': address},
				success:function(data){
					if(data == 1){
						success_message('Address updated Successfully');
						showHideDiv('address');
						$('.address_text').html(address);
					}else{
						error_message('Some Thing Went Wrong Try again Later');
					}
					
				},
				error:function(error){
					console.log(error);
					error_message('Some Thing Went Wrong Try again Later');
				}
			});
		}else{
			$('#address_error').attr('style', ' ');
			setTimeout( function() {
                  $('#address_error').attr('style', ' display:none;');
               },1220);
		}
	});


	/*========= Phone Number ===========*/

	$('.phone').on('click', function(){

		var phone = $('input[name="phone"]').val();

		if(phone.trim().length >0){
			$.ajax({
				url: '<?= base_url();?>phone',
				type:'POST',
				dataType: 'json',
				data: {'phone': phone},
				success:function(data){
					if(data == 1){
						success_message('phone updated Successfully');
						showHideDiv('phone');
						$('.phone_text').html(phone);
					}else{
						error_message('Some Thing Went Wrong Try again Later');
					}
					
				},
				error:function(error){
					console.log(error);
					error_message('Some Thing Went Wrong Try again Later');
				}
			});
		}else{
			$('#phone_error').attr('style', ' ');
			setTimeout( function() {
                  $('#phone_error').attr('style', ' display:none;');
               },1220);
		}
	});


	/*========= Email Address ===========*/

	$('.email').on('click', function(){

		var email = $('input[name="email"]').val();

		if(email.trim().length >0){
			$.ajax({
				url: '<?= base_url();?>email',
				type:'POST',
				dataType: 'json',
				data: {'email': email},
				success:function(data){
					
					if(data == 1){
						success_message('email updated Successfully');
						showHideDiv('email');
						$('.email_text').html(email);
					}else{
						error_message('Some Thing Went Wrong Try again Later');
					}
					
				},
				error:function(error){
					console.log(error);
					error_message('Some Thing Went Wrong Try again Later');
				}
			});
		}else{
			$('#email_error').attr('style', ' ');
			setTimeout( function() {
                  $('#email_error').attr('style', ' display:none;');
               },1220);
		}
	});
</script>