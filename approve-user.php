<?php
include 'connection.php';
if(isset($_GET['email']))
{

//$url = 'https://www.geeksforgeeks.org/register?name=Amit&email=amit1998@gmail.com';
    
// Use parse_url() function to parse the URL 

    $url=htmlspecialchars($_GET["email"]);
  //  $url_components = parse_url($url);

// Use parse_str() function to parse the
// string passed via URL
//parse_str($url_components['query'], $params);
    
// Display result
echo $url;
//$email=$_GET['email'];
//echo 'hh'.  $email;
}
//$sql1="update login set status = 'Approved' where email='$email' and usertype='club' " ;
//$result1=mysqli_query($con,$sql1);

?>