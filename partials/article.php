<article  itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
<h1 itemprop="name" class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

<?php get_template_part( '/partials/article' , 'shareButtons' ); ?> 

 <div class="metaBox">

 <?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
 
<p><span class="vcard author"><!-- Author Start --> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" rel="author" itemprop="author" class="fn"><?php the_author_meta('display_name'); ?></a><!-- Author End --></span> on <span itemprop="datePublished" class="date updated"><?php the_date('j M, Y'); ?></span>, modified <span itemprop="dateModified"><?php the_modified_date('j M, Y'); ?></span></p>


</div>  
   
<?php the_content(); ?>

<p class="hashTags"><?php the_tags( "#", " #"); ?></p>

<?php get_template_part( '/partials/article' , 'shareButtons' ); ?> 

</article>