<?php

function updateStock($conn, $initial_stock, $current_stock, $expire_date, $cost_price, $unit_price, $stock_id) {

    $sql = "UPDATE stocks SET initial_stock = ?, current_stock = ?, expire_date = ?, cost_price = ?, unit_price = ? WHERE stock_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_stock.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "iisddi", $initial_stock, $current_stock, $expire_date, $cost_price, $unit_price, $stock_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_stock.php?error=none');
    exit();
}