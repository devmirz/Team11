$sql = "select * from csignup";
$q = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    echo "<table  border='5' cellspacing='10' cellpadding='10' border='5'>
    <tr>
            <th>regid</th>
            <th>username</th>
            <th>address</th>
            <th>email</th>
            <th>phnno</th> 
            <th>usertype</th> 
            <th>name</th> 
            <th>Approve</th>
       </tr>";  

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $reg_id=$row['regid'];
        echo "<tr>
            <td>{$row['regid']}</td>
            <td>{$row['username']}</td>
            <td>{$row['address']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phnno']}</td>
            <td>{$row['usertype']}</td>
            <td>{$row['name']}</td>
	    <td><a href="remove-user.php?id=<?php echo $reg_id ?>"><span class="ion-ios-close"></span></a></td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
