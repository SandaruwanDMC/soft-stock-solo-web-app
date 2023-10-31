<?php
require "../includes/session.inc.php";

$user_id = $_SESSION['user_id'];

if (isset($_POST['add-debtor-submit'])) {
    $debtor_nic = $_POST['input-add-debtor-nic'];
    $debtor_name = $_POST['input-add-debtor-name'];
    $debtor_contact = $_POST['input-add-debtor-contact'];
    $debtor_address = $_POST['input-add-debtor-address'];

    require_once 'dbh.inc.php';
    require_once '../model/add_debtor_model.php';
    require_once '../controller/add_debtor_controller.php';

    if (emptyInputs($debtor_nic, $debtor_name, $debtor_contact, $debtor_address) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_debtor.php?error=emptyInputs');
        exit();
    }
    addDebtor($conn, $debtor_nic, $debtor_name, $debtor_contact, $debtor_address, $user_id);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_debtor.php");
    exit();
}