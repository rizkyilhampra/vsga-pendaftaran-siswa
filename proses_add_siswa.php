<?php
include 'koneksi.php';
require_once 'helper/validation.php';

session_start();

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$sekolahAsal = $_POST['sekolahAsal'];

$data = [
    'nama' => $nama,
    'alamat' => $alamat,
    'jeniskelamin' => $jeniskelamin,
    'agama' => $agama,
    'sekolahAsal' => $sekolahAsal
];

$result = validation($data);

if (count($result) > 0) {
    $_SESSION['error'] = $result;
    header('location: add_siswa.php');
    exit;
}

$sql = "INSERT INTO siswa (name, address, sex, religion, school_before) VALUES ('$nama', '$alamat', '$jeniskelamin', '$agama', '$sekolahAsal')";
try {
    mysqli_query($con, $sql);
    $_SESSION['pesan'] = "Data berhasil ditambahkan";
    mysqli_close($con);
    header('location: index.php');
} catch (\Throwable $th) {
    $_SESSION['error'] = "Data gagal ditambahkan" . "<br>" . mysqli_error($con);
    $_SESSION['errorsLog'] = $th;
    header('location: add_siswa.php');
}
