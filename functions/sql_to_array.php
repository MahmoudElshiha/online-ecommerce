<?php

function sql_to_array($sql)
{
    include "./functions/db_conn.php";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Fetch all rows as associative arrays
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        // return false if connection faild
        return false;
    }

    // Close the connection
    $conn = null;
}
