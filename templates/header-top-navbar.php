<div class="header_panel container">

<div class="mark">
  <a href="<?php echo home_url(); ?>/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_header.png"  alt="New Directions Mark" /></a> 
</div>

<!-- Hidden on mobile -->

<div class="logo">
      <a href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png"  alt="New Directions Logo" /></a>
</div>

<!--hidden on md screen and larger -->

<div class="logo-sm">
      <a href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-sm.png"  alt="New Directions Logo" /></a>
</div>


<div class="skybox">
  
    <p>A Child and Family Counseling Service</p>
    <p>Hickory <span class="bullit"> • </span> Lenoir </p> 

</div>


</div> <!--/.header_panel-->
<div class="container col-md-11 col-md-offset-1 new-directions-nav">
<header class="banner navbar navbar-default" role="banner"><!--Controls NavBar -->

    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav col-xs-12'));
        endif;
      ?>
    </nav>
 
</header>
</div>
