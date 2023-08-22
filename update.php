<!DOCTYPE html>
<html>

<head>
    <title>Update Page </title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
    
</head>

<body>
    <center>
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

        // Taking all 5 values from the form data(input)
        // $first_name = $_REQUEST['first_name'];
        // $last_name = $_REQUEST['last_name'];
        //      $gender = $_REQUEST['gender'];
        //      $email = $_REQUEST['email'];
        //      $mobile = $_REQUEST['mobile'];
        // $address = $_REQUEST['address'];

        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the data from the form
            $id=$_POST["id"];
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $address = $_POST["address"];


            $sql = "UPDATE holac SET   first_name='$first_name', last_name='$last_name', gender='$gender', email='$email', mobile='$mobile', address='$address' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully.";
    } else {
        echo "Error updating data: " . $conn->error;
    }
}     


        // Close connection
        mysqli_close($conn);
        ?>

<!-- <h1>Update Data</h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    ID        : <input type="text" name="id" required><br>
    First Name: <input type="text" name="first_name" required><br>
    Last Name : <input type="text" name="last_name" required><br>
    Gender    : <input type="text" name="gender" required><br>
    Email     : <input type="text" name="email" required><br>
    Mobile    : <input type="text" name="mobile" required><br>
    Address   : <input type="text" name="address" required><br>
    <input type="submit" value="Update Data">
</form> -->

<h1>Update Data</h1>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <p>
                <label for="id">ID:</label>
                <input type="text" name="id" required>
            </p>
            <p>
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" required>
            </p>
            <p>
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" required>
            </p>
            <p>
                <label for="gender">Gender:</label>
                <input type="text" name="gender" required>
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" required>
            </p>
            <p>
                <label for="mobile">Mobile:</label>
                <input type="text" name="mobile" required>
            </p>
            <p>
                <label for="address">Address:</label>
                <input type="text" name="address" required>
            </p>
            <input type="submit" value="Update Data">
        </form>





    </center>
</body>

</html>