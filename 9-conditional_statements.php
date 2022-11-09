<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP Conditional Statements</h1>
<p>Conditional statements are used to perform different actions based on different conditions.</p>
<?php 
    /*
        ## Syntax
        if (condition) {
            code to be executed if this condition is true;
        } elseif (condition) {
            code to be executed if first condition is false and this condition is true;
        } else {
            code to be executed if all conditions are false;
        }
    */
    $balance = 5;
    $trip = 50;
    if($balance >= $trip) {
        echo 'ទៅដើរលេងបាន';
    } else {
        echo 'ទៅដើរលេងអត់បានទេ ព្រោះដាច់លុយ';
    }
    echo '<br>';

    $score = 200;
    if($score >= 427) {
        echo 'A';
    } elseif($score >= 380) {
        echo 'B';
    } elseif($score >= 332) {
        echo 'C';
    } elseif($score >= 285) {
        echo 'D';
    } elseif($score >= 237) {
        echo 'E';
    } else {
        echo 'F';
    }

    
?>

</html>