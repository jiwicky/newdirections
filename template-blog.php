<?php
/*
Template Name: Wellness Blog
*/
?>

<?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            //
        the_title();
        the_post_thumbnail();
            //
        endwhile; // end while
    endif; // end if
?>