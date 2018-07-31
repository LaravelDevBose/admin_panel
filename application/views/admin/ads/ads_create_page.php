 <div class="row">
	<div class="col-md-6 col-md-offset-3">
		<!-- Basic layout-->
			<?= form_open('ads/store',['class'=>'form-horizontal', 'enctype'=>'multipart/form-data']);?>
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Create An Ads </h5>
				</div>

				<div class="panel-body">

	    			<div id="ads_body" >
						<div class="form-group">
							<label class="col-lg-3 control-label">Title:<span class="text-bold text-danger">*</span></label>
							<div class="col-lg-9">
								<input type="text" name="a_title" class="form-control" required placeholder="Ads Title">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-3">Ads Image: <span class="text-bold text-danger">*</span></label>
							<div class="col-lg-9">
								<input type="file" class="file-styled" name="image" required accept="image/*">
							</div>
						</div>
						
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		<?= form_close(); ?>
		<!-- /basic layout -->
	</div>
</div>
