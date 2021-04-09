<?php

require './libs/database.php';
require './libs/engine/AuthenticationEngine.php';
require './libs/engine/PhotoEngine.php';
require './libs/engine/UsersEngine.php';

session_start();

$authentication = new AuthenticationEngine();
$photos = new PhotoEngine();
$users = new UsersEngine();

require_once './pages/index.php';

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>Top worlds cars</title>
    </head>
    <body>

    </body>
</html>
