<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.graygrids.com/themes/classified/privacy-setting.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:18 GMT -->

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Privacy Settings | ClassiFied</title>

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

    <!--====== PRIVACY SETTING PART START ======-->

    <section class="privacy_setting_page pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar_profile mt-50">
                        <div class="profile_user">
                            <div class="user_author d-flex align-items-center">
                                <div class="author">
                                    <img src="assets/images/author-1.jpg" alt="">
                                </div>
                                <div class="user_content media-body">
                                    <h6 class="author_name">User</h6>
                                    <p>Administrator</p>
                                </div>
                            </div>
                            <div class="user_list">
                                <ul>
                                    <li><a href="dashboard.php"><i class="fal fa-tachometer-alt-average"></i> Dashboard</a></li>
                                    <li><a href="profile-settings.php"><i class="fal fa-cog"></i> Profile Settings</a></li>
                                    <li><a href="my-ads.php"><i class="fal fa-layer-group"></i> My Ads</a></li>
                                    <li><a href="offermessages.php"><i class="fal fa-envelope"></i> Offers/Messages</a></li>
                                    <li><a href="payments.php"><i class="fal fa-wallet"></i> Payments</a></li>
                                    <li><a href="favourite-ads.php"><i class="fal fa-heart"></i> My Favourites</a></li>
                                    <li><a class="active" href="privacy-setting.php"><i class="fal fa-star"></i> Privacy Settings</a></li>
                                    <li><a href="#"><i class="fal fa-sign-out"></i> Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="privacy_setting_content mt-50">
                        <div class="post_title">
                            <h5 class="title">Privacy Setting</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="privacy_list mt-30">
                                    <div class="privacy_title">
                                        <h5 class="title">Payment Method</h5>
                                    </div>
                                    <div class="privacy_list_wrapper">
                                        <ul>
                                            <li>
                                                <div class="single_privacy_list">
                                                    <div class="list_checkbox">
                                                        <input type="checkbox" checked="" name="radio" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                    <div class="list_content">
                                                        <p>Make my profile photo public</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single_privacy_list">
                                                    <div class="list_checkbox">
                                                        <input type="checkbox" checked="" name="radio" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                    <div class="list_content">
                                                        <p>I want to receive monthly newsletter</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single_privacy_list">
                                                    <div class="list_checkbox">
                                                        <input type="checkbox" checked="" name="radio" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                    <div class="list_content">
                                                        <p>I want to receive e-mail notifications of offers/messages</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single_privacy_list">
                                                    <div class="list_checkbox">
                                                        <input type="checkbox" checked="" name="radio" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                    <div class="list_content">
                                                        <p>I want to receive e-mail alerts about new listings</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single_privacy_list">
                                                    <div class="list_checkbox">
                                                        <input type="checkbox" checked="" name="radio" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                    <div class="list_content">
                                                        <p>Enable offers/messages option in all my ads Post</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="#" class="main-btn">Update</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="privacy_account_delete mt-30">
                                    <div class="privacy_title">
                                        <h5 class="title">Delete Account</h5>
                                    </div>
                                    <div class="account_delete">
                                        <form action="#">
                                            <div class="single_form">
                                                <select>
                                                    <option value="none">Select Country</option>
                                                    <option value="none">Country 1</option>
                                                    <option value="none">Country 2</option>
                                                    <option value="none">Country 3</option>
                                                    <option value="none">Country 4</option>
                                                    <option value="none">Country 5</option>
                                                    <option value="none">Country 6</option>
                                                </select>
                                            </div>
                                            <div class="single_form">
                                                <textarea placeholder="Description"></textarea>
                                            </div>
                                            <div class="single_form">
                                                <button class="main-btn">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PRIVACY SETTING PART ENDS ======-->

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


<!-- Mirrored from demo.graygrids.com/themes/classified/privacy-setting.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:18 GMT -->

</html>