<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-lg mt-10">
        <h1 class="text-2xl font-bold mb-6">Form Registrasi</h1>
        <form action="proses.php" method="POST">
            <div class="mb-4">
                <h2 class="text-xl font-semibold">Biodata</h2>
                <label class="block mb-2" for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="border border-gray-400 p-2 w-full">
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" class="border border-gray-400 p-2 w-full">
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="tanggal_lahir">Tanggal Lahir:</label>
                <div class="flex space-x-2">
                    <select id="tanggal" name="tanggal" class="border border-gray-400 p-2">
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                    <select id="bulan" name="bulan" class="border border-gray-400 p-2">
                        <?php 
                        $months = [
                            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                        ];
                        foreach ($months as $month): ?>
                            <option value="<?= $month ?>"><?= $month ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select id="tahun" name="tahun" class="border border-gray-400 p-2">
                        <?php for ($i = 1990; $i <= date("Y"); $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" class="border border-gray-400 p-2 w-full"></textarea>
            </div>
            <div class="mb-4">
                <label class="block mb-2">Jenis kelamin:</label>
                <div class="flex space-x-4">
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                </div>
            </div>
            <div class="mb-4">
                <h2 class="text-xl font-semibold">User Account</h2>
                <label class="block mb-2" for="username">Username:</label>
                <input type="text" id="username" name="username" class="border border-gray-400 p-2 w-full">
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="email">Email:</label>
                <input type="email" id="email" name="email" class="border border-gray-400 p-2 w-full">
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="password">Password:</label>
                <input type="password" id="password" name="password" class="border border-gray-400 p-2 w-full">
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="ulang_password">Ulangi Password:</label>
                <input type="password" id="ulang_password" name="ulang_password" class="border border-gray-400 p-2 w-full">
            </div>
            <div class="mb-4">
                <h2 class="text-xl font-semibold">Resolusi Tahun Ini</h2>
                <label class="block mb-2"><input type="checkbox" name="resolusi[]" value="Menguasai HTML"> Menguasai HTML</label>
                <label class="block mb-2"><input type="checkbox" name="resolusi[]" value="Paham CSS"> Paham CSS</label>
                <label class="block mb-2"><input type="checkbox" name="resolusi[]" value="Mastering PHP"> Mastering PHP</label>
            </div>
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Kirim Data</button>
            </div>
        </form>
    </div>
</body>
</html>
