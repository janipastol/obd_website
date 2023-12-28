// Angular JS App Initialization
var app = angular.module("myAngularApp", ["ngCookies"]);
// Angular JS App Initialization

// Angular JS Controller Initialization

// inside controller function we use some paramaters
//   Paramaters are some libraries we are using from Angular JS framwork
app.controller("webController", function ($scope, $http, $cookies, $location) {
  //base URL
  // $scope.ui = "https://gettagsolution.com/OnlineBechdyAdminPanel/front/";
  $scope.ui = "http://127.0.0.1/obd_website/";
  //base URL DB
  $scope.dbURL =
    "https://onlinebechdy.familyride.pk/OnlineBechdyDB/public/api/";

  // User images url
  $scope.userImage =
    "https://onlinebechdy.familyride.pk/OnlineBechdyDB/public/user_data/";

  // Category images url
  $scope.categoryImage =
    "https://onlinebechdy.familyride.pk/OnlineBechdyDB/public/category_images/";

  // Discount categories images url
  $scope.discountCategoryImage =
    "https://onlinebechdy.familyride.pk/OnlineBechdyDB/public/discount_code_item_category_images/";

  // Discount items images url
  $scope.discountItemsImage =
    "https://onlinebechdy.familyride.pk/OnlineBechdyDB/public/discount_code_item_images/";

  // Product images url
  $scope.productImage =
    "https://onlinebechdy.familyride.pk/OnlineBechdyDB/public/product_images/";

  //login URL
  $scope.loginUrl = "login.php";

  //dashboard URL
  $scope.dashboardUrl = "index.php";

  //admin variables
  $scope.adminName = "";
  $scope.adminProfile = "";

  // Token
  $scope.token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNTUxM2YyMTY4MTBmMzhjYjc4NTA5MDA1ODkzMjlkODQ3NmZlMDhkZDg4NTRiOTkzOWI0MDZiNzgwNTk3MTk2NmNmODgxMGNlZDhlNzNkZDciLCJpYXQiOjE3MDM3NDg5MDguOTg5OTQ3LCJuYmYiOjE3MDM3NDg5MDguOTg5OTQ5LCJleHAiOjE3MzUzNzEzMDguOTg1NzQ4LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.VcQvJQPdjTcecVxSdcvF3rxgnFwemZ-1a_9xhPA1obj5N6L-o2RIVrIS3epXRzB5lTrmSdEhVDYMinPKDvyuKRd8wdDQg6VTvco1HPe8FP3mL3T05K9-HyFvuZ43pAbspthdSO7N9jaz3X35F209hfkgE556yodQF1E14X32hTKsMBTUTOS5pXt5kNu11YV1R7kXgMvC3CgJgVLX1NndVJNzZDQ8xH58ILH6-uqmaZAStpZlj_g2PSF_mcp6QStM5RfbsAsazC5tyc8GF37Ca8uqnxWnw9B2gVGPm5icqicfjZ_0A05eWUjIBSHwx_oogZPIB7n8ophVB5XZH_LGVUO1SIRjAWLiHvch3VxAOiy50KIw8adVdxAto9_1b_oWpzmEquW7oqKnMjwg4LqhYd17mAzVMXeyWz0edEzGbTexUSwO9nURLnY3P6-dSV7LDbe2X55dWRFSCZDjyfF3vgeAkjCDgiIfDGXcrc0CRZEYu4qWWKJJ-_PAB_zgUCX0Y3H8DR1Jyw-nFG8PZmdrNpfwqrOIZXhPQL3X9yQj82CSQs48e5jXc0_1_scXkjE8n0ZRd_U7xYhkjVVc6RmYtVPaKsElElgg3ouWGHOHB2mZyeDcKwE_AMdMYdySkvbLBmRIHxnKLBouEmKc2gWjJW5Uv8I-YLm-c4ujHzVxIaQ"

  // Redirect Function
  $scope.redirect = function (url) {
    window.location.href = url;
  };
  // Redirect Function

  // Login Function
  $scope.login = function () {
    $http({
      method: "POST",
      url: $scope.dbURL + "login",
      data: {
        email: $scope.email,
        password: $scope.password,
      },
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then(function (response) {
        console.log(response.data);
        $scope.serverResponse = response.data;
        if ($scope.serverResponse["user"]["user_type"] == 1) {
          $cookies.put("token", $scope.serverResponse.token);
          $cookies.put("id", $scope.serverResponse["user"]["id"]);
          $cookies.put("name", $scope.serverResponse["user"]["name"]);
          $cookies.put("profile", $scope.serverResponse["user"]["profile"]);
          $scope.redirect($scope.ui + $scope.dashboardUrl);
        } else {
          console.log("you are not admin");
        }
      })
      .catch(function (error) {
        //   console.log("This is error");
        console.log(error);
        console.log("Invalid Credentials");
      });
  };
  // Login Function

  //get list of all users
  $scope.getUsersList = function (status) {
    var url = "";
    if (status == 0) {
      url = $scope.dbURL + "users";
    } else {
      url = $scope.dbURL + "users?status=" + status;
    }
    $http({
      method: "GET",
      url: url,
      data: {},
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $cookies.get("token"),
      },
    })
      .then(function (response) {
        // console.log(response.data);
        $scope.allUsers = response.data["users"];
        console.log($scope.allUsers);
      })
      .catch(function (error) {
        console.log("This is error");
        console.log(error);
      });
  };
  //get list of all users

  //get list of all categories
  $scope.getCategoriesList = function () {
    $http({
      method: "GET",
      url: $scope.dbURL + "categories",
      data: {},
      headers: {
        "Content-Type": "application/json",
        // Authorization: "Bearer " + $cookies.get("token"),
        Authorization: "Bearer " + $scope.token,
      },
    })
      .then(function (response) {
        // console.log(response.data);
        $scope.categoriesList = response.data["categories"];
        console.log($scope.categoriesList);
      })
      .catch(function (error) {
        console.log("This is error");
        console.log(error);
      });
  };
  //get list of all categories

  //get list of all product categories
  $scope.getProductCategory = function (id) {
    $http({
      method: "GET",
      url: $scope.dbURL + "view-products-category?category_id=" + id,
      data: {},
      headers: {
        "Content-Type": "application/json",
        // Authorization: "Bearer " + $cookies.get("token"),
        Authorization: "Bearer " + $scope.token,
      },
    })
      .then(function (response) {
        if (id == 52) {
          $scope.productCategoriesListBikes = response.data["products"];  
        }
        else if (id == 53) {
          $scope.productCategoriesListKids = response.data["products"];
        }
        else if (id == 54) {
          $scope.productCategoriesListBooks = response.data["products"];
        }
        else if (id == 55) {
          $scope.productCategoriesListFashion = response.data["products"];
        }
        else if (id == 56) {
          $scope.productCategoriesListFurniture = response.data["products"];
        }
        else if (id == 57) {
          $scope.productCategoriesListAnimals = response.data["products"];
        }
        else if (id == 58) {
          $scope.productCategoriesListJobs = response.data["products"];
        }
        else if (id == 59) {
          $scope.productCategoriesListServices = response.data["products"];
        }
        else if (id == 60) {
          $scope.productCategoriesListVehicle = response.data["products"];
        }
        else if (id == 61) {
          $scope.productCategoriesListElectronics = response.data["products"];
        }
        else if (id == 62) {
          $scope.productCategoriesListProperty = response.data["products"];
        }
        else if (id == 63) {
          $scope.productCategoriesListMobile = response.data["products"];
        }
        // console.log(response.data);
        // $scope.productCategoriesList = response.data["products"];
        console.log($scope.productCategoriesList);
      })
      .catch(function (error) {
        console.log("This is error");
        console.log(error);
      });
  };
  //get list of all product categories

  //add category
  $scope.addCategory = function () {
    if ($scope.catName == undefined || $scope.catName == "") {
      alert("Enter category name");
    } else {
      $http({
        method: "POST",
        url: $scope.dbURL + "store-category",
        data: {
          name: $scope.catName,

        },
        headers: {
          "Content-Type": "application/json",
          Authorization: "Bearer " + $cookies.get("token"),
        },
      })
        .then(function (response) {
          // console.log(response.data);
          alert("Catogory created");
          $scope.catName = "";
          $scope.getCategoriesList();
        })
        .catch(function (error) {
          console.log("This is error");
          console.log(error);
        });
    }
  };
  //add category

  //delete category
  $scope.deleteCategory = function (id) {
    $http({
      method: "POST",
      url: $scope.dbURL + "delete/categories",
      data: {
        category_id: id,
      },
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $cookies.get("token"),
      },
    })
      .then(function (response) {
        // console.log(response.data);
        alert("Catogory deleted");
        $scope.getCategoriesList();
      })
      .catch(function (error) {
        console.log("This is error");
        console.log(error);
      });
  };
  //delete category

  //get Locations
  $scope.getLocationList = function () {
    $http({
      method: "GET",
      url: $scope.dbURL + "locations",
      data: {},
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $scope.token,
      },
    })
      .then(function (response) {
        $scope.allLocations = response.data["locations"];
        console.log($scope.allLocations);
        // console.log(response.data);
        // $scope.categoriesList = response.data["categories"];
      })
      .catch(function (error) {
        console.log("This is error");
        console.log(error);
      });
  };
  //get Locations

  //Add Province
  $scope.addProvince = function () {
    if ($scope.provName == undefined || $scope.provName == "") {
      alert("Enter Province Name");
    } else {
      $http({
        method: "POST",
        url: $scope.dbURL + "locations",
        data: {
          name: $scope.provName,
          type: "2",
          is_active: "1",
        },
        headers: {
          "Content-Type": "application/json",
          Authorization: "Bearer " + $cookies.get("token"),
        },
      })
        .then(function (response) {
          console.log(response.data);
          alert("Province Added");
          $scope.provName = "";
          $scope.getLocationList();
        })
        .catch(function (error) {
          console.log("This is error");
          console.log(error);
        });
    }
  };
  //Add Province

  //Add City
  $scope.addCity = function () {
    if ($scope.cityName == undefined || $scope.cityName == "") {
      alert("Enter City Name");
    } else {
      $http({
        method: "POST",
        url: $scope.dbURL + "locations",
        data: {
          name: $scope.cityName,
          type: "1",
          is_active: "1",
        },
        headers: {
          "Content-Type": "application/json",
          Authorization: "Bearer " + $cookies.get("token"),
        },
      })
        .then(function (response) {
          console.log(response.data);
          alert("City Added");
          $scope.cityName = "";
          $scope.getLocationList();
        })
        .catch(function (error) {
          console.log("This is error");
          console.log(error);
        });
    }
  };
  //Add Province

  //get list of all Packages
  $scope.getPackageList = function () {
    $http({
      method: "GET",
      url: $scope.dbURL + "promotion-packages",
      data: {},
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $cookies.get("token"),
      },
    })
      .then(function (response) {
        // console.log(response.data);
        $scope.packageList = response.data["packages"];
        console.log($scope.packageList);
      })
      .catch(function (error) {
        console.log("This is error");
        console.log(error);
      });
  };
  //get list of all Packages

  //Add Packages
  $scope.addPackage = function () {
    if ($scope.pkgName == undefined || $scope.pkgName == "") {
      alert("Enter Package name");
    } else {
      $http({
        method: "POST",
        url: $scope.dbURL + "promotion-packages",
        data: {
          name: $scope.pkgName,
          price: $scope.pkgPrice,
          validity: $scope.pkgValidity,
          status: "1",
          type: "1",
        },
        headers: {
          "Content-Type": "application/json",
          Authorization: "Bearer " + $cookies.get("token"),
        },
      })
        .then(function (response) {
          console.log(response.data);
          alert("Package created");
          $scope.pkgName = "";
          $scope.pkgPrice = "";
          $scope.pkgValidity = "";
          // $scope.getCategoriesList();
        })
        .catch(function (error) {
          console.log("This is error");
          console.log(error);
        });
    }
  };
  //Add Packages

  //Get Dashboard Data
  $scope.getDashboardData = function () {
    $http({
      method: "GET",
      url: $scope.dbURL + "dashboard-data",
      data: {},
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $cookies.get("token"),
      },
    })
      .then(function (response) {
        $scope.dashboardData = response.data;
        console.log(response.data);

        // $scope.categoriesList = response.data["categories"];
      })
      .catch(function (error) {
        console.log("This is error");
        console.log(error);
      });
  };
  //Get Dashboard Data

  //get list of all ads
  $scope.getAdsList = function (status) {
    var url = "";
    if (status == 0) {
      url = $scope.dbURL + "products";
    } else {
      url = $scope.dbURL + "products?status=" + status;
    }
    $http({
      method: "GET",
      url: url,
      data: {},
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $scope.token,
      },
    })
      .then(function (response) {
        if (status == 0) {
          $scope.allAds = response.data["products"];  
        }
        else if (status == 7) {
          $scope.featuredAds = response.data["products"];
        }
        // console.log(response.data);
        
        // $scope.adsCategory = response.data["products"][0]["category"];
        // console.log($scope.adsCategory);
        // $scope.adsCategory = $scope.allAds["category"];
        // console.log($scope.allAds);
      })
      .catch(function (error) {
        console.log("This is error");
        console.log(error);
      });
  };
  //get list of all ads

  // Generate Codes
  $scope.generateCodes = function (type) {
    $http({
      method: "POST",
      url: $scope.dbURL + "discount-codes/generate",
      data: {
        type: type,
        validity_days: $scope.validity,
        quantity: $scope.quantity,
      },
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $cookies.get("token"),
      },
    })
      .then(function (response) {
        console.log(response.data);
      })
      .catch(function (error) {
        //   console.log("This is error");
        console.log(error);
        console.log("Error");
      });
  };
  // Generate Codes

  // Fetch Discount Codes
  $scope.fetchDiscountCodes = function (type) {
    $http({
      method: "GET",
      url: $scope.dbURL + "discount-codes/fetch-all?type=" + type,
      data: {},
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $cookies.get("token"),
      },
    })
      .then(function (response) {
        $scope.disountCodesList = response.data["discountCodes"];
        console.log($scope.disountCodesList);
      })
      .catch(function (error) {
        //   console.log("This is error");
        console.log(error);
        console.log("Error");
      });
  };
  // Fetch Discount Codes

  // Fetch Discount Categories
  $scope.fetchDiscountCategories = function () {
    $http({
      method: "GET",
      url: $scope.dbURL + "discount-code-item-categories",
      data: {},
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $cookies.get("token"),
      },
    })
      .then(function (response) {
        $scope.disountCoategoriesList = response.data["categories"];
      })
      .catch(function (error) {
        //   console.log("This is error");
        console.log(error);
        console.log("Error");
      });
  };
  // Fetch Discount Categories

  // Fetch Discount Items
  $scope.fetchDiscountItems = function (id) {
    $http({
      method: "GET",
      url:
        $scope.dbURL +
        "discount-code-item?discount_code_item_category_id=" +
        id,
      data: {},
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + $cookies.get("token"),
      },
    })
      .then(function (response) {
        console.log(response.data);
        // $scope.disountItemsList = response.data["categories"];
      })
      .catch(function (error) {
        //   console.log("This is error");
        console.log(error);
        console.log("Error");
      });
  };
  // Fetch Discount Items

  // Check Token Function
  $scope.checkToken = function () {
    console.log($cookies.get("token"));
    $scope.url = $location.absUrl();
    $scope.token = $cookies.get("token");
    if ($scope.url.includes("login") || $scope.url.includes("register")) {
      if ($scope.token != undefined) {
        $scope.redirect($scope.ui + $scope.dashboardUrl);
      }
    } else {
      if ($scope.token == undefined) {
        $scope.redirect($scope.ui + $scope.loginUrl);
      }
    }
  };
  // check token function

  //get logged in user data
  $scope.getLoggedInDetails = function () {
    $scope.token = $cookies.get("token");
    if ($scope.token != undefined) {
      $scope.adminName = $cookies.get("name");
      $scope.adminProfile = $cookies.get("profile");
      if ($cookies.get("profile") == "null") {
        $scope.adminProfile = $scope.ui + "../assets/images/users/21.jpg";
      } else {
        $scope.adminProfile = $scope.userImage + $cookies.get("profile");
      }
    }
  };
  //get logged in user data

  //run checkToken function
  // $scope.checkToken();
  //run checkToken function

  // Logout Fucntion
  $scope.logout = function () {
    $cookies.remove("token");
    $cookies.remove("name");
    $cookies.remove("id");
    $cookies.remove("profile");
    $scope.redirect($scope.ui + $scope.loginUrl);
  };
  // Logout Fucntion
});
// Angular JS Controller Initialization
