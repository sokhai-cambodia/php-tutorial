<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP User Defined Functions</h1>
<?php
    function breakLine() {
        echo "<br>";
    }

    function getBirthYear($age) {
        // block code
        return date('Y') - $age;
    }

    $crushes = [
        [
            'name' => 'Thida',
            'age' => 20,
            'is_single' => false,
            'favorite_colors' => ['red', 'yellow', 'blue'],
        ],
        [
            'name' => 'Rita',
            'age' => 14,
            'is_single' => true,
            'favorite_colors' => ['red', 'green'],
        ],
        [
            'name' => 'Dada',
            'age' => 23,
            'is_single' => true,
            'favorite_colors' => ['red', 'green'],
        ],
        [
            'name' => 'Hana',
            'age' => 21,
            'is_single' => false,
            'favorite_colors' => ['red', 'green'],
        ],
        [
            'name' => 'Haha',
            'age' => 14,
            'is_single' => true,
            'favorite_colors' => ['red', 'green'],
        ],
        [
            'name' => 'Kaka',
            'age' => 14,
            'is_single' => true,
            'favorite_colors' => ['red', 'green'],
        ],
    ]; 
    // PHP Built-in Functions
    $totalCrush = count($crushes);
    echo "Total crush: ".$totalCrush;
    // echo "<br>";
    breakLine();

    echo "my crush 1 birth year: ".getBirthYear($crushes[0]['age']);
?>
</html>