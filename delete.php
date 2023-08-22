<!DOCTYPE html>
<html>

<head>
    <title>Delete Data</title>
    <link rel="stylesheet" type="text/css" href="styles3.css">
</head>

<body>
    <center>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
            $conn = mysqli_connect("localhost", "root", "", "feedback");
            if ($conn === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $id = $_POST["id"];
            $sql = "DELETE FROM holac WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                echo "Data deleted successfully.";
            } else {
                echo "Error deleting data: " . mysqli_error($conn);
            }
            // Close connection
            mysqli_close($conn);
        }
        ?>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <p>
                <label for="id">ID to Delete:</label>
                <input type="text" name="id" required>
            </p>
            <input type="submit" value="Delete Data">
        </form>
    </center>
</body>

</html>
