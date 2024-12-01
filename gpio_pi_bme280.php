<!DOCTYPE html>
<html>
<head>
    <title>BME280 Sensor Readings</title>
</head>
<body>
    <h1>BME280 Sensor Readings</h1>
    
    <form method="POST">
        <input type="submit" name="submit" value="Update Readings"/>   
    </form>
    
    <br><br>
    
    <a href="index.php">Back to the landing page</a>

    <?php
    if (isset($_POST['submit'])) {
        // Define the path to the bme280 command
        $command = '/home/www-data/raspberry-pi-bme280/bme280';

        // Execute the command and capture the output
        $output = shell_exec("$command 2>&1");  // Capture any errors as well

        // Debugging: Output the raw command response
        echo "<pre>Raw Output: $output</pre>";

        // Check if the command execution was successful
        if ($output === null) {
            echo "<p>Error: Unable to execute command.</p>";
        } else {
            // Decode the JSON output
            $deserialized = json_decode($output, true);

            // Check if the JSON decoding was successful
            if (json_last_error() !== JSON_ERROR_NONE) {
                echo "<p>Error: Invalid JSON data. JSON Error: " . json_last_error_msg() . "</p>";
            } else {
                // Output the sensor readings as HTML
                echo "<h2>Sensor Readings:</h2>";
                echo "<p>Temperature: " . $deserialized['temperature'] . "°C</p>";
                echo "<p>Pressure: " . $deserialized['pressure'] . " hPa</p>";
                echo "<p>Humidity: " . $deserialized['humidity'] . "%</p>";
                echo "<p>Altitude: " . $deserialized['altitude'] . " meters</p>";
            }
        }
    }
    ?>
</body>
</html>


