<?php
// Establish connection with MySQL database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "perusahaan";
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$koneksi) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}
?>
