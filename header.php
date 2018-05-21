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
			<div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
				<a class="pure-menu-heading" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				<span class="pure-menu pure-menu-horizontal">
					<div class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
						<a href="#" id="menuLink1" class="pure-menu-link">分门别类</a>
						<ul class="pure-menu-children">
							<?php
								$categories = get_categories( array(
									//'parent'  => 0
									'orderby'=>'term_group',
									) );

								foreach ( $categories as $category ) {
									printf( '<li class="pure-menu-item"><a href="%1$s" class="pure-menu-link">%2$s <span class="badge">%3$s</span></a></li>',
										esc_url( get_category_link( $category->term_id ) ),
										$category->name,
										$category->count
										);
								}
							?>
						</ul>
					</div>
				</span>
				<ul class="pure-menu-list">
					<li class="pure-menu-item"><?php get_template_part('searchform'); ?></li>
					<li class="pure-menu-item">
						<a href="<?php bloginfo('atom_url'); ?>" class="pure-menu-link" data-toggle="tooltip" data-placement="top" title="订阅">
							<i class="fa fa-rss"></i>
						</a>
					</li>
					<li class="pure-menu-item">
						<?php
							if (is_user_logged_in()){
								echo '<a href=' . wp_logout_url() . ' class="pure-menu-link" data-toggle="tooltip" data-placement="top" title="注销"><i class="fa fa-sign-out"></i></a>';
							} else {
								echo '<a href=' . wp_login_url() . ' class="pure-menu-link" data-toggle="tooltip" data-placement="top" title="登录"><i class="fa fa-sign-in"></i></a>';
							}
						?>
					</li>
				</ul>
			</div>
		</header>