<?php 
include "koneksi.php";

$Username    = mysqli_real_escape_string($koneksi, $_POST['Username']);
$Password    = md5(trim($_POST['Password']));
$Email       = mysqli_real_escape_string($koneksi, $_POST['Email']);
$NamaLengkap = mysqli_real_escape_string($koneksi, $_POST['NamaLengkap']);
$Alamat      = mysqli_real_escape_string($koneksi, $_POST['Alamat']);

$sql = mysqli_query($koneksi, "INSERT INTO user (Username, Password, Email, NamaLengkap, Alamat) 
                            VALUES ('$Username', '$Password', '$Email', '$NamaLengkap', '$Alamat')");

if ($sql) {
    echo "<script>
            alert('Daftar akun berhasil');
            window.location.href='../login.php';
        </script>";
} else {
    echo "<script>
            alert('Pendaftaran Gagal');
            window.location.href='register.php';
        </script>";
}
?>
