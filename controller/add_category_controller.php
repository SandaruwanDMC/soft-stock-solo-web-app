<?php
function emptyInputs($category_name)
{
    $result = false;
    if (empty($category_name)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}