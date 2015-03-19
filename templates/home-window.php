<?php $about_page= new WP_Query('page_id=59');
		if ($about_page->have_posts()) : while ($about_page->have_posts()) : $about_page->the_post(); ?>	

		 <div class="col-md-7"> 	
<div class="home-window">
   <a href="<?php the_permalink()?>"><?php the_post_thumbnail('full', array('class' => ' img-responsive'));?></a>
   <div class="overlay">
 <a href="<?php the_permalink()?>"><h4><?php the_title();?> </h4></a>
   <?php the_excerpt();?>
</div>

</div>
</div>

<?php endwhile; ?> 

<?php endif; ?>