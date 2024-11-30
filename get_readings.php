<?php
$raw = `./bme280`;
if ($raw === false) {
    echo json_encode(['error' => 'Failed to execute sensor command']);
    exit;
}

$deserialized = json_decode($raw, true);
if ($deserialized === null) {
    echo json_encode(['error' => 'Failed to decode JSON']);
    exit;
}

echo json_encode([
    'temperature' => $deserialized['temperature'],
    'pressure' => $deserialized['pressure'],
    'humidity' => $deserialized['humidity'],
    'altitude' => $deserialized['altitude']
]);
?>

