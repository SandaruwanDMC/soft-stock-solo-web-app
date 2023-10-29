<?php
function barcodeExist($conn, $user_id, $barcode_number)
{
    $sql = "SELECT * FROM products WHERE (user_id = ?) AND (barcode_number = ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_product.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "is", $user_id, $barcode_number);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_get_result($stmt)->num_rows > 0) {
        $result = true;
        return $result;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function addProduct($conn, $barcode_number, $product_name, $brand, $product_category, $reorder_point, $product_description, $user_id) {
    $sql = "INSERT INTO products(user_id, barcode_number, product_name, brand, product_category, reorder_point, product_description) VALUES(?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_product.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "isssiis", $user_id, $barcode_number, $product_name, $brand, $product_category, $reorder_point, $product_description);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_product.php?error=none');
    exit();
}