<?php get_header(); ?>
	<div class="mid-cont">
		<div class="page-title"><?php the_title(); ?></div>
		<?php query_posts(array('post_type' => 'Supporters', 'orderby'=> 'title',  'order' => 'ASC', 'cat' => 4, 'posts_per_page' => 100)); ?>
		<div class="supporters-cont">
			<?php while ( have_posts() ) : the_post(); ?>
				<a class="supporter" href="<?php the_field('supporter_site'); ?>" target="_blank">
					<div class="supporter-name"><span><?php the_title(); ?></span></div>
					<?php if(has_post_thumbnail()) { ?><div class="supporter-logo hidden"><?php the_post_thumbnail('full'); ?></div><?php } ?>
				</a>
			<?php endwhile; wp_reset_query(); ?>	
		</div>
		
		<?php query_posts(array('post_type' => 'Supporters', 'orderby'=> 'title',  'order' => 'ASC', 'cat' => 5, 'posts_per_page' => 100)); ?>
		<div class="supporters-cont">
			<?php while ( have_posts() ) : the_post(); ?>
				<a class="supporter-small" href="<?php the_field('supporter_site'); ?>" target="_blank">
					&nbsp;<strong>&raquo;</strong> <?php the_title(); ?>
				</a>
			<?php endwhile; wp_reset_query(); ?>	
		</div>	

	</div>
<?php get_footer(); ?>