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

    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/header.css" />
    <link rel="stylesheet" href="./styles/footer.css" />


</head>

<body>
    <!-- header start -->
    <?php
    include "./templates/header.php";
    head("sproduct");
    ?>
    <!-- header end -->


    <!-- prodetails start -->

    <section id="prodetails" class="section-p1">
      <div class="single-pro-image">
        <img src="images/products/f1.jpg" width="100%" id="MainImg" alt="">

        <div class="small-img-group">

          <div class="small-img-col">
            <img src="images/products/f1.jpg" width="100%" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="images/products/f2.jpg" width="100%" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="images/products/f3.jpg" width="100%" class="small-img" alt="">
          </div>
          <div class="small-img-col">
            <img src="images/products/f4.jpg" width="100%" class="small-img" alt="">
          </div>

        </div>

      </div>

      <div class="single-pro-detalis">
        <h6>Home / T-shirt</h6>
        <h4>Man's Fashion T-shirt</h4>
        <h2>$139,00</h2>
        <select>
          <option>Select Size</option>
          <option>Xl</option>
          <option>XXL</option>
          <option>Small</option>
          <option>Large</option>
        </select>
          <input type="number" value="1">
          <button id="normal">Add To Cart</button>
          <h4>Product Details</h4>
          <span>The Gilden Ultra Cotton T-shirt is made from a substantial 6.0 oz. per
          sq. yd. fabric constructed from 100% cotton , this classic fit preshrunk jersey 
          knit provides unmatched comfort with each wear. Featuring a taped neck and 
          shoulder, and a seamless double-needle coller, and avilable in a range of 
          colors, it offers it all in the ultimate head-turning package.</span> 
      </div>
    </section>

    <!-- prodetails End -->
  <!-- new arrivals start -->
  <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">
      <div class="pro">
        <img src="./images/products/n1.jpg" alt="" />
        <div class="des">
          <span>adidas</span>
          <h5>Cartoon Astronaut T-Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shoping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="./images/products/n2.jpg" alt="" />
        <div class="des">
          <span>adidas</span>
          <h5>Cartoon Astronaut T-Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shoping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="./images/products/n3.jpg" alt="" />
        <div class="des">
          <span>adidas</span>
          <h5>Cartoon Astronaut T-Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shoping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="./images/products/n4.jpg" alt="" />
        <div class="des">
          <span>adidas</span>
          <h5>Cartoon Astronaut T-Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shoping-cart cart"></i></a>
      </div>
        <a href="#"><i class="fal fa-shoping-cart cart"></i></a>
      </div>
    </div>
  </section>
  <!-- new arrivals end -->

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


    <!-- start video 2 of 27:20 -->

  <!-- الجزء ده مش شغال مش عارف ليه (-_-) -->

  <!-- Java script -->
    <script>
      var MainImg = decument.getElementById("MainImg");
      var smalling = decument.getElementByclassName("small-img");

      smalling[0].onclick = function(){
        MainImg.src = smalling[0].src;
      }
      smalling[1].onclick = function(){
        MainImg.src = smalling[1].src;
      }
      smalling[2].onclick = function(){
        MainImg.src = smalling[2].src;
      }
      smalling[3].onclick = function(){
        MainImg.src = smalling[3].src;
      }
    </script>
   

     <!-- start video 2 of 31:18 -->


</body>

</html>