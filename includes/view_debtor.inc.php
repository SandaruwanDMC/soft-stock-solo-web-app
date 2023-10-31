<?php
require "../includes/session.inc.php";

if (isset($_POST['view-debtor-submit'])) {
    $debtor_id = $_POST['input-view-debtor-id'];
    $debtor_nic = $_POST['input-view-debtor-nic'];
    $debtor_name = $_POST['input-view-debtor-name'];
    $debtor_contact = $_POST['input-view-debtor-contact'];
    $debtor_address = $_POST['input-view-debtor-address'];

    require_once 'dbh.inc.php';
    require_once '../model/view_debtor_model.php';
    require_once '../controller/view_debtor_controller.php';

    if (emptyInputs($debtor_nic, $debtor_name, $debtor_contact, $debtor_address)) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_debtor.php?error=emptyInputs');
        exit();
    }
    updateDebtor($conn, $debtor_nic, $debtor_name, $debtor_contact, $debtor_address, $debtor_id);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_debtor.php");
    exit();
}
