<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
						<p class="navbar-text"><?php bloginfo('description'); ?></p>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e(日志类别); ?> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<?php wp_list_categories('title_li='); ?>
								</ul>
							</li>
						</ul>
						<div class="navbar-right">
							<?php get_template_part('searchform'); ?>
							<ul class="nav navbar-nav">
								<li>
									<a href="<?php bloginfo('atom_url'); ?>" data-toggle="tooltip" data-placement="top" title="订阅"><i class="fa fa-rss"></i></a>
								</li>
								<li>
									<a href="<?php echo wp_login_url(); ?>" data-toggle="tooltip" data-placement="top" title="登录"><i class="fa fa-sign-in"></i></a>
								</li>
							<!-- <li>
								<a href="<?php echo wp_registration_url(); ?>" data-toggle="tooltip" data-placement="top" title="注册"><i class="fa fa-user-plus"></i></a>
							</li> -->
						</ul>
					</div>
				</div>	
			</div><!-- /.container-fluid -->
			</nav>
		</header>