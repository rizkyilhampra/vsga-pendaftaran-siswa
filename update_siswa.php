<?php require_once 'helper/selected-checked.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <main class="container my-3">
        <a href="index.php" class="d-block mt-3">Kembali</a>
        <article class="mt-3">
            <div class="card">
                <div class="card-header">
                    <h2>Form Ubah Siswa</h2>
                </div>
                <div class="card-body">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM siswa WHERE id='$id'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);

                    ?>
                    <form action="proses_update_siswa.php?id=<?= $row['id']; ?>" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control"><?= $row['address'] ? $row['address'] : ''; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault1" value="Laki-laki" <?= selectedOrChecked('Laki-laki', $row) ?>>
                                <label class="form-check-label" for="flexRadioDefault1">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault2" value="Perempuan" <?= selectedOrChecked('Perempuan', $row) ?>>
                                <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value="" disabled selected>Pilih Agama</option>
                                <option value="Islam" <?= selectedOrChecked('Islam', $row) ?>>Islam</option>
                                <option value="Kristen" <?= selectedOrChecked('Kristen', $row) ?>>Kristen</option>
                                <option value="Hindu" <?= selectedOrChecked('Hindu', $row) ?>>Hindu</option>
                                <option value="Buddha" <?= selectedOrChecked('Buddha', $row) ?>>Buddha</option>
                                <option value="Khonghucu" <?= selectedOrChecked('Khonghucu', $row) ?>>Khonghucu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sekolahAsal" class="form-label">Sekolah Asal</label>
                            <input type="text" class="form-control" id="sekolahAsal" name="sekolahAsal" value="<?= $row['school_before'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </article>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>