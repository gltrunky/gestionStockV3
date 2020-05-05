<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

   <!-- bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- dataTables -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/25c9006a57.js"></script>
  <!-- mon css -->
  <link rel="stylesheet" href="/component/css/style.css"> 

  <title>Projet Gestion</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-dark bg-dark ">
      <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i>
        <img src="/component/img/logo.png" width="45%" class="d-inline-block align-top" alt="logo">
      </a>
      <span class="text-white">
        <?php
        if ($connected == true) {
          echo Controllers::writingHello($_SESSION["prenomUser"] . " " . $_SESSION["nomUser"]);
        } else {
          echo Controllers::writingHello("invité");
        }
        ?>
      </span>
    </nav>
  </header>