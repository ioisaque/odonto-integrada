<?php 
$facebook = get_theme_mod('share_links_facebook');
$twitter = get_theme_mod('share_links_twitter');
$googleplus = get_theme_mod('share_links_googleplus');
$pinterest = get_theme_mod('share_links_pinterest');
?>
<ul class="social social-colored social-sharing">
	<?php $title = urlencode(get_the_title());?>
	<?php if(!$facebook): ?><li><a href="http://www.facebook.com/sharer.php?m2w&s=100&p&#91;url&#93;=<?php the_permalink();?>&p&#91;images&#93;&#91;0&#93;=<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>&p&#91;title&#93;=<?php echo $title;?>" class="facebook" target="_blank" data-original-title="Facebook" rel="nofollow">Facebook</a><?php endif; ?>
	<?php if(!$twitter): ?><li><a href="http://twitter.com/share?text=Check%20this%20out:%20&amp;url=<?php the_permalink(); ?>" class="twitter" target="_blank" data-original-title="Twitter" rel="nofollow">Twitter</a></li><?php endif; ?>  
	<?php if(!$googleplus): ?><li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="googleplus" target="_blank" data-original-title="Google+" rel="nofollow">Google+</a></li><?php endif; ?>  
	<?php if(!$pinterest): ?>
	<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&amp;description=<?php echo $title;?>" target="_blank" class="pinterest" data-original-title="Pinterest" rel="nofollow">Pinterest</a></li><?php endif; ?>
</ul>