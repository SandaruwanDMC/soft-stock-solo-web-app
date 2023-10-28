<?php

function validateAccount($conn, $user_email, $otp)
{
    $sql = "SELECT email_verification_code FROM user WHERE user_email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/validate_account.php?error=stmtFailed');
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $user_email);
    mysqli_stmt_execute($stmt);

    // $hashedOTP = mysqli_stmt_get_result($stmt);

    $hashedOTP = null;
    mysqli_stmt_bind_result($stmt, $hashedOTP);
    mysqli_stmt_fetch($stmt);

    $checkOTP = password_verify($otp, $hashedOTP);

    if ($checkOTP === false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/validate_account.php?error=incorrectOTP');
        exit();
    } elseif ($checkOTP === true) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/change_forgot_password.php?error=none');
        exit();
    }
}
