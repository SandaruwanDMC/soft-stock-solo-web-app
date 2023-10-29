<?php
function batchNumberExist($conn, $user_id, $product_id, $batch_number)
{
    $sql = "SELECT * FROM stocks WHERE (user_id = ?) AND (product_id = ?) AND (batch_number = ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_stock.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "iis", $user_id, $product_id, $batch_number);
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

function addStock($conn, $product_id, $batch_number, $initial_stock, $current_stock, $expire_date, $cost_price, $unit_price, $user_id) {
    $sql = "INSERT INTO stocks(product_id, user_id, batch_number, initial_stock, current_stock, expire_date, cost_price, unit_price) VALUES(?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_stock.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "iisiisdd", $product_id, $user_id, $batch_number, $initial_stock, $current_stock, $expire_date, $cost_price, $unit_price);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_stock.php?error=none');
    exit();
}