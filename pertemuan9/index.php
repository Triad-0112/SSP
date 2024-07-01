<?php
    include("konek.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM INFORMASI Kampusku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .navbar {
            display: flex;
            justify-content: center;
            padding: 10px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            margin: 0 15px;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .navbar a:hover {
            color: green;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="container mx-auto p-4 bg-white shadow-md">
        <header class="text-center mb-4">
            <h1 class="text-3xl font-bold">Sistem Informasi <span class="text-green-500">Kampusku</span></h1>
        </header>
        <nav class="navbar mb-4">
            <a href="#">Tampil</a>
            <a href="tambahmanual.php">Tambah</a>
            <a href="#">Edit</a>
            <a href="#">Hapus</a>
            <a href="#">Logout</a>
        </nav>
        <h2 class="text-center text-2xl font-semibold mb-4">Data Mahasiswa</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">NIM</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Tempat Lahir</th>
                    <th class="py-2 px-4 border-b">Tanggal Lahir</th>
                    <th class="py-2 px-4 border-b">Fakultas</th>
                    <th class="py-2 px-4 border-b">Jurusan</th>
                    <th class="py-2 px-4 border-b">IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $q = "SELECT * FROM mahasiswa ORDER BY nim ASC";
                    $hasil = mysqli_query($koneksi, $q);
                    while ($data = mysqli_fetch_assoc($hasil)) {
                        echo "<tr>";
                        echo "<td class='py-2 px-4 border-b'>{$data['NIM']}</td>";
                        echo "<td class='py-2 px-4 border-b'>{$data['Nama']}</td>";
                        echo "<td class='py-2 px-4 border-b'>{$data['Tempat Lahir']}</td>";
                        echo "<td class='py-2 px-4 border-b'>{$data['Tanggal Lahir']}</td>";
                        echo "<td class='py-2 px-4 border-b'>{$data['Fakultas']}</td>";
                        echo "<td class='py-2 px-4 border-b'>{$data['Jurusan']}</td>";
                        echo "<td class='py-2 px-4 border-b'>{$data['IPK']}</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <div class="mt-4 text-center">
            <a href="tambahmanual.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Data</a>
        </div>
    </div>
    <?php
        // Close the connection to the MySQL database
        mysqli_close($koneksi);
    ?>
</body>
</html>
