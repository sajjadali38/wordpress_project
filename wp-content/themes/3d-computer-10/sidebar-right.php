		<!-- Sidebar -->
		<div class="sidebar sidebar-right">
		
			<h3>RSS Feed</h3>
			<div id="sidebar-feed">
				<a href="<?php bloginfo('rss_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss_feed.jpg" alt="RSS Feed" width="160" height="60" /></a>
			</div>
			
			<h3>Search</h3>
			<form id="searchform" method="get" action="http://localhost/wordpress2">
				<div>
					<input type="text" name="s" id="s" size="15" /><br />
					<input type="submit" value="Search" />
				</div>
			</form>
			
			<h3>Blog Roll</h3>
			<ul>
				<?php wp_list_bookmarks('categorize=0&title_li='); ?>
			</ul>
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
			
			<?php endif; ?>

			<h3>Meta</h3>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				<li><a href="http://www.wpthemesfree.com/" title="Wordpress Themes">Wordpress Themes</a></li>
				<?php wp_meta(); ?>
			</ul>
		
		</div>
		<!-- Sidebar -->