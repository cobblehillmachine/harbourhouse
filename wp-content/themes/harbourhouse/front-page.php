<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="mid-cont">
		<div id="home-quote-cont">
			<div id="big-quote">
				"<?php the_field('big_quote'); ?>"
			</div>
			<div class="line"></div>
			<div id="quote-author">
				<?php the_field('quote_author'); ?>
			</div>
			<div id="sub-quote">
				<?php the_field('sub_quote'); ?>
			</div>
			<a class="button" href="https://app.etapestry.com/onlineforms/CharlestonHarbourHouse/CHHDONATIONS.html" target="_blank">donate now</a>
		</div>
	</div>
	<div id="gray-cont">
		<div class="mid-cont">
			<span><?php the_content(); ?></span>
		</div>
	</div>
<?php endwhile;  ?>
<?php query_posts(array('post_type' => 'Home CTAs', 'order' => 'ASC', 'posts_per_page' => 6)); ?>
	<div id="cta-cont">
		<div class="mid-cont">
			<?php while ( have_posts() ) : the_post(); ?>
				<a class="home-cta" href="<?php the_field('cta_url'); ?>">
					<div class="cta-title">
						<?php $title = get_the_title(); $result=split(" ",$title); echo $result[0]; ?><br/>
						<?php $title = get_the_title(); $result=split(" ",$title); echo $result[1]; ?>
					</div>
					<div class="cta-link"><?php the_field('cta_link'); ?></div>
				</a>
			<?php endwhile; wp_reset_query(); ?>
			
		</div>		
	</div>





<!-- <div id="bg-cont">
	<div class="mid-cont">
		<div id="logo"></div>
		<div id="info-cont">
			<div class="overlay"></div>

		</div>
	</div>

</div>
<div id="gray-cont" class="brandon-medium">
	<span>OUR MISSION IS TO provide a safe harbor to ease our military &amp; veteran families’ burden</br>
	while their loved ones receive treatment at the <a href="http://www.charleston.va.gov/" target="_blank">VA Medical Center</a></span>
</div>
<div id="boxes-cont">
	<div class="mid-cont">
		<div id="event-box" class="box brandon-bold">
			<div class="title brandon-black">upcoming events</div>
			<span class="brandon-black">GOLF TOURNAMENT</span>
			RIVER COURSE</br>
			KIAWAH ISLAND, SC</br>
			09/15/2013 AT 12:00PM</br>
			<a href="/Golf_Tournament_091513.pdf" target="_blank">MORE INFO</a>
		</div>
		<div id="contact-box" class="box brandon-bold">
			<div class="title brandon-black">contact us</div>
			<span class="brandon-black">HARBOUR HOUSE</span>
			P.O. BOX 829</br>
			JOHNS ISLAND, SC 29457</br>
			877-437-5186</br>
			<a href="mailto:info@charlestonharbourhouse.com">INFO@CHARLESTONHARBOURHOUSE.COM</a>
		</div>
		<a id="disclaimer-link" class="brandon-bold" onclick="showDisclaimer();">
			DISCLAIMER
		</a>
	</div>
</div>
<div id="disclaimer-popup">
	<div id="close" onclick="closeDisclaimer();">X</div>
	<span class="brandon-bold">
		THIS SITE claims no credit for any images posted on this site unless otherwise noted. Images on this site are copyright to its respectful owners and the person/entity who created the photos.  Images shown on this site are not for sale or for any other commercial purpose–all images are for site presentation purpose only. If there is an image appearing on this site that belongs to you and do not wish for it appear on this site, please E-mail with a link to said image and it will be promptly removed.
	</span>
</div>
<div id="overlay"></div> -->

<?php get_footer(); ?>