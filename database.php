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
        $password = "Rasperry#p1";
        $dbname = "project";

        //Connection to database
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(!$conn){
            die("Connection failed: " .mysqli_connect_error());
        }

        //Select the "moisture" table from the database
        $sql = "SELECT Humidity, Level, Percentage FROM moisture";
        $result = $conn->query($sql);

        //Output data of each row
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Humidity" .$row["Humidity"]. "Level: " .$row["Level"]. .$row["Percentage"]. "<br>"; 
            }
            else {
                echo "0 results found";
            }
        }

        //Close connection to database
        mysqli_close($conn);
    ?>
    <br> <p> Go back to main page <a href="index.php"> here</a>.</p>
    
</body>
</html>