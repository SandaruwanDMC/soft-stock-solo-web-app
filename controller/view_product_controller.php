<?php
function emptyInputs($barcode_number, $product_name, $brand, $product_category, $reorder_point)
{
    $result = false;
    if (empty($barcode_number) || empty($product_name) || empty($brand) || empty($product_category) || empty($reorder_point)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}