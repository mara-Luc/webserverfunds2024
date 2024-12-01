<?php
// Define the path to the bme280 command
$command = '/home/MaraLu/raspberry-pi-bme280/bme280';

// Execute the command and capture the output
$raw = shell_exec($command);

// Output the sensor readings as HTML
echo $deserialized["temperature"];
echo $deserialized["pressure"];
echo $deserialized["humidity"];
?>