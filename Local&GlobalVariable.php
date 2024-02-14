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
<h1>Local Vs Global Variables</h1>

<!--Local Variable-->
<!--Can only be acceses inside a function-->
<?php
    function abc($timestamp){
        $tamp = date("1F js Y");
        return "The date is $tamp";

    }
?>

<!--Global Variable-->
<!--Variable that can be accesses inside and outside a function?-->
<?php
    $name = "xyz";
    function xyz(){
        global $name;
        return $name;
    }
?>
?>
</body>
</html>