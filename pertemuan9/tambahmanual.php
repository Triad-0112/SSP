<?php
include("konek.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $fakultas = $_POST["fakultas"];
    $jurusan = $_POST["jurusan"];
    $ipk = $_POST["ipk"];

    $query = "INSERT INTO mahasiswa (`NIM`, `Nama`, `Tempat Lahir`, `Tanggal Lahir`, `Fakultas`, `Jurusan`, `IPK`) VALUES ('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$fakultas', '$jurusan', '$ipk')";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="container mx-auto p-4 bg-white shadow-md rounded">
        <h2 class="text-2xl font-bold mb-4">Tambah Data Mahasiswa</h2>
        <form action="" method="POST" class="space-y-4">
            <div>
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                <input type="text" id="nim" name="nim" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="fakultas" class="block text-sm font-medium text-gray-700">Fakultas</label>
                <input type="text" id="fakultas" name="fakultas" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="ipk" class="block text-sm font-medium text-gray-700">IPK</label>
                <input type="text" id="ipk" name="ipk" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Data</button>
            </div>
        </form>
        <div class="mt-4">
            <a href="index.php" class="text-blue-500 hover:underline">Kembali ke Daftar Mahasiswa</a>
        </div>
    </div>
</body>
</html>
