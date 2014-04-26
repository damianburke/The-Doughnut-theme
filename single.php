<?php get_header(); ?>
<div class="container">
<div class="contentWrapper">
<div class="content">
  
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<?php if ( in_category( array( 14,15 ) )) {get_template_part( '/partials/article' , 'reviews' );}
elseif ( in_category( 18,12,17,399,400 )) {get_template_part( '/partials/article' , 'tutorials' );}
else { get_template_part( '/partials/article' , $post->post_type );} ?> 

<div class="relatedPost">
<div class="relatedPostCard" style="margin: 0 10px; border-top:1px solid #D6D6D6; padding-top:10px;">
<h4>Related Articles:</h4>
<p style="text-align:left;"><?php previous_post_link('%link', '<i class="fa fa-backward"></i> %title', TRUE); ?></p>
<p style="text-align:right;"><?php next_post_link('%link', '%title <i class="fa fa-forward"></i>', TRUE); ?></p>
</div>
</div>
 
<div id="commentsDisqus"><?php comments_template(); ?></div>
<?php endwhile; ?>
<?php endif; ?>

</div> 

<?php if ( in_category( 12,17,18,399,400 )) {get_sidebar('tutorials');}
else { get_sidebar();} ?> 

</div>
<?php get_footer(); ?>