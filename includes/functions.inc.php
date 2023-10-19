<?php

function emptySignUpInputs($user_email, $user_password, $user_password_repeat)
{
    $result = false;
    if (empty($user_email) || empty($user_password) || empty($user_password_repeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($user_email)
{
    $result = false;
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($user_password, $user_password_repeat)
{
    $result = false;
    if ($user_password !== $user_password_repeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userEmailExist($conn, $user_email)
{
    $sql = "SELECT * FROM user WHERE user_email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../sign_up.php?error=stmtFailed');
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

function createUser($conn, $user_email, $user_password)
{
    $sql = "INSERT INTO user(user_email, user_password) VALUES(?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../sign_up.php?error=stmtFailed');
        exit();
    }

    $hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $user_email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../signup.php?error=none');
    exit();
}

function emptySignInInputs($user_email, $user_password)
{
    $result = false;
    if (empty($user_email) || empty($user_password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function signInUser($conn, $user_email, $user_password)
{
    $userEmailExist = userEmailExist($conn, $user_email);
    if ($userEmailExist === false) {

        header('location: ../sign_in.php?error=emailNotExist');
        exit();
    }

    $hashedPassword = $userEmailExist["user_password"];

    $checkPassword = password_verify($user_password, $hashedPassword);

    if ($checkPassword === false) {
        header('location: ../sign_in.php?error=incorrectPassword');
        exit();
    } elseif ($checkPassword === true) {
        session_start();
        $_SESSION["user_id"] = $userEmailExist["user_id"];
        $_SESSION["user_email"] = $userEmailExist["user_email"];
        header('location: ../dashboard.php?error=none');
        exit();
    }
}
