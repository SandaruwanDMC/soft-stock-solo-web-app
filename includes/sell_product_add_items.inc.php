<?php
require "../includes/session.inc.php";

$user_id = $_SESSION['user_id'];

if (isset($_POST['sell-product-submit'])) {
    $stock_id = $_POST['input-sell-product-stock-id'];
    $product_name = $_POST['input-sell-product-product-name'];
    $barcode_number = $_POST['input-sell-product-barcode-number'];
    $batch_number = $_POST['input-sell-product-batch-number'];
    $cost_price = $_POST['input-sell-product-cost-price'];
    $unit_price = $_POST['input-sell-product-unit-price'];
    $current_stock = $_POST['input-sell-product-current-stock'];
    $quantity = $_POST['input-sell-product-quantity'];

    require_once 'dbh.inc.php';
    // require_once '../model/add_category_model.php';
    require_once '../controller/sell_product_add_items_controller.php';

    if (emptyInputs($stock_id, $product_name, $barcode_number, $batch_number, $cost_price, $unit_price, $current_stock, $quantity) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=emptyInputs');
        exit();
    }
    if (invalidQuantity($current_stock, $quantity) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=invalidQuantity');
        exit();
    }
    
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php");
    exit();
}