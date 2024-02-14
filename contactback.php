<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thanks for submitting Contact form</h1>
    <p>Your information is listed</p>
    FULL NAME: <?php echo $_POST["name"]; ?> <br>
    EMAIL: <?php echo $_POST["email"]; ?> <br>
    SUBJECT: <?php echo $_POST["subject"]; ?> <br>
    MESSAGE: <?php echo $_POST["message"]?>

<?php

?>
</body>
</html>