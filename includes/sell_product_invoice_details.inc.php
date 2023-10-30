<?php

require "../includes/session.inc.php";

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $total = $_POST['input-sell-product-invoice-details-total'];
    $totalProfit = $_POST['input-sell-product-invoice-details-total-profit'];
    $billingItemsJson = $_POST['billingItems'];
    $billingItems = json_decode($billingItemsJson, true);

    require_once 'dbh.inc.php';
    require_once '../model/sell_product_invoice_details_model.php';

    $invoice_id = createInvoice($conn, $user_id, $total, $totalProfit);

    if ($invoice_id) {
        foreach ($billingItems as $billingItem) {
            $stock_id = $billingItem['stockId'];
            $quantity = $billingItem['quantity'];
            $unit_price = $billingItem['unitPrice'];
            $subtotal = $billingItem['subTotal'];
            $profit = $billingItem['subProfit'];
            $current_stock = $billingItem['currentStock'];

            addInvoiceItems($conn, $invoice_id, $stock_id, $quantity, $unit_price, $subtotal, $profit, $current_stock);
        }
        header('Location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=none');
        exit();
    } else {
        header('Location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php?error=invoiceCreationFailed');
        exit();
    }

}





















// require "../includes/session.inc.php";

// $user_id = $_SESSION['user_id'];

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $billingItemsJson = $_POST['billingItems'];
//     $billingItems = json_decode($billingItemsJson, true);

//     if (isset($_POST['sell-product-invoice-details-submit'])) {
//         $total = $_POST['input-sell-product-invoice-details-total'];
//         $totalProfit = $_POST['input-sell-product-invoice-details-total-profit'];

//         require_once 'dbh.inc.php';
//         require_once '../model/sell_product_invoice_details_model.php';
//         // require_once '../controller/sell_product_invoice_details_controller.php';

//         createInvoice($conn, $user_id, $total, $totalProfit, $billingItems);
//     } else {
//         header("location: /Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/view/sell_product.php");
//         exit();
//     }
// }
