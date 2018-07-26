 <div class="row">
	<div class="col-md-6 col-md-offset-3">
		<!-- Basic layout-->
			<form class="form-horizontal" action="<?= base_url();?>admin/update/<?= $admin->id; ?>" method="POST" enctype="multipart/form-data" >
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Create An Admin </h5>
				</div>

				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-3 control-label">Name:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" name="name" value="<?= $admin->name; ?>"  required class="form-control" placeholder="Admin Name..">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">UserName:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" name="username" value="<?= $admin->username; ?>" required class="form-control" placeholder="Admin UserName..">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Email:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" name="email" value="<?= $admin->email; ?>" required class="form-control" placeholder="Admin Email..">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Phone Number:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" name="phone_num" value="<?= $admin->phone_num; ?>" required class="form-control" placeholder="Admin Phone Number..">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Old Password:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="password" name="old_password" required class="form-control" placeholder="Your password">
							<span class="" id="pass_check"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Password:</label>
						<div class="col-lg-9">
							<input type="password" name="password" disabled class="form-control" placeholder="Your password">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Confirm Password:</label>
						<div class="col-lg-9">
							<input type="password" name="confirm_password" disabled class="form-control" placeholder="Your Confirm password">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Your avatar:</label>
						<div class="col-lg-9">
							<input type="file"  name="image" class="file-styled">
							<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
						</div>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</div>
			</div>
		<?= form_close(); ?>
		<!-- /basic layout -->
	</div>
</div>

<script>
	$('input[name="old_password"]').on('blur', function(){
		var old_password = $(this).val();
		var id = '<?= $admin->id; ?>';
		$.ajax({
			url:'<?= base_url();?>password/check',
			dataType:'json',
			type:"POST",
			data:{'id':id, 'old_password':old_password},
			success:function(data){
				console.log(data);
				if(data == 1){
					$('#pass_check').html('Old Password Match.');
					$('#pass_check').attr('class', 'text-success text-semibold')
					$('input[name="password"]').removeAttr('disabled');
					$('input[name="confirm_password"]').removeAttr('disabled');
				}else{
					$('#pass_check').html('Old Password Not Match.');
					$('#pass_check').attr('class', 'text-danger text-semibold')
					$('input[name="password"]').attr('disabled', 'disabled');
					$('input[name="confirm_password"]').attr('disabled', 'disabled');
				}
			},
			error:function(error){
				console.log(error);
				swal({
	                  text: "Some Thing Went Worng. Try again Later.",
	                  icon: "error",
	                  buttons: false,
	                  timer: 10000,
	                });
			},
		});
	});	
</script>