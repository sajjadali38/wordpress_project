<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="right">
<div class="contenttop"></div>
<div class="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

				<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p class="postedon">Posted on <?php the_time('M j, Y h:i:s A'); ?></p>
				<?php the_excerpt(); ?>
				<div class="postinfo">
					<a href="<?php the_permalink(); ?>" class="read">Read</a> <a href="<?php the_permalink(); ?>#comments" class="commentslink"><?php comments_number('Comments [0]', 'Comments [1]', 'Comments [%]'); ?></a>
				</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>
	
		<h1 class="title">Not Found</h1>
		<p>Sorry, no post matched your criteria. Try a different search?</p>

	<?php endif; ?>

</div>
<div class="contentbottom"></div>
</div>

<?php get_footer(); ?>
