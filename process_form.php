<!DOCTYPE html>
<html>
<head>
    <title>Process Form</title>
    
    <?php
        // Retrieve submitted information
        $username = htmlspecialchars($_POST["users"]);
        $server = "localhost";
        $username = "php";
        $password = "Voidnull0";
        $database = "signinDB";
        $conn = mysqli_connect($server, $username, $password, $database);
        
        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        }

        $sql = "select firstname, lastname, school, spell from users where username='{$username}';";
        $result = mysqli_query($conn, $sql);
    ?>

</head>

<body>
    <h1>Process Form</h1>
    <?php
    // Sanitize inputs
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $school = htmlspecialchars($_POST['school']);
    $spell = htmlspecialchars($_POST['spell']);

    //echo "<p>Hello, your name is: $firstname $lastname. Your school is: $school. Your favorite spell is: $spell.</p>";
    
    foreach($result as $row) // There should only be one row returned!
    {
        echo "<p>Hello, your name is: $firstname $lastname. Your school is: $school. Your favorite spell is: $spell.</p>";
    }

    // Don't forget to close the connection!
    mysqli_close($conn);
    
    ?>

</body>
</html>
