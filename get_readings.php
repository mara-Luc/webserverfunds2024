<?php
// Define the path to the bme280 command
$command = '/home/MaraLu/raspberry-pi-bme280/bme280';

// Execute the command and capture the output
$raw = shell_exec($command);
$deserialized = json_decode($raw);

    'temperature' => $deserialized['temperature'],
    'pressure' => $deserialized['pressure'],
    'humidity' => $deserialized['humidity']
?>
