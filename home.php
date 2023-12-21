<?php
// start the session
session_start();

// function to get elements from the database
include "./functions/sql_to_array.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Comatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E commerce</title>

  <!-- font awwsome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- font awwsome CDN -->

  <title> E-commerce Website</title>

  <link rel="stylesheet" href="./styles/header.css" />
  <link rel="stylesheet" href="./styles/footer.css" />
  <link rel="stylesheet" href="./styles/style.css" />


</head>

<body>
  <!-- header start -->
  <?php
  include "./templates/header.php";
  head("home");
  ?>
  <!-- header end -->

  <!-- hero start -->
  <section id="hero">
    <h4>Trade in offer</h4>
    <h2>Super value deals</h2>
    <h1>On all pruducts</h1>
    <p>Save more with coupons & up to 70% off!</p>
    <a href="./shop.php"> <button>Shop now</button> </a>
  </section>
  <!-- hero end -->

  <!-- feature start -->
  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="./images/features/f1.png" alt="" />
      <h6>Free Shopping</h6>
    </div>
    <div class="fe-box">
      <img src="./images/features/f2.png" alt="" />
      <h6>Online Order</h6>
    </div>
    <div class="fe-box">
      <img src="./images/features/f3.png" alt="" />
      <h6>Save Money</h6>
    </div>
    <div class="fe-box">
      <img src="./images/features/f4.png" alt="" />
      <h6>Promotions</h6>
    </div>
    <div class="fe-box">
      <img src="./images/features/f5.png" alt="" />
      <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
      <img src="./images/features/f6.png" alt="" />
      <h6>24/7 Support</h6>
    </div>
  </section>
  <!-- feature end -->

  <!-- product1 start -->
  <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">

      <?php

      $sql = "SELECT * FROM products ORDER BY product_stars DESC LIMIT 8";
      $result = sql_to_array($sql);

      foreach ($result as $row) {
        $product_id = $row['product_id'];

      ?>
        <div class="pro">
          <img src="<?php echo $row['product_image']; ?>" alt="" />

          <div class="des">
            <h5><?php echo $row['product_name']; ?> </h5>
            <div class="star">
              <?php
              $stars =  $row['product_stars'];
              $off_stars = 5 - $stars;

              for ($i = 0; $i < $stars; $i++) {
                echo '<i class="fas fa-star"></i>';
              }

              for ($i = 0; $i < $off_stars; $i++) {
                echo '<i class="fa-regular fa-star"></i>';
              }
              ?>
            </div>
            <h4>
              $<?php echo $row['product_price']; ?>
            </h4>
          </div>
          <a href="./sproduct.php?product_id=<?php echo $product_id; ?>">
            <button type="button" class="normal">
              Add To Cart
              <i class="fa-solid fa-cart-plus"></i>
            </button>
          </a>
        </div>

      <?php
      }
      ?>

    </div>
  </section>
  <!-- product1 end -->

  <!-- banner start -->
  <section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% off</span> All Devices & Accessories</h2>
    <a href="./shop.php"> <button class="normal">Explore More</button></a>
  </section>
  <!-- banner end -->

  <!-- new arrivals start -->
  <section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">

      <?php
      // function to get elements from the database

      $sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT 8";
      $result = sql_to_array($sql);

      foreach ($result as $row) {
        $product_id = $row['product_id'];

      ?>
        <div class="pro">
          <img src="<?php echo $row['product_image']; ?>" alt="" />

          <div class="des">
            <h5><?php echo $row['product_name']; ?> </h5>
            <div class="star">
              <?php
              $stars =  $row['product_stars'];
              $off_stars = 5 - $stars;

              for ($i = 0; $i < $stars; $i++) {
                echo '<i class="fas fa-star"></i>';
              }

              for ($i = 0; $i < $off_stars; $i++) {
                echo '<i class="fa-regular fa-star"></i>';
              }
              ?>
            </div>
            <h4>
              $<?php echo $row['product_price']; ?>
            </h4>
          </div>
          <a href="./sproduct.php?product_id=<?php echo $product_id; ?>">
            <button type="button" class="normal">
              Add To Cart
              <i class="fa-solid fa-cart-plus"></i>
            </button>
          </a>
        </div>

      <?php
      }
      ?>

    </div>
  </section>
  <!-- new arrivals end -->

  <!-- small banners start -->

  <section id="sm-banner" class="section-p1">
    <div class="banner-box">
    </div>

    <div class="banner-box banner-box2">
    </div>
  </section>

  <!-- small banners end -->

  <!-- banner3 start -->

  <section id="banner3">
    <div class="banner-box">
    </div>
    <div class="banner-box banner-box2">
    </div>
    <div class="banner-box banner-box3">
    </div>
  </section>

  <!-- banner3 End -->
  <!-- newsletter start -->

  <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Sign Up For newsletter</h4>
      <p>
        Get E-mail updates about our lestest shop and
        <span>special offers.</span>
      </p>
    </div>
    <div class="form">
      <input type="text" placeholder="Your email address" />
      <button class="normal">Sign Up</button>
    </div>
  </section>

  <!-- newsletter End -->

  <!-- Footer start -->
  <?php include "./templates/footer.php" ?>
  <!-- Footer end -->

</body>

</html>