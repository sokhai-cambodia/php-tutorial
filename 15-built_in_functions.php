<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP Built-in Functions</h1>
<?php

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
    echo "Total crush: ".count($crushes);
    echo "<br>Total favorite_colors crush 1: ".count($crushes[0]['favorite_colors']);

    // $availableCrushes = [];
    // foreach($crushes as $crush) {
    //     if($crush['is_single']) {
    //         $availableCrushes[] = $crush;
    //     }
    // }
    $availableCrushes = array_filter($crushes, function($crush) {
        return $crush['is_single'];
    });
    $notAvailableCrushes = array_filter($crushes, function($crush) {
        return !$crush['is_single'];
    });
    echo "<br>Total single crush: ".count($availableCrushes);
    echo "<br>Total not single crush: ".count($notAvailableCrushes);
    // var_dump($availableCrushes);
    // PHP User Defined Functions
?>
</html>