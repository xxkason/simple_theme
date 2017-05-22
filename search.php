<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<?php get_template_part('prepage'); ?>

		<div class="panel col-md-10 col-lg-10">
			<div class="panel-heading">
				<h2 class="panel-title"><?php echo 'Search Results for '; echo get_search_query(); ?></h2>
			</div>
			<div class="panel-body">
				<?php get_template_part('loop'); ?>
			</div>
		</div>

		<?php get_template_part('nextpage'); ?>
	</div>
</div>

<?php get_footer(); ?>