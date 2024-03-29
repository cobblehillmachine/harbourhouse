<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
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

				<?php global $wp_query;  $total_pages = $wp_query->max_num_pages;  ?>

				<?php	if ($total_pages > 1){  ?>
					<div id="pagination">
						<?php  $current_page = max(1, get_query_var('paged'));  

						  echo paginate_links(array(  
						      'base' => get_pagenum_link(1) . '%_%',  
						      'format' => '/page/%#%',  
						      'current' => $current_page,  
						      'total' => $total_pages,  
						 ));  ?>
					</div>
				<?php	} ?>

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