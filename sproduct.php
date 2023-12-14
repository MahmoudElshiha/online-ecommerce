<?php
// start the session
session_start();

// function to get elements from the database
include "./functions/sql_to_array.php";

$product_id = $_GET['product_id'];
$sql = "SELECT * FROM products WHERE product_id = $product_id";
$result = sql_to_array($sql);
$product = $result[0];
// print_r($product);


if (isset($_GET['error'])) {
  $error = 1;
} else {
  $error = 0;
}



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


  <!-- prodetails start -->

  <section id="prodetails" class="section-p1">
    <div class="single-pro-image">
      <img src="<?php echo $product['product_image']; ?>" width="100%" id="MainImg" alt="">
    </div>

    <form action="./functions/add_cart.php" class="single-pro-detalis">

      <div class="<?php if ($error) {
                    echo 'show';
                  } else {
                    echo "hide";
                  } ?>">
        <p class="error"> يرجي تسجيل الدخول اولاً </p>
      </div>

      <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
      <h4><?php echo $product['product_name']; ?></h4>
      <h2>$<?php echo $product['product_price']; ?></h2>
      <input type="number" value="1" name="amount">
      <button type="submit" class="normal">Add To Cart</button>
      <h4>Product Details</h4>
      <span> <?php echo $product['product_details']; ?></span>
      </div>
  </section>

  <!-- prodetails End -->

  <!-- product1 start -->
  <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">

      <?php
      // function to get elements from the database


      // all products
      $sql2 = "SELECT * FROM products ORDER BY product_id DESC LIMIT 8 ";
      $all_products = sql_to_array($sql2);

      foreach ($all_products as $row) {
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