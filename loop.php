<div class="container-fluid">
	<div class="row">

		<div class="col-md-1 col-lg-1 page-nav page-nav-pre">
			<?php previous_posts_link( '<span class="fa fa-chevron-left"></span>' , 0 ); ?>
		</div>
		<div class="panel-group" id="posts-list">
		<div class="col-md-10 col-lg-10">
			<?php if (have_posts()): $i = 0; while (have_posts()) : the_post(); $i++;?>

				<!-- article -->
				<article>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<a data-toggle="collapse" data-parent="#posts-list" href="<?php echo('#post-'.$i) ?>">
									<?php the_title(); ?>
								</a>
								<a href="<?php the_permalink(); ?>">
									<span class="fa fa-external-link-square"></span>
								</a>
							</h3>
						</div>
						<div id="<?php echo('post-'.$i) ?>" class="panel-collapse collapse">
						<div class="panel-body">
							<?php 
								if (is_search() || is_archive())
									the_excerpt();
								else
									the_content();
							?>
						</div>
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
				<p><?php _e( 'Sorry, nothing to display.'); ?></p>
			</article>
			<!-- /article -->

		<?php endif; ?>
	</div>
	</div>

	<div class="col-md-1 col-lg-1 page-nav page-nav-next">
		<?php next_posts_link( '<span class="fa fa-chevron-right"></span>' , 0 ); ?>
	</div>

</div>