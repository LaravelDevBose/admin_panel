<!-- Highlighting rows and columns -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Product Table</h5>
		<div class="heading-elements">
			<a href="<?= base_url();?>product/insert" class="btn btn-sm btn-info">Add Product</a>
    	</div>
	</div>
	<table class="table table-bordered table-hover datatable-highlight">
		<thead>
			<tr>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Category</th>
				<th>Price</th>
				<th>Status</th>
				<th class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php if($products):
				foreach($products as $product):
			?>
			<tr>
				<td><?= $product->product_id; ?></td>
				<td><?= $product->product_name; ?></td>
				<td><?= $product->c_title; ?></td>
				<td><?= $product->price; ?></td>
				
				<td>
					<?php if($product->status == 1):?>
						<span class="label label-success">Publish</span>
					<?php else: ?>
						<span class="label label-danger">UnPublish</span>
					<?php endif;?>
				</td>
				<td class="text-center">
					<ul class="icons-list">
						<li class="text-primary-600"><a  href="<?php echo base_url();?>product/edit/<?php echo $product->id?>" ><i class="icon-pencil7"></i></a></li>
						<li class="text-danger-600"><a onclick="return confirm('Are You went to delete this Product.?');" href="<?= base_url(); ?>product/delete/<?= $product->id; ?>"><i class="icon-trash"></i></a></li>
							
					</ul>
				</td>
			</tr>

		<?php endforeach; endif;?>
			
		</tbody>
	</table>
</div>
<!-- /highlighting rows and columns -->
