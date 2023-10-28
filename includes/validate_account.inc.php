<?php require "../includes/session.inc.php"; ?>

<?php

if (isset($_POST['validate-account-submit'])) {

    $otp = $_POST['input-validate-account-otp'];

    require_once 'dbh.inc.php';
    require_once '../model/validate_account_model.php';
    require_once '../controller/validate_account_controller.php';

    if (emptyInputs($otp) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/validate_account.php?error=emptyInputs');
        exit();
    }
    $user_email = $_SESSION['user_email'];
    validateAccount($conn, $user_email, $otp);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/validate_account.php");
    exit();
}