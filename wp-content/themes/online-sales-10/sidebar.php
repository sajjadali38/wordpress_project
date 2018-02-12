<div class="sidebar">
	<ul>
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar') ) : else : ?>			
			<?php wp_list_categories('orderby=name&show_count=0&title_li=<h2>Categories</h2>'); ?>
			<li>
				<h2>Archives</h2>
				<ul>
					<?php wp_get_archives('type=monthly&limit=12'); ?>
				</ul>
			</li>	
			<li>
				<h2>Pages</h2>
				<ul>
				<?php wp_list_pages('title_li='); ?>
				</ul>
			</li>
			<li>
				<h2>Recent Posts</h2>
				<ul>
					<?php $my_query = new WP_Query('showposts=10');
					  while ($my_query->have_posts()) : $my_query->the_post();
					  $do_not_duplicate = $post->ID; ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</li>

		<?php endif; ?>

			<li>
				<h2>Meta</h2>
				<ul>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://www.wpthemescreator.com/" title="Wordpress Themes">Wordpress Themes</a></li>
				</ul>
			</li>
	</ul>
</div>