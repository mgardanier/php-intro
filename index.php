<?php
// Start a session if needed
//session_start();

// Define a page title
$title = "My Basic PHP Page";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My PHP Webpage</h1>
        <p>This is a simple index page built with PHP.</p>
        <p>Today's date is: <?php echo date("l, F j, Y"); ?></p>
    </div>
</body>
</html>
