<!-- start sidebar-->
<div id="sidebar-ateh">
<div id="sidebar-1">
<ul>

  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>

   		<li><h2>Search</h2>
     		 <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    		</li>

		<li><h2>Archives</h2>
			<ul>
		 	<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>

		<li><h2>Category</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>
		</li>
  <?php endif; ?>
<script type="text/javascript"><!--
google_ad_client = "";
/* 160x600, created 3/3/08 */
google_ad_slot = "";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</ul>
</div>
<div id="sidebar-2">
<ul>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>

		<li><h2>Meta</h2>
		<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
		<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
		<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
		<?php wp_meta(); ?>
		</ul>
		</li>

		<li><h2><?php _e('Links'); ?></h2>
		<ul>
		        <?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
		</ul>
		</li>

  <?php endif; ?>
<li><h2>Visitor</h2>
                <ul><?php if(function_exists(wp_onlinecounter)) { wp_onlinecounter(); } ?></ul>
</li>
</ul>
</div>
</div>
