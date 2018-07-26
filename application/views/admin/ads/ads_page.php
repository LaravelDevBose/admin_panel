
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
					<th>Ads Title</th>
					<th>Ads Discount</th>
					<th>Ads Image</th>
					<th>Ads Position</th>
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
					<td><?= $ads->discount; ?> %</td>
					<td><img style="height: 200px; width: 100%; " src=" <?php echo base_url().$ads->image_path;  ?>" alt="Slider Image"></td>
					<td><?php 
						if($ads->position == 1):echo 'Top Category Ads 1';
						elseif($ads->position == 2):echo 'Top Category Ads 2';
						elseif($ads->position == 3):echo 'Top Category Ads 3';
						elseif($ads->position == 4):echo 'Top Category Ads 4';
						elseif($ads->position == 5):echo 'Middel Cover Ads';
						elseif($ads->position == 6):echo 'Bottom Category Ads 1';
						elseif($ads->position == 7):echo 'Bottom Category Ads 2';
						elseif($ads->position == 8):echo 'Bottom Category Ads 3';
						elseif($ads->position == 9):echo 'Bottom Category Ads 4';
						elseif($ads->position == 10):echo 'Bottom Category Ads 5';
						elseif($ads->position == 11):echo 'Bottom Category Ads 6';
						endif;

					?> </td>
					
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

