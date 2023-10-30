<?php
function emptyInputs($stock_id, $product_name, $barcode_number, $batch_number, $cost_price, $unit_price, $current_stock, $quantity)
{
    $result = false;
    if (empty($stock_id) || empty($product_name) || empty($barcode_number) || empty($batch_number) || empty($cost_price) || empty($unit_price) || empty($current_stock) || empty($quantity)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidQuantity($current_stock, $quantity) {
    if ($quantity > $current_stock) {
        return true;
    } else {
        return false;
    }
}