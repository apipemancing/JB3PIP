<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
</head>
<body>
    <h1>Selamat, Pendaftaran Anda Berhasil!</h1>

    <p>Terima kasih atas partisipasi Anda dalam pendaftaran pondok Alquran dan Hadist.</p>

    <!-- Tampilkan informasi pendaftaran -->
    <ul>
        <li>Nama: <?php echo isset($_GET['nama']) ? $_GET['nama'] : ''; ?></li>
        <li>Nama Orang Tua: <?php echo isset($_GET['nama_orang_tua']) ? $_GET['nama_orang_tua'] : ''; ?></li>
        <li>Asal Sekolah: <?php echo isset($_GET['asal_sekolah']) ? $_GET['asal_sekolah'] : ''; ?></li>
        <li>Tempat Lahir: <?php echo isset($_GET['tempat_lahir']) ? $_GET['tempat_lahir'] : ''; ?></li>
        <li>Nomor Telepon: <?php echo isset($_GET['nomor_telepon']) ? $_GET['nomor_telepon'] : ''; ?></li>
        <li>Tanggal Lahir: <?php echo isset($_GET['tanggal_lahir']) ? $_GET['tanggal_lahir'] : ''; ?></li>
        <li>Email: <?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?></li>
        <li>Password Kode Santri: <?php echo isset($_GET['password']) ? $_GET['password'] : ''; ?></li>
        <li>Pernah Menghafalkan Hadist: <?php echo isset($_GET['hafalan_hadist']) ? $_GET['hafalan_hadist'] : 'Tidak'; ?></li>
        <li>Pernah Menghafalkan Alquran: <?php echo isset($_GET['hafalan_alquran']) ? $_GET['hafalan_alquran'] : 'Tidak'; ?></li>
        <li>Jenis Kelamin: <?php echo isset($_GET['jenis_kelamin']) ? $_GET['jenis_kelamin'] : ''; ?></li>
    </ul>

    <p>Terima kasih atas partisipasi Anda dan selamat bergabung!</p>
</body>
</html>
