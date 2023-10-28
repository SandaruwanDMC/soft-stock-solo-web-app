<?php require "./session.inc.php"; ?>

<?php

if (isset($_POST['change_forgot_password_submit'])) {
    $new_password = $_POST['input-change-forgot-password-new-password'];
    $confirm_password = $_POST['input-change-forgot-password-confirm-password'];

    require_once 'dbh.inc.php';
    require_once '../model/change_forgot_password_model.php';
    require_once '../controller/change_forgot_password_controller.php';

    if (emptyInputs($new_password, $confirm_password) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/change_forgot_password.php?error=emptyInputs');
        exit();
    }

    if (passwordMatch($new_password, $confirm_password) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/change_forgot_password.php?error=passwordsDonNotMatch');
        exit();
    }

    $user_email = $_SESSION['user_email'];

    changePassword($conn, $user_email, $new_password);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/change_forgot_password.php");
    exit();
}
