<?php

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

function createUser($conn, $user_email, $user_password)
{
    $sql = "INSERT INTO user(user_email, user_password) VALUES(?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../view/sign_up.php?error=stmtFailed');
        exit();
    }

    $hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $user_email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../view/signup.php?error=none');
    exit();
}