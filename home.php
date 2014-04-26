<?php get_header(); ?>
<div class="container">
    
<div class="contentWrapper"> 
<div class="indexContent"> 
<h1 class="indexTitle textCenter"><?php single_cat_title(); ?></h1>
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<article class="latestPosts">
			
				<div class="indexWrap">
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						
				<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(150,150)); ?></a><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a></p>
				
				<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="indexCTA">Read more...</a></p>
			
				</div>
				
				<p class="hashTags"><?php the_tags( "#", " #"); ?></p>
			
				
			</article>

		<?php endwhile; ?>
		<?php endif; ?> 
		

		<div class="textCenter">
		<p class="indexPagination"><?php posts_nav_link(' &ndash; ', '<i class="fa fa-backward"></i> Previous', 'Next <i class="fa fa-forward"></i>'); ?></p>



</div>

		
</div>
<?php get_sidebar(); ?>
</div>  
<?php get_footer(); ?>