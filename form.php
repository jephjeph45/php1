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
    <form action="contactback.php" method="post">
        <label for="inputName">FULL NAME <sup>*</sup></label>
            <input type="text" name="name" id="inputName"> <br>

        <label for="inputEmail">EMAIL <sup>*</sup></label>
            <input type="text" name="email" id="inputEmail"> <br>

        <label for="inputSubject">SUBJECT <sup>*</sup></label>
            <input type="text" name="subject" id="inputSubject"> <br>

        <label for="inputMessage">MESSAGE <sup>*</sup></label>
        <textarea name="message" id="inputMessage" cols="30" rows="10"></textarea><br>


        <input type="submit" value="Submit"> <br>
        <input type="reset" value="Reset">



    </form>
    </body>
</html>