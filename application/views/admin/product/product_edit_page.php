<!-- Advanced legend -->
<form class="form-horizontal" action="<?= base_url();?>product/update/<?= $product->id; ?>" method="POST" enctype="multipart/form-data" >
	
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Product Update form</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<fieldset>
				<legend class="text-semibold">
					<i class="icon-file-text2 position-left"></i> Basic information
					<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
						<i class="icon-circle-down2"></i>
					</a>
				</legend>

				<div class="collapse in" id="demo1">
					<div class="form-group">
						<label class="col-lg-3 control-label">Product Id: <span class="text-bold text-danger">*</span> </label>
						<div class="col-lg-9">
							<input type="text" name="product_id" minlength="3" value="<?= $product->product_id;?>" class="form-control" required maxlength="10"  placeholder="Product Id">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Product name: <span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="text" name="product_name" value="<?= $product->product_name;?>" maxlength="200" required class="form-control" placeholder="Product Name">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Brand: <span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
	                        <select data-placeholder="Select Product Brand" required name="brand_id" class="select">
	                        	<option></option>
	                        	<?php if(isset($brands)): foreach($brands as $brand):?>

	                            <option value="<?= $brand->id ?>" <?php  if($product->brand_id == $brand->id): echo 'selected'; else: echo ''; endif ?> ><?= $brand->b_title ?></option> 
	                            <?php endforeach; endif; ?>
	                        </select>
	                    </div>
	    			</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Category: <span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<select data-placeholder="Select Product Category" required name="cat_id" class="select">
								<option></option>
	                        	<?php if(isset($categories)): foreach($categories as $category):?>
	                            <option value="<?= $category->id ?>" <?php  if($product->cat_id == $category->id): echo 'selected'; else: echo ''; endif ?> ><?= $category->c_title ?></option> 
	                            <?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					

					<!-- <div class="form-group">
						<label class="col-lg-3 control-label">Product QTY.: <span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="number" class="form-control" name="quentity" required placeholder="Product Quentity">
						</div>
					</div> -->

					<div class="form-group">
						<label class="col-lg-3 control-label">Product Price: <span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<input type="number" class="form-control" value="<?= $product->price; ?>" name="price" required placeholder="Product Price">
						</div>
					</div>

				</div>
			</fieldset>

			<fieldset>
				<legend class="text-semibold">
					<i class="icon-file-text2 position-left"></i> Extra information
					<a class="control-arrow" data-toggle="collapse" data-target="#demo2">
						<i class="icon-circle-down2"></i>
					</a>
				</legend>

				<div class="collapse in" id="demo2">
    				
    				<div class="form-group">
						<label class="col-lg-3 control-label">Product Discount(%): </label>
						<div class="col-lg-9">
							<input type="number" class="form-control" <?= $product->discount; ?>  name="discount" placeholder="Product Discount">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Previous Price: </label>
						<div class="col-lg-9">
							<input type="number" class="form-control" <?= $product->prv_price; ?>  name="prv_price" placeholder="Previous Price">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Product Status: </label>
						<div class="col-lg-9">
							<label class="checkbox-inline">
								<input type="checkbox" class="styled" value="1" <?php if($product->top_sell == 1): echo 'checked'; endif; ?> name="top_sell" >
								Top Sale
							</label>
							<label class="checkbox-inline">
								<input type="checkbox"  class="styled" <?php if($product->sale == 1): echo 'checked'; endif; ?> value="1" name="sale">
								Sale
							</label>

							<label class="checkbox-inline">
								<input type="checkbox" class="styled" <?php if($product->up_comming == 1): echo 'checked'; endif; ?> value="1" name="up_comming">
								Up Comming
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Product Show In: </label>
						<div class="col-lg-9">
							<label class="checkbox-inline">
								<input type="checkbox" class="styled" <?php if($product->feature == 1): echo 'checked'; endif; ?> value="1" name="feature">
								Feature
							</label>
						</div>
					</div>
	    		</div>
			</fieldset>

			<fieldset>
				<legend class="text-semibold">
					<i class="icon-file-text2 position-left"></i> Details information
					<a class="control-arrow" data-toggle="collapse" data-target="#demo3">
						<i class="icon-circle-down2"></i>
					</a>
				</legend>

				<div class="collapse in" id="demo3">
    				
					<div class="form-group">
						<label class="col-lg-3 control-label">Quick Overview: <span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
							<textarea rows="5" cols="5" name="overview" class="form-control" required maxlength="1000" placeholder="Enter your Product Quick Overview......."><?= $product->overview; ?></textarea>
						</div>
					</div>


	    			<div class="form-group">
						<label class="col-lg-3 control-label">Publication Status:</label>
						<div class="col-lg-9">
							<label class="radio-inline">
								<input type="radio" name="status" <?php if($product->status == 1): echo 'checked'; endif; ?> class="styled" value="1">
								Publish
							</label>

							<label class="radio-inline">
								<input type="radio"  name="status" <?php if($product->status == 0): echo 'checked'; endif; ?> class="styled" value="0" checked="checked">
								Unpublish
							</label>
						</div>
	    			</div>
	    			<div class="form-group">
						<div class="col-lg-12">
							<?php
							 	$images = $this->db->where('product_id', $product->id)->get('product_images')->result(); 
							 	if(isset($images)):
							 		foreach($images as $image):
							?>
							<div class="col-md-4">
								<img src="<?= base_url().$image->image_path;?>" alt="<?= $product->product_name; ?>" height="200">
								<a href="<?= base_url();?>image/delete/<?= $image->id.'/'.$product->id; ?>" class="btn btn-sm btn-danger text-bold">X</a>
							</div>
						<?php endforeach; endif;?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Product Images:</label>
						<div class="col-lg-9">
							<input type="file" class="file-styled" name="images[]"  multiple  accept="image/*">
							<span class="help-block">Accepted formats: jpg, png. Max file size 2Mb</span>
						</div>
					</div>

	    			<div class="form-group">
						<label class="col-lg-3 control-label"> Product Details:</label>
						<div class="col-lg-9">
	                        <textarea  name="details" class="summernote-height" placeholder="Product full Description......."><?= $product->details; ?></textarea>
	                    </div>
	    			</div>
	    		</div>
			</fieldset>

			<div class="text-right">
				<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
			</div>
		</div>
	</div>
</form>
<!-- /a legend -->
