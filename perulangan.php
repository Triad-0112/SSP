<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
    </head>
</html>
<body>
    <?php
        $user="user";
        if($user=="admin"){
            echo "Selamat Datang Admin!!";
        } else if ($user=="user"){
            echo "Selain Datang User!!!";
        } else {
            echo "Maaf, saya tidak kenal anda";
        }
    ?>
</body>
