<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $nama_orang_tua = htmlspecialchars($_POST["nama_orang_tua"]);
    $asal_sekolah = htmlspecialchars($_POST["asal_sekolah"]);
    $tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
    $nomor_telepon = htmlspecialchars($_POST["nomor_telepon"]);
    $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    
    // Validasi nomor telepon (harus berisi 12/13 digit)
    if (!preg_match("/^\d{12,13}$/", $nomor_telepon)) {
        echo "Nomor telepon harus berisi 12 atau 13 digit angka. <br>";
        exit();
    }

    // Validasi password (harus berisi 2-4 angka)
    if (!preg_match("/^\d{2,4}$/", $password)) {
        echo "Password harus berisi 2-4 angka. <br>";
        exit();
    }

    // ... (lanjutkan dengan pengolahan data dan pesan sukses seperti sebelumnya)

    // Tampilkan pesan sukses jika semua validasi berhasil
    echo "Pendaftaran berhasil! <br>";
    echo "Nama: $nama <br>";
    echo "Nama Orang Tua: $nama_orang_tua <br>";
    echo "Asal Sekolah: $asal_sekolah <br>";
    echo "Tempat Lahir: $tempat_lahir <br>";
    echo "Nomor Telepon: $nomor_telepon <br>";
    echo "Tanggal Lahir: $tanggal_lahir <br>";
    echo "Email: $email <br>";
    echo "Password Kode Santri: $password <br>";

    // Redirect ke halaman sukses dengan menyertakan parameter menggunakan metode GET
    $params = "nama=$nama&nama_orang_tua=$nama_orang_tua&asal_sekolah=$asal_sekolah&tempat_lahir=$tempat_lahir&nomor_telepon=$nomor_telepon&tanggal_lahir=$tanggal_lahir&email=$email&password=$password&hafalan_hadist=$hafalan_hadist&hafalan_alquran=$hafalan_alquran&jenis_kelamin=$jenis_kelamin";
    
    header("Location: halaman_sukses.php?$params");
    exit();
} else {
    // Redirect jika form tidak diakses melalui metode POST
    header("Location: index.html");
    exit();
}
?>
