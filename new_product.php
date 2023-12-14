<?php
session_start();

// if user is not admin return
if (!isset($_SESSION['admin'])) {
    header("Location: ./home.php");
    exit();
}

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

            <form action="./functions/new_product.php" method="post" enctype="multipart/form-data" style="width: 100%;display: flex;">
                <div class="left">


                    <h3> New Product </h3><br>

                    <div class="<?php if ($error) {
                                    echo 'show';
                                } else {
                                    echo "hide";
                                } ?>">
                        <p class="error"> يرجي التاكد من صحة البيانات </p>
                    </div>


                    <div class="form-wrapper">
                        <input type="text" id="product_name" name="product_name" placeholder="product name" class="form-control" required>
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="form-wrapper">
                        <input type="text" id="product_price" name="product_price" placeholder="product price" class="form-control" required>
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="form-wrapper">
                        <input type="text" id="product_rate" name="product_rate" placeholder="product rate" class="form-control" required>
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="form-wrapper">
                        <input type="text" id="product_details" name="product_details" placeholder="product details" class="form-control" required>
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <button type="submit" class="button-style-sign-log">Add Product
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
                <div class="right">
                    <div class="image-holder" onclick="updateImage()">
                        <img id="preview" src="./images/upload.svg" alt="">
                    </div>
                    <input type="file" name="file" id="file" onchange="previewImage(this)" required>
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

    <!-- validate form with JS -->
    <script src="./scripts/validate.js"></script>
    <script>
        const input_file = document.getElementById("file");

        function updateImage() {
            input_file.click()
        }

        function previewImage(input) {
            var preview = document.getElementById('preview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                // preview.style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>

<?php

// $on = 7;
// }

?>