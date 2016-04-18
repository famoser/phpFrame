<?php
/**
 * Created by PhpStorm.
 * User: famoser
 * Date: 20/03/2016
 * Time: 21:57
 */

include "../../vendor/autoload.php";
?>
<html>
<head>
    <meta charset="UTF-8"/>
    <base href="http://localhost:8080/phpFrame/" target="_blank">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="private">
    <meta name="author" content="Florian Moser">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Layout Beispiel">
    <link href="dist/css/styles.min.css" rel="stylesheet" type="text/css">
    <title>Layout</title>
</head>
<body>
<div id="view full height">
    <div id="menu-left" class="ui sidebar menu vertical borderless">
        <a class="item">
            Item 1
        </a>
        <a class="item">
            Item 2
        </a>
        <a class="item">
            Item 3
        </a>
    </div>
    <div id="content-right">
        <div id="header">

        </div>
        <div id="center-content">
            <div class="ui container">
                <p>Hallo Welt!</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="dist/js/scripts.min.js"></script>
<script type="text/javascript">
    $('#sidebar_left').sidebar('toggle');
</script>
</body>
</html>

