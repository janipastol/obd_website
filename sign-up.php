<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />

  <!--====== Title ======-->
  <title>Sign Up | ClassiFied</title>

  <?php
  require('head.php');
  ?>

<body class="gray-bg">
  <!--====== PRELOADER PART START ======-->

  <div class="preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--====== PRELOADER PART ENDS ======-->

  <!--====== HEADER PART START ======-->

  <?php
  require('header.php');
  ?>

  <!--====== HEADER PART ENDS ======-->

  <!--====== SIGN IN PART START ======-->

  <section class="sign_in_area pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-9">
          <div class="sign_in_form">
            <div class="sign_title">
              <h5 class="title">Sign Up Now</h5>
            </div>
            <form action="#">
              <div class="sign_form_wrapper">
                <div class="single_form">
                  <input type="text" placeholder="Username" />
                  <i class="fal fa-user"></i>
                </div>
                <div class="single_form">
                  <input type="email" placeholder="Email" />
                  <i class="fal fa-envelope"></i>
                </div>
                <div class="single_form">
                  <input type="password" placeholder="Password" />
                  <i class="fal fa-key"></i>
                </div>
                <div class="single_form">
                  <input type="password" placeholder="Confirm Password" />
                  <i class="fal fa-key"></i>
                </div>
                <div class="single_form text-center">
                  <div class="sign_checkbox">
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox"></label>
                    <span>
                      By registering, you accept our Terms & Conditions
                    </span>
                  </div>
                </div>
                <div class="single_form text-center">
                  <button class="main-btn">Sign Up</button>
                </div>

                <!-- HR line with OR text -->
                <div style="
                      display: flex;
                      justify-content: space-between;
                      align-items: center;
                      margin-top: 10px;
                    ">
                  <hr style="width: 50%" />
                  <span style="
                        border: 1px solid lightgrey;
                        padding: 0 4px 0 4px;
                        border-radius: 5px;
                      ">
                    OR
                  </span>
                  <hr style="width: 50%" />
                </div>

                <style>
                  .btn1 {
                    background-color: #463ce5 !important;
                  }

                  .btn2 {
                    background-color: rgb(134, 138, 150) !important;
                  }
                </style>

                <!-- Social and Google Button -->
                <div class="text-center mt-2">

                  <button class="main-btn btn1 mb-2" style="width: 80%">
                    <span class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 320 512">
                        <style>
                          svg {
                            fill: #ffffff;
                          }
                        </style>
                        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                      </svg>
                    </span>
                    Continue with Facebook
                  </button>

                  <button class="main-btn mb-2" style="width: 80%">
                    <span class="mr-2 mt-0 pt-0">
                      <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 488 512">
                        <style>
                          svg {
                            fill: #ffffff;
                          }
                        </style>
                        <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                      </svg>
                    </span>
                    Continue with Google
                  </button>

                  <button class="main-btn btn2" style="width: 80%">
                    <span class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                        <style>
                          svg {
                            fill: #ffffff;
                          }
                        </style>
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                      </svg>
                    </span>
                    Continue with Phone
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== SIGN IN PART ENDS ======-->

  <!--====== CALL TO ACTION PART START ======-->

  <!-- <section class="call_to_action_area pt-20 pb-70">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="call_to_action_content mt-45">
              <h4 class="title">Subscribe For Update</h4>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="call_to_action_form mt-50">
              <form action="#">
                <i class="fal fa-envelope"></i>
                <input
                  type="text"
                  placeholder="Enter your mail address . . ."
                />
                <button class="main-btn">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!--====== CALL TO ACTION PART ENDS ======-->

  <!--====== FOOTER PART START ======-->

  <?php
  require('footer.php');
  ?>

  <!--====== FOOTER PART ENDS ======-->

  <!--====== BACK TOP TOP PART START ======-->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!--====== BACK TOP TOP PART ENDS ======-->

  <!--====== PART START ======-->

  <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

  <!--====== PART ENDS ======-->

  <?php
  require('scripts.php');
  ?>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classified/sign-up.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:15 GMT -->

</html>