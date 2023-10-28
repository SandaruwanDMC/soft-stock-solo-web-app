<?php

require_once '../includes/otp.inc.php';

function userEmailExist($conn, $user_email)
{
    $sql = "SELECT * FROM user WHERE user_email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/forgot_password.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $user_email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function validateAccount($conn, $user_email)
{
    $userEmailExist = userEmailExist($conn, $user_email);
    if ($userEmailExist === false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/forgot_password.php?error=emailNotExist');
        exit();
    }

    session_start();
    $_SESSION["user_email"] = $user_email;

    generateOTP($conn, $user_email);
}

function generateOTP($conn, $user_email)
{
    $otp = rand(100000, 999999);

    $sql = "UPDATE user SET email_verification_code = ? WHERE user_email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/forgot_password.php?error=stmtFailed');
        exit();
    }

    $hashedOTP = password_hash($otp, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $hashedOTP, $user_email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $type = "forgot_password";
    sendOTP($otp, $user_email, $type);
}
