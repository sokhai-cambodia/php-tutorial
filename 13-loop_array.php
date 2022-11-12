<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP Loops Array</h1>
<?php 
    $crushes = [
        [
            'name' => 'Thida',
            'age' => 18,
            'favorite_colors' => ['red', 'yellow', 'blue'],
        ],
        [
            'name' => 'Rita',
            'age' => 18,
            'favorite_colors' => ['red', 'green'],
        ],
        [
            'name' => 'Dada',
            'age' => 18,
            'favorite_colors' => ['red', 'green'],
        ],
    ];

    echo "<h3>for array </h3>";
    for($i = 0; $i < count($crushes); $i++) {
        echo $crushes[$i]['name'].'<br>';
    }

    echo "<h3>foreach</h3>";
    foreach($crushes as $crush) {
        // $crush => $crushes[$i]
        echo $crush['name'].'<br>';
        echo '<p>favorite_colors</p>';
        foreach($crush['favorite_colors'] as $color) {
            echo $color.'<br>';
        }
    }

    // echo $crushes[0]['name'];
    // echo $crushes[1]['name'];
    // echo $crushes[2]['name'];
    // var_dump($crushes);
?>
</html>