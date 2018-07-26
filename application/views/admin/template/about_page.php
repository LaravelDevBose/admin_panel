<!-- Advanced legend -->

<!-- <form class="form-horizontal" action="<?= base_url();?>product/store" method="POST" enctype="multipart/form-data" >
	 -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Product Insert form</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			

			<fieldset> 
				<legend class="text-semibold">
					<i class="icon-file-text2 position-left"></i> About Us information
					<a class="control-arrow" data-toggle="collapse" data-target="#demo2">
						<i class="icon-circle-down2"></i>
					</a>
				</legend>

				<div class="collapse in" id="demo2">
    				
    				<div class="col-md-12" style="margin-bottom: 30px;">
						<label class="col-lg-3 control-label"> About Us: </label>
						<label class="col-md-8 control-label about_us_text"><?= $about_us->value; ?></label>
						<button class="btn btn-sm btn-info col-md-1" onclick="showHideDiv('about_us')" >edit</button>

						<div class="form-group" id="about_us" style="display: none;">
							<div class="col-lg-7 col-md-offset-3">
								<textarea name="about_us" class="form-control" placeholder="About Web site..."></textarea>
								<span id="about_error" class="text-danger text-semibold" style="display: none;">About Us Field is required. insert First</span>
							</div>
							<div class="col-md-2">
								<button class="btn btn-success btn-sm about_us">Submit</button>
							</div>
							<br>
						</div>
						<br>
					</div>
	    		</div>
			</fieldset>

			<fieldset>
				<legend class="text-semibold">
					<i class="icon-file-text2 position-left"></i> Contract Us information
					<a class="control-arrow" data-toggle="collapse" data-target="#demo3">
						<i class="icon-circle-down2"></i>
					</a>
				</legend>

				<div class="collapse in" id="demo3">
    				
					<div class="col-md-12" style="margin-bottom: 30px;">
						<label class="col-lg-3 control-label"> Address: </label>
						<label class="col-md-8 control-label address_text"><?= $address->value; ?></label>
						<button class="btn btn-sm btn-info col-md-1" onclick="showHideDiv('address')" >edit</button>

						<div class="form-group" id="address" style="display: none;">
							<div class="col-lg-7 col-md-offset-3">
								<textarea name="address" class="form-control" placeholder="Address of Web site..."></textarea>
								<span id="address_error" class="text-danger text-semibold" style="display: none;">Address Field is required. insert First</span>

							</div>
							<div class="col-md-2">
								<button class="btn btn-success btn-sm address">Submit</button>
							</div>
							<br>
						</div>
						<br>
					</div>

					<div class="col-md-12" style="margin-bottom: 30px;">
						<label class="col-lg-3 control-label"> Phone: </label>
						<label class="col-md-8 control-label phone_text"><?= $phone->value; ?></label>
						<button class="btn btn-sm btn-info col-md-1" onclick="showHideDiv('phone')" >edit</button>

						<div class="form-group" id="phone" style="display: none;">
							<div class="col-lg-7 col-md-offset-3">
								<input type="number" name="phone" class="form-control" placeholder="Phone Number">
								<span id="phone_error" class="text-danger text-semibold" style="display: none;">Phone Number Field is required.</span>
							</div>
							<div class="col-md-2">
								<button class="btn btn-success btn-sm phone">Submit</button>
							</div>
							<br>
						</div>
						<br>
					</div>

					<div class="col-md-12" style="margin-bottom: 30px;">
						<label class="col-lg-3 control-label"> E-Mail: </label>
						<label class="col-md-8 control-label email_text"><?= $email->value; ?></label>
						<button class="btn btn-sm btn-info col-md-1" onclick="showHideDiv('email')" >edit</button>

						<div class="form-group" id="email" style="display: none;">
							<div class="col-lg-7 col-md-offset-3">
								<input type="text" name="email" class="form-control" placeholder="Site Email Address">
								<span id="email_error" class="text-danger text-semibold" style="display: none;">Email Field is required.</span>
							</div>
							<div class="col-md-2">
								<button class="btn btn-success btn-sm email">Submit</button>
							</div>
							<br>
						</div>
						<br>
					</div>

	    			<div class="col-md-12" style="margin-bottom: 30px;">
						<label class="col-lg-3 control-label"> Map Address: </label>
						<label class="col-md-8 control-label">hhhhhhhhhhhhhhhhh</label>
						<button class="btn btn-sm btn-info col-md-1" onclick="showHideDiv('google_map')" >edit</button>

						<div class="form-group" id="google_map" style="display: none;">
							<div class="col-lg-7 col-md-offset-3">
								<input type="text" name="google_map" class="form-control"  placeholder="Google Map Location">
							</div>
							<div class="col-md-2">
								<button class="btn btn-success btn-sm google_map">Submit</button>
							</div>
							<br>
						</div>
						<br>
					</div>
	    		</div>
			</fieldset>
		</div>
	</div>
<!-- </form> -->

<?php $this->load->view('admin/template/about_and_contract_ajax'); ?>
