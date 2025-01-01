<!DOCTYPE html>
<html lang="en">
<?php
session_start();

include 'connection.php';
?>
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dashboard</title>
  <link rel="stylesheet" href="assets/css/admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

</head>

<style>
    .sidebar{
        position: relative;
    }

    
</style>

<body style="background-color: #80C4E9">

  <!-- Sidebar -->
  <div class="sidebar">
    <h4>Club Dashboard</h4>
    <ul>
      <li><a href="club-dash.php">Dashboard</a></li>
      <li><a href="prequest.php">Request</a></li>
      <li><a href="#">Clubs</a></li>
      <li><a href="#">Events</a></li>
      <li><a href="#">Tables</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="container mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-12" >
          <div class="card" style="height: 20rem; background-color: #C9E6F0;">
          <?php

$email= $_SESSION["email"];

$sql = "SELECT managername, location, contactnumber,managerpic FROM csignup where email='$email' "; // Your SQL query
$result = mysqli_query($con, $sql); // Execute the query


// Check if the query was successful and if there are any results
if (mysqli_num_rows($result) > 0) {
    // Loop through the result set and display each row
    while ($row = mysqli_fetch_assoc($result)) {
              $file=$row["managerpic"];
              echo "<img src='ManagerPhoto/" . $file . "' class='img-fluid' style='height: 10rem;object-fit: contain' alt='...'>
       <div class='card-body'>";
              echo "<h3 class='card-title' style='font-size: 2rem !important'>Manager: ".$row["managername"]."</h3>";
              echo "<p class='card-text fs-5'>Club:".$row["location"]."</p>";
              echo "<p class='card-text fs-6'>Contact: ".$row["contactnumber"]."</p>";
    }
} else {
    echo "No results found.";
}

?>
           
            
              
              
            </div>
          </div>
          <?php

$sql="select * from psignup";
$result=mysqli_query($con,$sql);    
// while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
// {
//   echo $row['email'];
// }

$sql = "select * from psignup";
$q = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<table id='myTable' cellspacing='10' cellpadding='10' class='table mt-3' border='1' ; style = background-color: #C9E6F0>
    <thead>
    <tr>
            <th>pid</th>
            <th>name</th>
            <th>dob</th>
            <th>location</th> 
            <th>contactnumber</th> 
            <th>email</th>

            
    </tr> 
  </thead>";
    // Output data of each row

    while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $playersid=$row['pid'];
        echo "<tr>
        <td>{$row['pid']}</td>
            <td>{$row['name']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['location']}</td>
            <td>{$row['contactnumber']}</td>
            <td>{$row['email']}</td>
            </tr>";
          }
          /*<td><a href="remove-user.php?id=<?php echo $reg_id ?>"><span class="ion-ios-close"></span></a></td>*/

    echo "</table>";
} else {
    echo "0 results";
}

          ?>
        </div>

  </div>  
  <script>
    let table = new DataTable('#myTable');
  </script>
  


</body>
</html>