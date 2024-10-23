<!DOCTYPE html>
<head>
    <title>Data Request</title>
    
    <?php
        // Retrieve submitted information
        $username = htmlspecialchars($_GET["users"]);
        $server = "localhost";
        $username = "php";
        $password = "Voidnull0";
        $database = "signinDB";
        $conn = mysqli_connect($server, $username, $password, $database);
        
        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        }

        $sql = "select firstname, lastname, school, spell from courses where username='{$username}';";
        $result = mysqli_query($conn, $sql);
    ?>

</head>
<body>

    <?php
        foreach($result as $row)
        {
            echo "<option value='{$row['username']}'>{$row['username']}</option>\n";
        }
                    
        foreach($result as $row) // There should only be one row returned!
            {
                echo "<p>Hello, your name is: $firstname $lastname. Your school is: $school. Your favorite spell is: $spell.</p>";
            }
            // Don't forget to close the connection!
            mysqli_close($conn);

    ?>

</body>
</html>

