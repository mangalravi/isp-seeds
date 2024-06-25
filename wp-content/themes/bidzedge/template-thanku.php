<?php 
/* Template Name: thanku */ ?>
<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bidzedge-Term-&-Condition</title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/content/images/favicon.png" />
    <link
      rel="stylesheet"
      as="style"
      href="<?php echo get_template_directory_uri(); ?>/content/bootstrap/bootstrap.min.css"
    />
    <link href="<?php echo get_template_directory_uri(); ?>/content/css/font-family.css" />
    <link rel="stylesheet" as="style" href="<?php echo get_template_directory_uri(); ?>/content/css/custom.css" />
  </head>
  <body class="h-100">
    <section class="trmpol-sec h-100 pb-0">
      <div class="container h-100">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/content/images/logo-tdr.png" alt="logo" />
        </a>
        <div
          class="row justify-content-center align-items-center text-center fxdhgt"
        >
          <div class="col-9 col-md-5 col-lg-6">
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/check.svg" alt="check" />
            <p>
              Thank you for Signing Up. Your User Id and Password
              have been sent to your registered e-mail Id. 
            </p>
            <div
              class="row justify-content-center align-items-center text-center"
            >
              <div class="col-md-4">
                <a href="https://bidzedge.com" class="btn btn-tender-primary w-100"> Login Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="sgnup fxdbtm">
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
                <li><a href="/#About" class="ps-0">About The Company</a></li>
                <li><a href="<?php echo home_url('privacy-policy'); ?>">Privacy Policy</a></li>
                <li><a href="<?php echo home_url('term-condition'); ?>" class="pe-0">Terms of use</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
