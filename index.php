<?php

$serverTimeZone = date_default_timezone_get();

$serverTime = date("D, d-m-y H:i");

$timezone_abbreviations = DateTimeZone::listAbbreviations();
//print_r($timezone_abbreviations["acst"]);

//var_dump($timezone_abbreviations["America"]);
$timezone_identifiers = DateTimeZone::listIdentifiers();
//for ($i=0; $i < 5; $i++) {
//    echo "$timezone_identifiers[$i]\n";
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TimeZone Testing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h3>Server Timezone</h3>
    <p><?= $serverTimeZone ?></p>
    <h3>Server Time</h3>
    <p><?= $serverTime ?></p>

    <h3>Computer Time</h3>
    <p id="computerTime"></p>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
            crossorigin="anonymous"></script>-->
    <script type="text/javascript">
        var currentTime = new Date()
        var hours = currentTime.getHours()
        var minutes = currentTime.getMinutes()

        // if (minutes < 10){
        //     minutes = "0" + minutes;
        // }
        // // var suffix = "AM";
        // if (hours >= 12) {
        //     // suffix = "PM";
        //     hours = hours - 12;
        // }
        // if (hours === 0) {
        //     hours = 12;
        // }

        document.write("<b>" + hours + ":" + minutes + " " +"</b>");
    </script>

</div>

</body>
</html>
