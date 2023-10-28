<?php

if (isset($_POST['forgot_password_submit'])) {
    $user_email = $_POST['input-forgot-password-email'];

    require_once 'dbh.inc.php';
    require_once '../model/forgot_password_model.php';
    require_once '../controller/forgot_password_controller.php';

    if (emptyInputs($user_email) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/forgot_password.php?error=emptyInputs');
        exit();
    }

    if (invalidEmail($user_email) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/forgot_password.php?error=invalidEmail');
        exit();
    }

    if (!userEmailExist($conn, $user_email) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/forgot_password.php?error=emailNotExist');
        exit();
    }
    validateAccount($conn, $user_email);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/forgot_password.php");
    exit();
}