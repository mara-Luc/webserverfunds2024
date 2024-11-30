<!DOCTYPE html>
<html>
<head>
    <title>GPIO Example</title>
    <script>
        function updateReadings() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "get_readings.php", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        try {
                            var data = JSON.parse(xhr.responseText);
                            if (data.error) {
                                console.error(data.error);
                                alert('Error: ' + data.error);
                                return;
                            }
                            document.getElementById("temperature").innerText = data.temperature || 'N/A';
                            document.getElementById("pressure").innerText = data.pressure || 'N/A';
                            document.getElementById("humidity").innerText = data.humidity || 'N/A';
                            document.getElementById("altitude").innerText = data.altitude || 'N/A';
                        } catch (e) {
                            console.error('Failed to parse JSON response:', e);
                        }
                    } else {
                        console.error("Failed to fetch sensor data");
                    }
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>Sensor Readings</h1>
    <button onclick="updateReadings()">Update Readings</button>
    <br><br>
    <p>Temperature: <span id="temperature">N/A</span></p>
    <p>Pressure: <span id="pressure">N/A</span></p>
    <p>Humidity: <span id="humidity">N/A</span></p>
    <p>Altitude: <span id="altitude">N/A</span></p>
    <br><br>
    <!--A way back to main site-->
    <a href="index.php">Back to the landing page</a>
</body>
</html>
