<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div id="blog-cont" class="container">
		<div class="mid-cont">
			<div id="cat-cont" class="container">
				<div class="cat-dd">
					<div id="sort-title" class="button" >SORT BY</div>
					<ul class="categories"><?php $categories = wp_list_categories(array('exclude'=> '1, 6, 7', 'show_option_all' => 'VIEW ALL')); echo $categories; ?></ul>
				</div>
			</div>
	
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content-single', get_post_format() ); ?>

			<?php endwhile; ?>

		</div>
	</div>

<?php get_footer(); ?>