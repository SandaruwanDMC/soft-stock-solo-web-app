<?php

function deleteDebtoRecord($conn, $debtor_record_id)
{
    $sql = "DELETE FROM debtor_record WHERE debtor_record_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/debtor_records.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $debtor_record_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/debtor_records.php');
    exit;
}
