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
        <h1 class="text-2xl font-bold mb-6">Hasil Proses</h1>
        <?php
            echo "User      : " .$_POST["user"]."<br>";
            echo "Password  : " .$_POST["pass"]."<br>";
        ?>
    </div>
</body>
</html>
