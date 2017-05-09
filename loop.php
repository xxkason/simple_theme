<div class="container-fluid">
	<div class="row">
		<div class="col-md-1 col-lg-1 page-nav page-nav-pre">
			<?php previous_posts_link( '<span class="fa fa-chevron-left"></span>' , 0 ); ?>
		</div>
	<div class="col-md-10 col-lg-10">
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
						<span class="date"><?php the_date('', '<span class="fa fa-calendar-o"></span>&nbsp', '&nbsp|'); ?></span>
						<!-- <span class="fa fa-folder-o"></span> <span class="cat"><?php the_category(','); ?></span> -->
						<span class="tags"><?php the_tags( '<span class="fa fa-tags"></span>&nbsp', ',&nbsp', '&nbsp|' ); ?></span>
						<span><?php edit_post_link('Edit Post','<span class="fa fa-edit"></span>&nbsp', '&nbsp|'); ?></span>
						<span class="comments"><?php if (comments_open( get_the_ID() ) ) _e('<span class="fa fa-comments-o"></span>&nbsp'); comments_popup_link( 'Leave your thoughts', '1 Comment', '% Comments'); ?></span>
					</div>
				</div>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.'); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>
	</div>

	<div class="col-md-1 col-lg-1 page-nav page-nav-next">
		<?php next_posts_link( '<span class="fa fa-chevron-right"></span>' , 0 ); ?>
	</div>
</div>