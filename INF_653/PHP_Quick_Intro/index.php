<?php
    $mode = "dark";
    $greeting = "Hello, ";
    $name = "Jarrett";
    // data types
    $num = 42;                      #interger
    $dub = 42.02;                   #double
    $boo = true;                    #boolean (true or false)
    $arr = array('a','b','c');      #array
    define('DAYS_IN_YEAR', 365);    #objects
    $counter = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Quick Intro to PHP</title>
</head>
<body
    <?php if ($mode === "dark"): ?>
    class="dark"
    <?php endif ?>
>
    <h1>
        <p><?php echo "Hello, {$name}!" ?></p>
    </h1>
</body>
</html>