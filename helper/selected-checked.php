<?php

/**
 * The function checks if a given value matches the religion or sex in a data array and returns
 * "selected" if it matches the religion or "checked" if it matches the sex.
 * 
 * @param string value The value parameter is the value that you want to check against the data array.
 * It can be a string or any other data type that can be compared.
 * @param array data The `` parameter is an optional array that contains the values of the
 * religion and sex. It is used to determine if the given value matches the religion or sex value in
 * the array.
 * 
 * @return string either "selected" or "checked" if the value matches the religion or sex in the data
 * array, respectively. If there is no match, an empty string is returned.
 */
function selectedOrChecked(string $value, array $data = []): string
{
    if ($data['religion'] == $value) {
        return "selected";
    } else if ($data['sex'] == $value) {
        return 'checked';
    }
    return '';
}
