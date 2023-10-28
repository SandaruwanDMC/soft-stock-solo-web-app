<?php

function verifyAccount($conn, $user_id, $otp)
{
    $sql = "SELECT email_verification_code FROM user WHERE user_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../view/verify_account.php?error=stmtFailed');
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);

    // $hashedOTP = mysqli_stmt_get_result($stmt);

    $hashedOTP = null;
    mysqli_stmt_bind_result($stmt, $hashedOTP);
    mysqli_stmt_fetch($stmt);

    $checkOTP = password_verify($otp, $hashedOTP);

    if ($checkOTP === false) {
        header('location: ../view/verify_account.php?error=incorrectOTP'.$user_id);
        exit();
    } elseif ($checkOTP === true) {
        $sql = "UPDATE user SET is_verified = ? WHERE user_id = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location: ../view/verify_account.php?error=stmtFailed');
            exit();
        }

        $is_verified = 1;
        mysqli_stmt_bind_param($stmt, "ii", $is_verified, $user_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header('location: ../view/dashboard.php?error=none');
        exit();
    }
}
