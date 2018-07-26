 <div class="row">
	<div class="col-md-6 col-md-offset-3">
		<!-- Basic layout-->
			<?= form_open('ads/store',['class'=>'form-horizontal', 'enctype'=>'multipart/form-data']);?>
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Create An Ads </h5>
				</div>

				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-3 control-label">Ads Position: <span class="text-bold text-danger">*</span></label>
						<div class="col-lg-9">
	                        <select data-placeholder="Select Ads Position" required name="position" class="select">
	                        	<option></option>
	                        	<option value="1">Top Category Ads 1</option>
	                        	<option value="2">Top Category Ads 2</option>
	                        	<option value="3">Top Category Ads 3</option>
	                        	<option value="4">Top Category Ads 4</option>
	                        	<option value="5">Middel Cover Ads</option>
	                        	<option value="6">Bottom Category Ads 1</option>
	                        	<option value="7">Bottom Category Ads 2</option>
	                        	<option value="8">Bottom Category Ads 3</option>
	                        	<option value="9">Bottom Category Ads 4</option>
	                        	<option value="10">Bottom Category Ads 5</option>
	                        	<option value="11">Bottom Category Ads 6</option>
	                        	
	                        </select>
	                        <span id="msg" ></span>
	                    </div>
	    			</div>

	    			<div id="ads_body" style="display: none;">
						<div class="form-group">
							<label class="col-lg-3 control-label">Title:<span class="text-bold text-danger">*</span></label>
							<div class="col-lg-9">
								<input type="text" name="a_title" class="form-control" required placeholder="Ads Title">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-3 control-label">Discount:<span class="text-bold text-danger">*</span></label>
							<div class="col-lg-9">
								<input type="number" name="discount" class="form-control"  placeholder="Discount amount..">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-3">Ads Image: <span class="text-bold text-danger">*</span></label>
							<div class="col-lg-9">
								<input type="file" class="file-styled" name="image" required accept="image/*">
							</div>
						</div>
						
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		<?= form_close(); ?>
		<!-- /basic layout -->
	</div>
</div>

<script type="text/javascript">
		$('select[name="position"]').on('change', function(e){
			var position = $(this).val();
			if(position != 0 && position.length > 0){

				$.ajax({
					url:'<?= base_url(); ?>position/check',
					type:'POST',
					dataType:'json',
					data:{'position':position},
					success:function(data){

						if(data == 1){
							$('#msg').html('Postion Avaiable');
							$('#msg').attr('class', 'text-success text-bold');
							$('#ads_body').attr('style', 'display:block');
						}else{
							$('#msg').html('Postion Not Avaiable. Try Other One');
							$('#msg').attr('class', 'text-danger text-bold');
							$('#ads_body').attr('style', 'display:none');
						}

					},
					error:function(error){
						console.log(error);
						swal({
		                  text: "Error Found Try Again later!",
		                  icon: "error",
		                  buttons: false,
		                  timer: 10000,
		                });
					}
				});

			}else{
				swal({
                  text: "First Select A Position!",
                  icon: "error",
                  buttons: false,
                  timer: 10000,
                });
			}
		});

</script>