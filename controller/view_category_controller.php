<?php
function emptyInputs($category_id, $category_name)
{
    $result = false;
    if (empty($category_id) || empty($category_name)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}