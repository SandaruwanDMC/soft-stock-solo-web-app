<?php

function changePassword($conn, $user_email, $new_password)
{
    $sql = "UPDATE user SET user_password = ? WHERE user_email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/verify_account.php?error=stmtFailed');
        exit();
    }

    $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $hashedPassword, $user_email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    session_start();
    session_unset();
    session_destroy();

    header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sign_in.php?error=passwordChanged');
    exit();
}
