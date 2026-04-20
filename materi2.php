<form method="post">
    masukan angka : <input type="number" name="angka">
    <input type="submit" name="kirm" value="kirim">
</form>

<?php
if(isset ($_POST["angka"])){
    $newAngka = $_POST["angka"];
    for ($i = 1; $i <= $newAngka; $i++) {
        if ($i % 2 == 0) {
            echo "$i ini adlah angka (genap) <br>";
        }else {
            echo "$i ini adalah angka (ganjil) <br>";
        }
    }
}

?>