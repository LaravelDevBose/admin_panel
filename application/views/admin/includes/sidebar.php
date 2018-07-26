<div class="sidebar sidebar-main">
	<div class="sidebar-content">

		<!-- User menu -->
		<!-- <div class="sidebar-user">
			<div class="category-content">
				<div class="media">
					<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
					<div class="media-body">
						<span class="media-heading text-semibold"><?php //echo $this->session->userData('admin_name');?></span>
						<div class="text-size-mini text-muted">
							<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
						</div>
					</div>

					<div class="media-right media-middle">
						<ul class="icons-list">
							<li>
								<a href="#"><i class="icon-cog3"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
		<!-- /user menu -->


		<!-- Main navigation -->
		<div class="sidebar-category sidebar-category-visible">
			<div class="category-content no-padding">
				<ul class="navigation navigation-main navigation-accordion">

					<!-- Main -->
					<li class="active"><a href="<?php echo base_url();?>dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
					<li><a href="<?php echo base_url();?>order/list"><i class="icon-cart2"></i> <span> Order List</span></a></li>
					<li><a href="<?php echo base_url();?>deliver/order/list"><i class="icon-truck"></i> <span> Deliver Order List</span></a></li>
					<li><a href="<?php echo base_url();?>brand"><i class="icon-list-unordered"></i> <span> Brand</span></a></li>
					<li><a href="<?php echo base_url();?>category"><i class=" icon-cog2"></i> <span> Category</span></a></li>
					<li><a href="<?php echo base_url();?>products"><i class="icon-bag"></i> <span> Products</span></a></li>

					<li> <a href="#"><i class="icon-stack2"></i> <span>Template Design</span></a>
						<ul>
							<li><a href="<?= base_url(); ?>template/about">Site Setting</a></li>
							<li><a href="<?= base_url(); ?>sliders">Slider</a></li>
							<li><a href="<?= base_url(); ?>ads">Ads</a></li>
							
						</ul>
					</li>
					<li><a href="<?php echo base_url();?>admin_page"><i class="icon-user-lock"></i> <span> Admins</span></a></li>

				</ul>
			</div>
		</div>
		<!-- /main navigation -->

	</div>
</div>