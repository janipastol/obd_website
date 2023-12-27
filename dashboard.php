<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.graygrids.com/themes/classified/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:18 GMT -->

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Dashboard | ClassiFied</title>

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

    <!--====== DASHBOARD PART START ======-->

    <section class="dashboard_page pt-70 pb-40">
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
                                    <h6 class="author_name">Mudassir</h6>
                                    <p>Administrator</p>
                                </div>
                            </div>
                            <div class="user_list">
                                <ul>
                                    <li><a class="active" href="dashboard.php"><i class="fal fa-tachometer-alt-average"></i> Dashboard</a></li>
                                    <li><a href="profile-settings.php"><i class="fal fa-cog"></i> Profile Settings</a></li>
                                    <li><a href="my-ads.php"><i class="fal fa-layer-group"></i> My Ads</a></li>
                                    <li><a href="offermessages.php"><i class="fal fa-envelope"></i> Offers/Messages</a></li>
                                    <li><a href="payments.php"><i class="fal fa-wallet"></i> Payments</a></li>
                                    <li><a href="favourite-ads.php"><i class="fal fa-heart"></i> My Favourites</a></li>
                                    <li><a href="privacy-setting.php"><i class="fal fa-star"></i> Privacy Settings</a></li>
                                    <li><a href="#"><i class="fal fa-sign-out"></i> Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="dashboard_content mt-50">
                        <div class="post_title">
                            <h5 class="title">Dashboard</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single_dashboard_box d-flex">
                                    <div class="box_icon">
                                        <i class="fal fa-file-alt"></i>
                                    </div>
                                    <div class="box_content media-body">
                                        <h6 class="title"><a href="#">Total Ad Posted</a></h6>
                                        <p>480 Add Posted</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single_dashboard_box d-flex">
                                    <div class="box_icon">
                                        <i class="fal fa-file-plus"></i>
                                    </div>
                                    <div class="box_content media-body">
                                        <h6 class="title"><a href="#">Featured Ads</a></h6>
                                        <p>80 Add Posted</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single_dashboard_box d-flex">
                                    <div class="box_icon">
                                        <i class="fal fa-envelope-open-text"></i>
                                    </div>
                                    <div class="box_content media-body">
                                        <h6 class="title"><a href="#">Offers / Messages</a></h6>
                                        <p>2040 Add Posted</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ads_table table-responsive mt-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="checkbox">
                                            <div class="table_checkbox">
                                                <input type="checkbox" id="checkbox1">
                                                <label for="checkbox1"></label>
                                            </div>
                                        </th>
                                        <th class="photo">Photo</th>
                                        <th class="title">Title</th>
                                        <th class="category">Category</th>
                                        <th class="status">Ad Status</th>
                                        <th class="price">Price</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="checkbox">
                                            <div class="table_checkbox">
                                                <input type="checkbox" id="checkbox2">
                                                <label for="checkbox2"></label>
                                            </div>
                                        </td>
                                        <td class="photo">
                                            <div class="table_photo">
                                                <img src="assets/images/ads-1.png" alt="ads">
                                            </div>
                                        </td>
                                        <td class="title">
                                            <div class="table_title">
                                                <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                                                <p>Ad ID: ng3D5hAMHPajQrM</p>
                                            </div>
                                        </td>
                                        <td class="category">
                                            <div class="table_category">
                                                <p>Ram & Laptop</p>
                                            </div>
                                        </td>
                                        <td class="status">
                                            <div class="table_status">
                                                <span class="active">active</span>
                                            </div>
                                        </td>
                                        <td class="price">
                                            <div class="table_price">
                                                <span>$299.00</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <div class="table_action">
                                                <ul>
                                                    <li><a href="product-details.php"><i class="fal fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-pencil"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-trash-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox">
                                            <div class="table_checkbox">
                                                <input type="checkbox" id="checkbox4">
                                                <label for="checkbox4"></label>
                                            </div>
                                        </td>
                                        <td class="photo">
                                            <div class="table_photo">
                                                <img src="assets/images/ads-3.png" alt="ads">
                                            </div>
                                        </td>
                                        <td class="title">
                                            <div class="table_title">
                                                <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                                                <p>Ad ID: ng3D5hAMHPajQrM</p>
                                            </div>
                                        </td>
                                        <td class="category">
                                            <div class="table_category">
                                                <p>Ram & Laptop</p>
                                            </div>
                                        </td>
                                        <td class="status">
                                            <div class="table_status">
                                                <span class="sold">Sold</span>
                                            </div>
                                        </td>
                                        <td class="price">
                                            <div class="table_price">
                                                <span>$299.00</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <div class="table_action">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-pencil"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-trash-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="checkbox">
                                            <div class="table_checkbox">
                                                <input type="checkbox" id="checkbox5">
                                                <label for="checkbox5"></label>
                                            </div>
                                        </td>
                                        <td class="photo">
                                            <div class="table_photo">
                                                <img src="assets/images/ads-4.png" alt="ads">
                                            </div>
                                        </td>
                                        <td class="title">
                                            <div class="table_title">
                                                <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                                                <p>Ad ID: ng3D5hAMHPajQrM</p>
                                            </div>
                                        </td>
                                        <td class="category">
                                            <div class="table_category">
                                                <p>Ram & Laptop</p>
                                            </div>
                                        </td>
                                        <td class="status">
                                            <div class="table_status">
                                                <span class="expired">Expired</span>
                                            </div>
                                        </td>
                                        <td class="price">
                                            <div class="table_price">
                                                <span>$299.00</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <div class="table_action">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-pencil"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-trash-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="checkbox">
                                            <div class="table_checkbox">
                                                <input type="checkbox" id="checkbox6">
                                                <label for="checkbox6"></label>
                                            </div>
                                        </td>
                                        <td class="photo">
                                            <div class="table_photo">
                                                <img src="assets/images/ads-5.png" alt="ads">
                                            </div>
                                        </td>
                                        <td class="title">
                                            <div class="table_title">
                                                <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                                                <p>Ad ID: ng3D5hAMHPajQrM</p>
                                            </div>
                                        </td>
                                        <td class="category">
                                            <div class="table_category">
                                                <p>Ram & Laptop</p>
                                            </div>
                                        </td>
                                        <td class="status">
                                            <div class="table_status">
                                                <span class="inactive">Inactive</span>
                                            </div>
                                        </td>
                                        <td class="price">
                                            <div class="table_price">
                                                <span>$299.00</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <div class="table_action">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-pencil"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-trash-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="checkbox">
                                            <div class="table_checkbox">
                                                <input type="checkbox" id="checkbox7">
                                                <label for="checkbox7"></label>
                                            </div>
                                        </td>
                                        <td class="photo">
                                            <div class="table_photo">
                                                <img src="assets/images/ads-7.png" alt="ads">
                                            </div>
                                        </td>
                                        <td class="title">
                                            <div class="table_title">
                                                <h6 class="titles">8 GB DDR4 Ram, 4th Gen</h6>
                                                <p>Ad ID: ng3D5hAMHPajQrM</p>
                                            </div>
                                        </td>
                                        <td class="category">
                                            <div class="table_category">
                                                <p>Ram & Laptop</p>
                                            </div>
                                        </td>
                                        <td class="status">
                                            <div class="table_status">
                                                <span class="deleted">Deleted</span>
                                            </div>
                                        </td>
                                        <td class="price">
                                            <div class="table_price">
                                                <span>$299.00</span>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <div class="table_action">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-pencil"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-trash-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== DASHBOARD PART ENDS ======-->

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


<!-- Mirrored from demo.graygrids.com/themes/classified/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:18 GMT -->

</html>