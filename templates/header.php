<?php


function head($currentPage)
{

?>


  <section id="header">
    <a href="#"><img src="./images/logo.svg" class="logo" alt="" /></a>
    <div>
      <ul id="navbar">

        <li><a href="home.php" <?php echo ($currentPage == "home") ? "class = 'active' " : " "; ?>> Home </a></li>
        <li><a href="shop.php" <?php echo ($currentPage == "shop") ? "class = 'active' " : " "; ?>> Shop </a></li>
        <li><a href="about.php" <?php echo ($currentPage == "about") ? "class = 'active' " : " "; ?>> About </a></li>
        <li><a href="contact.php" <?php echo ($currentPage == "contact") ? "class = 'active' " : " "; ?>> Contact </a></li>

        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
        <li id="lg-bag">
          <a href="cart.php" <?php echo ($currentPage == "cart") ? "class = 'active' " : " "; ?>><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li> <a <?php echo ($currentPage == "profile") ? "class = 'active' " : " "; ?>><i class="fa-solid fa-circle-user" id="user-circle"></i></a> </li>
      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      <i id="bar" class="fas fa-outdent"></i>

    </div>
    <div class="profile">
      <?php
      if (isset($_SESSION['username'])) {
      ?>
        <center><a><i class="fa-solid fa-x" id="cross"></i></a></center><br>
        <p> Welcome Back, <?php echo ($_SESSION['username']); ?> </p> <br>
        <?php
        if (isset($_SESSION['admin'])) {
        ?>
          <a href="./new_product.php"><button class="normal">Add Product</button></a>
          <br>
        <?php } ?>
        <a href="./functions/logout.php"><button class="logout">Logout</button></a>

      <?php

      } else {
      ?>
        <p> Please Login Or Register First ..</p> <br>
        <div class="row">
          <a href="./user_login.php"><button style="width: unset;" class="normal">Login</button></a>
          <a href="./user_register.php"><button style="width: unset;" class="normal">Register</button></a>
        </div>
      <?php  }  ?>

    </div>
  </section>
  <script src="./scripts/script.js"></script>
<?php
}
?>