<?php
function emptyInputs($otp)
{
    $result = false;
    if (empty($otp)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}