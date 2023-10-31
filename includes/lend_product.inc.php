<?php
require "../includes/session.inc.php";

$user_id = $_SESSION['user_id'];

if (isset($_POST['lend-product-submit'])) {
    $debtor_id = $_POST['input-lend_product-debtor-id'];
    $invoice_id = $_POST['input-lend_product-invoice-id'];

    require_once 'dbh.inc.php';
    require_once '../model/lend_product_model.php';
    require_once '../controller/lend_product_controller.php';

    if (emptyInputs($debtor_id, $invoice_id) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/lend_product.php?error=emptyInputs');
        exit();
    }
    if (invoiceIdExist($conn, $invoice_id) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/lend_product.php?error=invoiceIdExist');
        exit();
    }
    lendProduct($conn, $debtor_id, $invoice_id, $user_id);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/lend_product.php");
    exit();
}