<!DOCTYPE html>
<head>
    <title>Form Response</title>
    
    <?php
        // Retrieve submitted information
        $course_number = htmlspecialchars($_GET["courses"]);
        $server = "localhost";
        $username = "php";
        $password = "php_password";
        $database = "testdb";
        $conn = mysqli_connect($server, $username, $password, $database);
        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        }

        $sql = "select course_name, num_students from courses where
        course_number='{$course_number}';";
        $result = mysqli_query($conn, $sql);
    ?>

</head>
<body>
    <!-- Original dump of GET and POST
    <p>GET: <?= var_dump($_GET) ?></p>
    <p>POST: <?= var_dump($_POST) ?></p>-->

    <!--Refined use of the form action/method
    <?php
        // Sanitize inputs
    //    $firstname = htmlspecialchars($_POST['firstname']);
    //    $lastname = htmlspecialchars($_POST['lastname']);
    //    $school = htmlspecialchars($_POST['school']);
    //    $spell = htmlspecialchars($_POST['spell']);

        // Display the friendly message
    //    echo "<p>Hello, your name is: $firstname $lastname. Your school is: $school. Your favorite spell is: $spell.</p>";
    ?>-->
    You selected course <?= $course_number ?>.<br/>
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

