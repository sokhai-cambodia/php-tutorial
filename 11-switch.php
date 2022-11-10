<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>The PHP switch Statement</h1>
<p>Use the switch statement to select one of many blocks of code to be executed.</p>
<?php 
    /* 
        Syntax
        switch (n) {
            case label1:
                code to be executed if n=label1;
                break;
            case label2:
                code to be executed if n=label2;
                break;
            case label3:
                code to be executed if n=label3;
                break;
                ...
            default:
                code to be executed if n is different from all labels;
        }
    */

    $day = 'T'; // M => monday, T => Tuesday => W => Wednesday
    // if($day == 'M') {
    //     echo "monday";
    // } elseif($day == 'T') {
    //     echo 'Tuesday';
    // } elseif($day == 'W') {
    //     echo 'Wednesday';
    // } else {
    //     echo 'unknown day';
    // }
    switch($day) {
        case 'M': 
            // day == label
            echo "monday";
            break;
        case 'T':
            echo "Tuesday";
            break;
        case 'W':
            echo 'Wednesday';
            break;
        default:
            echo 'unknown day';
    }
    $is_handsome = false;
    // if(!$is_handsome) {
    //     echo 'ព្រមស្រលាញ់';
    // } else {
    //     echo 'អត់ព្រមស្រលាញ់';
    // }

    // Ternary
    echo !$is_handsome ? 'ព្រមស្រលាញ់' : 'អត់ព្រមស្រលាញ់';
    echo "<br>";
    
    // Null coalescing
    $name = "Jonh";
    echo $name ?? "unknown";
?>
</html>