<?php 
session_start();
include "koneksi.php";

if (isset($_POST['add'])) {
    $NamaAlbum = $_POST['NamaAlbum'];
    $Deskripsi = $_POST['Deskripsi'];
    $TanggalDibuat = date('Y-m-d');
    $UserID = $_SESSION['UserID'];

    $sql = mysqli_query($koneksi, "INSERT INTO album (NamaAlbum, Deskripsi, TanggalDibuat, UserID) 
    VALUES ('$NamaAlbum', '$Deskripsi', '$TanggalDibuat', '$UserID')");

    if (!$sql) {
        die("Query gagal: " . mysqli_error($koneksi));
    }

    echo "<script>
    alert('Album berhasil ditambahkan');
    location.href='../admin/album.php';
    </script>";
}

if (isset($_POST['edit'])) {
    $AlbumID = $_POST['AlbumID'];
    $NamaAlbum = $_POST['NamaAlbum'];
    $Deskripsi = $_POST['Deskripsi'];
    $TanggalDibuat = date('Y-m-d');
    $UserID = $_SESSION['UserID'];

    $sql = mysqli_query($koneksi, "UPDATE album SET NamaAlbum='$NamaAlbum', Deskripsi='$Deskripsi', TanggalDibuat='$TanggalDibuat' WHERE AlbumID='$AlbumID'");

echo "<script>
alert('Album berhasil di perbarui');
location.href='../admin/album.php';
</script>";
}
if (isset($_POST['delete'])) {
    $AlbumID = $_POST['AlbumID'];
    $sql = mysqli_query($koneksi, "DELETE FROM album WHERE AlbumID='$AlbumID'");
    echo "<script>
    alert('Berhasil hapus data!');
    location.href='../admin/album.php';
    </script>";
}
?>