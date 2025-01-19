<?php
session_start();

if (( ! isset($_COOKIE["role"])) or ( ! $_COOKIE["role"] == 'admin')) die("Not logged in");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="./css/main.css">
    <title>Admin page</title>

</head>
<body>

<h1>Admin page</h1>
<a href="index.php?logout=admin">Logout</a>

</body>
</html>

