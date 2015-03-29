<?php if(get_post_type() == 'services'){ ?>
  <a href="<?php echo get_post_type_archive_link('services');?>">Back to All Services</a>
<?php } ?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <!-- Compass -->
      <div class="single compass"><img class="compass" src="<?php echo get_template_directory_uri() ?>/assets/img/compass_iso.png" alt="" /></div>

      <?php if(get_post_type() != 'services'){
        get_template_part('templates/entry-meta');
        } ?>
    </header>

    <div class="quote col-md-10 col-md-offset-1"><p><?php the_field('quote'); ?></p></div>

    <div class="featured-single"><?php the_post_thumbnail('full' , array('class' => 'col-md-12 img_responsive')); ?></div>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
