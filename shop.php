<?php
// start the session
session_start();
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
  head("shop");

  ?>
  <!-- header end -->

  <!-- shop Page content Start Here ... -->

  <!-- page-header start -->
  <section id="page-header">
    <h2>#stayhome</h2>
    <p>Save more with coupons & up to 70% off!</p>
  </section>
  <!-- page-header end -->

  <!-- product1 start -->
  <section id="product1" class="section-p1">
    <div class="pro-container">

      <?php

      include "./functions/sql_to_array.php";

      $sql = "SELECT * FROM products";
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

  <!-- pagination start -->

  <!-- <section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
  </section> -->

  <!-- pagination End -->


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