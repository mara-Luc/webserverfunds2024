<?php
// Execute the command and capture the output
$raw = 'sudo /home/MaraLu/raspberry-pi-bme280/bme280';

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
echo "<p>Altitude: " . $deserialized['altitude'] . " meters</p>";
?>

