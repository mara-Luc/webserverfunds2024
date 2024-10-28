<!DOCTYPE html>

<html>

    <head>
    
        <title>Harry Potter Example DataBase</title>
        
        <?php
            $server = "localhost";
            $username = "php";
            $password = "Voidnull0";
            $database = "signinDB";
            $conn = mysqli_connect($server, $username, $password, $database);
            // Check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
                }
                //write a query for all users
                $sql = "SELECT * FROM users;";
                //make query & get results
                $result = mysqli_query($conn, $sql);
        ?>
        
    </head>

    <body>
        <h1>Harry Potter Example</h1>
        <br><br>
        
        <!---->
        <form action="process_form.php" method="get">
            <label for="username">Select a username:</label><br/>
            <select id="username" name="username">
                <?php
                    foreach($result as $row)
                    {
                        echo "<option>{$row['username']}</option>\n";
                    }
                    
                    // Don't forget to close the connection!
                    mysqli_close($conn);
                ?>
            
            </select>

            <br/>
        
            <input type="submit" value="submit"/>
        
        </form>

        <br><br>
        <!--A way back to main site-->
        <a href="index.php">Back to the landing page</a>
    
    </body>

</html> 