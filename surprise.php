<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Surprise</title>
    <link rel="stylesheet" href="style.css">

</head>


<body>

<div class="container" style="margin-top: 30px; background-color: lightpink;">
    <h1>🎁 Surprise Gift 🎁</h1>

    <div class="btn" style="margin-top: 30px; margin-bottom: 30px; background-color: lightblue;">
    <a href="gift.php" class="btn">Open Gift</a>
</div>
    <div id="giftContent" style="display:none;">

    <div id="giftBox" class="hidden">
        <h2>🎁</h2>
        <p id="loading">Loading Gift...</p>

        <div class="progress">
            <div class="bar" id="bar"></div>
        </div>

        <p id="percent">0%</p>

        <div id="result" class="hidden">
            <h2>🎉 Gift Found! 🎉</h2>
            <h3>It's Me. ❤️</h3>
            <p>You're Welcome. 😌😂</p>
        </div>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>