<?php get_header(); ?>

<div id="wrap">
  <div id="content-container">
    <div id="content">
     
      <div class="post-container">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
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
            <?php the_content('Read the rest of this entry &raquo;'); ?>			
          </div>
      
        </div>
        <?php endwhile; ?>
        <?php include (TEMPLATEPATH . '/navoptions.php'); ?>
        <?php else : ?>
        <h2>Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
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
