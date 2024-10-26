<!DOCTYPE html>
<head>
    <title>Data Request</title>
    	<?php
	// Retrieve submitted information
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
	// Sanitize user inputs
	$firstname = htmlspecialchars($_POST['firstname']);
	$lastname = htmlspecialchars($_POST['lastname']);
	$school = ihtmlspecialchars($_POST['school']);
	$spell = ihtmlspecialchars($_POST['spell']);


	// SQL to insert data
	$sql = "INSERT INTO users (firstname, lastname, school, spell) VALUES ('$firstname', '$lastname', '$school','$spell')";
	$result = mysqli_query($conn, $sql);

	// Display the result with HTML formatting

	echo $result ? "Success! Data has been added.<br>" : "Failure: " . mysqli_error($conn) . "<br>";
	echo "<p>Hello, your name is: $firstname $lastname. Your school is: $school. Your favorite spell is: $spell.</p>";

	// Don't forget to close the connection!
	mysqli_close($conn);
	?>
</body>
</html>


