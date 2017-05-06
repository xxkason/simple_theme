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
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
					</div>
					<div class="navbar-right">
						
					</div>
					<?php get_template_part('searchform'); ?>
					<ul class="nav navbar-nav">
						<li>
							<a href="<?php bloginfo('atom_url'); ?>" data-toggle="tooltip" data-placement="top" title="订阅"><i class="fa fa-rss"></i></a>
						</li>
						<li>
						<a href="<?php echo wp_login_url(); ?>" data-toggle="tooltip" data-placement="top" title="登录"><i class="fa fa-sign-in"></i></a>
						</li>
					</ul>
				</div><!-- /.container-fluid -->
			</nav>
		</header>