<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="right">
<div class="contenttop"></div>
<div class="content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>

				<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p class="postedon">Posted on <?php the_time('M j, Y h:i:s A'); ?></p>
				<div class="contentCenter">
					<p><?php echo $attachment_link; ?></p>
					<p><strong><?php echo basename($post->guid); ?></strong></p>
					<?php the_content(); ?>
				</div>
				<div class="postinfo">
					<a href="<?php the_permalink(); ?>" class="read">Permalink</a> <a href="<?php the_permalink(); ?>#comments" class="commentslink"><?php comments_number('Comments [0]', 'Comments [1]', 'Comments [%]'); ?></a>
				</div>
			
	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
		
<?php endif; ?>

</div>
<div class="contentbottom"></div>
</div>

<?php get_footer(); ?>
