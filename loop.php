<div class="container-fluid">
<div class="row">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
			</div>
			<div class="panel-body">
				<?php the_content(); ?>
			</div>
			<div class="panel-footer">
				<span class="date"><?php the_time('F j, Y'); ?></span> / 
				<span class="date"><?php the_category(''); ?></span> / 
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> / 
				<span><?php edit_post_link(); ?></span>
			</div>
		</div>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php
// Previous/next page navigation.
the_posts_pagination( array(
	'prev_text'          => __( 'Previous page', 'twentysixteen' ),
	'next_text'          => __( 'Next page', 'twentysixteen' ),
	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
	) );
?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.'); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

</div>
</div>