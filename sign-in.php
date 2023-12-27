<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.graygrids.com/themes/classified/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:15 GMT -->

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Sign In | ClassiFied</title>

    <?php
    require('head.php');
    ?>

</head>

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
                            <h5 class="title">Sign In Now</h5>
                        </div>
                        <form action="#">
                            <div class="sign_form_wrapper">
                                <div class="single_form">
                                    <input type="email" placeholder="Email">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="single_form">
                                    <input type="password" placeholder="Password">
                                    <i class="fal fa-key"></i>
                                </div>
                                <div class="single_form d-sm-flex justify-content-between">
                                    <div class="sign_checkbox">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox"></label>
                                        <span>Keep me logged in</span>
                                    </div>
                                    <div class="sign_forgot">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                </div>

                                <style>
                                    .btn1 {
                                        background-color: #463ce5 !important;
                                    }
                                </style>

                                <div class="single_form text-center">
                                    <!-- <button class="main-btn">Sign In</button> -->

                                    <button class="main-btn mb-2" style="width: 100%">
                                        <span class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff
                                                    }
                                                </style>
                                                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                            </svg>
                                        </span>
                                        Sign Up with Email
                                    </button>
                                    <button class="main-btn btn1" style="width: 100%">
                                        <span class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                                                <style>
                                                    svg {
                                                        fill: #ffffff
                                                    }
                                                </style>
                                                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                            </svg>
                                        </span>
                                        Sign Up with Phone
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
                            <input type="text" placeholder="Enter your mail address . . .">
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

</html>