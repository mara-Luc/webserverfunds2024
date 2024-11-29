
<!DOCTYPE html>
<html>
<head>
    <title>GPIO Example</title>

    <!--Code for the temp/altude/humid sensor-->
    <script>
        function fetchReadings() {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "get_readings.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = () => {
                if (xhr.status === 200) {
                    const readings = JSON.parse(xhr.responseText);
                    document.getElementById("temperatureValue").innerText = readings.currentTemperature;
                    document.getElementById("pressureValue").innerText = readings.currentPressure;
                    document.getElementById("altitudeValue").innerText = readings.currentAltitude;
                }
            };
            xhr.send();
        }

        function getLEDStatus() {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "control_led.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = () => {
                if (xhr.status === 200) {
                    document.getElementById("toggleButton").innerText = xhr.responseText;
                }
            };
            xhr.send("status=1");
        }

        window.onload = getLEDStatus; // Check LED status when the page loads
    </script>

</head>
<body>
    
    <h1>GPIO Example</h1>
    <br><br>
    
    <h1>Sensor Readings</h1>
    <button onclick="fetchReadings()">Get Readings</button>
    <p>Temperature: <span id="temperatureValue">N/A</span></p>
    <p>Pressure: <span id="pressureValue">N/A</span></p>
    <p>Altitude: <span id="altitudeValue">N/A</span></p>
    
    <br><br>
    
    <!--A way back to main site-->
    <a href="index.php">Back to the landing page</a>

</body>
</html>
