<div class="container col-md-12 clear row">

<div class="container services-heading"><h2>Services</h2></div>

<div class="carousel slide" data-ride="carousel" data-type="multi"  data-interval="false" id="myCarousel">

<div class="carousel-inner">


<?php 
$args = array('post_type' => 'services');


$loop = new WP_Query( $args );

$postcount= 1;

while ( $loop->have_posts() ) : $loop->the_post(); 


?>

<div class="item <?php if ($postcount == 1){echo 'active';}?>">

<div class=" col-md-3 col-sm-6 col-xs-12">

<div class=" service-box" >

<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full' , array('class' => ' img-responsive')); ?></a>

</div>

<div class="service-link"><a href="<?php echo get_permalink(); ?>"><?php> the_title(); ?></a></div>

</div>

</div>

<?php $postcount++ ?>


<?php endwhile;?>

<!-- ./carousel loop -->

</div>


  <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src=" <?php echo get_template_directory_uri(); ?>/assets/img/carousel-arrow-rt.png" alt=""/></a>
</div>



<script>$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});</script>