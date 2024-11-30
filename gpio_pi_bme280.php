<!DOCTYPE html>
<html>
<head>
    <title>GPIO Example</title>
    <script>
        function updateReadings() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "get_sensor_data.php", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var data = JSON.parse(xhr.responseText);
                    document.getElementById("temperature").innerText = data.temperature;
                    document.getElementById("pressure").innerText = data.pressure;
                    document.getElementById("humidity").innerText = data.humidity;
                    document.getElementById("altitude").innerText = data.altitude;
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

