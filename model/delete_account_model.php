<?php

function deleteAccount($conn, $user_id)
{
    $sql = "DELETE FROM user WHERE user_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/manage_account.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    session_start();
    session_unset();
    session_destroy();

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/index.php');
    exit;
}
