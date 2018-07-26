 <div class="row">
	<div class="col-md-6 col-md-offset-3">
		<!-- Basic layout-->
			<?= form_open('admin/store',['class'=>'form-horizontal', 'enctype'=>'multipart/form-data']);?>
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Create An Admin </h5>
				</div>

				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-3 control-label">Name:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" name="name" class="form-control" required placeholder="Admin Name..">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">UserName:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" name="username" class="form-control" required placeholder="Admin UserName..">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Email:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" name="email" class="form-control" required placeholder="Admin Email..">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Phone Number:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" name="phone_num" class="form-control" required placeholder="Admin Phone Number..">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Password:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="password" name="password" class="form-control" required placeholder="Your password">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Confirm Password:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="password" name="confirm_password" class="form-control" required placeholder="Your Confirm password">
						</div>
					</div>

					<!-- <div class="form-group">
						<label class="col-lg-3 control-label">Admin Type:<span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<select class="select" name="admin_type" required>
								<option value="a">Admin</option>
								<option value="s">Super Admin</option>
							</select>
						</div>
					</div> -->

					

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