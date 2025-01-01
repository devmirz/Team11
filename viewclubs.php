<?php
include 'sidebar.php';

?>
 <html>
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
 <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <style>
    .btn, .btnr{
      background: green;
      border: none;
      padding: .7rem;
      border-radius: 10px;
      font-weight: bold;
      margin:2px;
    }
    .btn a,.btnr a{
      text-decoration: none;
      color: white;

    }
    .btnr{
      background:red;
    }
  </style>
   <header>
     <!-- <h1>Welcome to the Admin Dashboard</h1> -->
    </header>
    <body>
      
    <div class="main-content">
    
    <div class="content-cards">
      
      <div class="card">
        <h3>Total Number of Clubs</h3>

        <?php
include 'connection.php';
$sql="select * from csignup";
$result=mysqli_query($con,$sql);
// while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
// {
//   echo $row['email'];
// }

$sql = "select * from csignup";
$q = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<table id='myTable'  cellspacing='10' cellpadding='10' class='table' border='1'>
    <thead>
    <tr>
            <th>clubid</th>
            <th>email</th>
            <th>clubname</th>
            <th>managername</th>
            <th>location</th> 
            <th>contactnumber</th> 
            <th>Approve</th>
    </tr> 
  </thead>";
    // Output data of each row

    while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $email=$row['email'];
        
        echo "<tr>
        <td>{$row['clubid']}</td>
            <td>{$row['email']}</td>
            <td>{$row['clubname']}</td>
            <td>{$row['managername']}</td>
            <td>{$row['location']}</td>
            <td>{$row['contactnumber']}</td>
            
            <td>
              <button type='button' class='btn'><a href='approve-user.php?email=<?php echo $email; ?>'>Approve</a></button>
              <button type='button' class='btnr'><a href='remove-user.php?id=<?php echo $email ?>'>Reject</a></button>
            </td>
           
            </tr>";
          }

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
