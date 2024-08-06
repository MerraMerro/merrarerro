<html>
    <head>
        <title>PHP Pertemuan 4</title>
    </head>

    <body align="center">
<?php
include 'koneksi.php';
$kode         = $_POST['kode'];
$nama        = $_POST['nama'];  
$harga          = $_POST['harga'];
$stok      = $_POST['stok'];

$query = "UPDATE barang SET nama = ?, harga = ?, stok = ? WHERE kode = ?";

if ($stmt = mysqli_prepare($conn, $query)) {
    // Bind the parameters to the statement
    mysqli_stmt_bind_param($stmt, "ssis",$nama, $harga, $stok, $kode);
    
    // Execute the prepared statement
    mysqli_stmt_execute($stmt);
    
    // Check if the query was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Data has been updated successfully.";
    } else {
        echo "No data was updated.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Failed to prepare the update statement: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?>
        <hr>
            &nbsp; <a href="tables-data.php">kembali</a>
    </body>