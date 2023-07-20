<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "pendaftaran_siswa";

$con = mysqli_connect($server, $user, $password, $database);
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
