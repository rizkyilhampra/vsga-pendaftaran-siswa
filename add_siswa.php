<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <main class="container my-3">
        <a href="index.php" class="d-block mt-3">kembali</a>
        <article class="mt-3">
            <div class="card">
                <div class="card-header">
                    <h2>Form Tambah Siswa</h2>
                </div>
                <div class="card-body">
                    <?php
                    session_start();
                    if (isset($_SESSION['error'])) {
                        $error = $_SESSION['error'];
                    } else if (isset($_SESSION['errorsLog'])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION['errorsLog'] . "</div>";
                    }
                    unset($_SESSION['error']);
                    ?>
                    <form action="proses_add_siswa.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <?= (isset($error['nama'])) ? "<span class='text-danger'>" . $error['nama'] . "</span>" : ''; ?>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                            <?= (isset($error['alamat'])) ? "<span class='text-danger'>" . $error['alamat'] . "</span>" : ''; ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="flexradiodefault1" value="Laki-laki">
                                <label class="form-check-label" for="flexradiodefault1">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="flexradiodefault2" value="Perempuan">
                                <label class="form-check-label" for="flexradiodefault2">Perempuan</label>
                            </div>
                            <?= (isset($error['jeniskelamin'])) ? "<span class='text-danger'>" . $error['jeniskelamin'] . "</span>" : ''; ?>
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value="" disabled selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                            <?= (isset($error['agama'])) ? "<span class='text-danger'>" . $error['agama'] . "</span>" : ''; ?>
                        </div>
                        <div class="mb-3">
                            <label for="sekolahasal" class="form-label">Sekolah Asal</label>
                            <input type="text" class="form-control" id="sekolahasal" name="sekolahAsal">
                            <?= (isset($error['sekolahAsal'])) ? "<span class='text-danger'>" . $error['sekolahAsal'] . "</span>" : ''; ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </article>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>