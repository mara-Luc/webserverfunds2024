<?php
// Define the path to the bme280 command
shell_exec("/home/MaraLu/raspberry-pi-bme280");
$command = './bme280';

// Execute the command and capture the output
$raw = shell_exec($command);

if ($raw === false) {
    echo json_encode(['error' => 'Failed to execute sensor command']);
    error_log('Failed to execute sensor command');
    exit;
}

$deserialized = json_decode($raw, true);
if ($deserialized == null) {
    echo json_encode(['error' => 'Failed to decode JSON']);
    error_log('Failed to decode JSON');
    exit;
}

echo json_encode([
    'temperature' => $deserialized["temperature"],
    'pressure' => $deserialized["pressure"],
    'humidity' => $deserialized["humidity"],
    'altitude' => $deserialized["altitude"]
]);
?>

