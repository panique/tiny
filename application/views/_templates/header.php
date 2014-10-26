<?php

// This here blocks direct access to this file (so an attacker can't look into application/views/_templates/header.php).
// "$this" only exists if header.php is loaded from within the app, but not if THIS file here is called directly.
// If someone called header.php directly we completely stop everything via exit() and send a 403 server status code.
// Also make sure there are NO spaces etc. before "<!DOCTYPE" as this might break page rendering.
if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP MVC skeleton</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <div class="container">
        <!-- Info -->
        <div class="where-are-we-box">
            Everything in this box is loaded from <strong>application/views/_templates/header.php</strong> !
            <br>
            The green line is added via JavaScript (to show how to integrate JavaScript).
        </div>
        <h1>The header (used on all pages)</h1>
        <!-- demo image -->
        <h3>Demo image, to show usage of public/img folder</h3>
        <div>
            <img src="<?php echo URL; ?>public/img/demo-image.png" alt="Demo image">
        </div>
        <!-- navigation -->
        <h3>Demo Navigation</h3>
        <div class="navigation">
            <ul>
                <!-- same like "home" or "home/index" -->
                <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>"><?php echo URL_WITH_INDEX_FILE; ?>home</a></li>
                <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>home/exampleone"><?php echo URL_WITH_INDEX_FILE; ?>home/exampleone</a></li>
                <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>home/exampletwo"><?php echo URL_WITH_INDEX_FILE; ?>home/exampletwo</a></li>
                <!-- "songs" and "songs/index" are the same -->
                <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>songs/"><?php echo URL_WITH_INDEX_FILE; ?>songs/index</a></li>
            </ul>
        </div>
        <!-- simple div for javascript output, just to show how to integrate js into this MVC construct -->
        <h3>Demo JavaScript</h3>
        <div id="javascript-header-demo-box">
        </div>
    </div>
