<?php
include 'koneksi.php';

// menyimpan data id kedalam variable
$namatoko = $_GET['namatoko'];

// query SQL untuk delete data
$query="DELETE from pembeli where namatoko='$namatoko'";
mysqli_query($conn, $query);

//mengalihkan ke halaman tabel 
header("location:tables-general.php");
?>