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

        <li> <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
        <li> <a><i class="fa-solid fa-circle-user" id="user-circle"></i></a> </li>
      </ul>
    </div>
    <div class="profile">

      <p> Please Login Or Register First ...</p> <br>
      <div class="row">
        <a href="../user_login.php"><button class="normal">Login</button></a>
        <a href="../user_register.php"><button class="normal">Register</button></a>
      </div>

    </div>
  </section>
  <script src="../scripts/script.js"></script>
<?php
}
?>