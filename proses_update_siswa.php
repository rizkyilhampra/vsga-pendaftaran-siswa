<?php
include 'koneksi.php';
require_once 'helper/validation.php';

session_start();

$id = $_GET['id'];
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
    header('location: update_siswa.php?id=' . $id);
    exit;
}

$sql = "UPDATE siswa SET name='$nama', address='$alamat', sex='$jeniskelamin', religion='$agama', school_before='$sekolahAsal' WHERE id='$id'";

try {
    mysqli_query($con, $sql);
    $_SESSION['pesan'] = "Data berhasil diubah";
} catch (\Throwable $th) {
    $_SESSION['error'] = "Data gagal diupdate" . "<br>" . mysqli_error($con);
    $_SESSION['errorsLog'] = $th;
} finally {
    mysqli_close($con);
    header('location: index.php');
}
