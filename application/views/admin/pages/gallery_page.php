
<!-- Bordered panel body table -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Gallery Information</h5>
		<div class="heading-elements">
			<ul class="icons-list">
        		<li><a data-action="collapse"></a></li>
        		<li><a data-action="reload"></a></li>
        		<li><a data-action="close"></a></li>
        	</ul>
    	</div>
	</div>

	<div class="panel-body">
		<form class="form-horizontal" action="<?= base_url();?>gallary_image_store" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group">
					<label class="col-lg-3 control-label">Title: <span class="text-bold text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="g_title"  class="form-control" placeholder="Title">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Image:</label>
					<div class="col-lg-9">
						<input type="file" class="file-styled" name="image"  multiple  accept="image/*">
						<span class="help-block">Accepted formats: jpg, png. Max file size 2Mb</span>
					</div>
				</div>

				<div class="text-right">
					<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
				</div>
			</div>
		</form>
		<table class="table table-bordered table-hover datatable-highlight">
			<thead>
				<tr>
					<th style="width: 10px !important;">Sl. NO.</th>
					<th style="width: 100px !important;">Title</th>
					<th >Gallery Image</th>
					<th style="width: 10px !important;" class="text-center">Action</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<?php $i =1; if($gallary_images):
					foreach ($gallary_images as $image):
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?= $image->g_title; ?></td>
					<td><img style="height: 40px; width: 70px; " src=" <?php echo base_url().$image->image;  ?>" alt="Gallery Image"></td>
					<td class="text-center">
						<ul class="icons-list">
							
							<li class="btn btn-sm btn-danger"><a href="<?= base_url(); ?>gallery_image_delete/<?= $image->id; ?>" onclick="return confirm('Are You Sure Went to Delete This.')"><i class="icon-trash"></i></a></li>
							
						</ul>
					</td>
				</tr>
			<?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</div>
<!-- /bordered panel body table -->

