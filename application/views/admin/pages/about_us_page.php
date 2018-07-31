
<!-- Bordered panel body table -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">About Us Information</h5>
		
	</div>
	<hr>
	<div class="panel-body">
		<form action="<?= base_url();?>about_us_update" method="POST">
			<div class="form-group">
				<div class="col-lg-8 col-md-offset-2">
                    <textarea  name="about_us" class="summernote-height" style="height: 400px!important;" placeholder="About Us Information......."><?php if(isset($about_us)){echo $about_us->value; }?></textarea>
                </div>

			</div>
			
		 	<div class="col-lg-8 col-md-offset-2" style="margin-top: 20px;">
				<button type="submit" class="btn btn-info btn-block">Update <i class="icon-arrow-right14 position-right"></i></button>
			</div>
		</form>
	</div>
</div>
<!-- /bordered panel body table -->
