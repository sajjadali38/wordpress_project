<?php
get_header();
?>
<?php get_sidebar(); ?>


<!-- start index-->
	<div id="main">
		<div class="main-text">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
		</div>

 	 <?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
