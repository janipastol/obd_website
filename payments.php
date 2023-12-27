<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.graygrids.com/themes/classified/payments.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:18 GMT -->

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Payments | ClassiFied</title>

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

    <!--====== PAYMENTS PART START ======-->

    <section class="payments_page pt-70 pb-120">
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
                                    <li><a class="active" href="payments.php"><i class="fal fa-wallet"></i> Payments</a></li>
                                    <li><a href="favourite-ads.php"><i class="fal fa-heart"></i> My Favourites</a></li>
                                    <li><a href="privacy-setting.php"><i class="fal fa-star"></i> Privacy Settings</a></li>
                                    <li><a href="#"><i class="fal fa-sign-out"></i> Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="payments_content mt-50">
                        <div class="post_title">
                            <h5 class="title">Payments</h5>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="order_details mt-30">
                                        <div class="payments_title">
                                            <h5 class="title">Your Order</h5>
                                        </div>
                                        <div class="order_details_table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>Challenge Battery Hammer Drill</p>
                                                        </td>
                                                        <td>
                                                            <p class="price">$190.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Power X Change Battery - 3.0 mAh</p>
                                                        </td>
                                                        <td>
                                                            <p class="price">$34.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Percussion Hammer Drill</p>
                                                        </td>
                                                        <td>
                                                            <p class="price">$87.00</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td>
                                                            <p class="price">$87.00</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping</th>
                                                        <td>
                                                            <form action="#" class="shipping">
                                                                <div class="radio">
                                                                    <input type="radio" checked="" name="radio" id="radio1">
                                                                    <label for="radio1"></label>
                                                                    <span>Free Shipping</span>
                                                                </div>
                                                                <div class="radio">
                                                                    <input type="radio" name="radio" id="radio2">
                                                                    <label for="radio2"></label>
                                                                    <span>Flat Rate:</span>
                                                                    <span class="price"> $10.00</span>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td>
                                                            <p class="price">$197.00</p>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="order_details mt-30">
                                        <div class="payments_title">
                                            <h5 class="title">Payment Method</h5>
                                        </div>
                                        <div class="order_details_form">
                                            <div class="single_form">
                                                <input type="text" placeholder="Name on Card *">
                                            </div>
                                            <div class="single_form">
                                                <select>
                                                    <option value="none">Select State</option>
                                                    <option value="none">Select State</option>
                                                    <option value="none">Select State</option>
                                                </select>
                                            </div>
                                            <div class="single_form">
                                                <input type="text" placeholder="Credit Card Number *">
                                            </div>
                                            <div class="single_form">
                                                <input type="text" placeholder="Card Verification Number*">
                                            </div>
                                            <div class="details_form">
                                                <div class="form_table">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th>GRAND TOTAL:</th>
                                                                <td>$197.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="single_form">
                                                    <a href="#" class="main-btn">Place Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PAYMENTS PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->

    <section class="call_to_action_area pt-20 pb-70">
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
    </section>

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


<!-- Mirrored from demo.graygrids.com/themes/classified/payments.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:18 GMT -->

</html>