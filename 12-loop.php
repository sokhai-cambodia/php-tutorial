<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP Loops</h1>
<p>Loops are used to execute the same block of code again and again, as long as a certain condition is true.</p>
<?php 
    /* 
        while 
        do...while
        for
        foreach 
    */

    $time = 0;

    echo "<h3>For Loop</h3>";
    for($i = 1; $i <= $time; $i++) {
        echo "បងសុំទោសលើកទី: ".$i."<br>";
    }

    echo "<h3>While Loop</h3>";
    $i = 1;
    while($i <= $time) {
        echo "បងសុំទោសលើកទី: ".$i."<br>";
        $i++;
    }

    echo "<h3>Do While Loop</h3>";
    $i = 1;
    do {
        echo "បងសុំទោសលើកទី: ".$i."<br>";
        $i++;
    } while($i <= $time);

    // បងសុំទោសលើកទី 1
    // បងសុំទោសលើកទី 2
    // បងសុំទោសលើកទី 3
    // បងសុំទោសលើកទី 4
    // បងសុំទោសលើកទី 1000
?>
</html>