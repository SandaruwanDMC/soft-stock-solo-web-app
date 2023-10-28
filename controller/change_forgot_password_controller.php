<?php

function emptyInputs($new_password, $confirm_password)
{
    $result = false;
    if (empty($new_password) || empty($confirm_password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($new_password, $confirm_password)
{
    $result = false;
    if ($new_password !== $confirm_password) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}