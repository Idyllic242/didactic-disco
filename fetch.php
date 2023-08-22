<!DOCTYPE html>
<html>

<head>
    <title>Fetch Page </title>
    
</head>

<body>
    
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "feedback");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }



        $sql = "SELECT * FROM holac";
$result = $conn->query($sql);
?>
<h1>Data Table</h1>
<?php
// Display the data in a table if the button has been clicked and data is available
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
            <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Address</th>
            </tr>";


            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["id"]."</td>
                        <td>".$row["first_name"]."</td>
                        <td>".$row["last_name"]."</td>
                        <td>".$row["gender"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["mobile"]."</td>
                        <td>".$row["address"]."</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "No data found.";
        }      

       




        // Close connection
        mysqli_close($conn);
        ?>
    
</body>

</html>