<div class="sidebar">

<div class="sidebarCard">
<h2><a href="/reviews/">Music Reviews</a></h2>
	
				<div class="sideContent" id="reviewBox">
				<ul>
				<?php	$args_reviews = array('posts_per_page' => 4,'category_name' => 'Albums, EPs','post__not_in' => array( $post->ID ),	'orderby' => 'date', 'order' => 'DESC');
				$review_query = new WP_Query( $args_reviews );
				while ( $review_query->have_posts() ) : $review_query->the_post(); ?>

					<li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( array(150,150) ); ?></a></li>

				<?php endwhile; ?>
				
				</ul> 
				</div>
</div>

	<?php wp_reset_postdata(); ?>

	
<div class="sidebarCard" style="margin-bottom:0;">
<h2><a href="/tutorials/">Music Tutorials</a></h2>

				<div class="sideContent" id="tutorialBox">
				<?php $args_promotion = array('posts_per_page' => 1, 'category_name' => 'promotion','post__not_in' => array( $post->ID ));
				$promotion_query = new WP_Query( $args_promotion );
				while ( $promotion_query->have_posts() ) : $promotion_query->the_post(); ?>

						
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(300,300)); ?></a>

						<div class="textStrip">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</div>


				<?php endwhile; ?>
				
				
				<?php wp_reset_postdata(); ?>
				
				
								<?php $args_production = array('posts_per_page' => 1, 'category_name' => 'production','post__not_in' => array( $post->ID ));
				$production_query = new WP_Query( $args_production );
				while ( $production_query->have_posts() ) : $production_query->the_post(); ?>

						
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(300,300)); ?></a>

						<div class="textStrip">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> </a>
						</div>


				<?php endwhile; ?>
				
				</div>
</div>	

<div class="sidebarCard">
<h2><a href="http://eepurl.com/sLjsP" target="_blank">Subscribe</a></h2>
		<div class="sideContent" id="subscribeBox">

		<?php get_template_part( '/partials/subscribe' , 'profileButtons' ); ?> 
		<?php get_template_part( '/partials/subscribe' , 'mailchimp' ); ?> 


</div>

</div>





 
<div class="sidebarCard">
<h2>Advertisement</h2>
<div class="sideContent" id="advertBox">

<iframe src="https://banners.itunes.apple.com/banner.html?partnerId=&aId=11lv2V&bt=promotional&at=Music&c=gb&l=en-US&st=new_artist&w=300&h=250" frameborder=0 style="overflow-x:hidden;overflow-y:hidden;width:300px;height:250px;border:0px"></iframe>

</div> 
</div>
 
<div class="sidebarCard">
<h2><a href="/featured-single/">Featured Single</a></h2>
<div class="sideContent" id="featSingleBox">
<iframe width="100%" id="soundcloudFrame" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php query_posts('showposts=1&offset=0'); if (have_posts()) : while (have_posts()) : the_post(); echo get_post_meta($post->ID, 'soundcloud_url', true); endwhile; endif; ?>&amp;color=00cc11&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
</div>
<div style="padding-top:15px; margin-bottom:10px;"><a href="#top" style="color:#fff; Font-size:13px; ">&#9650; Top</a></div>
</div>
 
</div>