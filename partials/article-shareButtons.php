<div class="shareButtons">

		<a href="mailto:?subject=<?php the_title_attribute(); ?>&amp;body=<?php the_permalink() ?>">
			<img src="/wp-content/themes/ring/images/social/email.png" alt="Share via Email" title="Share via Email"  style="background:#DD4B39;"></a>
		
		<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>">
			<img src="/wp-content/themes/ring/images/social/facebook.png" alt="Share via Facebook" title="Share via Facebook"  style="background:#3B5998;"></a>
			
		<a target="_blank" href="http://twitter.com/home?status=<?php the_permalink() ?>%20<?php the_title_attribute() ?>%20via%20@DoughnutMag">
			<img src="/wp-content/themes/ring/images/social/twitter.png" alt="Share via Twitter" title="Share via Twitter"  style="background:#00ACED;"></a>

		<a target="_blank" href="http://www.tumblr.com/share?v=3&amp;u=<?php the_permalink() ?>&amp;t=<?php the_title_attribute(); ?>">
			<img src="/wp-content/themes/ring/images/social/tumblr.png" alt="Share via Tumblr" title="Share via Tumblr"  style="background:#2C4762;"></a>			
			
		<a target="_blank" href="https://plus.google.com/share?url=<?php the_title_attribute(); ?>%20<?php the_permalink() ?>">
			<img src="/wp-content/themes/ring/images/social/googleplus.png" alt="Share via Google+" title="Share via Google+"  style="background:#D14836;"></a>			
			
		<a target="blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&amp;media=<?php $featimageurl = urlencode( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ); echo $featimageurl ?>&amp;description=<?php the_title_attribute(); ?>%20via%20@DoughnutMag" title="Pin This Post">
			<img src="/wp-content/themes/ring/images/social/pinterest.png" alt="Share via Pinterest" title="Share via Pinterest"  style="background:#CB2027;"></a>
			
		<a target="_blank" href="http://www.reddit.com/submit?url=<?php the_permalink() ?>&amp;title=<?php the_title_attribute(); ?>">
			<img src="/wp-content/themes/ring/images/social/reddit.png" alt="Share via Reddit" title="Share via Reddit"  style="background:#FF4500;"></a>		

		<a target="_blank" href="http://www.stumbleupon.com/submit?url=<?php the_permalink() ?>&amp;title=<?php the_title_attribute(); ?>">
			<img src="/wp-content/themes/ring/images/social/stumbleupon.png" alt="Share via StumbleUpon" title="Share via StumbleUpon"  style="background:#EB4924;"></a>			
		
		<a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink() ?>&amp;title=<?php the_title_attribute(); ?>&amp;summary=<?php echo get_the_excerpt(); ?>">
			<img src="/wp-content/themes/ring/images/social/linkedin.png" alt="Share via LinkedIn" title="Share via LinkedIn"  style="background:#007FB1;"></a>

		<a target="_blank" href="http://www.evernote.com/clip.action?url=<?php the_permalink() ?>&amp;title=<?php the_title_attribute(); ?>">
			<img src="/wp-content/themes/ring/images/social/evernote.png" alt="Save on Evernote" title="Save on Evernote"  style="background: #6BB130;"></a>


   </div>