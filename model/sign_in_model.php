<?php

require_once '../includes/otp.inc.php';

function userEmailExist($conn, $user_email)
{
    $sql = "SELECT * FROM user WHERE user_email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../view/sign_up.php?error=stmtFailed');
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

function signInUser($conn, $user_email, $user_password)
{
    $userEmailExist = userEmailExist($conn, $user_email);
    if ($userEmailExist === false) {

        header('location: ../view/sign_in.php?error=emailNotExist');
        exit();
    }

    $hashedPassword = $userEmailExist["user_password"];
    $is_verified = $userEmailExist['is_verified'];
    $user_id = $userEmailExist['user_id'];

    $checkPassword = password_verify($user_password, $hashedPassword);

    if ($checkPassword === false) {
        header('location: ../view/sign_in.php?error=incorrectPassword');
        exit();
    } elseif ($checkPassword === true) {
        session_start();
        $_SESSION["user_id"] = $userEmailExist["user_id"];
        $_SESSION["user_email"] = $userEmailExist["user_email"];

        if($is_verified !== 1){
            generateOTP($conn, $user_id, $user_email);
        } else {
            header('location: ../view/dashboard.php?error=none');
            exit();
        }
    }
}

function generateOTP($conn, $user_id, $user_email) {
    $otp = rand(100000, 999999);

    $sql = "UPDATE user SET is_verified = ?, email_verification_code = ? WHERE user_id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../view/sign_up.php?error=stmtFailed');
        exit();
    }

    $hashedOTP = password_hash($otp, PASSWORD_DEFAULT);

    $is_verified = 0;
    mysqli_stmt_bind_param($stmt, "isi", $is_verified, $hashedOTP, $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    sendOTP($otp, $user_email);
}