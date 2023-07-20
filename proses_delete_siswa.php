<?php
include 'koneksi.php';
session_start();
$id = $_GET['id'];
$sql = "DELETE from siswa where id='$id'";
if (mysqli_query($con, $sql)) {
    $_SESSION['pesan'] = "Data berhasil dihapus";
    header('location: index.php');
} else {
    $_SESSION['error'] = "Data berhasil dihapus" . "<br>" . mysqli_error($con);
}
mysqli_close($con);
