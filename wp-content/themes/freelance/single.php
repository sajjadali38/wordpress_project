<?php get_header(); ?>
<div id="wrap">
<div id="content-container">
	
	<div id="content">
	
	<div class="post-container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php include (TEMPLATEPATH . '/navoptions.php'); ?>
	
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="posttop">
          <div id="date">
            <p class="month">
              <?php the_time('F'); ?>
            </p>
            <p class="day">
              <?php the_time('j'); ?>
            </p>
          </div>
          
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
              <?php the_title(); ?>
              </a></h2>
            <div class="postinfo"> <?php comments_popup_link('No Comments', '1 Comment', 'Comments(%)'); ?> | Undedr:  <?php the_category(', ') ?>
			
			  </div>
         
        </div>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>					
				<br />
			<?php comments_template(); ?>
			</div>
			
		</div>
		
	
	
	<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	</div>
	<div style="float:left">
	<?php get_sidebar(); ?>
	</div>
</div>
<div class="bgbottom"></div>
</div>
</div>
<?php get_footer(); ?>