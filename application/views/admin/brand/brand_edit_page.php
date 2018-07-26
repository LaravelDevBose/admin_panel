
<?php echo form_open('brand/update');?>
<div class="panel-body" style="width: 500px;">
	<div class="row">
		<div class="form-group">
			<label class="control-label col-lg-3">Brand Title: </label>
			<div class="col-lg-6">
				<input type="hidden" name="id" id="brand_id" value="<?php echo $brand_info->id; ?>">
				<input type="text" name="title" value="<?php echo $brand_info->b_title ;?>" class="form-control" id="title_edit">
			</div>

			<div class="col-lg-3">
				<button class="btn btn-sm btn-success brand-edit" type="submit">Update</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close();?>