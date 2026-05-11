<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (username, password, nama, email) values ('$username','$password','$nama','$email')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "data berhasil ditambahkan";
    }else {
        echo "data gagal ditambahkan";
    }
}

//proses hapus 
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql = "DELETE FROM user WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "data berhasil dihapus";
    } else {
        echo "data gagal dihapus";
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

//menampilkan data

<table border="1"> 
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>nama</th>
        <th>email</th>
        <th>aksi</th>

    </tr>
    <?php
    $sql = "SELECT * FROM user";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['username']}</td>
        <td>{$row['password']}</td>
        <td>{$row['nama']}</td>
        <td>{$row['email']}</td>
        <td><a href='materi5.php?hapus={$row['id']}'>hapus</a>  |  <a href=?edit={$row['id']}'>edit</a>   

        </tr>";
    }
    ?>

</table>

<?php 
if(isset($_GET['edit'])){
    $id = $_GET['edit'];

    $sql = "SELECT * FROM user WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
?>

<form method="post">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    username :<input type="text" name="username" value="<?php echo $row['username']; ?>">

    password :<input type="password" name="password" value="<?php echo $row['password']; ?>">

    nama :<input type="text" name="nama" value="<?php echo $row['nama']; ?>">

    email :<input type="email" name="email" value="<?php echo $row['email']; ?>">
    <input type="submit" name="update" value="update data">
</form>

<?php
}
?>

<?php
if (isset($_POST['update'])) {

    $id = $_POST['id'];

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "UPDATE user 
            SET username='$username',
                password='$password',
                nama='$nama',
                email='$email'
            WHERE id='$id'";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "data berhasil diupdate";
    } else {
        echo "data gagal diupdate";
    }
}
?>