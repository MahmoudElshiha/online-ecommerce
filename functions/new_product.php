<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();

    include './db_conn.php';

    $product_name = $_REQUEST['product_name'];
    $product_price = $_REQUEST['product_price'];
    $product_stars = $_REQUEST['product_rate'];
    $product_details = $_REQUEST['product_details'];

    if (strlen($product_details) == 0) {
        // lorem 
        $product_details = "Quis eiusmod in ut id in ipsum ipsum sit. Quis dolore commodo excepteur qui excepteur nulla cupidatat nulla do ex dolore ex. Culpa laboris ullamco do voluptate amet ipsum. Minim anim sunt mollit excepteur ex deserunt dolore culpa ut laborum. Sint id fugiat ex et ex consequat irure veniam exercitation labore officia non. Irure ut aliquip consequat minim cupidatat magna amet proident aliqua do veniam magna deserunt. Commodo tempor elit id ut sint velit ipsum reprehenderit esse.";
    }

    $sql = "INSERT INTO products (product_name , product_price  , product_stars , product_image , product_details ) VALUES ( ? , ? , ? , ? , ? )";
    $stmt = $conn->prepare($sql);


    $stmt->bindParam(1, $product_name);
    $stmt->bindParam(2, $product_price);
    $stmt->bindParam(3, $product_stars);
    // $stmt->bindParam(4, $product_image);
    $stmt->bindParam(5, $product_details);


    // Check if the file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDir = "../images/products/";
        $timestamp = time();
        $targetFile = $targetDir . $timestamp . '_' . basename($_FILES["file"]["name"]);

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {

            $stmt->bindParam(4, $targetFile);

            if ($stmt->execute()) {
                header("Location: ../new_product.php");
            } else {
                $error_msg = "Error: " . $stmt->errorInfo()[2];
                header("Location: ../new_product.php?error=$error_msg");
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Error: " . $_FILES["file"]["error"];
    }
}
