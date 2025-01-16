<?php
$name = ($_POST['name'] ?? "");
$phone = ($_POST['phone'] ?? "");
$email = ($_POST['email'] ?? "");
$message = ($_POST['message'] ?? "");

$show = false; //show panel data
$error = false;  //show error

if ($name) {
    $show = true;
} else {
    $error = true;
}
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="main.css">
  <title>Document</title>
</head>
<body>

<div class="container">

  <form class="send-form" method="POST" action="">
    <fieldset>
      <label for="name">Name : </label>
      <input type="text" name="name" id="name">

      <label for="phone">Phone : </label>
      <input type="text" name="phone" id="phone">

      <label for="email">Email : </label>
      <input type="text" name="email" id="email">

      <label for="message">Message : </label>
      <textarea name="message" id="message"></textarea>
    </fieldset>

    <button class="send-button" type="submit">Send</button>
  </form>


  <div class="show-panel <?php echo $show ? 'show-panel' : 'show-panel hidden' ?>">

    <p class="show-text">
      Name : <?php echo $name; ?> <br>
      Phone : <?php echo $phone; ?> <br>
      Email : <?php echo $email; ?> <br>
      Message : <?php echo $message; ?>
    </p>

    <button class="close-button">Close</button>

  </div>


</div>

<script src="main.js" defer></script>
</body>
</html>

