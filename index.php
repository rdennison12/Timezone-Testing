<?php

$serverTimeZone = date_default_timezone_get();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TimeZone Testing</title>
</head>
<body>

    <h1>Server Timezone</h1>
    <p><?= $serverTimeZone?></p>

</body>
</html>
