<?php
session_start();
include "koneksi.php";

$Username = $_POST['Username'];
$Password =md5($_POST['Password']);

$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE Username='$Username' AND Password='$Password'");

$cek = mysqli_num_rows($sql);


if ($cek > 0) {
    $Data = mysqli_fetch_array($sql);

    $_SESSION['Username'] = $Data['Username'];
    $_SESSION['UserID'] = $Data['UserID'];
    $_SESSION['status'] = 'login';
    echo "<script>
    alert('Login Success');
    location.href='../admin/index.php';
    </script>";
}else{
    echo "<script>
    alert('Login Failed, username or password is wrong !');
    location.href='../login.php';
    </>";
}
?>