<div class="latest-post-box">

<h3>From Our Wellness Blog</h3>

    <?php $latest_post= new WP_Query('showposts=1');
		if ($latest_post->have_posts()) : while ($latest_post->have_posts()) : $latest_post->the_post(); ?>	
 <a href="<?php the_permalink()?>"><h2><?php the_title();?> </h2></a>

   <a href="<?php the_permalink()?>"><?php the_post_thumbnail('full', array('class' => ' img-responsive post-thumbnail'));?></a>


   <?php the_excerpt();?>

</div>

<?php endwhile; ?> 

<?php endif; ?>