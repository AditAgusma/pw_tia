<?php

function hello()
{
    echo "selamat datang";
}

hello();

function tambah(int $a, int $b)
{
    return $a + $b;
}

echo "<br><br>";
echo tambah(12, 8);

function kali(int $a, int $b)
{
    return $a * $b;
}

echo "<br><br>";
echo kali(12, 8);

function kurang(int $a, int $b)
{
    return $a - $b;
}

echo "<br><br>";
echo tambah(12, 8);
?>

<form method="post">
    masukan angka 1 : <input type="number" name="angka1">
    masukan angka 2 : <input type="number" name="angka2">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php
if (isset($_POST["kirim"])) {
    $newAngka1 = $_POST["angka1"];
    $newAngka2 = $_POST["angka2"];

    echo "<br><br>";
    echo "Hasil tambah: " . tambah($newAngka1, $newAngka2);
    echo "<br>";
    echo "Hasil kali: " . kali($newAngka1, $newAngka2);
    echo "<br>";
    echo "hasil kurang: " . kurang($newAngka1, $newAngka2);
}
?>