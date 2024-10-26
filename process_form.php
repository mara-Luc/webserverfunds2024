<!DOCTYPE html>
<html>
<head>
    <title>Process Form</title>
    
    <?php
    // Retrieve submitted information
    $username = htmlspecialchars($_POST["username"]);
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
