<?php


/**
 * The function "validation" checks if certain fields in an array are empty and returns an array of
 * error messages for the empty fields.
 * 
 * @param array data The parameter `` is an array that contains the data to be validated. It
 * should have the following keys:
 * 
 * @return array an array of errors.
 */
function validation(array $data): array
{
    $errors = [];
    $errorsList = [
        'nama' => "Nama tidak boleh kosong",
        'alamat' => "Alamat tidak boleh kosong",
        'jeniskelamin' => "Jenis kelamin tidak boleh kosong",
        'agama' => "Agama tidak boleh kosong",
        'sekolahAsal' => "Sekolah asal tidak boleh kosong"
    ];

    foreach ($errorsList as $key => $value) {
        if (empty($data[$key])) {
            $errors[$key] = $value;
        }
    }

    return $errors;
};
