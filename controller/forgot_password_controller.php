<?php
function emptyInputs($user_email)
{
    $result = false;
    if (empty($user_email)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($user_email)
{
    $result = false;
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}