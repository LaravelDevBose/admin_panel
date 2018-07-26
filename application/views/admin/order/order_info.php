<!-- Highlighting rows and columns -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Order Information</h5>
		<div class="heading-elements">
			
    	</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-6">
				<p>Customer Name: <span class="text-bold"><?= $order_info->name; ?></span></p>
				<p>Phone Number: <span class="text-bold"><?= $order_info->phone_num; ?></span></p>
				<p>Email Address: <span class="text-bold"><?= $order_info->email; ?></span></p>
			</div>
			<div class="col-md-6">
				<?php 
                 $date = new DateTime($order_info->order_date);
                 $order_date = date_format($date, 'd F Y');
                  
                  ?>
				<p>Order Date: <label class="text-bold"><?= $order_date; ?></label></p>
				<p>Address: <span class="text-bold"><?= $order_info->address; ?></span></p>
				<p>Total Amount: <span class="text-bold"><?= number_format($order_info->total_amount); ?> TK</span></p>
				
			</div>
			
		</div>
	</div>
	<table class="table table-bordered table-hover datatable-highlight">
		<thead>
			<tr>
				<th style="width: 10px!important;">#</th>
		      	<th style="width: 80px!important;">Image</th>
		      	<th style="width: 160px!important;">Product Name</th> 
		      	<th style="width: 10px!important;">Qty</th>
		      	<th style="width: 20px!important;">Price(Tk)</th>
		      	<th style="width: 20px!important;">SubTotal(Tk)</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; if($products){ foreach($products as $product){  ?>
		    <tr >
		      	<th scope="row"><?= $i++; ?></th>
		      	<td ><div class="cart-item" style="width: 100%; height: 100%">
		      		<?php  	
		      		$product_image = $this->db->where('product_id', $product->product_id)->get('product_images')->row(); 

					$image = base_url().$product_image->image_path; if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_available.jpeg';} 
				 	?>
		      		<img src="<?= $image;?>" class="img-responsive" style="width: 60px; height: 60px; " alt="">
		      	</div>
		      	</td>
		      	<td><span> <?= $product->product_name?></span></td>
		      	<td><?= $product->qty; ?></td>
		      	<td><?= number_format($product->price) ?></td>
		      	<td><?= number_format($product->sub_total) ?></td>
		      	
		    </tr>
		    <?php } }?>
		    
			
		</tbody>
	</table>
</div>
<!-- /highlighting rows and columns -->
