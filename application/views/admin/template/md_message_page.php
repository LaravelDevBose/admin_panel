<!-- Bordered panel body table -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Md. Message Info</h5>
		
	</div>
	<hr>
	<div class="panel-body">
		<form action="<?= base_url();?>md_message/update" method="POST" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-lg-3 control-label">Name: <span class="text-bold text-danger">*</span></label>
				<div class="col-lg-9">
					<input type="text" name="md_name" maxlength="200" value="<?php if($md_name && isset($md_name)): echo $md_name->value; endif; ?>" required class="form-control" placeholder="Md Name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Designation:</label>
				<div class="col-lg-9">
					<input type="text" name="md_desig" value="<?php if($md_desig && isset($md_desig)): echo $md_desig->value; endif; ?>" maxlength="200"  class="form-control" placeholder="Designation">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Images: </label>
				<div class="col-lg-9">
					<input type="file" class="file-styled" name="md_image" accept="image/*">
					<?php
						$image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg' ;
						if($md_image && isset($md_image)){
							$image =$md_image->value;
							if(!@getimagesize($image)){$image= $image; }
						}
					 ?>

					<img src="<?= $image; ?>" style="height: 60px; width: 60px; border: 2px solid #ccc; ">
					<span class="help-block">Accepted formats: jpg, png. Max file size 2Mb</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Message: </label>
				<div class="col-lg-9 ">
                    <textarea  name="md_message" class="summernote-height" style="height: 400px!important;" placeholder="Message......."><?php if($md_message && isset($md_message)){echo $md_message->value; }?></textarea>
                </div>

			</div>
			
		 	<div class="col-lg-8 col-md-offset-2" style="margin-top: 20px;">
				<button type="submit" class="btn btn-info btn-block">Update <i class="icon-arrow-right14 position-right"></i></button>
			</div>
		</form>
	</div>
</div>
<!-- /bordered panel body table -->