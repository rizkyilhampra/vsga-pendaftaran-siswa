<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <main class=" container">
        <header class="my-3">
            <h1 class="text-center">Pendaftaran Siswa Baru</h1>
            <hr>
        </header>
        <?php
        session_start();
        if (isset($_SESSION['pesan'])) {
            echo "<div class='alert alert-success'>" . $_SESSION['pesan'] . "</div>";
            unset($_SESSION['pesan']);
        } else if (isset($_SESSION['error'])) {
            echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
            unset($_SESSION['error']);
        }
        ?>
        <a href="add_siswa.php" class="btn btn-primary ">Tambah siswa baru</a>
        <article class="mt-3">
            <h2>Daftar siswa terdaftar</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Sekolah Asal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = "SELECT * FROM siswa";
                    $result = mysqli_query($con, $sql);
                    $no = 0;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $no++;
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td>" . $row['sex'] . "</td>";
                            echo "<td>" . $row['religion'] . "</td>";
                            echo "<td>" . $row['school_before'] . "</td>";
                            echo "<td><a href='update_siswa.php?id=" . $row['id'] . "' class='btn btn-warning'>
                            <i class='bi bi-pencil-fill'></i></a> <a href='proses_delete_siswa.php?id=" . $row['id'] . "' class='btn btn-danger' id='deleteSiswa'>
                            <i class='bi bi-trash-fill'></i></a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Data Tidak Ada</td></tr>";
                    }
                    echo "<caption>Jumlah Data: " . mysqli_num_rows($result) . "</caption>";
                    ?>
                </tbody>
            </table>
        </article>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>