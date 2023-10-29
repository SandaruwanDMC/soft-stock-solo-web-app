<?php
require "../includes/session.inc.php";

$user_id = $_SESSION['user_id'];

if (isset($_POST['add-stock-submit'])) {
    $product_id = $_POST['input-add-stock-product-id'];
    $batch_number = $_POST['input-add-stock-batch-number'];
    $initial_stock = $_POST['input-add-stock-initial-stock'];
    $current_stock = $_POST['input-add-stock-current-stock'];
    $expire_date = $_POST['input-add-stock-expire-date'];
    $cost_price = $_POST['input-add-stock-cost-price'];
    $unit_price = $_POST['input-add-stock-unit-price'];

    require_once 'dbh.inc.php';
    require_once '../model/add_stock_model.php';
    require_once '../controller/add_stock_controller.php';

    if (emptyInputs($product_id, $batch_number, $initial_stock, $current_stock, $expire_date, $cost_price, $unit_price) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_stock.php?error=emptyInputs');
        exit();
    }
    if (batchNumberExist($conn, $user_id, $product_id, $batch_number) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_stock.php?error=batchNumberExist'.$user_id."/".$product_id."/".$batch_number);
        exit();
    }
    addStock($conn, $product_id, $batch_number, $initial_stock, $current_stock, $expire_date, $cost_price, $unit_price, $user_id);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/add_stock.php");
    exit();
}