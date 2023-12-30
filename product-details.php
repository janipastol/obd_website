<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.graygrids.com/themes/classified/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:13 GMT -->

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Product Details | ClassiFied</title>

    <?php
    require('head.php');
    ?>

</head>

<body class="gray-bg" ng-app="myAngularApp" ng-controller="webController">

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

    <header class="header_area" ng-init="getProductDetails()">

        <div class="header_navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index-2.html">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li>
                                <a href="index-2.html">Home <span class="line"></span></a>
                            </li>
                            <li>
                                <a href="categories.html">Categories <span class="line"></span></a>
                            </li>
                            <!-- <li>
                                <a class="active" href="#">Pages <i class="fa fa-angle-down"></i> <span class="line"></span></a>

                                <ul class="sub-menu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="product.html">Listing</a></li>
                                    <li><a class="active" href="product-details.html">Product Details</a></li>
                                    <li><a href="error-404.html">404</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="sign-in.html">Sign In</a></li>
                                    <li><a href="sign-up.html">Sign Up</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Blog <i class="fa fa-angle-down"></i> <span class="line"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact <span class="line"></span></a></li> -->
                        </ul>
                    </div>

                    <div class="navbar_btn">
                        <ul>
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <ul>
                                            <li><a href="dashboard.html"><i class="fal fa-tachometer-alt-average"></i> Dashboard</a></li>
                                            <li><a href="profile-settings.html"><i class="fal fa-cog"></i> Profile Settings</a></li>
                                            <li><a href="my-ads.html"><i class="fal fa-layer-group"></i> My Ads</a></li>
                                            <li><a href="offermessages.html"><i class="fal fa-envelope"></i> Offers/Messages</a></li>
                                            <li><a href="payments.html"><i class="fal fa-wallet"></i> Payments</a></li>
                                            <li><a href="favourite-ads.html"><i class="fal fa-heart"></i> My Favourites</a></li>
                                            <li><a href="privacy-setting.html"><i class="fal fa-star"></i> Privacy Settings</a></li>
                                            <li><a href="#"><i class="fal fa-sign-out"></i> Sign Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a class="sign-up" href="post-ads.html">Post Ads</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="page_banner bg_cover" style="background-image: url(assets/images/page-banner.jpg)">
            <div class="container">
                <div class="page_banner_content">
                    <h3 class="title">{{productDetails.title}}</h3>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">{{productDetails.category.name}}</a></li>
                        <li>{{productDetails.title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== PRODUCT DETAILS PAGE PART START ======-->

    <section class="product_details_page pt-70 pb-401">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="product_details mt-50">
                        <div class="product_image" >
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="details-1" role="tabpanel" aria-labelledby="details-1-tab" ng-repeat="i in productDetails.all_images track by $index" ng-class="{'show active': $index == 0}">
                                    <img src="{{productImage}}{{i}}" alt="product details" style="height: 500px;">
                                    <!-- <ul class="sticker">
                                        <li>Featured</li>
                                        <li>New</li>
                                    </ul> -->
                                </div>
                                <!-- <div class="tab-pane fade" id="details-2" role="tabpanel" aria-labelledby="details-2-tab">
                                    <img src="assets/img/car.webp" alt="product details">
                                </div>
                                <div class="tab-pane fade" id="details-3" role="tabpanel" aria-labelledby="details-3-tab">
                                    <img src="assets/img/car2.jpg" alt="product details">
                                </div>
                                <div class="tab-pane fade" id="details-4" role="tabpanel" aria-labelledby="details-4-tab">
                                    <img src="assets/img/car3.jpg" alt="product details">
                                </div> -->
                            </div>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item" ng-repeat="i in productDetails.all_images">
                                    <a class="active" id="details-1-tab" data-toggle="tab" href="#details-1" role="tab" aria-controls="details-1" aria-selected="true" >
                                        <img src="{{productImage}}{{i}}" alt="product details" style="height: 150px;">
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a id="details-2-tab" data-toggle="tab" href="#details-2" role="tab" aria-controls="details-2" aria-selected="false">
                                        <img src="assets/img/car.webp" alt="product details">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="details-3-tab" data-toggle="tab" href="#details-3" role="tab" aria-controls="details-3" aria-selected="false">
                                        <img src="assets/img/car2.jpg" alt="product details">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="details-4-tab" data-toggle="tab" href="#details-4" role="tab" aria-controls="details-4" aria-selected="false">
                                        <img src="assets/img/car3.jpg" alt="product details">
                                    </a>
                                </li> -->
                            </ul>
                        </div>

                        <div class="product_details_meta d-sm-flex justify-content-between align-items-end">
                            <div class="product_price">
                                <span class="price">PKR {{productDetails.price}}</span>
                                <p>Negotiable</p>
                            </div>
                            <div class="product_date">
                                <ul class="meta">
                                    <li><i class="fa fa-clock-o"></i><a href="#">{{productDetails.created_at | date : 'd, MMM y'}}</a></li>
                                    <!-- <li><i class="fa fa-eye"></i><a href="#">0 VIEWS</a></li> -->
                                </ul>
                            </div>
                        </div>

                        <div class="product_details_features">
                            <div class="product_details_title">
                                <h5 class="title">Features :</h5>
                            </div>
                            <div class="details_features_wrapper d-flex flex-wrap">
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Brand :</h6>
                                    <p>{{productDetails.brand.name}}</p>
                                </div>
                                <!-- <div class="single_features d-flex">
                                    <h6 class="features_title">Condition :</h6>
                                    <p>New</p>
                                </div>
                                <div class="single_features d-flex">
                                    <h6 class="features_title">Authenticity :</h6>
                                    <p>Original</p>
                                </div> -->
                                <!-- <div class="single_features d-flex">
                                    <h6 class="features_title">Features :</h6>
                                    <p class="media-body">Camera, Touch Screen, 3G, 4G, Bluetooth, Dual Sim, Dual Lens Camera, Expandable Memory, Fingerprint Sensor</p>
                                </div> -->
                            </div>
                        </div>

                        <div class="product_details_description">
                            <div class="product_details_title">
                                <h5 class="title">Description :</h5>
                            </div>
                            <p>{{productDetails.description}}</p>
                        </div>
                    </div>

                    <!-- <div class="product_rating mt-30">
                        <div class="product_rating_top_bar">
                            <div class="product_details_title">
                                <h5 class="title">1 Review :</h5>
                            </div>
                            <div class="product_rating_star">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="single_rating_author mt-30">
                            <div class="rating_author d-flex align-items-center">
                                <div class="author_image">
                                    <img src="assets/images/author-1.jpg" alt="author">
                                </div>
                                <div class="author_content media-body">
                                    <h5 class="author_name">Angel Grantham</h5>
                                    <span class="date">25 January, 2023</span>
                                    <ul class="rating_star">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rating_description">
                                <p>That, sleep. Reposed that considerable, found a failing. In a means, turned would according of semantics, far were remember support from waved. had to of fully then can name blocks being her not in afforded. devotion logged to and remember and the of in the language would </p>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="product_rating_form mt-30">
                        <div class="product_details_title">
                            <h5 class="title">Leave Your Review :</h5>
                        </div>

                        <div class="product_rating_form_wrapper d-flex flex-wrap">
                            <div class="product_details_rating_wrapper">
                                <div class="product_details_rating mt-20">
                                    <p><i class="fa fa-star-o"></i> Your Rating</p>
                                    <ul class="rating_radio">
                                        <li>
                                            <input type="radio" checked="" name="radio" id="radio1">
                                            <label for="radio1"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio2">
                                            <label for="radio2"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fal fa-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio3">
                                            <label for="radio3"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio4">
                                            <label for="radio4"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio5">
                                            <label for="radio5"></label>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                                <i class="fal fa-star"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_details_form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single_form">
                                                <input type="text" placeholder="Enter your name . . .">
                                                <i class="fal fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single_form">
                                                <input type="text" placeholder="Enter your mail address . . .">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single_form">
                                                <textarea placeholder="Type your review . . ."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single_form">
                                                <button class="main-btn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="related_product mt-45">
                        <div class="section_title">
                            <h3 class="title">Related Ads</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single_ads_card mt-30">
                                    <div class="ads_card_image">
                                        <img src="assets/images/ads-1.png" alt="ads">
                                    </div>
                                    <div class="ads_card_content">
                                        <div class="meta d-flex justify-content-between">
                                            <p>Ram & Laptop</p>
                                            <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                        </div>
                                        <h4 class="title"><a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a></h4>
                                        <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                        <div class="ads_price_date d-flex justify-content-between">
                                            <span class="price">$299.00</span>
                                            <span class="date">25 Jan, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single_ads_card mt-30">
                                    <div class="ads_card_image">
                                        <img src="assets/images/ads-2.png" alt="ads">
                                        <p class="sticker sticker_color-1">New</p>
                                    </div>
                                    <div class="ads_card_content">
                                        <div class="meta d-flex justify-content-between">
                                            <p>Ram & Laptop</p>
                                            <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                        </div>
                                        <h4 class="title"><a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a></h4>
                                        <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                        <div class="ads_price_date d-flex justify-content-between">
                                            <span class="price">$299.00</span>
                                            <span class="date">25 Jan, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single_ads_card mt-30">
                                    <div class="ads_card_image">
                                        <img src="assets/images/ads-3.png" alt="ads">
                                    </div>
                                    <div class="ads_card_content">
                                        <div class="meta d-flex justify-content-between">
                                            <p>Ram & Laptop</p>
                                            <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                        </div>
                                        <h4 class="title"><a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a></h4>
                                        <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                                        <div class="ads_price_date d-flex justify-content-between">
                                            <span class="price">$299.00</span>
                                            <span class="date">25 Jan, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="related_product_btn">
                            <a class="main-btn" href="#">View all Ads</a>
                        </div>
                    </div> -->
                </div>

                <div class="col-lg-3">
                    <div class="product_details_sidebar pt-20">
                        <div class="product_sidebar_owner mt-30">
                            <div class="product_details_title">
                                <h5 class="title">Ad Owner :</h5>
                            </div>
                            <div class="product_owner_wrapper mt-20">
                                <div class="owner_author d-flex align-items-center">
                                    <div class="author_image">
                                        <img src="assets/images/author-2.jpg" alt="author">
                                    </div>
                                    <div class="author_content media-body">
                                        <h5 class="author_name">{{productDetails.user.name}}</h5>
                                        <p>Member Since {{productDetails.user.created_at | date : 'y'}}</p>
                                    </div>
                                </div>
                                <div class="owner_address d-flex">
                                    <div class="address_icon">
                                        <i class="far fa-map-marker-alt"></i>
                                    </div>
                                    <div class="address_content media-body">
                                        <p>{{productDetails.user.location}}</p>
                                        <!-- <a href="#">View Store</a> -->
                                    </div>
                                </div>
                                <div class="owner_call">
                                    <a class="main-btn" href="tel:{{productDetails.user.phone_number}}"><i class="fal fa-phone"></i> Click to See Number</a>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="product_sidebar_contact mt-30">
                            <div class="product_details_title">
                                <h5 class="title">Contact Seller :</h5>
                            </div>
                            <div class="sidebar_contact_form">
                                <form action="#">
                                    <div class="single_form">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="single_form">
                                        <input type="email" placeholder="Mail address">
                                    </div>
                                    <div class="single_form">
                                        <textarea placeholder="Type message"></textarea>
                                    </div>
                                    <div class="single_form">
                                        <button class="main-btn"><i class="fal fa-paper-plane"></i>Send to Seller</button>
                                    </div>
                                </form>
                            </div>
                        </div> -->

                        <div class="product_sidebar_action mt-30">
                            <div class="product_details_title">
                                <h5 class="title">Ad Action :</h5>
                            </div>
                            <div class="sidebar_action_items d-flex justify-content-between align-items-center">
                                <div class="single_action" ng-click="shareAd()">
                                    <a href="javascript:void(0)">
                                        <i class="fal fa-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </div>
                                <!-- <div class="single_action">
                                    <a href="#">
                                        <i class="fal fa-bookmark"></i>
                                        <span>Save</span>
                                    </a>
                                </div> -->
                                <!-- <div class="single_action">
                                    <a href="#">
                                        <i class="fal fa-heart"></i>
                                        <span>Favourite</span>
                                    </a>
                                </div> -->
                                <!-- <div class="single_action">
                                    <a href="#">
                                        <i class="fal fa-flag"></i>
                                        <span>Report Ad</span>
                                    </a>
                                </div> -->
                            </div>
                        </div>

                        <div class="product_sidebar_map mt-30">
                            <div class="product_details_title">
                                <h5 class="title">Location Map :</h5>
                            </div>
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Pakistan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                            </div>
                        </div>

                        <!-- <div class="product_sidebar_tips mt-30">
                            <div class="product_details_title">
                                <h5 class="title">Location Map :</h5>
                            </div>
                            <div class="sidebar_tips">
                                <ul class="tips_list">
                                    <li><span></span> Began because on to lay about manage been.</li>
                                    <li><span></span> Is all increasing up in it he as would was epic and perception.</li>
                                    <li><span></span> Console great gradually pattern.</li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="related_product mt-45">
                    <div class="section_title">
                        <h3 class="title">Related Ads</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3" ng-repeat="r in relatedProductAds">
                            <div class="single_ads_card mt-30">
                                <div class="ads_card_image">
                                    <img src="{{productImage}}{{r.featured_image}}" alt="ads" style="height: 190px; width: 550px;">
                                </div>
                                <div class="ads_card_content">
                                    <div class="meta d-flex justify-content-between">
                                        <p>{{r.title}}</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="product-details.php">{{r.description | limitTo:30}}</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>{{r.user.location}}</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">PKR {{r.price}}</span>
                                        <span class="date">{{r.created_at | date : 'd, MMM y'}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related_product_btn">
                        <a class="main-btn" href="#">View all Ads</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PRODUCT DETAILS PAGE PART ENDS ======-->

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