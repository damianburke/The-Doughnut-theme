<?php get_header(); ?>
<div class="container">

<div class="contentWrapper">
<div class="content" id="contentHome">

<?php if ((date('m') == 4) && (date('d') == 16)) { ?>
	<p>Today is <a href="http://doughnutmag.com/">our birthday</a>!</p>
<?php } ?> 

<!-- <p><div data-role="spritzer"></div><p> -->

<article class="articleHome" id="homeTheContent">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php endif; ?>
</article> 

<article class="articleHome" id="homeReviews">
		<h2><a href="/reviews/">Music Reviews</a></h2>
	
	<div class="sideContent" id="reviewBox">
		<ul>
			<?php	$args_reviews = array('posts_per_page' => 4,'category_name' => 'Albums, EPs','post__not_in' => array( $post->ID ),	'orderby' => 'date', 'order' => 'DESC');
			$review_query = new WP_Query( $args_reviews );
			while ( $review_query->have_posts() ) : $review_query->the_post(); ?>

			<li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( array(150,150) ); ?></a></li>
									

			<?php endwhile; ?>
		</ul> 
				
		<div class="textStrip" id="textStripReview">
			<div style="padding:10px 5px;">
					<a href="/submissions/" title="Submit Your Music">Submit your music...</a>
			</div>
		</div>
	</div>    
<?php wp_reset_postdata(); ?>				
</article> 


<article class="articleHome" id="homePromotion">
		<h2><a href="/tutorials/">Music Promotion</a></h2>

	<div class="sideContent" id="tutorialBox">
			<?php $args_promotion = array('posts_per_page' => 1, 'category_name' => 'promotion','post__not_in' => array( $post->ID ));
			$promotion_query = new WP_Query( $args_promotion );
			while ( $promotion_query->have_posts() ) : $promotion_query->the_post(); ?>

						
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(300,300)); ?></a>

			<div class="textStrip" style="margin-bottom:0;">
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</div>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</article> 


<article class="articleHome" id="homeSingle">
		<h2><a href="/featured-single/">Featured Single</a></h2>
		
		<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php query_posts('showposts=1&offset=0'); if (have_posts()) : while (have_posts()) : the_post(); echo get_post_meta($post->ID, 'soundcloud_url', true); endwhile; endif; ?>&amp;color=ffc0cb&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
</article> 

<article class="articleHome" id="subscribeHome">
<h2><a href="http://eepurl.com/sLjsP" target="_blank">Subscribe</a></h2>
	
<?php get_template_part( '/partials/subscribe' , 'profileButtons' ); ?> 


<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://doughnutmag.us4.list-manage1.com/subscribe/post?u=7fd7f37ea6632ecba5c9a90d9&amp;id=c8591e2ff6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	
<div class="mc-field-group">
	<label for="mce-EMAIL"></label>
	<input type="email" value="" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_7fd7f37ea6632ecba5c9a90d9_c8591e2ff6" value=""></div>
	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	<!--End mc_embed_signup-->
</form>
</div>
</article>
	
<article class="articleHome" id="homeProduction">	
<h2><a href="/tutorials/">Music Production</a></h2>

				<div class="sideContent" id="tutorialBox">
<?php $args_production = array('posts_per_page' => 1, 'category_name' => 'production','post__not_in' => array( $post->ID ));
				$production_query = new WP_Query( $args_production );
				while ( $production_query->have_posts() ) : $production_query->the_post(); ?>

						
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(300,300)); ?></a>

						<div class="textStrip">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> </a>
						</div>


				<?php endwhile; ?>
				</div>
</article> 



<article class="articleHome" id="videoHome">
<h2><a href="/video/">Featured Video</a></h2>
<iframe width="600" height="338" src="//www.youtube.com/embed/gOxSyzMswNk" frameborder="0" allowfullscreen></iframe>


<?php  query_posts(); if (have_posts()) : while (have_posts()) : the_post(); $key_1_value = get_post_meta( get_the_ID(), 'video_url', true );
// check if the custom field has a value
if( ! empty( $key_1_value ) ) {
  echo $key_1_value;
} ; endwhile; endif;
?>

<?php
global $wp_query;
$postid = $wp_query->post->ID;
echo get_post_meta($postid, 'video_url', true);
wp_reset_query();
?>

</article>



</div>
</div>
<?php get_footer(); ?>