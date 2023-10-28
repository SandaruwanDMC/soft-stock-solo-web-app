<?php
function emptySignInInputs($user_email, $user_password)
{
    $result = false;
    if (empty($user_email) || empty($user_password)) {
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