<?php
$HAANGA_VERSION  = '1.0.7';
/* Generated from /media/ramon/ProgramsAndFiles/sites/vqd/public/index.html */
function haanga_a346bd4b28f81badcccb1628fe77e560c443834c($vars15c001c9d8a7db, $return=FALSE, $blocks=array())
{
    extract($vars15c001c9d8a7db);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="simple-grid.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <script  type="text/javascript">
        var key = "'.htmlspecialchars($key).'";
    </script>
</head>
<body class="bg">

<div class="container">
    <div class="row">
        <div class="col-12">
           SITE NAME
        </div>
    </div>
    <div class="row video-region">

        <div class="col-12">
            <video autoplay id="myCam" name="myCam"></video>
        </div>

    </div>
    <div class="row">

        <div class="col-12">

            <input type="text" class="text-box" placeholder="TYPE HERE A MESSAGE TO SEND AND PRESS ENTER..."/>

        </div>

    </div>

</div>


<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<script src="wsclient.js"></script>
<script src="main.js"></script>
</body>
</html>';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}