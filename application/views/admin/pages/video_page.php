
<!-- Bordered panel body table -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Video Gallery Information</h5>
		<div class="heading-elements">
			<ul class="icons-list">
        		<li><a data-action="collapse"></a></li>
        		<li><a data-action="reload"></a></li>
        		<li><a data-action="close"></a></li>
        	</ul>
    	</div>
	</div>

	<div class="panel-body">
		<form action="<?= base_url();?>video_store" method="POST" >
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-3">Video Link: </label>
					<div class="col-lg-6">
						<input type="text" class="form-control" placeholder="Youtube Embeded Video link" name="video_link" required >
					</div>

					<div class="col-lg-2">
						<button class="btn btn-sm btn-success" type="submit">Submit</button>
					</div>
				</div>
			</div>
		</form>
		<table class="table table-bordered table-hover datatable-highlight">
			<thead>
				<tr>
					<th style="width: 10px !important;">Sl. NO.</th>
					<th>Video</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<?php $i =1; if($videos):
					foreach ($videos as $video):
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td>
						<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" style="width: 90px; height: 60px;" src="<?= $video->video_link;?>" webkitallowfullscreen=""></iframe>
					</td>
					<td>
						<ul class="icons-list">
							
							<li class="btn btn-sm btn-danger"><a href="<?= base_url(); ?>video_delete/<?= $video->id; ?>" onclick="return confirm('Are You Sure Went to Delete This.')"><i class="icon-trash"></i></a></li>
							
						</ul>
					</td>
				</tr>
			<?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</div>
<!-- /bordered panel body table -->

