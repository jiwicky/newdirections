<?php if (is_front_page()) : ?>
<?php elseif (is_page_template('archive_services.php')) : ?>
<div class="page-header">
  <h1>
    Services
  </h1>
</div>
<?php else : ?>
	<div class="page-header">
  <h1 class="services_header">
 <?php echo roots_title(); ?>
  </h1>
</div>
<?php endif; ?>