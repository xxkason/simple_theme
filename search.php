<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
			<h2><?php echo 'Search Results for '; echo get_search_query(); ?></h2>
			<hr/>
		</div>
	</div>
</div>

<?php get_template_part('loop'); ?>
<?php get_footer(); ?>