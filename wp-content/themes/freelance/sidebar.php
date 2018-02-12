
	<div id="sidebar">
	<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

	<li><h2>Archives</h2>
		<ul>
		<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>
	<li><h2>Categories</h2>
		<ul>
		<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		</ul>
	</li>
	
	<?php /* If this is a page */ if ( is_home() || is_page() ) { ?>				

	<?php } ?>

	<?php endif; ?>	
		<li><h2>Meta</h2>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
				<li><a href="http://www.jaguarpc.com/vps-hosting/">vps hosting</a></li>
				<li><a href="http://www.wpthemesexpert.com/" title="Wordpress Themes">Wordpress Themes</a></li>
				<?php wp_meta(); ?>
			</ul>
		</li>

	</ul>
	</div>