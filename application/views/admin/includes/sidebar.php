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
					<li class="<?= ($this->uri->uri_string()== 'dashboard')?'active': ' ' ?>"><a href="<?php echo base_url();?>dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
					<!-- <li><a href="<?php //echo base_url();?>order/list"><i class="icon-cart2"></i> <span> Order List</span></a></li> -->
					<!-- <li><a href="<?php //echo base_url();?>deliver/order/list"><i class="icon-truck"></i> <span> Deliver Order List</span></a> </li> -->
					<!-- <li><a href="<?php //echo base_url();?>brand"><i class="icon-list-unordered"></i> <span> Brand</span></a></li> -->
					<li class="<?= ($this->uri->uri_string()== 'category')?'active': ' ' ?>"><a href="<?php echo base_url();?>category"><i class=" icon-cog2"></i> <span> Category</span></a></li>
					<li class="<?= ($this->uri->uri_string()== 'products')?'active': ' ' ?>"><a href="<?php echo base_url();?>products"><i class="icon-bag"></i> <span> Products</span></a></li>

					<li > <a href="#"><i class="icon-book"></i> <span>Pages</span></a>
						<ul>
							<li class="<?= ($this->uri->uri_string()== 'page/contact_us_page')?'active': ' ' ?>"><a href="<?= base_url(); ?>page/contact_us_page">Contact Us</a></li>
							<li class="<?= ($this->uri->uri_string()== 'page/about_us_page')?'active': ' ' ?>"><a href="<?= base_url(); ?>page/about_us_page">About Us</a></li>
							<li class="<?= ($this->uri->uri_string()== 'page/service_page')?'active': ' ' ?>"><a href="<?= base_url(); ?>page/service_page">Our Service</a></li>
							<li class="<?= ($this->uri->uri_string()== 'page/gallery_page')?'active': ' ' ?>"><a href="<?= base_url(); ?>page/gallery_page">Gallery</a></li>
							<li class="<?= ($this->uri->uri_string()== 'page/video')?'active': ' ' ?>"><a href="<?= base_url(); ?>page/video">Video</a></li>
							
						</ul>
					</li>

					<li> <a href="#"><i class="icon-stack2"></i> <span>Template Design</span></a>
						<ul>
							<li class="<?= ($this->uri->uri_string()== 'logo_page')?'active': ' ' ?>"><a href="<?= base_url(); ?>logo_page">Logo</a></li>
							<li class="<?= ($this->uri->uri_string()== 'sliders')?'active': ' ' ?>"><a href="<?= base_url(); ?>sliders">Slider Images</a></li>
							<li class="<?= ($this->uri->uri_string()== 'ads')?'active': ' ' ?>"><a href="<?= base_url(); ?>ads">Ads Images</a></li>
							<li class="<?= ($this->uri->uri_string()== 'wellcome_note')?'active': ' ' ?>"><a href="<?= base_url(); ?>wellcome_note">WellCome Note</a></li>
							<li class="<?= ($this->uri->uri_string()== 'md_message')?'active': ' ' ?>"><a href="<?= base_url(); ?>md_message">Md Message</a></li>
							
						</ul>
					</li>

					<li class="<?= ($this->uri->uri_string()== 'admin_page')?'active': ' ' ?>"><a href="<?php echo base_url();?>admin_page"><i class="icon-user-lock"></i> <span> Admins</span></a></li>

				</ul>
			</div>
		</div>
		<!-- /main navigation -->

	</div>
</div>