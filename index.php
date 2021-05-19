<?php
    require_once('dbd.php');
    $sql="SELECT id, title, start, end, color FROM events";
    $req=$dbd->prepare($sql);
    $req->execute();
    $events=$req->fetchAll();
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="author" content="">
            <title></title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href='css/fullcalendar.css' rel="stylesheet"/>
        </head>
        <body>
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src='js/moment.min.js'></script>
            <script src='js/fullcalendar/fullcalendar.min.js'></script>
            <script src='js/fullcalendar/fullcalendar.js'></script>
            <script src='js/fullcalendar/locale/en.js'></script>
        </body>
    </html>