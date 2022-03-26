<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="plugins/assets/css/style.css">
  </head>
  <body>
    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1>Please Login or SignUp</h1>
      <button><a href="sesion.php">Login</a></button> or
      <button><a href="sesion.php">SignUp</a></button>      
    <?php endif; ?>
  </body>
</html>
