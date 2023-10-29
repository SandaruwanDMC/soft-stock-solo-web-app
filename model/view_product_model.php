<?php

function updateProduct($conn, $barcode_number, $product_name, $brand, $product_category, $reorder_point, $product_description, $product_id) {

    $sql = "UPDATE products SET barcode_number = ?, product_name = ?, brand = ?, product_category = ?, reorder_point = ?, product_description = ? WHERE product_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_product.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssiisi", $barcode_number, $product_name, $brand, $product_category, $reorder_point, $product_description, $product_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_product.php?error=none');
    exit();
}