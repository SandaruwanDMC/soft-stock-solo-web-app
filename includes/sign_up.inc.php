<?php

if (isset($_POST['sign_up_submit'])) {
    $user_email = $_POST['input-sign-up-email'];
    $user_password = $_POST['input-sign-up-password'];
    $user_password_repeat = $_POST['input-sign-up-password-confirm'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptySignUpInputs($user_email, $user_password, $user_password_repeat) !== false) {
        header('location: ../sign_up.php?error=emptyInputs');
        exit();
    }

    if (invalidEmail($user_email) !== false) {
        header('location: ../sign_up.php?error=invalidEmail');
        exit();
    }

    if (passwordMatch($user_password, $user_password_repeat) !== false) {
        header('location: ../sign_up.php?error=passwordsDonNotMatch');
        exit();
    }
    if (userEmailExist($conn, $user_email) !== false) {
        header('location: ../sign_up.php?error=emailExist');
        exit();
    }
    createUser($conn, $user_email, $user_password);
} else {
    header("location: ../sign_up.php");
    exit();
}