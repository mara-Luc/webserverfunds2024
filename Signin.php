<!DOCTYPE html>

<html>

    <head>
    
        <title>Sign in</title>
        
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
            
                $sql = "select * from users;";
                $result = mysqli_query($conn, $sql);
        ?>
        
    </head>

    <body>
        <h1>Sign in</h1>
        
        <!--using forms to Authenticate user with user name being required and having a placeholder for clairity-->
        <!--modified form to action/method for php "form_response.php"-->
        <form action="Data_submission.php" method="POST">
            <!-- Your form inputs here -->
            
            <label for="username">Username</label>
            
            <input type="username" id="username" name="username" placeholder="your username or email" required>
            <br>
            
            <label for="firstname">First Name</label>
            
            <input type="firstname" id="firstname" name="firstname" placeholder="John" required>
            <br>

            <label for="lastname">Last Name</label>
            
            <input type="lastname" id="lastname" name="lastname" placeholder="Smith" required>
            <br>

            <label for="school">School Attending</label>
            
            <input type="school" id="school" name="school" placeholder="Hogwarts" required>
            <br>

            <label for="spell">What is your favorite Spell?</label>
            
            <input type="spell" id="spell" name="spell" placeholder="Expelliarmus" required>
            <br>

            <!--using forms to Authenticate user with password that needs to be 8 char using pattern and having a placeholder for clairity-->
            <label for="pwd">Password:</label>
        
            <input type="password" id="pwd" name="pwd" pattern=".{8,}" title="Eight or more characters" placeholder="your password" required>
            <br><br>            
            <input type="submit" value="Submit"/>   
        </form>
    
        <br><br>
        
        <!-- -->
        <form action="Data_request.php" method="get">

            <label for="username">Select a username:</label><br/>
            
            <select id="username" name="username">
            
                <?php
                    foreach($result as $row)
                    {
                        echo "<option
                        value='{$row['username']}'>{$row['username']}</option>\n";
                    }
            
                    // Don't forget to close the connection!
                    mysqli_close($conn);
        
                ?>

            </select>
        <br/>
        
        <input type="submit" value="submit"/>
        
        </form>

        <?php
            // Retrieve submitted information
            $ = htmlspecialchars($_GET["courses"]);
            $server = "localhost";
            $username = "php";
            $password = "php_password";
            $database = "testdb";
            $conn = mysqli_connect($server, $username, $password, $database);
            // Check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
                }
            
                $sql = "select firstname, lastname, school, spell from courses where
                username='{$username}';";
                $result = mysqli_query($conn, $sql);
        ?>

            Your selected username <?= $username ?>.<br/>
        <?php
            foreach($result as $row) // There should only be one row returned!
                {
                    echo "<p>Hello, your name is: $firstname $lastname. Your school is: $school. Your favorite spell is: $spell.</p>";
                }
                // Don't forget to close the connection!
                mysqli_close($conn);
        ?>

        <br><br>
        <!--A way back to main site-->
        <a href="index.php">Back to the landing page</a>
    
    </body>

</html> 