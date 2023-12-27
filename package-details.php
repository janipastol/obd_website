<!DOCTYPE html>
<html class="no-js" lang="en">
<!-- Mirrored from demo.graygrids.com/themes/classified/post-ads.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:18 GMT -->

<head>
  <meta charset="utf-8" />

  <!--====== Title ======-->
  <title>Post Ads | ClassiFied</title>

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

  <!--====== POST ADS PART START ======-->

  <section class="post_ads_page pt-70 pb-40">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="sidebar_profile mt-50">
            <div class="profile_user">
              <div class="user_author d-flex align-items-center">
                <div class="author">
                  <img src="assets/images/author-1.jpg" alt="" />
                </div>
                <div class="user_content media-body">
                  <h6 class="author_name">User</h6>
                  <p>Administrator</p>
                </div>
              </div>
              <div class="user_list">
                <ul>
                  <li>
                    <a href="dashboard.php"><i class="fal fa-tachometer-alt-average"></i>
                      Dashboard</a>
                  </li>
                  <li>
                    <a href="profile-settings.php"><i class="fal fa-cog"></i> Profile Settings</a>
                  </li>
                  <li>
                    <a href="my-ads.php"><i class="fal fa-layer-group"></i> My Ads</a>
                  </li>
                  <li>
                    <a href="offermessages.php"><i class="fal fa-envelope"></i> Offers/Messages</a>
                  </li>
                  <li>
                    <a href="payments.php"><i class="fal fa-wallet"></i> Payments</a>
                  </li>
                  <li>
                    <a href="favourite-ads.php"><i class="fal fa-heart"></i> My Favourites</a>
                  </li>
                  <li>
                    <a href="privacy-setting.php"><i class="fal fa-star"></i> Privacy Settings</a>
                  </li>
                  <li>
                    <a href="#"><i class="fal fa-sign-out"></i> Sign Out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="post_form mt-50">
            <div class="post_title">
              <h5 class="title">Silver Package Detail</h5>
            </div>
            <form action="#">
              <div class="single_form">
                <label>Shop Name</label>
                <input type="text" placeholder="Rahat Milk Shop" />
              </div>
              <div class="single_form">
                <label for="">Shop Location</label>
                <select>
                  <!-- <option aria- value="none"></option> -->
                  <option value="none">Phase 2</option>
                  <option value="none">Electronics</option>
                  <option value="none">Training</option>
                  <option value="none">Real Estate</option>
                  <option value="none">Services</option>
                  <option value="none">Training</option>
                  <option value="none">Vehicles</option>
                </select>
              </div>
              <!-- <div class="single_form">
                  <input type="number" placeholder="Ad Your Price" />
                </div> -->
              <!-- <div class="single_form">
                  <input type="checkbox" name="checkbox" id="checkbox" />
                  <label for="checkbox"></label>
                  <span>Price On Call</span>
                </div> -->

              <div class="single_form">
                <label for="">Package Details</label>
                <textarea placeholder="Ad Description">
                    123
                  </textarea>
              </div>
              <div class="post_upload_file">
                <label for="upload">
                  <span>Drop Images anywhere to upload</span>
                  <span>Or</span>
                  <span class="main-btn">Select Files</span>
                  <span>Maximum upload file size: 500 KB</span>
                  <input type="file" id="upload" multiple />
                </label>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar_post_form mt-50">
            <div class="post_title">
              <h5 class="title">Contact Detail</h5>
            </div>
            <form action="#">
              <div class="single_form">
                <ul>
                  <li>
                    <input type="radio" checked="" name="radio" id="radio1" />
                    <label for="radio1"></label>
                    <span>Same User</span>
                  </li>
                  <li>
                    <input type="radio" name="radio" id="radio2" />
                    <label for="radio2"></label>
                    <span>Someone Else</span>
                  </li>
                </ul>
              </div>
              <div class="single_form">
                <input type="text" placeholder="First Name*" />
              </div>
              <div class="single_form">
                <input type="text" placeholder="Last Name*" />
              </div>
              <div class="single_form">
                <input type="text" placeholder="Phone*" />
              </div>
              <div class="single_form">
                <input type="checkbox" name="checkbox" id="checkbox1" />
                <label for="checkbox1"></label>
                <span>Show my phone number in ads</span>
              </div>
            </form>
            <div class="post_title">
              <h5 class="title">Location Detail</h5>
            </div>
            <form action="#">
              <div class="single_form">
                <label for="">Select Region</label>
                <select>
                  <option selected value=""></option>
                  <option value="Azad Kashmir, Pakistan">
                    Azad Kashmir, Pakistan
                  </option>
                  <option value="Balochistan, Pakistan">
                    Balochistan, Pakistan
                  </option>
                  <option value="Islamabad Capital Territory, Pakistan">
                    Islamabad Capital Territory, Pakistan
                  </option>
                  <option value="Khyber Pakhtunkhwa, Pakistan">
                    Khyber Pakhtunkhwa, Pakistan
                  </option>
                  <option value="Northern Areas, Pakistan">
                    Northern Areas, Pakistan
                  </option>
                  <option value="Punjab, Pakistan">Punjab, Pakistan</option>
                  <option value="Sindh, Pkistan">Sindh, Pkistan</option>
                </select>
              </div>
              <div class="single_form">
                <label for="">Select Region</label>
                <select>
                  <option selected value=""></option>
                  <option value="karachi">Karachi</option>
                  <option value="hyderabad">Hyderabad</option>
                  <option value="larkana">Larkana</option>
                  <option value="Khyber Pakhtunkhwa, Pakistan">
                    Khyber Pakhtunkhwa, Pakistan
                  </option>
                  <option value="sukkur">Sukkur</option>
                  <option value="mirpur khas">Mirpur Khas</option>
                  <option value="Sindh, Pkistan">Sindh, Pkistan</option>
                </select>
              </div>
              <div class="single_form">
                <label for="">Neighbourhood</label>
                <select>
                  <option selected value=""></option>
                  <option value="dehli colony">Dehli Colony</option>
                  <option value="korangi">Korangi</option>
                  <option value="north Karachi">North Karachi</option>
                  <option value="sadar town">Sadar Town</option>
                </select>
              </div>
              <div class="single_form">
                <select>
                  <option selected value=""></option>
                  <option value="dehli colony">Jodia Bazar</option>
                </select>
              </div>
              <div class="single_form">
                <input type="checkbox" name="checkbox" id="checkbox2" />
                <label for="checkbox2"></label>
                <span>I agree to all Terms of Use & Posting Rules</span>
              </div>
              <div class="single_form">
                <button class="main-btn">Post Ad</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== POST ADS PART ENDS ======-->

  <section class="category_area">
    <div class="container" style="border: 1px solid #463ce5; border-radius: 10px">
      <div class="category_wrapper d-flex flex-wrap justify-content-center pt-30 pr-20 pl-20 pb-30">
        <div class="category-column pb-4">
          <img src="assets/images/ads-7.png" alt="Cell Phone" />
        </div>
        <div class="category-column pb-4">
          <img src="assets/images/ads-1.png" alt="Laptop" />
        </div>
        <div class="category-column pb-4">
          <img src="assets/images/ads-10.png" alt="Headphones" />
        </div>
        <div class="category-column pb-4">
          <img src="assets/images/ads-11.png" alt="Jewelry" />
        </div>
        <div class="category-column pb-4">
          <img src="assets/images/ads-12.png" alt="Backpacks" />
        </div>
        <div class="category-column">
          <img src="assets/images/ads-2.png" alt="Vehicles" />
        </div>
        <div class="category-column">
          <img src="assets/images/ads-3.png" alt="Furniture" />
        </div>
        <div class="category-column">
          <img src="assets/images/ads-4.png" alt="Gadgets" />
        </div>
        <div class="category-column">
          <img src="assets/images/ads-5.png" alt="Watches" />
        </div>
        <div class="category-column">
          <img src="assets/images/ads-6.png" alt="Watches" />
        </div>
      </div>
    </div>
  </section>

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

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const regionSelect = document.getElementById("regionSelect");

      // Create an empty default option
      const defaultOption = document.createElement("option");
      defaultOption.value = "";
      defaultOption.text = "";
      regionSelect.appendChild(defaultOption);

      // Add your other options here
      const options = [
        "Azad Kashmir, Pakistan",
        "Balochistan, Pakistan",
        "Islamabad Capital Territory, Pakistan",
        "Khyber Pakhtunkhwa, Pakistan",
        "Northern Areas, Pakistan",
        "Punjab, Pakistan",
        "Sindh, Pakistan",
      ];

      options.forEach(function(optionText) {
        const option = document.createElement("option");
        option.value = optionText;
        option.text = optionText;
        regionSelect.appendChild(option);
      });
    });
  </script>

  <?php
  require('scripts.php');
  ?>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classified/post-ads.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 16:10:19 GMT -->

</html>