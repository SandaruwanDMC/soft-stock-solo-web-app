<?php
require "../includes/session.inc.php";

if (isset($_POST['view-stock-submit'])) {
    $stock_id = $_POST['input-view-stock-id'];
    $initial_stock = $_POST['input-view-stock-initial-stock'];
    $current_stock = $_POST['input-view-stock-current-stock'];
    $expire_date = $_POST['input-view-stock-expire-date'];
    $cost_price = $_POST['input-view-stock-cost-price'];
    $unit_price = $_POST['input-view-stock-unit-price'];

    require_once 'dbh.inc.php';
    require_once '../model/view_stock_model.php';
    require_once '../controller/view_stock_controller.php';

    if (emptyInputs($stock_id, $initial_stock, $current_stock, $expire_date, $cost_price, $unit_price) !== false) {
        header('location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_stock.php?error=emptyInputs');
        exit();
    }
    updateStock($conn, $initial_stock, $current_stock, $expire_date, $cost_price, $unit_price, $stock_id);
} else {
    header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/view_stock.php");
    exit();
}