<?php
include("konek.php"); // Assuming konek.php contains your database connection information

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"]; // Assuming 'alamat' corresponds to 'Alamat' in your table
    $jabatan = $_POST["jabatan"]; // Assuming 'jabatan' corresponds to 'Jabatan' in your table
    $gaji = $_POST["gaji"]; // Assuming 'gaji' corresponds to 'Gaji' in your table

    // Prepare SQL query
    $query = "INSERT INTO Karyawan (NIK, Nama, Alamat, Jabatan, Gaji) 
              VALUES ('$nik', '$nama', '$alamat', '$jabatan', '$gaji')";

    // Execute SQL query
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Close database connection
    mysqli_close($koneksi);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="container mx-auto p-4 bg-white shadow-md rounded">
        <h2 class="text-2xl font-bold mb-4">Tambah Data Karyawan</h2>
        <form action="" method="POST" class="space-y-4">
            <div>
                <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                <input type="text" id="nik" name="nik" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" id="alamat" name="alamat" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="gaji" class="block text-sm font-medium text-gray-700">Gaji</label>
                <input type="text" id="gaji" name="gaji" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Data</button>
            </div>
        </form>
        <div class="mt-4">
            <a href="index.php" class="text-blue-500 hover:underline">Kembali ke Daftar Karyawan</a>
        </div>
    </div>
</body>
</html>
