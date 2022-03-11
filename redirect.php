<!DOCTYPE html>
<html>
    <head>
        <title> Ackowledgement of data received from user page</title>
        <!-- Make the page dark mode -->
        <style>
            body {
            background-color: #1b1a1a;
            color: white;
            }
        </style>
    </head>
<body>
    <?php
        //Variables
        $servername = "localhost";
        $username = "LP";
        $password = "Raspberry#p1";
        $dbname = "project";

        //From moisturechange.php page
        $humidity = $_POST["humidity"];
        $dateandtime = date("Y-m-d h:i:s");

        //Connection to database
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(!$conn){
            die("Connection failed: " .mysqli_connect_error());
        }

        //Insert data from form in moisturechange.php page to the userchoice table in database
        $sql = "INSERT INTO userchoice(Time_of_request, Humidity) VALUES ('$dateandtime', '$humidity')";
        //Make sure there are no errors
        if(mysqli_query($conn, $sql)){
            echo "Your information was successfuly processed <br>";
            echo "Values entered: $humidity <br>";
            echo "Click <a href='index.php'>here</a>. to return to main page.";
        }
        else{
            echo "Error: " .$sql ."<br>" . mysqli_error($conn);
        }

        //Close connection to database
        mysqli_close($conn);
    ?>
    <br> <p> Go back to main page <a href="index.php"> here</a>.</p>

</body>
</html>