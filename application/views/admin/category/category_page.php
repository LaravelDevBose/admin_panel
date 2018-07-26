
<!-- Bordered panel body table -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Category Information</h5>
		<div class="heading-elements">
			<ul class="icons-list">
        		<li><a data-action="collapse"></a></li>
        		<li><a data-action="reload"></a></li>
        		<li><a data-action="close"></a></li>
        	</ul>
    	</div>
	</div>

	<div class="panel-body">
		<div class="row">
			<div class="form-group">
				<label class="control-label col-lg-1">Category Title: </label>
				<div class="col-lg-6">
					<input type="text" class="form-control" id="title">
				</div>

				<div class="col-lg-3">
					<button class="btn btn-sm btn-success cat-store" type="button">Submit</button>
				</div>
			</div>
		</div>
		<table class="table table-bordered table-hover datatable-highlight">
			<thead>
				<tr>
					<th style="width: 10px !important;">#</th>
					<th>Category Title</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<?php $i =1; if($categories):
					foreach ($categories as $category):
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $category->c_title; ?></td>
					<td>
						<ul class="icons-list">
							<li class="text-primary-600"><a class="linka fancybox fancybox.ajax" href="<?php echo base_url();?>category/edit/<?php echo $category->id?>" ><i class="icon-pencil7"></i></a></li>
							<!-- <li class="text-danger-600"><a href="#"><i class="icon-trash"></i></a></li> -->
							
						</ul>
					</td>
				</tr>
			<?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</div>
<!-- /bordered panel body table -->


<script>
	$('.cat-store').on('click', function(e){

		console.log(e);
		var title = $('#title').val();
		if(title.trim().length  > 0 ){
			$.ajax({
				url:'<?php echo base_url();?>category/store',
				type:'POST',
				dataType:'json',
				data:{'title':title},
				success:function(data){
					alert(data);
					if(data == 0){
						swal({
		                  text: "Category Information not Insert. Try again Later.",
		                  icon: "error",
		                  buttons: false,
		                  timer: 1200,
		                });
					}else{
						$('#tbody').empty()
						var i = 1;
						$.each(data, function(key , value){
							var tr = '<tr> <td>'+ i++ +'</td> <td>'+value.title+'</td>';
							tr = tr+ '<td> <ul class="icons-list"> <li class="text-primary-600"><a href="<?php echo base_url();?>category/edit/'+value.id+'" class="linka fancybox fancybox.ajax"><i class="icon-pencil7"></i></a></li>';
							tr = tr+' <li class="text-danger-600"><a href="#"><i class="icon-trash"></i></a></li> </ul> </td> </tr>';
							$('#tbody').append(tr);
						});
					}

				},
				error:function(error){
					console.log(error);
					swal({
		                  text: "Some Thing Went Worng. Try again Later.",
		                  icon: "error",
		                  buttons: false,
		                  timer: 10000,
		                });
				}

			});
		}else{
			swal({
                  text: "Title Field is Required. Enter The Category Name!",
                  icon: "error",
                  buttons: false,
                  timer: 10000,
                });
		}
		
	});

	
</script>