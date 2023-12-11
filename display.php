 <?php
include("connection.php");

$query = "SELECT * FROM formdata";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0)
{    
    ?>

    <h2 align="center">All DATA</h2>
    <table border=5px  cellspacing="7" width="80%" align="center">
        <tr>
        <th>ID</th>   
        <th>Firest name</th>
        <th>Lastst name</th>
        <th> Email </th>
        <th> password </th>
        <th> cpassword </th>
        <th> gender </th>
        <th width="15%"> address </th>
        <th width="15%"> phonenumber </th>
        <th width="15%"> Opretion </th>
        </tr>
    <?php
    // echo "table has records";
    // Loop through each record
    while ($row = mysqli_fetch_assoc($data)) {
        // Access data from each row
        $display = $row['fname']." ".$row['lname']." ".$row['email']." ".$row['password']." ".$row['cpassword']." ".$row['gender']." ".$row['address']." ".$row['phonenumber'];
       
        echo "<tr>
                  <td>".$row['ID']."</td>
                  <td>".$row['fname']."</td>
                  <td>".$row['lname']."</td>
                  <td>".$row['email']."</td>
                  <td>".$row['password']."</td>
                  <td>".$row['cpassword']."</td>
                  <td>".$row['gender']."</td>
                  <td>".$row['address']."</td>
                  <td>".$row['phonenumber']."</td>
                  <td> <a href='update.php?Id=$row[ID]'>Update</a></td>
        
             </tr>";
     }
} else {
    echo "No records found in the table";
}

// Optional: use session or URL parameters to pass data to another page
?>
</table>


