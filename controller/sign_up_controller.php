<?php

function emptyInputs($user_email, $user_password, $user_password_repeat)
{
    $result = false;
    if (empty($user_email) || empty($user_password) || empty($user_password_repeat)) {
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

function passwordMatch($user_password, $user_password_repeat)
{
    $result = false;
    if ($user_password !== $user_password_repeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}