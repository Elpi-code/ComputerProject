<!DOCTYPE html>
<html>
<head>
        <title> Sensor readings page</title>
        <!-- Make the page dark mode -->
        <style>
            body {
            background-color: #1b1a1a;
            color: white;
            }
        </style>
</head>
<body>
    <h1>Plant Status</h1>
    <p>Here are the current readings for the Moisture sensor:</p></br>

    <?php
        //Variables
        $servername = "localhost";
        $username = "LP";
        $password = "Raspberry#p1";
        $dbname = "project";

        //Connection to database
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(!$conn){
            die("Connection failed: " .mysqli_connect_error());
        }

        //Select the "moisture" table from the database
        $sql = "SELECT Sensor, Reading, Value FROM moisture";
        $result = mysqli_query($conn, $sql);

        //Output data of each row
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo " " .$row["Sensor"]. " " .$row["Reading"]. " " .$row["Value"]. "<br>"; 
            }
        } else {
                echo "0 results found";
        }

        //Invite user to consult other webpage
        echo "<br><br>To modify the humidity level of the plant, visit this page: <a href='moisturechange.php'> Moisture change</a>. <br>";

        //Close connection to database
        mysqli_close($conn);
    ?>
    <br> <p> Go back to main page <a href="index.php"> here</a>.</p>

</body>
</html>