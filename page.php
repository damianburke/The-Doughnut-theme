<?php get_header(); ?>
<div class="container">

<div class="contentWrapper">
<div class="content"> 
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<article>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</article> 

<?php endwhile; ?>
<?php endif; ?>
</div>
 

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>