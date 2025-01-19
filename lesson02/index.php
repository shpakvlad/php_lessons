<?php

require_once "engine/get-login.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/main.css">
  <title>Login form</title>
</head>
<body>

<div class="login__section">
  <div class="container">
    <form class="form" method="POST" action="">

      <h2 class="form__title">Login</h2>

      <label class="form__label" for="username">Username : *
        <input class="form__input" type="text" name="username" id="username">
      </label>

      <label class="form__label" for="password">User password : *
        <input class="form__input" type="password" name="password" id="password">
      </label>

      <p class="form__warning-text">
        (*) asterisk - required fields
      </p>

      <div class="form__button-panel">
        <a class="form__register-link" href="#">Register</a>
        <button class="form__login-button" type="submit">Login</button>
      </div>
    </form>
  </div>
</div>

<div class="error-panel <?php echo $_SESSION['error'] ? '' : 'hidden' ?>"> <!--    to hide, add hidden class-->
  <p class="error-panel-message">
      <?php
      if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
      }



      ?>
  </p>

  <button class="error-panel-button" type="button">
    <span class="error-panel-button-line line-1"></span>
    <span class="error-panel-button-line line-2"></span>
  </button>
</div>


<script src="./js/main.js" defer></script>
</body>
</html>