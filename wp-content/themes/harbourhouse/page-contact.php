<?php get_header(); ?>
	<div class="mid-cont">
		<div class="page-title"><?php the_title(); ?></div>

			<?php while ( have_posts() ) : the_post(); ?>
				<div id="contact-info"><?php the_content(); ?></div>
				<div id="contact-img"><?php the_post_thumbnail('full'); ?></div>
				<div class="line"></div>
				<div class="gray-btn">leave a message</div>
				<div id="contact-form">
					<?php echo do_shortcode('[bestwebsoft_contact_form]'); ?>
				</div>
			<?php endwhile; ?>	

	</div>
<?php get_footer(); ?>