<!DOCTYPE html>
<html class="no-js" lang="en">
<!-- Mirrored from demo.graygrids.com/themes/classified/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:09:39 GMT -->

<head>
  <meta charset="utf-8" />

  <!--====== Title ======-->
  <title>Home | ClassiFied</title>

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

  <!--====== CATEGORY PART START ======-->

  <section class="category_area pt-115">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section_title">
            <h3 class="title">
              Popular <br />
              Categories
            </h3>
          </div>
        </div>
      </div>
      <div class="category_wrapper d-flex flex-wrap justify-content-center pt-30">
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-camera"></i>
            </div>
            <div class="content">
              <h6 class="title">DSLR Camera</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-mobile"></i>
            </div>
            <div class="content">
              <h6 class="title">Cell Phone</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-laptop"></i>
            </div>
            <div class="content">
              <h6 class="title">Laptop</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-headphones-alt"></i>
            </div>
            <div class="content">
              <h6 class="title">Headphones</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-ring"></i>
            </div>
            <div class="content">
              <h6 class="title">Jewelry</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-backpack"></i>
            </div>
            <div class="content">
              <h6 class="title">Backpacks</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-bicycle"></i>
            </div>
            <div class="content">
              <h6 class="title">Vehicles</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-door-open"></i>
            </div>
            <div class="content">
              <h6 class="title">Furniture</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-gamepad"></i>
            </div>
            <div class="content">
              <h6 class="title">Gadgets</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>
        <div class="category-column">
          <div class="single_category text-center mt-30">
            <div class="icon">
              <i class="fal fa-watch"></i>
            </div>
            <div class="content">
              <h6 class="title">Watches</h6>
            </div>
            <a href="product.php"></a>
          </div>
        </div>

        <div class="category_btn">
          <a class="main-btn" href="categories.php" style="background-color: #e26310">View all Catagories</a>
        </div>
      </div>
    </div>
  </section>

  <!--====== CATEGORY PART ENDS ======-->

  <!--====== ADS PART START ======-->

  <section class="ads_area pt-70 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ads_tabs d-sm-flex align-items-end justify-content-between pb-30">
            <div class="section_title mt-45">
              <h3 class="title">
                Popular <br />
                and Featured Ads
              </h3>
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
      <div class="ads_tabs">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-1.png" alt="ads" />
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Gadgets</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">Nikon Camera</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$129.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-2.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Camera</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">Fresh Digital Camera</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$99.00</span>
                      <span class="date">12 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-3.png" alt="ads" />
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Mobile</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">Samsung Glalaxy S8</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-4.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Mobile</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">iPhone X Fresh</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>Delaware, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$234.00</span>
                      <span class="date">10 Jun, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-5.png" alt="ads" />
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Vehicle</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">High-performance Bi-Cycle</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jun, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-6.png" alt="ads" />
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Vehicle</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">KTM 800CC Bike</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$2399.00</span>
                      <span class="date">25 Apr, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-7.png" alt="ads" />
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Computers</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">MacBook Pro - 8 GB / 256GB</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$129.00</span>
                      <span class="date">25 Dec, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-8.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Camera</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-1.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Ram & Laptop</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-2.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Ram & Laptop</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-3.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Ram & Laptop</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-4.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Ram & Laptop</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-5.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Ram & Laptop</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-6.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Ram & Laptop</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-7.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Ram & Laptop</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="single_ads_card mt-30">
                  <div class="ads_card_image">
                    <img src="assets/images/ads-8.png" alt="ads" />
                    <p class="sticker">Featured</p>
                  </div>
                  <div class="ads_card_content">
                    <div class="meta d-flex justify-content-between">
                      <p>Ram & Laptop</p>
                      <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title">
                      <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                    <div class="ads_price_date d-flex justify-content-between">
                      <span class="price">$299.00</span>
                      <span class="date">25 Jan, 2023</span>
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

  <!--====== CHOOSE PART START ======-->

  <section class="choose_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="choose_content pt-35">
            <div class="section_title pb-20">
              <h3 class="title">Why Choose Us</h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
              diam nonumy eirmod tempor invidunt ut labore et dolore magna
              aliquyam erat, sed diam voluptua. At vero eos et accusam.
            </p>

            <ul class="list">
              <li><i class="fa fa-check"></i> Powerful feature one.</li>
              <li>
                <i class="fa fa-check"></i> Much needed and important feature
                two.
              </li>
              <li><i class="fa fa-check"></i> Essential features to rock.</li>
            </ul>
            <a href="#" class="main-btn">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="choose_image">
      <div class="image">
        <img src="assets/images/choose.png" alt="choose" />
      </div>
    </div>
  </section>

  <!--====== CHOOSE PART ENDS ======-->

  <!--====== LOCATIONS PART START ======-->

  <section class="locations_area pt-115 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section_title pb-15">
            <h3 class="title">
              Explore <br />
              The Locations
            </h3>
          </div>
        </div>
      </div>
      <div class="locations_wrapper">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div class="single_locations mt-30">
              <div class="locations_image">
                <img src="assets/images/locations-1.jpg" alt="Locations" />
              </div>
              <div class="locations_content">
                <h5 class="title">
                  <a href="product.php"><i class="far fa-map-marker-alt"></i>Los Angeles</a>
                </h5>
                <p>25 ads posted in this location</p>
                <a class="view" href="product.php">View All Ads Here <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div class="single_locations mt-30">
              <div class="locations_image">
                <img src="assets/images/locations-2.jpg" alt="Locations" />
              </div>
              <div class="locations_content">
                <h5 class="title">
                  <a href="product.php"><i class="far fa-map-marker-alt"></i>California</a>
                </h5>
                <p>7 ads posted in this location</p>
                <a class="view" href="product.php">View All Ads Here <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div class="single_locations mt-30">
              <div class="locations_image">
                <img src="assets/images/locations-3.jpg" alt="Locations" />
              </div>
              <div class="locations_content">
                <h5 class="title">
                  <a href="product.php"><i class="far fa-map-marker-alt"></i>New York</a>
                </h5>
                <p>3 ads posted in this location</p>
                <a class="view" href="product.php">View All Ads Here <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="locations_btn text-center">
          <a class="main-btn" href="#">View all Locations</a>
        </div>
      </div>
    </div>
  </section>

  <!--====== LOCATIONS PART ENDS ======-->

  <!--====== COUNETR PART START ======-->

  <section class="counter_area bg_cover" style="background-image: url(assets/images/counter-bg.jpg)">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-lg-9">
          <div class="counter_wrapper d-flex flex-wrap justify-content-between">
            <div class="single_counter">
              <div class="counter_items d-flex">
                <div class="counter_icon">
                  <img src="assets/images/icon/counter-1.svg" alt="counter" />
                </div>
                <div class="counter_count media-body">
                  <span class="count"><span class="counter">5000</span>+</span>
                </div>
              </div>
              <p>Published Ads Here</p>
            </div>
            <div class="single_counter">
              <div class="counter_items d-flex">
                <div class="counter_icon">
                  <img src="assets/images/icon/counter-2.svg" alt="counter" />
                </div>
                <div class="counter_count media-body">
                  <span class="count"><span class="counter">300</span>+</span>
                </div>
              </div>
              <p>Register User Using</p>
            </div>
            <div class="single_counter">
              <div class="counter_items d-flex">
                <div class="counter_icon">
                  <img src="assets/images/icon/counter-3.svg" alt="counter" />
                </div>
                <div class="counter_count media-body">
                  <span class="count"><span class="counter">200</span>+</span>
                </div>
              </div>
              <p>Verified User Using</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== COUNETR PART ENDS ======-->

  <!--====== PUBLISHED PART START ======-->

  <section class="published_area pt-115">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section_title pb-15">
            <h3 class="title">
              Recently <br />
              Published Ads
            </h3>
          </div>
        </div>
      </div>
      <div class="published_wrapper">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="single_ads_card mt-30">
              <div class="ads_card_image">
                <img src="assets/images/ads-1.png" alt="ads" />
              </div>
              <div class="ads_card_content">
                <div class="meta d-flex justify-content-between">
                  <p>Ram & Laptop</p>
                  <a class="like" href="#"><i class="fal fa-heart"></i></a>
                </div>
                <h4 class="title">
                  <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                </h4>
                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                <div class="ads_price_date d-flex justify-content-between">
                  <span class="price">$299.00</span>
                  <span class="date">25 Jan, 2023</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single_ads_card mt-30">
              <div class="ads_card_image">
                <img src="assets/images/ads-2.png" alt="ads" />
                <p class="sticker sticker_color-1">New</p>
              </div>
              <div class="ads_card_content">
                <div class="meta d-flex justify-content-between">
                  <p>Ram & Laptop</p>
                  <a class="like" href="#"><i class="fal fa-heart"></i></a>
                </div>
                <h4 class="title">
                  <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                </h4>
                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                <div class="ads_price_date d-flex justify-content-between">
                  <span class="price">$299.00</span>
                  <span class="date">25 Jan, 2023</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single_ads_card mt-30">
              <div class="ads_card_image">
                <img src="assets/images/ads-3.png" alt="ads" />
              </div>
              <div class="ads_card_content">
                <div class="meta d-flex justify-content-between">
                  <p>Ram & Laptop</p>
                  <a class="like" href="#"><i class="fal fa-heart"></i></a>
                </div>
                <h4 class="title">
                  <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                </h4>
                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                <div class="ads_price_date d-flex justify-content-between">
                  <span class="price">$299.00</span>
                  <span class="date">25 Jan, 2023</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single_ads_card mt-30">
              <div class="ads_card_image">
                <img src="assets/images/ads-4.png" alt="ads" />
              </div>
              <div class="ads_card_content">
                <div class="meta d-flex justify-content-between">
                  <p>Ram & Laptop</p>
                  <a class="like" href="#"><i class="fal fa-heart"></i></a>
                </div>
                <h4 class="title">
                  <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                </h4>
                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                <div class="ads_price_date d-flex justify-content-between">
                  <span class="price">$299.00</span>
                  <span class="date">25 Jan, 2023</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single_ads_card mt-30">
              <div class="ads_card_image">
                <img src="assets/images/ads-5.png" alt="ads" />
              </div>
              <div class="ads_card_content">
                <div class="meta d-flex justify-content-between">
                  <p>Ram & Laptop</p>
                  <a class="like" href="#"><i class="fal fa-heart"></i></a>
                </div>
                <h4 class="title">
                  <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                </h4>
                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                <div class="ads_price_date d-flex justify-content-between">
                  <span class="price">$299.00</span>
                  <span class="date">25 Jan, 2023</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single_ads_card mt-30">
              <div class="ads_card_image">
                <img src="assets/images/ads-6.png" alt="ads" />
              </div>
              <div class="ads_card_content">
                <div class="meta d-flex justify-content-between">
                  <p>Ram & Laptop</p>
                  <a class="like" href="#"><i class="fal fa-heart"></i></a>
                </div>
                <h4 class="title">
                  <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                </h4>
                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                <div class="ads_price_date d-flex justify-content-between">
                  <span class="price">$299.00</span>
                  <span class="date">25 Jan, 2023</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single_ads_card mt-30">
              <div class="ads_card_image">
                <img src="assets/images/ads-7.png" alt="ads" />
                <p class="sticker sticker_color-2">Popular</p>
              </div>
              <div class="ads_card_content">
                <div class="meta d-flex justify-content-between">
                  <p>Ram & Laptop</p>
                  <a class="like" href="#"><i class="fal fa-heart"></i></a>
                </div>
                <h4 class="title">
                  <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                </h4>
                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                <div class="ads_price_date d-flex justify-content-between">
                  <span class="price">$299.00</span>
                  <span class="date">25 Jan, 2023</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single_ads_card mt-30">
              <div class="ads_card_image">
                <img src="assets/images/ads-8.png" alt="ads" />
              </div>
              <div class="ads_card_content">
                <div class="meta d-flex justify-content-between">
                  <p>Ram & Laptop</p>
                  <a class="like" href="#"><i class="fal fa-heart"></i></a>
                </div>
                <h4 class="title">
                  <a href="product-details.php">8 GB DDR4 Ram, 4th Gen</a>
                </h4>
                <p><i class="far fa-map-marker-alt"></i>New York, USA</p>
                <div class="ads_price_date d-flex justify-content-between">
                  <span class="price">$299.00</span>
                  <span class="date">25 Jan, 2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="published_btn">
          <a href="product.php" class="main-btn">View all Ads</a>
        </div>
      </div>
    </div>
  </section>

  <!--====== PUBLISHED PART ENDS ======-->

  <!--====== SERVICES PART START ======-->

  <section class="services_area pt-115">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section_title text-center pb-15">
            <h3 class="title">
              ClassiFied <br />
              Here for You
            </h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single_services d-flex mt-30">
            <div class="services_icon">
              <i class="fal fa-hand-holding-box"></i>
            </div>
            <div class="services_content media-body">
              <h4 class="title"><a href="#">Sell Your Item Safely</a></h4>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
              </p>
              <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_services d-flex mt-30">
            <div class="services_icon">
              <i class="fal fa-shopping-bag"></i>
            </div>
            <div class="services_content media-body">
              <h4 class="title"><a href="#">Buy Directly</a></h4>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
              </p>
              <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_services d-flex mt-30">
            <div class="services_icon">
              <i class="fal fa-handshake"></i>
            </div>
            <div class="services_content media-body">
              <h4 class="title"><a href="#">Friendly Platform</a></h4>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
              </p>
              <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_services d-flex mt-30">
            <div class="services_icon">
              <i class="fal fa-wallet"></i>
            </div>
            <div class="services_content media-body">
              <h4 class="title"><a href="#">Pay in Person</a></h4>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
              </p>
              <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_services d-flex mt-30">
            <div class="services_icon">
              <i class="fal fa-headset"></i>
            </div>
            <div class="services_content media-body">
              <h4 class="title"><a href="#">24/7 Support</a></h4>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
              </p>
              <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_services d-flex mt-30">
            <div class="services_icon">
              <i class="fal fa-certificate"></i>
            </div>
            <div class="services_content media-body">
              <h4 class="title"><a href="#">Verified Users</a></h4>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
              </p>
              <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== SERVICES PART ENDS ======-->

  <!--====== PRICING PART START ======-->

  <section class="pricing_area pt-115">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section_title text-center pb-15">
            <h3 class="title">
              Find a Plan <br />
              That's Right For You
            </h3>
          </div>
        </div>
      </div>
      <div class="row no-gutters align-items-center justify-content-center">
        <div class="col-lg-4 col-md-7 col-sm-9">
          <div class="single_pricing text-center">
            <div class="pricing_icon">
              <img src="assets/images/icon/pricing-1.svg" alt="Icon" />
            </div>
            <div class="pricing_title">
              <h4 class="title">Beginers</h4>
              <p>Lorem ipsum dolor sit amet, consetetur.</p>
            </div>
            <div class="pricing_content">
              <p>
                Lorem ipsum dolor. Sit amet, consetetur dost. sadipscing
                elitr, sed. Diam nonumy eirmod. Tempor invidunt ut labore. Pet
                dolore magna. Aliquyam erat iamvoluptua.
              </p>
              <span class="price">$0.00</span>
            </div>
            <div class="pricing_btn">
              <a href="#" class="main-btn">View all Ads</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-7 col-sm-9">
          <div class="single_pricing pricing_active text-center">
            <div class="pricing_icon">
              <img src="assets/images/icon/pricing-2.svg" alt="Icon" />
            </div>
            <div class="pricing_title">
              <h4 class="title">Standard</h4>
              <p>Lorem ipsum dolor sit amet, consetetur.</p>
            </div>
            <div class="pricing_content">
              <p>
                Lorem ipsum dolor. Sit amet, consetetur dost. sadipscing
                elitr, sed. Diam nonumy eirmod. Tempor invidunt ut labore. Pet
                dolore magna. Aliquyam erat iamvoluptua.
              </p>
              <span class="price">$0.00</span>
            </div>
            <div class="pricing_btn">
              <a href="#" class="main-btn main-btn-2">View all Ads</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-7 col-sm-9">
          <div class="single_pricing text-center">
            <div class="pricing_icon">
              <img src="assets/images/icon/pricing-3.svg" alt="Icon" />
            </div>
            <div class="pricing_title">
              <h4 class="title">Premium</h4>
              <p>Lorem ipsum dolor sit amet, consetetur.</p>
            </div>
            <div class="pricing_content">
              <p>
                Lorem ipsum dolor. Sit amet, consetetur dost. sadipscing
                elitr, sed. Diam nonumy eirmod. Tempor invidunt ut labore. Pet
                dolore magna. Aliquyam erat iamvoluptua.
              </p>
              <span class="price">$0.00</span>
            </div>
            <div class="pricing_btn">
              <a href="#" class="main-btn">View all Ads</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== PRICING PART ENDS ======-->

  <!--====== BLOG PART START ======-->

  <section class="blog_area pt-115 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section_title text-center pb-15">
            <h3 class="title">
              Latest<br />
              From The Blog
            </h3>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-7">
          <div class="single_blog mt-30">
            <div class="blog_image">
              <img src="assets/images/blog-1.jpg" alt="blog" />
            </div>
            <div class="blog_content">
              <h4 class="title">
                <a href="blog-details.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
              </h4>
              <ul class="meta">
                <li>
                  <i class="fal fa-clock"></i><a href="#">23 Jan, 2023</a>
                </li>
                <li>
                  <i class="fal fa-comment-dots"></i><a href="#">4 Comments</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-7">
          <div class="single_blog mt-30">
            <div class="blog_image">
              <img src="assets/images/blog-2.jpg" alt="blog" />
            </div>
            <div class="blog_content">
              <h4 class="title">
                <a href="blog-details.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
              </h4>
              <ul class="meta">
                <li>
                  <i class="fal fa-clock"></i><a href="#">23 Jan, 2023</a>
                </li>
                <li>
                  <i class="fal fa-comment-dots"></i><a href="#">4 Comments</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-7">
          <div class="single_blog mt-30">
            <div class="blog_image">
              <img src="assets/images/blog-3.jpg" alt="blog" />
            </div>
            <div class="blog_content">
              <h4 class="title">
                <a href="blog-details.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
              </h4>
              <ul class="meta">
                <li>
                  <i class="fal fa-clock"></i><a href="#">23 Jan, 2023</a>
                </li>
                <li>
                  <i class="fal fa-comment-dots"></i><a href="#">4 Comments</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="blog_btn text-center mt-50">
        <a href="blog.php" class="main-btn">View All Post</a>
      </div>
    </div>
  </section>

  <!--====== BLOG PART ENDS ======-->

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
              <input type="text" placeholder="Enter your mail address . . ." />
              <button class="main-btn">Subscribe</button>
            </form>
          </div>
        </div>
      </div>

      <style>
        .counter_wrapper {
          background-color: none !important;
        }
      </style>

      <div class="counter_wrapper d-flex flex-wrap justify-content-between mt-30">
        <div class="single_counter">
          <div class="counter_items d-flex">
            <div class="counter_icon">
              <img src="assets/images/icon/counter-1.svg" alt="counter" />
            </div>
            <div class="counter_count media-body">
              <span class="count"><span class="counter">5000</span>+</span>
            </div>
          </div>
          <p>Published Ads Here</p>
        </div>
        <div class="single_counter">
          <div class="counter_items d-flex">
            <div class="counter_icon">
              <img src="assets/images/icon/counter-2.svg" alt="counter" />
            </div>
            <div class="counter_count media-body">
              <span class="count"><span class="counter">300</span>+</span>
            </div>
          </div>
          <p>Register User Using</p>
        </div>
        <div class="single_counter">
          <div class="counter_items d-flex">
            <div class="counter_icon">
              <img src="assets/images/icon/counter-3.svg" alt="counter" />
            </div>
            <div class="counter_count media-body">
              <span class="count"><span class="counter">200</span>+</span>
            </div>
          </div>
          <p>Verified User Using</p>
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

<!-- Mirrored from demo.graygrids.com/themes/classified/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:09:58 GMT -->

</html>