<?php include_once 'includes/session.php' ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="css/site.css">

    <title>Attendance - <?php echo $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container container-fluid">
    <a class="navbar-brand" href="index.php">IT Conference</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mr-auto">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="viewrecords.php">View Attendees</a>
      </div>
      <div class="navbar-nav ml-auto">

        <?php 
          if(!isset($_SESSION['id'])){
        ?>
          <a class="nav-item nav-link active text-white font-weight-bold" aria-current="page" href="login.php">Login</a>
        <?php } else { ?>
          <span class="nav-link active ">Hi, <?php echo $_SESSION['username'] ?>!</span>
          <a class="nav-item nav-link active text-white font-weight-bold" aria-current="page" href="logout.php">Logout</a>
          <?php } ?>
      </div>
    </div>
  </div>
</nav>
<div class='container my-5'>