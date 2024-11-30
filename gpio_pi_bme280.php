<!DOCTYPE html>
<html>
<head>
    <title>BME280 Sensor Readings</title>
    <script>
        function updateReadings() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "get_readings.php", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("readings").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>BME280 Sensor Readings</h1>
    <button onclick="updateReadings()">Update Readings</button>
    <div id="readings">
        <p>Temperature: N/A</p>
        <p>Pressure: N/A</p>
        <p>Humidity: N/A</p>
    </div>
    <br><br>
    <a href="index.php">Back to the landing page</a>
</body>
</html>

