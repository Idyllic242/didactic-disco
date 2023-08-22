<!DOCTYPE html>
<html>

<head>
    <title>Insert Page </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        center {
            margin-top: 50px;
        }

        h3 {
            color: #007bff;
        }

        .result {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
        }
    </style>
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
        $id = $_REQUEST['id'];
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
             $gender = $_REQUEST['gender'];
             $email = $_REQUEST['email'];
             $mobile = $_REQUEST['mobile'];
        $address = $_REQUEST['address'];
        

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO holac VALUES ('$id','$first_name',
            '$last_name','$gender','$email','$mobile','$address')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

           
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }


       




        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>