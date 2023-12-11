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
    <link rel="stylesheet" href="./styles/style_sign_log.css"/>



</head>

<body>
    <!-- header start -->
    <?php
    include "./templates/header.php";
    head("home");
    ?>
    <!-- header end -->

    <!-- login Form Strat -->
    <div class="wrapper">
			<div class="inner">
				<div class="image-holder">
                    <img src="images/photo_sign_log.jpg" alt="">
				</div>
				<form action="">
					<h3>LOG IN</h3>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control">
					</div>
					<button class="button-style-sign-log">LOG IN</button>
					<hr>
					<div class = "register-sign-log">
					<p>don't have an account?</p>
					<button class="button-style-sign-log"><a href="./user_register.php" class="herf-style">SIGN UP Now</a></button>
			    	</div>
				</form>
			</div>
	</div>

    <!-- login Form End -->

    <!-- footer start -->
    <?php
    include "./templates/footer.php";
    ?>
    <!-- footer end -->

</body>

</html>