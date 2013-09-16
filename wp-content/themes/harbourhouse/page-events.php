<?php get_header(); ?>
<div id="upcoming-events">
	<div class="mid-cont">
		<div class="page-title">Upcoming Events</div>
		<div class="button sort-events">past events</div>
	</div>
	<?php query_posts(array('post_type' => 'Events', 'orderby'=> 'title',  'order' => 'ASC', 'posts_per_page' => 100, 'cat'=> 7)); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="event-cont">
					<div class="mid-cont">
						<div class="event-info">
							<div class="event-title"><?php the_title(); ?></div>
							<div class="event-date"><?php the_field('event_day'); ?>,&nbsp;<?php the_field('event_date'); ?>&nbsp;/&nbsp;<?php the_field('event_time'); ?><br/><?php the_field('event_location'); ?></div>
							<div class="text"><?php the_content(); ?></div>
							
							<?php if ( get_post_meta($post->ID, 'event_website', true) ) { ?>
								<a class="button" href="<?php the_field('event_website'); ?>" target="_blank">more info</a>
							<?php } else if ( get_post_meta($post->ID, 'event_pdf', true) ) { ?>
								<a class="button" href="<?php the_field('event_pdf'); ?>" target="_blank">more info</a>
							<?php } ?>
						</div>
						<div class="event-img">
							<?php the_post_thumbnail('full'); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>	
</div>

<div id="past-events" class="hidden">
	<div class="mid-cont">
		<div class="page-title">Past Events</div>
		<div class="button sort-events">Upcoming events</div>
	</div>
	<?php query_posts(array('post_type' => 'Events', 'orderby'=> 'title',  'order' => 'ASC', 'posts_per_page' => 100, 'cat'=> 8)); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="event-cont">
					<div class="mid-cont">
						<div class="event-info">
							<div class="event-title"><?php the_title(); ?></div>
							<div class="event-date"><?php the_field('event_day'); ?>,&nbsp;<?php the_field('event_date'); ?>&nbsp;/&nbsp;<?php the_field('event_time'); ?><br/><?php the_field('event_location'); ?></div>
							<div class="text"><?php the_content(); ?></div>
							
							<?php if ( get_post_meta($post->ID, 'event_website', true) ) { ?>
								<a class="button" href="<?php the_field('event_website'); ?>" target="_blank">more info</a>
							<?php } else if ( get_post_meta($post->ID, 'event_pdf', true) ) { ?>
								<a class="button" href="<?php the_field('event_pdf'); ?>" target="_blank">more info</a>
							<?php } ?>
						</div>
						<div class="event-img">
							<?php the_post_thumbnail('full'); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>	
</div>

<?php get_footer(); ?>