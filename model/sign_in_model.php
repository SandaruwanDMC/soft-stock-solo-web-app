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

function signInUser($conn, $user_email, $user_password)
{
    $userEmailExist = userEmailExist($conn, $user_email);
    if ($userEmailExist === false) {

        header('location: ../view/sign_in.php?error=emailNotExist');
        exit();
    }

    $hashedPassword = $userEmailExist["user_password"];

    $checkPassword = password_verify($user_password, $hashedPassword);

    if ($checkPassword === false) {
        header('location: ../view/sign_in.php?error=incorrectPassword');
        exit();
    } elseif ($checkPassword === true) {
        session_start();
        $_SESSION["user_id"] = $userEmailExist["user_id"];
        $_SESSION["user_email"] = $userEmailExist["user_email"];
        header('location: ../view/dashboard.php?error=none');
        exit();
    }
}