<?php
function emptyInputs($stock_id, $initial_stock, $current_stock, $expire_date, $cost_price, $unit_price)
{
    $result = false;
    if (empty($stock_id) || empty($initial_stock) || empty($current_stock) || empty($expire_date) || empty($cost_price) || empty($unit_price)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}