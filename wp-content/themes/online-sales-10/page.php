<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="right">
<div class="contenttop"></div>
<div class="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p class="postedon">Posted on <?php the_time('M j, Y h:i:s A'); ?></p>
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<div class="pagelinks">Pages: ', 'after' => '</div>', 'next_or_number' => 'number')); ?>
				<div class="postinfo">
					<a href="<?php the_permalink(); ?>" class="read">Permalink</a> <a href="<?php the_permalink(); ?>#comments" class="commentslink"><?php comments_number('Comments [0]', 'Comments [1]', 'Comments [%]'); ?></a>
				</div>

		<?php endwhile; endif; ?>
						
</div>
<div class="contentbottom"></div>
</div>

<?php get_footer(); ?>
