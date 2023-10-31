<?php
function emptyInputs($debtor_id, $invoice_id)
{
    $result = false;
    if (empty($debtor_id) || empty($invoice_id)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}