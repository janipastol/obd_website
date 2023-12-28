<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Categories | ClassiFied</title>

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

    <?php
    require('header.php');
    ?>

    <!--====== HEADER PART ENDS ======-->

    <!--====== CATEGORIS PAGE PART START ======-->

    <section class="categories_page pt-70 pb-50" ng-init="getCategoriesList()">
        <div class="container">
            <div class="categories_top_bar d-flex align-items-center justify-content-between pb-30">
                <div class="categories_story mt-50">
                    <select>
                        <option value="0">Story by Acceding</option>
                        <option value="1">Some option</option>
                        <option value="2">Another option</option>
                        <option value="4">Potato</option>
                    </select>
                </div>
                <div class="categories_tab_menu mt-50">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true">
                                <i class="fal fa-th"></i>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">
                                <i class="fal fa-th-list"></i>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                    <div class="row">
                        <!-- <div class="col-lg-3 col-6">
                            <div class="single_categories text-center mt-30">
                                <div class="categories_icon">
                                    <i class="fal fa-mobile-alt"></i>
                                </div>
                                <div class="categories_content">
                                    <h5 class="title">Mobiles</h5>
                                    <p>3 Ads</p>
                                </div>
                                <a href="product.php"></a>
                            </div>
                        </div> -->
                        <div class="col-lg-3 col-6" ng-repeat="c in categoriesList">
                            <div class="single_categories text-center mt-30">
                                <div class="categories_icon">
                                <img src="{{categoryImage}}{{c.image}}" alt="">
                                    <!-- <i class="fal fa-car"></i> -->
                                </div>
                                <div class="categories_content">
                                    <h5 class="title">{{c.name}}</h5>
                                    <p>3 Ads</p>
                                </div>
                                <a href="product.php"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== CATEGORIS PAGE PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <?php
    require('footer.php');
    ?>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <?php
    require('scripts.php');
    ?>

</body>

</html>