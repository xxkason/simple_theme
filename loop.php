<div class="panel-group col-md-10 col-lg-10" id="posts-list">
	<?php if (have_posts()): $i = 0; while (have_posts()) : the_post(); $i++;?>

		<!-- article -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a data-toggle="collapse" data-parent="#posts-list" href="<?php echo('#post-'.$i) ?>">
						<?php the_title(); ?>
					</a>
					<!-- <a href="<?php the_permalink(); ?>">
						<span class="fa fa-external-link-square"></span>
					</a> -->
				</h3>
			</div>
			<div id="<?php echo('post-'.$i) ?>" class="panel-collapse collapse <?php if ($i == 1){echo('in');} ?>">
				<div class="panel-body">
					<?php 
					//if (is_search() || is_archive())
					//	the_excerpt();
					//else
						the_content();
					?>
					<?php $withcomments = "1"; comments_template(); ?>
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
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<p><?php _e( 'Sorry, nothing to display.'); ?></p>
		<!-- /article -->

	<?php endif; ?>
</div>