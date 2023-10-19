<?php

if (isset($_POST['sign_in_submit'])) {
    $user_email = $_POST['input-sign-in-email'];
    $user_password = $_POST['input-sign-in-password'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptySignInInputs($user_email, $user_password) !== false) {
        header('location: ../sign_in.php?error=emptyInputs');
        exit();
    }

    if (invalidEmail($user_email) !== false) {
        header('location: ../sign_in.php?error=invalidEmail');
        exit();
    }

    if (!userEmailExist($conn, $user_email) !== false) {
        header('location: ../sign_in.php?error=emailNotExist');
        exit();
    }
    signInUser($conn, $user_email, $user_password);
} else {
    header("location: ../sign_in.php");
    exit();
}