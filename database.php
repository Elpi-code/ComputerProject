<!DOCTYPE html>
<html>
<body>
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

        //Close connection to database
        mysqli_close($conn);
    ?>
</body>
</html>