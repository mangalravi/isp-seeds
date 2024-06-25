<?php 
/* Template Name: Terms-condition */
get_header();?>

<section class="trmpol-sec">
      <div class="container">
        <a href="<?php echo home_url(); ?>" class="mb-4">
          <img src="<?php echo get_template_directory_uri(); ?>/content/images/logo-tdr.png" alt="logo" />
        </a>
        <div class="text-center">
          <h1 class="mb-4 mb-md-5">Terms of Use</h1>
        </div>
        <div class="row justify-content-center">
          <div class="col-xxl-9 col-xl-10 col-lg-11">
            <div class="mncntntbx">
            <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>