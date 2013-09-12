<?php get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>
		<div id="about-cont" class="container">
			<div class="mid-cont">
				<div class="page-title">about us</div>
				<div class="text"><?php the_content(); ?></div>
				<div id="links-cont">
					<a class="button" href="/about/our-team">our team</a>
					<a class="button" href="/about/our-supporters">our supporters</a>
				</div>
			</div>
		</div>

	<?php endwhile; wp_reset_query(); ?>
	
	<?php $the_query = new WP_Query( 'page_id=29' ); if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="families-cont" class="container">
			<div class="mid-cont">
				<div class="gray">
					<div class="wrap">
						<div class="page-title"><?php the_title(); ?></div>
						<div class="text"><?php the_content(); ?></div>
					</div>
				</div>
			</div>			
		</div>		
	<?php endwhile; endif; wp_reset_postdata(); ?>
	
	
	<?php $the_query = new WP_Query( 'page_id=31' ); if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="goal-cont" class="container">
			<div class="mid-cont">
				<div class="wrap">
					<div class="page-title"><?php the_title(); ?></div>
					<div class="text"><?php the_content(); ?></div>
					<div id="phase-cont" class="container">
						<div class="phase">
							<div class="phase-nbr">phase 1</div>
							<div class="phase-title"><?php the_field('phase_1_title'); ?></div>
							<div class="phase-estimate"><span class="arrows">&raquo;&nbsp;</span><?php the_field('phase_1_estimate'); ?></div>
						</div>
						<div class="phase">
							<div class="phase-nbr">phase 2</div>
							<div class="phase-title"><?php the_field('phase_2_title'); ?></div>
							<div class="phase-estimate"><span class="arrows">&raquo;&nbsp;</span><?php the_field('phase_2_estimate'); ?></div>
						</div>
						<div class="phase last">
							<div class="phase-nbr">phase 3</div>
							<div class="phase-title"><?php the_field('phase_3_title'); ?></div>
							<div class="phase-estimate"><span class="arrows">&raquo;&nbsp;</span><?php the_field('phase_3_estimate'); ?></div>
						</div>
					</div>
					<div id="total-goal">
						total goal &raquo; <?php the_field('total_goal'); ?>
					</div>
				</div>
			</div>			
		</div>		
	<?php endwhile; endif; wp_reset_postdata(); ?>
	
	
	
	<div id="about-quote" class="container">
		<div class="mid-cont">
			<?php the_excerpt(); ?>
			<div id="hh-info">
				<?php the_field('hh_info'); ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>