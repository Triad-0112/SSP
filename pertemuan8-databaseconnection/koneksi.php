<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">Tabel Pegawai</h1>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">NIK</th>
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">Alamat</th>
                        <th class="border border-gray-300 px-4 py-2">Jabatan</th>
                        <th class="border border-gray-300 px-4 py-2">Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $server = "localhost";
                    $user = "root";
                    $password = "";
                    $database = "perusahaan";
                    $port = 3306;
                    
                    // Connect to database
                    $koneksi = mysqli_connect($server, $user, $password, $database, $port);

                    // Check connection
                    if (!$koneksi) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // QUERY
                    $query = "SELECT * FROM pegawai";
                    $hasilQuery = mysqli_query($koneksi, $query);

                    // Display data
                    $row = 1;
                    while ($data = mysqli_fetch_row($hasilQuery)) {
                        echo "<tr class='bg-white'>";
                        echo "<td class='border border-gray-300 px-4 py-2'>" . $data[0] . "</td>";
                        echo "<td class='border border-gray-300 px-4 py-2'>" . $data[1] . "</td>";
                        echo "<td class='border border-gray-300 px-4 py-2'>" . $data[2] . "</td>";
                        echo "<td class='border border-gray-300 px-4 py-2'>" . $data[3] . "</td>";
                        echo "<td class='border border-gray-300 px-4 py-2'>" . $data[4] . "</td>";
                        echo "<td class='border border-gray-300 px-4 py-2'>" . $data[5] . "</td>";
                        echo "</tr>";
                        $row++;
                    }

                    // Close connection
                    mysqli_close($koneksi);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
