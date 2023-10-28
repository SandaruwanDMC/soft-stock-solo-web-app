<?php require "../includes/session.inc.php"; ?>

<?php

if (isset($_POST['verify_account_submit'])) {

    $otp = $_POST['input-otp'];

    require_once 'dbh.inc.php';
    require_once '../model/verify_account_model.php';
    require_once '../controller/verify_account_controller.php';

    if (emptyInputs($otp) !== false) {
        header('location: ../view/verify_account.php?error=emptyInputs');
        exit();
    }
    $user_id = $_SESSION['user_id'];
    verifyAccount($conn, $user_id, $otp);
} else {
    header("location: ../view/sign_in.php");
    exit();
}