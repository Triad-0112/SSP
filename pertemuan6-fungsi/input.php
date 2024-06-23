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
        <h1 class="text-2xl font-bold mb-6">Halaman Form</h1>
        <form class="max-w-sm mx-auto" action="proses.php" method="POST">
            <table class="border-collapse border border-slate-400 table-auto">
                <tr>
                    <td><label for="user">User</label></td>
                    <td>: </td>
                    <td class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"><input type="text" id="user" name="user"></td>
                </tr>
                <tr>
                    <td><label for="pass">Password</label></td>
                    <td>: </td>
                    <td class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"><input type="password" id="pass" name="pass"></td>
                </tr>
                <tr>
                    <td><button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" value="Proses Data">Proses Data</button></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </div>
</body>