<?php
/*
Template Name: Services Archive
*/
?>
<!-- 
<div class="col-sm-12">

<h1>Services</h1>
 -->
<?php get_template_part('templates/page', 'header'); ?>
<?php
$loop = new WP_Query( array( 'post_type' => 'services' ) );
while ( $loop->have_posts() ) : $loop->the_post();
?>


<div class="services-tile container col-sm-12">

	<a href="<?php echo get_the_permalink();?>"><h2><?php the_title();?></h2></a>
		
		<div class="services-thumb">
			<a href="<?php echo get_the_permalink();?>"><?php the_post_thumbnail('full', array('class' => 'col-md-4 img_responsive'));?></a>
		</div>
		
		<?php the_excerpt();?>
</div>


<?php endwhile; ?>

<a href="<?php echo get_site_url(); ?>/full-list-of-services"><h2>Full List of Services</h2></a>

</div>

