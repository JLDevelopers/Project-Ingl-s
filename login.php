<?php 
    include_once("config/url.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tela de Login</title>
<link rel="stylesheet" href="<?= $BASE_URL ?>css/login.css">
</head>
<body>
<div class="login-box">
  <p>Login</p>
  <form>
    <div class="user-box">
      <input required="" name="" type="text">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input required="" name="" type="password">
      <label>Password</label>
    </div>
    <a href="<?= $BASE_URL ?>index.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
  <p>Don't have an account? <a href="" class="a2">Sign up!</a></p>
</div>
</body>
</html>