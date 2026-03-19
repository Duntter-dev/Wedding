<?php

$body = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You are Invited</title>
    <link rel="stylesheet" href="assets/wedding.css">
</head>
<body>

<div class="container">
    <!-- <img src="img/opening-img.jpg" alt="Wedding Background" class="background-img"> -->
    <p class="greeting">We are getting married!</p>
    <p class="wedding-names">Jet & Nikka</p>
    <div class="envelope" onclick="openEnvelope()">
        <div class="seal">J&N</div>
    </div>
    <p class="accent">Open the envelope</p>
</div>

<script src="assets/wedding.js"></script>
</body>
</html>
HTML;

echo $body;
