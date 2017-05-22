<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<?php get_template_part('prepage'); ?>
		<?php get_template_part('loop'); ?>
		<?php get_template_part('nextpage'); ?>
	</div>
</div>

<?php get_footer(); ?>