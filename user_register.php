<?php

session_start();

// if user already signed in return to home page
if (isset($_SESSION['username'])) {
    header("Location: ../home.php");
    exit();
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
    <link rel="stylesheet" href="./styles/form.css" />


</head>

<body>
    <!-- header start -->
    <?php
    include "./templates/header.php";
    head("home");
    ?>
    <!-- header end -->

    <!-- login Form Strat -->
    <section class="form-container">

        <h2> <i class="fa-solid fa-user-plus"></i> Register Now </h2> <br>

        <!-- onsubmit action to validate the form before submit  -->
        <form action="./functions/newUser.php" onsubmit="return user_register()">
            <input type="text" name="username" id="username" placeholder="Enter Your User Name ..." required maxlength="50">
            <input type="password" name="password" id="password" placeholder="Enter Your Password ..." required maxlength="20">
            <input type="password" name="re-password" id="re-password" placeholder="Enter Your Password Again ..." required maxlength="20">

            <input type="submit" value="Register Now">
            <hr>
            <p>-- Already have an account?</p>
            <a href="./user_login.php" class="option-btn">Login Now</a>
        </form>
    </section>

    <!-- login Form End -->

    <!-- footer start -->
    <?php
    include "./templates/footer.php";
    ?>
    <!-- footer end -->

    <!-- incude JS code -->
    <script src="./scripts/validate.js"></script>

</body>

</html>