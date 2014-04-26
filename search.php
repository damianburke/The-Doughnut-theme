<?php get_header(); ?>
<div class="container">
    
<div class="contentWrapper"> 
<div class="indexContent"> 
<h1 class="indexTitle textCenter"><?php printf( __( 'Search Results for: "%s"', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<article class="latestPosts">
			
				<div class="indexWrap">
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						
				<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(150,150)); ?></a><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a></p>
				
				<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="indexCTA">Read more...</a></p>
			
				</div>
				
				<p class="hashTags"><?php the_tags( "#", " #"); ?></p>
					
			</article>

		<?php endwhile; else: ?>
		<article class="latestPosts" style="margin-left: 0px; margin-right:0;">
				<div style="padding:10px;">
		
		<h3>Dang, no results!</h3>	
		<?php get_search_form(); ?>	
	<p>Please try again or use the sitemap...</p>
<ul>
<li><a href="http://doughnutmag.com/">Home</a></li>
<li><a href="http://doughnutmag.com/reviews/">Reviews</a></li>	
<li><a href="http://doughnutmag.com/discover/">Discover</a></li>	
<li><a href="http://doughnutmag.com/features/">Features</a></li>
<li><a href="http://doughnutmag.com/tutorials/">Tutorials</a></li>
<li><a href="http://doughnutmag.com/contact/">Contact</a></li>

<ul>
<li><a href="http://www.facebook.com/doughnutmagazine" target="_blank">Facebook</a></li>
<li><a href="https://twitter.com/doughnutmag" target="_blank">Twitter</a></li>
<li><a href="https://plus.google.com/u/0/b/103872894649551263547/103872894649551263547/posts" target="_blank">Google+</a></li>
<li><a href="http://pinterest.com/doughnutmag/" target="_blank">Pinterest</a></li>
<li><a href="http://www.reddit.com/r/doughnutmag/" target="_blank">r/DoughnutMag</a></li>
<li><a href="http://doughnutmag.com/feed/" target="_blank">RSS</a></li>
</ul>

<li><a href="http://doughnutmag.com/privacy-policy/" rel="nofollow" target="_blank">Cookies and Privacy</a></li>
<li><a href="http://doughnutmag.com/competitions">Competitions</a></li>
<li><a href="http://doughnutmag.com/support/">Support Us</a></li>
<li><a href="http://doughnutmag.com/contribute/">Contribute</a></li>
</ul>
		<div>	
		</article>
		
		<?php endif; ?> 
		

		<div class="textCenter">
		<p class="indexPagination"><?php posts_nav_link(' &ndash; ', '&laquo; Previous', 'Next &raquo;'); ?></p>



</div>

		
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>