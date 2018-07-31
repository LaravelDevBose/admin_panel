
<!-- Bordered panel body table -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Logo Information</h5>
		
	</div>

	<div class="panel-body">
		<form action="<?= base_url();?>logo/store" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group">
					<label class="control-label col-lg-3">Slider Image: </label>
					<div class="col-lg-6">
						<input type="file" class="file-styled" name="logo" required accept="image/*">
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
					<th>Logo Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<?php $i =1; if($logo):
					
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><img  src=" <?php echo base_url().$logo->value;  ?>" alt="Slider Image"></td>
					<td>
						<ul class="icons-list">
							
							<li class="btn btn-sm btn-danger"><a href="<?= base_url(); ?>logo/delete/<?= $logo->id; ?>" onclick="return confirm('Are You Sure Went to Delete This.')"><i class="icon-trash"></i></a></li>
							
						</ul>
					</td>
				</tr>
			<?php  endif; ?>
			</tbody>
		</table>
	</div>
</div>
<!-- /bordered panel body table -->

