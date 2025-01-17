<?php
$name = trim(strip_tags($_POST['name'] ?? ""));
$phone = trim(strip_tags($_POST['phone'] ?? ""));
$email = trim(strip_tags($_POST['email'] ?? ""));
$message = trim(strip_tags($_POST['message'] ?? ""));

$show = false; //show panel data
$error = false;  //show error

if ($name and $phone and $email and $message) {
    $show = true;

    mail($email, $name, $message);
} else {
    $show = true;
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
      <input type="text" name="name" id="name" value="<?php if (isset($name)) echo $name ?>">

      <label for="phone">Phone : </label>

      <input type="text" name="phone" id="phone" value="<?php if (isset($phone)) echo $phone?>">

      <label for="email">Email : </label>
      <input type="text" name="email" id="email" value="<?php if (isset($email))echo $email?>">

      <label for="message">Message : </label>
      <textarea name="message" id="message"><?php if (isset($message))echo $message?></textarea>
    </fieldset>

    <button class="send-button" type="submit">Send</button>
  </form>


  <div class="
  <?php echo $show ? 'show-panel' : 'hidden' ?>
  <?php echo $error ? 'show-error' : 'show-text' ?>
">
    <p class="show-text-panel ">
        <?php
        if (!$error) { ?>
      Name : <?php echo $name; ?> <br>
      Phone : <?php echo $phone; ?> <br>
      Email : <?php echo $email; ?> <br>
      Message : <?php echo $message; ?>
        <?php
        } else { ?>
      Fill all fields! <?php
    }
    ?>
    </p>

    <button class="close-button <?php echo $error ? 'show-error' : 'show-text' ?>">Close</button>
  </div>


</div>

<script src="main.js" defer></script>
</body>
</html>

