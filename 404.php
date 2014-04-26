<?php get_header(); ?>
<div class="container">

<div class="contentWrapper">
<div class="content">

<article>
<h1>404 - Bummer...</h1>
<p>The page you're looking for seems to be missing.</p>

<p>Why not try one of the search bar above or the sitemap below....</p>

<h2>Most Popular Posts</h2>
		<ul>
		<?php 
		$result = $wpdb->get_results("SELECT comment_count, ID, post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 10"); // NUMBER OF POSTS
		foreach ($result as $topten) {
			$postid = $topten->ID;
			$title = $topten->post_title;
			$commentcount = $topten->comment_count;
			if ($commentcount != 0) {
		?>

		<li><a href="<?php echo get_permalink($postid); ?>"><?php echo $title ?></a></li>

		<?php } } ?>
		</ul>

<h3>Sitemap</h3>

		<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/reviews/">Reviews</a></li>	
		<li><a href="/discover/">Discover</a></li>	
		<li><a href="/features/">Features</a></li>
		<li><a href="/tutorials/">Tutorials</a></li>
		<li><a href="/contact/">Contact</a></li>

		<ul>
		<li><a href="http://www.facebook.com/doughnutmagazine"  target="_blank">Facebook</a></li>
		<li><a href="http://twitter.com/doughnutmag" target="_blank">Twitter</a></li>
		<li><a href="http://plus.google.com/u/0/b/103872894649551263547/103872894649551263547/posts" target="_blank">Google+</a></li>
		<li><a href="http://pinterest.com/doughnutmag/" target="_blank">Pinterest</a></li>
		<li><a href="http://www.reddit.com/r/doughnutmag/" target="_blank">r/DoughnutMag</a></li>
		<li><a href="/feed/" target="_blank">RSS</a></li>
		</ul>

		<li><a href="/privacy-policy/" rel="nofollow" target="_blank">Cookies and Privacy</a></li>
		<li><a href="/competitions">Competitions</a></li>
		<li><a href="/support/">Support Us</a></li>
		<li><a href="/contribute/">Contribute</a></li>
		</ul>


</article> 

</div>

<?php get_sidebar(); ?>
</div> 
<?php get_footer(); ?>