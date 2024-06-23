<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-lg mt-10">
        <?php
            function tambah($a,$b){
                return $a + $b;
            }
            function kali($a,$b){
                return $a * $b;
            }
            $a = tambah(100,50);
            $b = kali(100,50);
            echo "$a";
            echo "<br>";
            echo "$b";
            ##function salam($waktu,$nama){
                ##echo    "<p> $waktu, $nama. Hari ini kita mau kemana? </p>";
                ##echo "<p> Sarapan apa hari ini </p>";
            ##}
            #salam("Selamat Pagi","Panji");
            #echo "<br>";
            #salam("Selamat Malam mantan terindah","Shabrina");
        ?>
    </div>
</body>