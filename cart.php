<?php
// start the session
session_start();

// if user already signed in return to home page
if (!isset($_SESSION['username'])) {
    header("Location: ./user_login.php");
    exit();
}

// function to get elements from the database
include "./functions/sql_to_array.php";
$user_id = $_SESSION['id'];

$sql = "SELECT 
            cart.element_id,
            cart.product_id,
            products.product_image,
            products.product_name,
            products.product_price,
            cart.amount
        FROM cart
            LEFT JOIN products ON products.product_id = cart.product_id
        ";

$result = sql_to_array($sql);
// print_r($result);


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
    <?php
    include "./templates/header.php";
    head("cart");
    ?>
    <section id="page-heder" class="about-header">
        <h2>#cart</h2>
        <p>Add your coupon code & Save up to 70%!</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody id="tableBody">

            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1" style="justify-content: flex-end;">

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td id='subtotal_label'>0</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong id='total_label'>0</strong></td>
                </tr>
            </table>
            <a href="./functions/empty_cart.php"><button class="normal">Proceed to checkout</button></a>
        </div>
    </section>


    <?php include "./templates/footer.php" ?>

    <!-- JS script start -->
    <script src="./scripts/cart.js"></script>

    <script>
        const arrary = <?php echo json_encode($result); ?>;
        const tableBody = document.getElementById("tableBody");
        buildCart(arrary, tableBody);
    </script>

    <!-- JS script end   -->

</body>

</html>