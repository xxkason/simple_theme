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
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?><small> - <?php bloginfo('description'); ?></small></a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e(分门别类); ?> <span class="fa fa-caret-down"></span></a>
								<ul class="dropdown-menu">
									<?php
										$categories = get_categories( array(
											//'parent'  => 0
											'orderby'=>'term_group',
											) );

										foreach ( $categories as $category ) {
											printf( '<li><a href="%1$s">%2$s <span class="badge">%3$s</span></a></li>',
												esc_url( get_category_link( $category->term_id ) ),
												$category->name,
												$category->count
												);
										}
									?>
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
									<?php
										if (is_user_logged_in()){
											echo '<a href=' . wp_logout_url() . ' data-toggle="tooltip" data-placement="top" title="注销"><i class="fa fa-sign-out"></i></a>';
										} else {
											echo '<a href=' . wp_login_url() . ' data-toggle="tooltip" data-placement="top" title="登录"><i class="fa fa-sign-in"></i></a>';
										}
									?>
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