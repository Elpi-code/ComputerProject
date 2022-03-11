<!DOCTYPE html>
<html>
    <head>
        <title> Moisture change selected by user page</title>
        <!-- Make the page dark mode -->
        <style>
            body {
            background-color: #1b1a1a;
            color: white;
            }
        </style>
    </head>
    <body>
        <h1>Interacting with your plant</h1>
        <p>What humidity level do you want your plant to have?</br>
           Choose below.</p></br>

        <!--Send humidity choice to userchoice table in database-->
        <form action="redirect.php" method="post">
            <select id="humidity" name="humidity">
                <option value="1">Keep it as is</option>
                <option value="10">10%</option>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60% (recommended)</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
                <option value="100">100% (completely soaked)</option>
            </select>
            <input type="submit" value="Submit">
        </form>
        </br>

        <!--Invite user to visit other pages-->
        <p> To check again the status of your plant soil, click<a href="database.php"> here</a>.</p>
        <p> Or return to the main page <a href="index.php"> here</a>.</p>
    </body>
</html>