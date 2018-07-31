
<!-- Bordered panel body table -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Ads Information</h5>
		<div class="heading-elements">
			<a href="<?= base_url(); ?>ads/create" class="btn btn-sm btn-info"> Create Ads</a>
    	</div>
	</div>

	<div class="panel-body">
		<table class="table table-bordered table-hover datatable-highlight">
			<thead>
				<tr>
					<th style="width: 10px !important;">Sl. NO.</th>
					<th >Ads Title</th>
					<th>Ads Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<?php $i =1; if($ads_images):
					foreach ($ads_images as $ads):
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?= $ads->a_title; ?></td>
					
					<td style="width: 300px;"><img style="height: 60px; width: 60px; " src=" <?php echo base_url().$ads->image_path;  ?>" alt="Slider Image"></td>
					
					
					<td>
						<ul class="icons-list">
							
							<li class="btn btn-sm btn-danger"><a href="<?= base_url(); ?>ads/delete/<?= $ads->id; ?>" onclick="return confirm('Are You Sure Went to Delete This.')"><i class="icon-trash"></i></a></li>
							
						</ul>
					</td>
				</tr>
			<?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</div>
<!-- /bordered panel body table -->

