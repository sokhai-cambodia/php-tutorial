<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP Continue and Break</h1>
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
    ];

    foreach($crushes as $crush) {
        echo 'crush name: '.$crush['name'].'<br>';

        if(!$crush['is_single']) {
            continue;
        }
        
        if($crush['is_single'] && $crush['age'] >= 18) {
            echo $crush['name'].'<br>';
            break;
        }
    }
?>
</html>