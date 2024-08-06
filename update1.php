<html>
    <head>
        <title>Update Data</title>
    </head>

    <body align="center">
<?php
include 'koneksi.php';
$namatoko         = $_POST['namatoko'];
$barang        = $_POST['barang'];  
$total          = $_POST['total'];
$tanggal     = $_POST['tanggal'];

$query = "UPDATE pembeli SET barang = ?, total = ?,tanggal = ? WHERE namatoko = ?";

if ($stmt = mysqli_prepare($conn, $query)) {
    // Bind the parameters to the statement
    mysqli_stmt_bind_param($stmt, "siss", $barang, $total, $tanggal, $namatoko);
    
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
            &nbsp; <a href="tables-general.php">kembali</a>
    </body>