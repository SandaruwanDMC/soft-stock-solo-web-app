<?php
function emptyInputs($debtor_nic, $debtor_name, $debtor_contact, $debtor_address)
{
    $result = false;
    if (empty($debtor_nic) || empty($debtor_name) || empty($debtor_contact) || empty($debtor_address)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}