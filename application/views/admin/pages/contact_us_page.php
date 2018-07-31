<!-- Advanced legend -->


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
					<i class="icon-file-text2 position-left"></i> Contract Us information
					<a class="control-arrow" data-toggle="collapse" data-target="#demo3">
						<i class="icon-circle-down2"></i>
					</a>
				</legend>

				<div class="collapse in" id="demo3">
    				
					<div class="col-md-12" style="margin-bottom: 30px;">
						<label class="col-lg-3 control-label"> Address: </label>
						<label class="col-md-8 control-label address_text"><?php if($address){ echo $address->value; } ?></label>
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
						<label class="col-md-8 control-label phone_text"><?php if($phone){ echo $phone->value; }?></label>
						<button class="btn btn-sm btn-info col-md-1" onclick="showHideDiv('phone')" >edit</button>

						<div class="form-group" id="phone" style="display: none;">
							<div class="col-lg-7 col-md-offset-3">
								<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Phone Number">
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
						<label class="col-md-8 control-label email_text"><?php if($email){ echo $email->value;} ?></label>
						<button class="btn btn-sm btn-info col-md-1" onclick="showHideDiv('email')" >edit</button>

						<div class="form-group" id="email" style="display: none;">
							<div class="col-lg-7 col-md-offset-3">
								<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Site Email Address">
								<span id="email_error" class="text-danger text-semibold" style="display: none;">Email Field is required.</span>
							</div>
							<div class="col-md-2">
								<button class="btn btn-success btn-sm email">Submit</button>
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

<?php $this->load->view('admin/pages/contact_us_ajax'); ?>
