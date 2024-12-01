<?php
// Define the path to the bme280 command
$command = '/home/MaraLu/raspberry-pi-bme280/bme280';

// Execute the command and capture the output
$raw = shell_exec($command);

// Check if the command execution was successful
if ($raw === null) {
    echo "Error: Unable to execute command.";
    exit;
}

// Decode the JSON output
$deserialized = json_decode($raw, true);

// Check if the JSON decoding was successful
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Error: Invalid JSON data.";
    exit;
}

// Output the sensor readings as HTML
echo "<h2>Sensor Readings:</h2>";
echo "<p>Temperature: " . $deserialized['temperature'] . "°C</p>";
echo "<p>Pressure: " . $deserialized['pressure'] . " hPa</p>";
echo "<p>Humidity: " . $deserialized['humidity'] . "%</p>";
?>
