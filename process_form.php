<!DOCTYPE html>
<html>
<head>
    <title>Process Form</title>
    <?php
    // Retrieve submitted information
    $username = htmlspecialchars($_POST["username"]);
    $server = "localhost";
    $db_username = "php";
    $password = "Voidnull0";
    $database = "signinDB";
    $conn = mysqli_connect($server, $db_username, $password, $database);

    // Check for successful connection
    if (!$conn) {
        die("Connection failed:  . mysqli_connect_error()");
    }

    $sql = "SELECT firstname, lastname, school, spell FROM courses WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    ?>
</head>
<body>
    <h1>Process Form</h1>
    <?php
    foreach ($result as $row) {
        echo "<p>Hello, your name is: " . htmlspecialchars($row['firstname']) . " " . htmlspecialchars($row['lastname']) . ". Your school is: " . htmlspecialchars($row['school']) . ". Your favorite spell is: " . htmlspecialchars($row['spell']) . ".</p>";
    }
    // Don't forget to close the connection!
    mysqli_close($conn);
    ?>
</body>
</html>
