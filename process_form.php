<!DOCTYPE html>
<html>
<head>
    <title>Process Form</title>
    
    <?php
        // Retrieve submitted information
        $user_input = htmlspecialchars($_POST["users"]);
        $server = "localhost";
        $username = "php";
        $password = "Voidnull0";
        $database = "signinDB";
        $conn = mysqli_connect($server, $username, $password, $database);
        
        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        }

        $sql = "SELECT firstname, lastname, school, spell FROM users WHERE username='{$user_input}';";
        $result = mysqli_query($conn, $sql);

        //Seperating the array
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $firstname = htmlspecialchars($result)['firstname']);
            $lastname = htmlspecialchars($result)['lastname']);
            $school = htmlspecialchars($$result)['school']);
            $spell = htmlspecialchars($result)['spell']);
        } else {
            $firstname = $lastname = $school = $spell = "Not found";
        }
    ?>

</head>

<body>
    <h1>Process Form</h1>
    <?php
    
    echo "<p>Hello, your name is: $firstname $lastname. Your school is: $school. Your favorite spell is: $spell.</p>";

    // Don't forget to close the connection!
    mysqli_close($conn); 
    ?>
</body>
</html>
