<?php
require "../includes/session.inc.php";

$user_id = $_SESSION['user_id'];

if (isset($_POST['add-product-submit'])) {
    $barcode_number = $_POST['input-add-product-barcode-number'];
    $product_name = $_POST['input-add-product-name'];
    $brand = $_POST['input-add-product-brand'];
    $product_category = $_POST['input-add-product-category'];
    $reorder_point = $_POST['input-add-product-reorder-point'];
    $product_description = $_POST['input-add-product-description'];

    require_once 'dbh.inc.php';
    require_once '../model/add_product_model.php';
    require_once '../controller/add_product_controller.php';

    if (emptyInputs($barcode_number, $product_name, $brand, $product_category, $reorder_point) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_product.php?error=emptyInputs');
        exit();
    }
    addProduct($conn, $barcode_number, $product_name, $brand, $product_category, $reorder_point, $product_description, $user_id);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_product.php");
    exit();
}