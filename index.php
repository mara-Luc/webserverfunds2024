<!DOCTYPE html>

<head>
    <title>Server Info</title>
</head>

<body>

    <php? 
        echo $_SERVER['PHP_SELF'];
        echo $_SERVER['SERVER_NAME'];
        echo $_SERVER['HTTP_HOST'];
        echo $_SERVER['HTTP_REFERER'];
        echo $_SERVER['HTTP_USER_AGENT'];
        echo $_SERVER['SCRIPT_NAME'];
    ?>

</body>

</html>
