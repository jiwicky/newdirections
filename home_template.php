<?php
/*
Template Name: Home Template
*/
?>

<?php get_template_part('templates/home-window'); ?>

<div class="container col-md-5">

<div class="new-patient-box">
	<h3>New Client Information</h3>

<div class="clipboard"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clipboard.png" alt="clipboard" /></div>

<p> Preparing for your first visit to New Directions?</p>

<div class="new-patients-button">

<a href="new-patient-area" class=""> WHAT TO EXPECT </a>
</div>
</div>
<?php get_template_part('templates/latest-post-loop'); ?>


</div>

<?php get_template_part('templates/services-carousel'); ?>

<!--If there are events, show the events calendar and contact. If not only show the contact box.  -->

<?php include('eventon/archive-ajde_events.php') ?>