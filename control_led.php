<?php
if (isset($_POST['toggle'])) {
    // Define the GPIO pin
    $gpioPin = 23;
    toggleLED($gpioPin);
    echo "LED Toggled!";
}

function toggleLED($pin) {
    // Read the current state of the GPIO pin
    $currentState = shell_exec("gpio -g read $pin");
    // Determine the new state (0 to turn off, 1 to turn on)
    $newState = ($currentState == 0) ? 1 : 0;
    // Set the new state to the GPIO pin
    shell_exec("gpio -g write $pin $newState");
}
?>
