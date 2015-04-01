<footer class="footer content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
    <a href="<?php echo get_site_url();?>/disclaimer/">Disclaimer</a>
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p class="copyright">&copy; <?php echo date('Y'); ?> New Directions Counseling Service<?php bloginfo('name'); ?></p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>