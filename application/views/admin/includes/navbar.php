
<div class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="<?php echo base_url();?>dashboard"><label style="color: #23caba; font-size: 20px;"> Momen Enterprise</label></a>

		<ul class="nav navbar-nav visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>
	</div>

	<div class="navbar-collapse collapse" id="navbar-mobile">
		<ul class="nav navbar-nav">
			<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>

		<p class="navbar-text"><span class="label bg-success-400">Online</span></p>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown dropdown-user">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<?php
						$admin_image = $this->db->where('id', $this->session->userData('admin_id'))->get('admins')->row(); 
					 $image =base_url().$admin_image->image; if(!@getimagesize($image)){$image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg' ; }?>
					<img src="<?= $image; ?>" alt="">
					<span><?php echo $this->session->userData('admin_name');?></span>
					<i class="caret"></i>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<!-- <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li> -->
					<!-- <li class="divider"></li> -->
					<li><a href="<?php echo base_url();?>admin/logout"><i class="icon-switch2"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>