<!DOCTYPE html>
<html lang="en">
<?php
include 'connection.php'
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="assets/css/admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
  .sidebar{
    position: relative;
  }

  
</style>


<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h5>CLUB DASHBOARD</h5>
    <ul>
      <li><a href="admin.php">Dashboard</a></li>
      <li><a href="viewplayers.php">Players</a></li>
      <li><a href="#">Events</a></li>
      <li><a href="#">Tables</a></li>
    </ul>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-lg-3" id="im">
        <div class="card" style="height: 20rem;">
          <img src="assets/img/fcblogo.jpeg" class="img-fluid" style="height: 10rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card" style="height: 20rem;">
          <img src="assets/img/mufc.jpg" class="img-fluid" style="height: 10rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card" style="height: 20rem;">
          <img src="assets/img/about.jpg" class="img-fluid" style="height: 10rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card" style="height: 20rem;">
          <img src="assets/img/about1.jpg" class="img-fluid" style="height: 10rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card" style="height: 20rem; margin-top: 10px;">
          <img src="assets/img/about1.jpg" class="img-fluid" style="height: 10rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</body>

</html>