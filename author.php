<?php get_header(); ?>
<div class="container">

<div class="contentWrapper">
<div class="indexContent"> 


<!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

<article class="latestPosts">	
    <h1>Contributor: <?php echo $curauth->nickname; ?></h1>
	
	<?php if ( !empty( $curauth->user_description ) ) { echo '<p>' . $curauth->user_description . '</p>'; } ?>
	
	<?php if ( !empty( $curauth->aim ) ) { echo '<p><strong>LastFM:</strong> <a href="' . $curauth->aim . '" target="_blank">' . $curauth->aim . '</a></p>' ; } ?>
		
	<?php if ( !empty( $curauth->twitter ) ) { echo '<p><strong>Twitter:</strong> <a href="https://twitter.com/' . $curauth->twitter . '" target="_blank">' . '@' . $curauth->twitter . '</a></p>' ; } ?>
	
	<?php if ( !empty( $curauth->googleplus ) ) { echo '<p><strong>Google+:</strong> <a href="http://plus.google.com/' . $curauth->googleplus . '" rel="me" target="_blank">' . "+" . $author_name . '</a></p>' ; } ?>
	
	<?php if ( !empty( $curauth->user_url ) ) { echo '<p><strong>Website+:</strong> <a href="http://' . $curauth->user_url . '" target="_blank">' . $curauth->user_url . '</a></p>' ; } ?>
	
</article>	

<h2 class="indexTitle textCenter">Posts by <?php echo $curauth->first_name; ?>:</h2>
   
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
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>
		

		<div class="textCenter">
		<p class="indexPagination"><?php posts_nav_link(' &ndash; ', '&laquo; Previous', 'Next &raquo;'); ?></p>



</div>  
   
   
</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>