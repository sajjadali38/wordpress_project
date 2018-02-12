<?php get_header(); ?>
<div id="wrap">
<div id="content-container">
	
	<div id="content">
	
	<div class="post-container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<div class="posttop">

			<div>
			
			<h2><?php the_title(); ?></h2>
			</div>
			</div>
		
			<div class="entry">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			</div>
		</div>
		
		<?php endwhile; endif; ?>
		
	</div>
	
	<div style="float:left">
	<?php get_sidebar(); ?>
	</div>
</div>
<div class="bgbottom"></div>
</div>
</div>
<?php get_footer(); ?>