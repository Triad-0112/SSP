<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Proses</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-6">Halaman Proses</h1>
        <p><strong>Nama:</strong> <?= htmlspecialchars($_POST['nama']) ?></p>
        <p><strong>NIM:</strong> <?= htmlspecialchars($_POST['nim']) ?></p>
        <p><strong>Tanggal Lahir:</strong> <?= htmlspecialchars($_POST['tanggal']) ?> - <?= htmlspecialchars($_POST['bulan']) ?> - <?= htmlspecialchars($_POST['tahun']) ?></p>
        <p><strong>Alamat:</strong> <?= nl2br(htmlspecialchars($_POST['alamat'])) ?></p>
        <p><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($_POST['jenis_kelamin']) ?></p>
        <h2 class="text-xl font-semibold mt-4">User Account</h2>
        <p><strong>Username:</strong> <?= htmlspecialchars($_POST['username']) ?></p>
        <p><strong>Alamat Email:</strong> <?= htmlspecialchars($_POST['email']) ?></p>
        <p><strong>Password:</strong> <?= htmlspecialchars($_POST['password']) ?></p>
        <p><strong>Konfirmasi Password:</strong> <?= htmlspecialchars($_POST['ulang_password']) ?></p>
        <h2 class="text-xl font-semibold mt-4">Resolusi Tahun Ini</h2>
        <?php if (!empty($_POST['resolusi'])): ?>
            <?php foreach ($_POST['resolusi'] as $resolusi): ?>
                <p><strong>Target:</strong> <?= htmlspecialchars($resolusi) ?></p>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada resolusi.</p>
        <?php endif; ?>
    </div>
</body>
</html>
