<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>Home | Online Bech Dy</title>

    <?php
    require('head.php');
    ?>

    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .single_ads_card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .ads_card_content {
            flex: 1;
            /* This makes sure the content takes up the available space */
            padding: 15px;
            /* Add padding as needed */
        }
    </style>
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

    <?php
    require('header.php');
    ?>

    <!--====== HEADER PART ENDS ======-->

    <style>
        /* Custom CSS for vertical alignment */
        .discBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 100%;
        }
    </style>

    <section class="pt-80">
        <div class="container">
            <div class="row justify-content-between text-center">
                <div class="col-md-4">
                    <button class="main-btn px-3 py-2 fs-5 discBtn" style="font-size: 3rem;">
                        Silver
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="main-btn px-3 py-2 discBtn" style="font-size: 3rem;">
                        Gold
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="main-btn px-3 py-2 discBtn" style="font-size: 3rem;">
                        Platinum
                    </button>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <!--====== CATEGORY PART START ======-->

    <!--====== HEADER PART ENDS ======-->

    <section class="pt-20">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 text-center">
                    <h1>Post Your Ad Today For FREE</h1>
                </div>
                <div class="col-lg-4 text-right">
                    <button class="main-btn ">
                        <a class="text-white" href="post-ads.php">
                            FREE
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <!--====== CATEGORY PART START ======-->

    <section class="category_area pt-50" ng-init="getCategoriesList()">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3 class="title">Popular Categories</h3>
                    </div>
                </div>
            </div>
            <div class="category_wrapper d-flex flex-wrap justify-content-center pt-30">
                <div class="category-column" ng-repeat="c in categoriesList | limitTo:5">
                    <div class="single_category text-center mt-30">
                        <img src="{{categoryImage}}{{c.image}}" alt="">
                        <!-- <div class="icon">
                            <i class="fal fa-camera"></i>
                        </div> -->
                        <div class="content">
                            <h6 class="title">{{c.name}}</h6>
                        </div>
                        <a href="product.php"></a>
                    </div>
                </div>

                <div class="category_btn">
                    <a class="main-btn" href="categories.php">View all Catagories</a>
                </div>
            </div>
        </div>
    </section>

    <!--====== CATEGORY PART ENDS ======-->

    <!-- <style>
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        /* .single_ads_card {
            display: flex;
            flex-direction: column;
            height: 100%;
        } */

        

        .ads_card_content {
            flex: 1; /* This makes sure the content takes up the available space */
            padding: 15px; /* Add padding as needed */
        }
    </style> -->

    <!--====== ADS PART START ======-->

    <section class="ads_area pt-70 pb-0">
        <div class="container">
            <div class="row" style="display: flex; flex-wrap: wrap;">
                <div class="col-lg-12">
                    <div class="ads_tabs d-sm-flex align-items-end justify-content-between pb-30">
                        <div class="section_title mt-45">
                            <h3 class="title">Popular and Featured Ads</h3>
                        </div>
                        <div class="tabs_menu mt-50">
                            <ul class="nav" id="myTab" role="tablist">
                                <li>
                                    <a class="active" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular Ads</a>
                                </li>
                                <li>
                                    <a id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured Ads</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ads_tabs" ng-init="getAdsList(0)">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6" ng-repeat="a in allAds">
                                <div class="single_ads_card ">
                                    <div class="ads_card_image">
                                        <img src="{{productImage}}{{a.featured_image}}" alt="ads" />
                                    </div>
                                    <div class="ads_card_content">
                                        <div class="meta d-flex justify-content-between">
                                            <p>{{a.title}}</p>
                                            <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                        </div>
                                        <h4 class="title">
                                            <a href="product-details.php">{{a.description | limitTo:30}}</a>
                                        </h4>
                                        <p><i class="far fa-map-marker-alt"></i>{{a.user.location}}</p>
                                        <div class="ads_price_date d-flex justify-content-between">
                                            <span class="price">PKR {{a.price}}</span>
                                            <span class="date">{{a.created_at | date : 'd, MMM y'}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab" ng-init="getAdsList(7)">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6" ng-repeat="a in featuredAds">
                                <div class="single_ads_card mt-30">
                                    <div class="ads_card_image">
                                        <img src="{{productImage}}{{a.featured_image}}" alt="ads" />
                                        <p class="sticker">Featured</p>
                                    </div>
                                    <div class="ads_card_content">
                                        <div class="meta d-flex justify-content-between">
                                            <p>{{a.title}}</p>
                                            <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                        </div>
                                        <h4 class="title">
                                            <a href="product-details.php">{{a.description | limitTo:30}}</a>
                                        </h4>
                                        <p><i class="far fa-map-marker-alt"></i>{{a.user.location}}</p>
                                        <div class="ads_price_date d-flex justify-content-between">
                                            <span class="price">PKR {{a.price}}</span>
                                            <span class="date">{{a.created_at | date : 'd, MMM y'}}</span>
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

    <!--====== ADS PART ENDS ======-->

    <!--====== MOBILE PHONES PART START ======-->

    <section class="published_area pt-115" ng-init="getProductCategory(63)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title pb-15">
                        <h3 class="title">Mobile</h3>
                    </div>
                </div>
            </div>
            <div class="published_wrapper">
                <div class="row">
                    <div class="col-lg-3 col-sm-6" ng-repeat="p in productCategoriesListMobile">
                        <div class="single_ads_card ">
                            <div class="ads_card_image">
                                <img src="{{productImage}}{{p.featured_image}}" alt="ads" />
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>{{p.title}}</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title">
                                    <a href="product-details.php">{{p.description | limitTo:30}}</a>
                                </h4>
                                <p><i class="far fa-map-marker-alt"></i>{{p.user.location}}</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">PKR {{p.price}}</span>
                                    <span class="date">{{p.created_at | date : 'd, MMM y'}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="published_btn mt-2">
                    <a href="product.php" class="main-btn">View all Ads</a>
                </div>
            </div>
        </div>
    </section>

    <!--====== MOBILE PHONES PART ENDS ======-->

    <!--====== CARS PART START ======-->

    <section class="published_area pt-115" ng-init="getProductCategory(52)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title pb-15">
                        <h3 class="title">Bikes</h3>
                    </div>
                </div>
            </div>
            <div class="published_wrapper">
                <div class="row">
                    <div class="col-lg-3 col-sm-6" ng-repeat="p in productCategoriesListBikes">
                        <div class="single_ads_card ">
                            <div class="ads_card_image">
                                <img src="{{productImage}}{{p.featured_image}}" alt="ads" />
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>{{p.title}}</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title">
                                    <a href="product-details.php">{{p.description | limitTo:30}}</a>
                                </h4>
                                <p><i class="far fa-map-marker-alt"></i>{{p.user.location}}</p>
                                <div class="ads_price_date d-flex justify-content-between">
                                    <span class="price">PKR {{p.price}}</span>
                                    <span class="date">{{p.created_at | date : 'd, MMM y'}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="published_btn mt-2">
                    <a href="product.php" class="main-btn">View all Ads</a>
                </div>
            </div>
        </div>
    </section>

    <!--====== CARS PART ENDS ======-->

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