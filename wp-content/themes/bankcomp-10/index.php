<?php
get_header();
?>
<?php get_sidebar(); ?>


<!-- start index-->
		<div id="main">
		<div class="main-text">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<div class="date"><span class="post-cat">Posted in: <?php the_category(',') ?></span> | <span class="post-date"> <?php the_time('F jS, Y') ?></span></div>

			<?php the_content(__('(more...)')); ?>

			<?php wp_link_pages(); ?>
		<div class="komentar"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>

			<?php comments_template(); // Get wp-comments.php template ?>


			<?php endwhile; else: ?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>


			<?php posts_nav_link(' &#8212; ', __('&laquo; Older Posts'), __('Newer Posts &raquo;')); ?>


		</div>
	</div>

<?php get_footer(); ?>
