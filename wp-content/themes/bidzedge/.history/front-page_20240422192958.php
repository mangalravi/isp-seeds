<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<header class="fixed-top nvbrhdr">
      <nav class="navbar navbar-expand-lg justify-content-center bdrbtm">
        <div class="container justify-content-center">
          <div class="row justify-content-between w-100 align-items-center">
            <div
              class="col-lg-2 d-flex justify-content-between align-items-center"
            >
              <a href="<?php echo home_url(''); ?>">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/content/images/logo-tdr.png"
                  height="28"
                  alt="Bidzedge"
                  title="Bidzedge"
              /></a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="col-1"></div>
            <div class="col-9">
              <div
                class="collapse navbar-collapse justify-content-between pt-4 pt-lg-0"
                id="navbarSupportedContent"
              >
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a href="#Bidzedge" class="nav-link">Why Bidzedge</a>
                  </li>
                  <li class="nav-item">
                    <a href="#Features" class="nav-link">Features</a>
                  </li>
                  <li class="nav-item">
                    <a href="#About" class="nav-link">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="#Pricing" class="nav-link">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a href="#Contact" class="nav-link m-0">Contact</a>
                  </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center">
                  <li class="nav-item lstitm">
                    <a href="https://bidzedge.com" class="nav-link">Sign In</a>
                  </li>
                  <li class="nav-item lstnvlnk">
                    <a href="<?php echo home_url('signup'); ?>" class="btn btn-secondary">Free Trial</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <section class="top-banner">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-9 mb-4 mb-md-0">
            <h4>Bidding Simplifed.</h4>
            <p>
            Don't waste another minute wrestling with spreadsheets.  Take control of your bidding process and unlock your full potential with Bidzedge. Sign up for a free trial today and experience the difference!
            </p>
            <div class="row justify-content-center">
              <div class="col-6 col-md-3">
                <a href="<?php echo home_url('signup') ?>" class="btn btn-primary w-100">Start Free Trial</a>
              </div>
            </div>
          </div>

            <div class="btmimg justify-content-center">
              <div class="row gx-5">
                <div class="col-4">
          <img src="<?php echo get_template_directory_uri(); ?>/content/images/banner-1.png" alt="one" />
                </div>
                <div class="col-4">
                <div class="topimg">     <img
                    src="<?php echo get_template_directory_uri(); ?>/content/images/banner-2.png"
                    alt="two"
                    class="mt-5"
                  />
</div>
                </div>
                <div class="col-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/content/images/banner-3.png" alt="three" />
                </div>
              </div>
            </div>

        </div>
      </div>
    </section>

    <section class="why-bidzedge" id="Bidzedge">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 col-md-9">
            <div class="sec-tpcntnt">
              <h4 class="sec-head">Why Bidzedge</h4>
              <p class="sec-para">
                Get organized and stay on top of all your bids with our
                intuitive platform. Our advanced features give you the insights
                you need to win more bids and grow your business.
              </p>
            </div>
          </div>
        </div>

            <div class="row">
              <div class="col-sm-6 col-lg-4 mb-4 d-flex">
                <div class="sec-card">
                  <div class="sec-card-img mb-3">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/content/images/user-friendly.svg"
                      alt="user-friendly"
                    />
                  </div>
                  <div class="sec-card-content">
                    <h6 class="mb-2">User-Friendly </h6>
                    <p>
                      Bidzedge offers a simple UI that non-technical individuals
                      can manage. 
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4 d-flex">
                <div class="sec-card">
                  <div class="sec-card-img mb-3">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/content/images/Scalability.svg"
                      alt="Scalability"
                    />
                  </div>
                  <div class="sec-card-content">
                    <h6 class="mb-2">Scalability</h6>
                    <p>
                      Bidzedge offers scalability as organisations procurement
                      needs evolve. 
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4 d-flex">
                <div class="sec-card lstsc">
                  <div class="sec-card-img mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/content/images/Flexible.svg" alt="Flexible" />
                  </div>
                  <div class="sec-card-content">
                    <h6 class="mb-2">Flexible </h6>
                    <p>
                      Bidzedge helps with multiple bids simultaneously by
                      streamlining the process. 
                    </p>
                  </div>
                </div>
              </div>
            </div>
          
        <!-- <p class="lstwhy m-0">
          Aproxx <span class="lst"> 15+</span> dolor sit amet consectetur
          adipisicing
        </p> -->
      </div>
    </section>

    <section class="features pb-0" id="Features">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 col-md-9">
            <div class="sec-tpcntnt mb-0">
              <h4 class="sec-head">Features</h4>
              <p class="sec-para">
              Explore Bidzedge's array of features designed to streamline various processes effortlessly. Simplify your workflow and boost productivity with our innovative solutions.
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-md-7 mb-4 mb-md-0">
            <div class="lftfetr me-0 me-md-5">
              <img src="<?php echo get_template_directory_uri(); ?>/content/images/dashboard.png" alt="dashboard" />
            </div>
          </div>
          <div class="col-md-5 mb-5 mb-md-0">
            <div class="fetrcntnt">
              <h5>Intuitive Dashboard</h5>
              <h6>Gain a competitive edge.</h6>
              <p>
                Our advanced features give you the insights you need to win more
                bids and grow your business.
              </p>
              <h6>Stop overpaying for projects!</h6>
              <p>
                Our intelligent bidding algorithms ensure you get the best
                possible price for every job.
              </p>
              <h6>Never miss a deadline again.</h6>
              <p>
                Get organized and stay on top of all your bids with our
                intuitive platform.
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-md-5 order-1 order-md-0 mb-4 mb-md-0">
            <div class="fetrcntnt">
              <h5>Robust Analytics Suite</h5>
              <h6>Gain valuable insights into past bidding performance.</h6>
              <p>
                Unlock insights into past bids to refine future strategies. Gain
                a competitive edge with data-driven performance analysis.
              </p>
              <h6>
                Track competitor trends and market dynamics to stay ahead.
              </h6>
              <p>
                Stay ahead with vigilant monitoring of competitor trends and
                market shifts, ensuring informed decisions and sustained
                competitiveness.
              </p>
              <h6>
                Inform decisions, win contracts with data-driven insights.
              </h6>
              <p>
                Secure contracts confidently by leveraging data-driven insights
                to inform your decisions.
              </p>
            </div>
          </div>
          <div class="col-md-7 mb-4 mb-md-0 order-0 order-md-1">
            <div class="rgtfetr ms-0 ms-md-5">
              <img src="<?php echo get_template_directory_uri(); ?>/content/images/analytics.png" alt="analytics" />
            </div>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-md-7 mb-4 mb-md-0">
            <div class="lftfetr me-0 me-md-5">
              <img src="<?php echo get_template_directory_uri(); ?>/content/images/upload.png" alt="upload" />
            </div>
          </div>
          <div class="col-md-5">
            <div class="fetrcntnt">
              <h5>Multiple Document Upload</h5>
              <h6>Save time by uploading multiple documents at once.</h6>
              <p>
                Effortlessly streamline your workflow by uploading multiple
                documents simultaneously, saving valuable time.
              </p>
              <h6>Streamline your workflow with batch uploads.</h6>
              <p>
                Simplify your workflow by uploading batches of files at once,
                enhancing efficiency.
              </p>
              <h6>Maximize efficiency with simultaneous file uploads</h6>
              <p>
                Boost efficiency by uploading files simultaneously, maximizing
                productivity.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about position-relative" id="About">
      <div class="container">
        <!-- <img src="content/images/about-u-bg.svg" alt="" class="aboutbgimg" /> -->
        <div class="row justify-content-center text-center">
          <div class="col-md-9">
            <div class="sec-tpcntnt mb-4">
              <h4 class="sec-head">About Bidzedge</h4>
              <p class="sec-para">
              Bidzedge is a solution that allows users to engage with one another in order to achieve high efficiency in all elements of the tender bidding process. It facilitates the strategic procurement of both online and offline tenders. This comprises comprehensive management of the procurement bid life cycle, from registration to contract award.
              </p>
            </div>
            <a href="https://insolutions.in/Content/Company_Profile_ISSPL.pdf" target="_blank" class="btn btn-primary">Download Company Profile</a>
          </div>
        </div>
      </div>
    </section>

    <section class="review">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-7 col-md-6">
            <div class="sec-tpcntnt m-0">
              <h4 class="sec-head">What People Say</h4>
              <p class="sec-para m-0">
                The perceptions and opinions based on various factors such as
                personal experiences and interactions. 
              </p>
            </div>
          </div>
        </div>

        <div class="swiper-container expertise-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-inner">
                <p>
                  Project to be a team's best option for project management, but
                  when all the stars align, it's a powerful tool.
                </p>
                <div class="slidecntn">
                  <div class="slideimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/content/images/user1.png" alt="user1" />
                  </div>
                  <div class="rgtsldcnt">
                    <h6>Mila McSabbu</h6>
                    <p>Project Manager</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <p>
                Project management skimping on core features. It's strong at enabling with collaboration on visual materials.
                </p>
                <div class="slidecntn">
                  <div class="slideimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/content/images/user2.png" alt="user2" />
                  </div>
                  <div class="rgtsldcnt">
                    <h6>Mila McSabbu</h6>
                    <p>Freelance Design</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <p>
                We test and compare the best project management software for collaborating with a team, hitting deadlines.
                </p>
                <div class="slidecntn">
                  <div class="slideimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/content/images/user3.png" alt="user3" />
                  </div>
                  <div class="rgtsldcnt">
                    <h6>Mila McSabbu</h6>
                    <p>Freelance Design</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
              <p>
                  Project to be a team's best option for project management, but
                  when all the stars align, it's a powerful tool.
                </p>
                <div class="slidecntn">
                  <div class="slideimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/content/images/user1.png" alt="user1" />
                  </div>
                  <div class="rgtsldcnt">
                    <h6>Mila McSabbu</h6>
                    <p>Project Manager</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
              <p>
                We test and compare the best project management software for collaborating with a team, hitting deadlines.
                </p>
                <div class="slidecntn">
                  <div class="slideimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/content/images/user2.png" alt="user2" />
                  </div>
                  <div class="rgtsldcnt">
                    <h6>Mila McSabbu</h6>
                    <p>Freelance Design</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
              <p>
                Project management skimping on core features. It's strong at enabling with collaboration on visual materials.
                </p>
                <div class="slidecntn">
                  <div class="slideimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/content/images/user3.png" alt="user3" />
                  </div>
                  <div class="rgtsldcnt">
                    <h6>lila tabbu</h6>
                    <p>Freelance Design</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>

    <section class="business commonbgc" id="Pricing">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-6">
            <div class="sec-tpcntnt">
              <h4 class="sec-head">
                Elevate Your business With Transparent Pricing & Free Trial !
              </h4>
              <p class="sec-para">
                Experience premium services with our transparent pricing and
                enjoy a risk-free trial. Sign up now to unlock exclusive
                benefits!
              </p>
            </div>
          </div>
          <div class="col-md-10">
            <div class="tabscntnt">
              <div class="tbbtn">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="navitem" role="presentation">
                    <button
                      class="navlink active"
                      id="home-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#home-tab-pane"
                      type="button"
                      role="tab"
                      aria-controls="home-tab-pane"
                      aria-selected="true"
                    >
                      Monthly Plan
                    </button>
                  </li>
                  <!-- <li class="navitem" role="presentation">
                    <button
                      class="navlink"
                      id="profile-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-tab-pane"
                      type="button"
                      role="tab"
                      aria-controls="profile-tab-pane"
                      aria-selected="false"
                    >
                      Yearly . <span>20% off</span>
                    </button>
                  </li> -->
                </ul>
              </div>
              <div class="tbcntnt">
                <div class="tab-content" id="myTabContent">
                  <div
                    class="tab-pane fade active show active"
                    id="home-tab-pane"
                    role="tabpanel"
                    aria-labelledby="home-tab"
                    tabindex="0"
                  >
                    <div class="row">
                      <div class="col-sm-6 col-lg-4 d-flex mb-4 mb-lg-0">
                        <div class="tabcard">
                          <div class="badge">Recommended</div>
                          <h5>Free</h5>
                          <p>
                          For Anyone who wishes to Start
                          </p>
                          <h6>₹ 0 <span>Per Month</span></h6>
                          <a href="#" class="btn btn-primary">Buy Now</a>
                          <ul>
                            <li class="active">
                              <span class="markerli">20 Tenders</span>
                            </li>
                            <li class="active">
                              <span class="markerli">10 Users</span>
                            </li>
                            <li class="active">
                              <span class="markerli">1 Year's</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-4 d-flex mb-4 mb-lg-0">
                        <div class="tabcard active">
                          <div class="badge">Recommended</div>
                          <h5>Basic Plan</h5>
                          <p>
                          For Intermediate Users 
                          </p>
                          <h6>₹ 999 <span>Per Month</span></h6>
                          <a href="#" class="btn btn-primary">Buy Now</a>
                          <ul>
                            <li class="active">
                              <span class="markerli">100 Tenders</span>
                            </li>
                            <li class="active">
                              <span class="markerli">20 Users</span>
                            </li>
                            <li class="active">
                              <span class="markerli">1 Years</span>
                            </li>
                            <li>
                              <span class="markerli">Proposal Trial</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-4 d-flex mb-4 mb-lg-0">
                        <div class="tabcard mb-0">
                          <div class="badge">Recommended</div>
                          <h5>Premium</h5>
                          <p>
                          For Professional Users
                          </p>
                          <h6>₹ 4999 <span>Per Month</span></h6>
                          <a href="#" class="btn btn-primary">Buy Now</a>
                          <ul>
                            <li>
                              <span class="markerli">Unlimited Tenders</span>
                            </li>
                            <li>
                              <span class="markerli">50 Users</span>
                            </li>
                            <li class="active">
                              <span class="markerli">1 Years</span>
                            </li>
                            <li class="active">
                              <span class="markerli">Document Library</span>
                            </li>
                            <li class="active">
                              <span class="markerli">Proposal Trial</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div
                    class="tab-pane fade"
                    id="profile-tab-pane"
                    role="tabpanel"
                    aria-labelledby="profile-tab"
                    tabindex="0"
                  >
                    <div class="row justify-content-center">
                      <div class="col-sm-6 col-lg-4 d-flex mb-4 mb-lg-0">
                        <div class="tabcard">
                          <div class="badge">Recommended</div>
                          <h5>Free</h5>
                          <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit.
                          </p>
                          <h6>$0 <span>Per Month</span></h6>
                          <a href="#" class="btn btn-primary">Try For Free</a>
                          <ul>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                          </ul>
                        </div>
                      </div> -->
                      <!-- <div class="col-sm-6 col-lg-4 d-flex mb-4 mb-lg-0">
                        <div class="tabcard">
                          <div class="badge">Recommended</div>
                          <h5>Free</h5>
                          <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit.
                          </p>
                          <h6>$0 <span>Per Month</span></h6>
                          <a href="#" class="btn btn-primary">Try For Free</a>
                          <ul>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                          </ul>
                        </div>
                      </div> -->
                      <!-- <div class="col-sm-6 col-lg-4 d-flex mb-4 mb-lg-0">
                        <div class="tabcard mb-0 active">
                          <div class="badge">Recommended</div>
                          <h5>Free</h5>
                          <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit.
                          </p>
                          <h6>$0 <span>Per Month</span></h6>
                          <a href="#" class="btn btn-primary">Try For Free</a> -->
                          <!-- <ul>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                            <li>
                              <span class="markerli">Unlimited Project</span>
                            </li>
                          </ul> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact" id="Contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-6 mb-md-4">
            <div class="contact-form">
              <h4 class="sec-head mb-4">Contact Us</h4>
              <?php echo do_shortcode('[contact-form-7 id="4f9d31a" title="Contact Us"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php
get_footer();
