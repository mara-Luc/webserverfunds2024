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
            
                $sql = "SELECT * FROM users;";
                $result = mysqli_query($conn, $sql);
        ?>
        
    </head>

    <body>
        <h1>Harry Potter Example</h1>
        <br><br>
        
        <!---->
        <form action="process_form.php" method="POST">
            <label for="username">Select a username:</label><br/>
            
            <select username="username">
                
                <?php
                    foreach($result as $row)
                    {
                        echo "<option>{$row['username']}</option>\n";
                    }

                    // Don't forget to close the connection!
                    mysqli_close($conn);
                ?>
            
            
            
            </select>
        
            <input type="submit" value="Submit"/>
        
        </form>
        
        <form action="process_form.php" method="GET">
            <label for="username">Select a username:</label><br/>
            
            <br><br>
        
            <h3>Harry Potter input</h3>

            <br><br>
            
            <label for="username">Enter Username</label>
            
            <input type="username" id="username" name="username" placeholder="make a username">
            <br>
            
            <label for="firstname">First Name</label>
            
            <input type="firstname" id="firstname" name="firstname" placeholder="John">
            <br>

            <label for="lastname">Last Name</label>
            
            <input type="lastname" id="lastname" name="lastname" placeholder="Smith">
            <br>

            <label for="school">School Attending</label>
            
            <input type="school" id="school" name="school" placeholder="Hogwarts">
            <br>

            <label for="spell">What is your favorite Spell?</label>
            
            <input type="spell" id="spell" name="spell" placeholder="Expelliarmus">

            <br><br>            
            <input type="submit" value="Submit"/>   
        
        </form>

        <br><br>
        <!--A way back to main site-->
        <a href="index.php">Back to the landing page</a>
    
    </body>

</html> 