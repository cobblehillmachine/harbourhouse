<?php
/**
 * The template for displaying Category Archive pages.
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
				<?php if ( have_posts() ) : ?>


					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

					<?php endwhile; ?>

					<?php twentyeleven_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->

				<?php endif; ?>


			</div>
	</div>


<?php get_footer(); ?>
