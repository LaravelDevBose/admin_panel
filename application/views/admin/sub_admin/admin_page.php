
<!-- Bordered panel body table -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Admin Information</h5>
		<div class="heading-elements">
			
        	<a href="<?= base_url(); ?>admin/create" class="btn btn-sm btn-info" title="Add Admin">Add Admin</a>
    	</div>
	</div>

	<div class="panel-body">
		
		<table class="table table-bordered table-hover datatable-highlight">
			<thead>
				<tr>
					<th style="width: 10px !important;">#</th>
					<th>Image</th>
					<th>Name</th>
					<th>UserName</th>
					<th>Email Address</th>
					<th>Phone Number</th>
					<!-- <th>Admin Type</th> -->
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<?php $i =1; if(isset($admins)):
					foreach ($admins as $admin):
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td>
						<?php $image =base_url().$admin->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg' ; }?>
						<img src="<?= $image; ?>" alt='Admin Image' style="height: 50px; width: 50px;">
					</td>
					<td><?php echo $admin->name; ?></td>
					<td><?php echo $admin->username; ?></td>
					<td><?php echo $admin->email; ?></td>
					<td><?php echo $admin->phone_num; ?></td>
					<!-- <td><?php //echo $admin->admin_type; ?></td> -->
					<td>
						<ul class="icons-list">
							<li class="text-primary-600"><a  href="<?php echo base_url();?>admin/edit/<?php echo $admin->id ; ?>" ><i class="icon-pencil7"></i></a></li>
							<?php if($admin->id !=  $this->session->userData('admin_id')): ?>
							<li class="text-danger-600"><a href="<?= base_url();?>admin/delete/<?= $admin->id; ?>" title="Delete Admin" onclick="return confirm('Are You Sure Went to Delete this Admin ?');"><i class="icon-trash"></i></a></li>
							<?php endif;?>
						</ul>
					</td>
				</tr>
			<?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</div>
<!-- /bordered panel body table -->