<?php
session_start();

if (( ! isset($_COOKIE["role"])) or ( ! $_COOKIE["role"] == 'user')) die("Not logged in");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="./css/main.css">
  <title>User page</title>

</head>
<body>

<h1>User page</h1>
<a href="index.php?logout=user">Logout</a>

</body>
</html>
