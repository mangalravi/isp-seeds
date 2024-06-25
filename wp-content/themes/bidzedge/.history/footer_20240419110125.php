<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
 <footer class="sgnup">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-sm-5 col-md-6">
            <div class="lftftr mb-2 mb-md-0">
              <p class="mb-0">© 2024 Bidzedge. All Right Reserved</p>
            </div>
          </div>
          <div class="col-sm-7 col-md-6">
            <div class="rgtftr">
              <ul class="d-flex align-items-center justify-content-sm-end">
                <li><a href="/bidzedge/#About" class="ps-0">About The Company</a></li>
                <li><a href="<?php echo home_url('privacy-policy'); ?>">Privacy Policy</a></li>
                <li><a href="<?php echo home_url('term-condition'); ?>" class="pe-0">Terms of use</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/content/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/content/bootstrap/bootstrap.min.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/content/js/swiper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/content/js/custom.js"></script>
<?php wp_footer(); ?>

</body>
</html>
