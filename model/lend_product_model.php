<?php
function invoiceIdExist($conn, $invoice_id)
{
    $sql = "SELECT * FROM debtor_record WHERE invoice_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/lend_product.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $invoice_id);
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

function lendProduct($conn, $debtor_id, $invoice_id, $user_id) {
    $sql = "INSERT INTO debtor_record(debtor_id, invoice_id, user_id) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/lend_product.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "iii", $debtor_id, $invoice_id, $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/lend_product.php?error=none');
    exit();
}