<!DOCTYPE html>
<html>
<head>
    <title>Process Form</title>
    
    <?php
    // Retrieve submitted information
    $user_input = htmlspecialchars($_POST["users"]); // Changed the variable name to avoid conflict
    $server = "localhost";
    $db_username = "php"; // Changed the variable name to avoid conflict
    $password = "Voidnull0";
    $database = "signinDB";
    $conn = mysqli_connect($server, $db_username, $password, $database);

    // Check for successful connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT firstname, lastname, school, spell FROM users WHERE username='$user_input'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $firstname = htmlspecialchars($row['firstname']);
        $lastname = htmlspecialchars($row['lastname']);
        $school = htmlspecialchars($row['school']);
        $spell = htmlspecialchars($row['spell']);
    } else {
        $firstname = $lastname = $school = $spell = "Not found";
    }
    ?>
</head>
<body>
    <h1>Process Form</h1>
    <?php
    echo "<p>Hello, your name is: $firstname $lastname. Your school is: $school. Your favorite spell is: $spell.</p>";

    // Close the connection
    mysqli_close($conn);
    ?>
    
    <p>GET: <?= var_dump($_GET) ?></p>
    <p>POST: <?= var_dump($_POST) ?></p>

</body>
</html>
