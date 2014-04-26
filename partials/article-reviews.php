<article itemscope itemtype="http://schema.org/MusicAlbum" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 
<?php if ( get_post_meta($post->ID, 'schema_byArtist', true) ) {
echo '<meta itemprop="byArtist" content = "';
echo get_post_meta($post->ID, "schema_byArtist", true); 
echo '">';} ?> 
<?php if ( get_post_meta($post->ID, 'schema_recTitle', true) ) {
echo '<meta itemprop="name" content = "';
echo get_post_meta($post->ID, "schema_recTitle", true); 
echo '">';} ?> 
 
 
<span itemprop="review" itemscope itemtype="http://schema.org/Review"> 
<h1 itemprop="name" class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<meta itemprop="description" content = "<?php echo get_the_excerpt(); ?> ">


<?php get_template_part( '/partials/article' , 'shareButtons' ); ?> 

 
 <div class="metaBox">

 <?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
 

<p><span class="vcard author"><!-- Author Start --> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" rel="author" itemprop="author" class="fn"><?php the_author_meta('display_name'); ?></a><!-- Author End --></span> on <span itemprop="datePublished" class="date updated"><?php the_date('j M, Y'); ?></span>, modified <span itemprop="dateModified"><?php the_modified_date('j M, Y'); ?></span></p>


<?php if ( get_post_meta($post->ID, 'schema_rating', true) ) {
echo '<span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">';
echo '<meta itemprop="worstRating" content = "1">';
echo '<p><i class="fa fa-star"></i> Rating: <span itemprop="ratingValue">'; 
echo get_post_meta($post->ID, "schema_rating", $single = true); 
echo '</span> / <span itemprop="bestRating">10</span></p>'; 
echo '</span>';
 } ?>

</div></span>

<!-- <p><div data-role="spritzer"></div><p> -->

<?php the_content(); ?>

<p class="hashTags"><?php the_tags( "#", " #"); ?></p>

<?php get_template_part( '/partials/article' , 'shareButtons' ); ?> 

</article>