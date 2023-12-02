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
<?php
  include "./templates/header.php";
  head("about");
  ?>
    
    <section id="page-heder" class="about-header">
        <h2>#KnowsUs </h2>
        <p>Lorem ipsum dolor sit amet, consectetur </p>
    </section>
    <section id="about-head" class="section-p1">
        <img src="images/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>It's very important to have a patient, and it will be followed by an adipiscing process,<br>
                but I'll give it that way in time they occur as with great labor and pain.<br>
                To come to the smallest detail, who We do not engage in any kind of work unless we gain some benefit from it.<br>
                On the other hand, pain in rebuke in pleasure wants to be a hair of pain in joy<br>
                let him flee, let no one be born. Unless they are blinded by lust, they do not come out,<br>
                they are in the guilt of those who abandon their duties softens the soul, that is, the labors</p>
                <abbr title="">Create stunning images with as much or as little control as you
                    like thanks to a choice of Basic and Creative modes.</abbr>
                    <br><br>
                <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create stunning images with as much or as
                    little control as you like thanks to a choice of Basic and Creative modes.</marquee>
        </div>

    </section>
    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a> </h1>
        <div class="video">
            <video autoplay muted loop src="images/about/1.mp4"></video>
        </div>
    </section>
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
    <?php include "./templates/footer.php" ?>
</body>
</html>