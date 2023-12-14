<?php
session_start();

// if user already signed in return to home page
if (isset($_SESSION['username'])) {
    header("Location: ./home.php");
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
    <link rel="stylesheet" href="./styles/style_sign_log.css" />
    <link rel="stylesheet" href="./styles/style_sign_log.css" />
    <link rel="stylesheet" href="./styles/style.css" />



</head>

<body>
    <!-- header start -->
    <?php
    include "./templates/header.php";
    head("profile");
    ?>
    <!-- header end -->

    <!-- login Form Strat -->
    <div class="wrapper">
        <div class="inner">
            <div class="image-holder">
                <img src="./images/photo_sign_log.jpg" alt="">
            </div>
            <form action="./functions/newUser.php" onsubmit="return user_register()">
                <h3>Registration Form</h3>
                <br>
                <div id="error" class="<?php if ($error) {
                                            echo 'show';
                                        } else {
                                            echo "hide";
                                        } ?>">
                    <p class="error"> يرجي التاكد من صحة البيانات </p>
                </div>

                <div class="form-wrapper">
                    <input type="text" id="username" name="username" placeholder="Username" class="form-control" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" id="re-password" name="re-password" placeholder="Confirm Password" class="form-control" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <button class="button-style-sign-log">Register
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

                <br>
                <hr>
                <br>

                <p> -- Already have an account ?</p>
                <a href="./user_login.php" style="all: unset;">
                    <button type="button" class="button-style-sign-log" style="background-color: #088178;">Login
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </a>

            </form>
        </div>
    </div>

    <!-- footer start -->
    <?php
    include "./templates/footer.php";
    ?>
    <!-- footer end -->

    <!-- validate form with JS -->
    <script src="./scripts/validate.js"></script>

</body>

</html>

<?php


?>