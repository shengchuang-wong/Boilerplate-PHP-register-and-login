<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="http://foundragon.com/project/foundragon/project/web%20developer%202.0/mvc/styles.css">

  </head>
  <body>

  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="http://foundragon.com/project/foundragon/project/web%20developer%202.0/mvc/">Twitter</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="?page=time">Your timeline</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=yourtweets">Your tweets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?publicprofiles">Public Profiles</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
    <?php 
        if ($_SESSION['id']) {  ?>

      <button class="btn btn-outline-success my-2 my-sm-0" id="logoutBtn">Logout</button>

    <?php 
      } else {
     ?>

      <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#myModal">Login/Signup</button>

      <?php } ?>
    </div>
  </div>
</nav>