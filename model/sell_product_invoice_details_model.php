<?php

function createInvoice($conn, $user_id, $total, $totalProfit)
{
    $sql = "INSERT INTO invoice(user_id, total_amount, total_profit) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    }

    mysqli_stmt_bind_param($stmt, "idd", $user_id, $total, $totalProfit);
    mysqli_stmt_execute($stmt);

    $invoice_id = mysqli_insert_id($conn); // Get the inserted invoice_id
    mysqli_stmt_close($stmt);
    
    return $invoice_id;
}

function addInvoiceItems($conn, $invoice_id, $stock_id, $quantity, $unit_price, $subtotal, $profit, $current_stock)
{
    $sql = "INSERT INTO invoice_line_items(invoice_id, stock_id, quantity, unit_price, subtotal, profit) VALUES(?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    }

    $current_stock = $current_stock - $quantity;

    mysqli_stmt_bind_param($stmt, "iiiddd", $invoice_id, $stock_id, $quantity, $unit_price, $subtotal, $profit);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Update the stock
    updateStock($conn, $stock_id, $current_stock);
    return true;
}

function updateStock($conn, $stock_id, $current_stock)
{
    $sql = "UPDATE stocks SET current_stock = ? WHERE stock_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    }

    mysqli_stmt_bind_param($stmt, "ii", $current_stock, $stock_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return true;
}














// function createInvoice($conn, $user_id, $total, $totalProfit, $billingItems)
// {
//     $sql = "INSERT INTO invoice(user_id, total_amount, total_profit) VALUES(?, ?, ?);";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=stmtFailed');
//         exit();
//     }

//     mysqli_stmt_bind_param($stmt, "idd", $user_id, $total, $totalProfit);
//     mysqli_stmt_execute($stmt);
//     $resultData = mysqli_stmt_get_result($stmt);
//     if ($row = mysqli_fetch_assoc($resultData)) {
//         $invoice_id = $row['invoice_id'];
//         foreach ($billingItems as $billingItem) {
//             $stock_id = $row['stock_id'];
//             $quantity = $row['quantity'];
//             $unit_price = $row['unit_price'];
//             $subtotal = $row['subtotal'];
//             $profit = $row['profit'];
//             $current_stock = $row['current_stock'];

//             addInvoiceItems($conn, $invoice_id, $stock_id, $quantity, $unit_price, $subtotal, $profit, $current_stock);
//         }
//     }
//     mysqli_stmt_close($stmt);

//     header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=none');
//     exit();
// }

// function addInvoiceItems($conn, $invoice_id, $stock_id, $quantity, $unit_price, $subtotal, $profit, $current_stock)
// {
//     $sql = "INSERT INTO invoice(invoice_id, stock_id, quantity, unit_price, subtotal, profit) VALUES(?, ?, ?, ?, ?, ?);";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=stmtFailed');
//         exit();
//     }

//     $current_stock = $current_stock - $quantity;

//     mysqli_stmt_bind_param($stmt, "iiiddd", $invoice_id, $stock_id, $quantity, $unit_price, $subtotal, $profit);
//     mysqli_stmt_execute($stmt);
//     $resultData = mysqli_stmt_get_result($stmt);
//     if ($row = mysqli_fetch_assoc($resultData)) {
//         updateStock($conn, $row['stock_id'], $current_stock);
//     }
//     mysqli_stmt_close($stmt);

//     header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=none');
//     exit();
// }

// function updateStock($conn, $stock_id, $current_stock)
// {

//     $sql = "UPDATE stocks SET current_stock = ? WHERE stock_id = ?;";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=stmtFailed');
//         exit();
//     }

//     mysqli_stmt_bind_param($stmt, "ii", $current_stock, $stock_id);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);

//     header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=none');
//     exit();
// }
