<?php
session_start();
$generatedPwd = $_SESSION['generatedPwd'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <title>Generated Password</title>
</head>

<body class=" bg-black text-light">
  <div class="container">

    <header class="text-center py-5">
      <h1 class="display-3 text-secondary fw-bold mb-4">PHP Strong Password Generator</h1>
      <h2 class="display-5">La password è stata generata correttamente</h2>
    </header>

    <main class="py-5 container">
      <div class="alert alert-success" role="alert">
        <?php echo "Password: $generatedPwd" ?>
      </div>

      <a href="/php-strong-password-generator"> Torna alla Home </a>
    </main>
</body>

</html>