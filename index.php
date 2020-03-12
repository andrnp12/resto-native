<?php

require_once 'config/connection.php';

$conn = new connection();

if(!empty($_POST)){
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$conn->query("INSERT INTO menu (nama,harga) VALUES ('{$nama}', $harga)");
}
?>

<form action="" method="post">
	<label for="">Menu Makanan</label><br>
	<input type="text" name="nama"><br>
	<label for="">Harga</label><br>
	<input type="number" name="harga"><br>
	<button>Simpan</button>
</form>
