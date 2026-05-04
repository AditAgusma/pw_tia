<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (username, password, nama, email) values ('$username','$password','$nama','email')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "data berhasil ditambahkan";
    }else {
        echo "data gagal ditambahkan";
    }
}

?>


<form method="post">
    username : <input type="text" name="username">
    password : <input type="password" name="password">
    nama : <input type="text" name="nama">
    email : <input type="email" name="email">
    <input type="submit" name="kirim" value="kirim data">
</form>

