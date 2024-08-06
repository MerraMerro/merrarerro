<?php
include 'koneksi.php';

// menyimpan data id kedalam variable
$kode = $_GET['kode'];

// query SQL untuk delete data
$query="DELETE from barang where kode='$kode'";
mysqli_query($conn, $query);

//mengalihkan ke halaman tabel 
header("location:tables-data.php");
?>