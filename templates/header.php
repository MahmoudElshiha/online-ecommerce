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
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></i></a>
        <li id="lg-bag">
          <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      <i id="bar" class="fas fa-outdent"></i>
    </div>
  </section>
  <script src="./scripts/script.js"></script>

<?php
}
?>