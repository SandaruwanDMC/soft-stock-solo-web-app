<?php
require "../includes/session.inc.php";

if (isset($_POST['view-product-submit'])) {
    $product_id =  $_POST['input-view-product-id'];
    $barcode_number = $_POST['input-view-product-barcode-number'];
    $product_name = $_POST['input-view-product-name'];
    $brand = $_POST['input-view-product-brand'];
    $product_category = $_POST['input-view-product-category'];
    $reorder_point = $_POST['input-view-product-reorder-point'];
    $product_description = $_POST['input-view-product-description'];

    require_once 'dbh.inc.php';
    require_once '../model/view_product_model.php';
    require_once '../controller/view_product_controller.php';

    if (emptyInputs($barcode_number, $product_name, $brand, $product_category, $reorder_point) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_product.php?error=emptyInputs');
        exit();
    }
    updateProduct($conn, $barcode_number, $product_name, $brand, $product_category, $reorder_point, $product_description, $product_id);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_product.php");
    exit();
}