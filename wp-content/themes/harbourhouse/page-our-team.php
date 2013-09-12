<?php get_header(); ?>
	<div class="mid-cont">
		<div class="page-title"><?php the_title(); ?></div>
			
			<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'posts_per_page' => 10 ));
			    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post(); ?>
					<div class="member-cont">
						<div class="member-photo"><?php the_post_thumbnail('full'); ?></div>
						<div class="info-cont">
							<div class="wrap">
								<div class="member-name"><?php the_title(); ?></div>
								<div class="member-position"><?php if(has_excerpt()) { ?><?php the_excerpt(); ?><?php } ?></div>
							</div>
							
						</div>
						<div class="bio-link">read bio</div>
						<div class="bio-cont hidden">
							<div class="close" onclick="closeBio();">X</div>
							<div class="wrap">
								<div class="member-name"><?php the_title(); ?></div>
								<div class="member-position"><?php if(has_excerpt()) { ?><?php the_excerpt(); ?><?php } ?></div>
							</div>
							<div class="bio text"><?php the_content(); ?></div>
						</div>
						
					</div>

		

			<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
<div class="overlay hidden"></div>
<?php get_footer(); ?>