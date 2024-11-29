<!DOCTYPE html>
<html>
<head>
    <title>GPIO</title>
    <script>
        function toggleLED() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "control_led.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("status").innerText = xhr.responseText;
                }
            };
            xhr.send("toggle=1");
        }
    </script>
</head>
<body>
    <h1>Control LED</h1>
    <button onclick="toggleLED()">Toggle LED</button>
    <p id="status">LED Status: Unknown</p>
</body>
</html>

