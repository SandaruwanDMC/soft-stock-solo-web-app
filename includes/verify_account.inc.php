<?php require "../includes/session.inc.php"; ?>

<?php

if (isset($_POST['verify-account-submit'])) {

    $otp = $_POST['input-verify-account-otp'];

    require_once 'dbh.inc.php';
    require_once '../model/verify_account_model.php';
    require_once '../controller/verify_account_controller.php';

    if (emptyInputs($otp) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/verify_account.php?error=emptyInputs');
        exit();
    }
    $user_id = $_SESSION['user_id'];
    verifyAccount($conn, $user_id, $otp);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sign_in.php");
    exit();
}