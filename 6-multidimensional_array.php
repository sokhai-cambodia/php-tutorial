<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Multidimensional Arrays</h1>
<?php 
        // $crushes = [];
        // $crushes = ['Thida', 'Yaya'];
        // $crush = [];
        // $crush['name'] = 'Tey Tey';
        // $crush['weight'] = 37.5;
        // $crush['height'] = 155;
        // $crush['age'] = 18;
        // $crush['is_single'] = false;
        // $crush['favorite_colors'] = ['red', 'yellow', 'blue'];
        
        // echo $crush;
        // var_dump($crushes);
        // echo "<br>";
        // var_dump($crush['favorite_colors'][2]);
    ?>
    <!-- <p>Crush Name 1: <?php echo $crush["name"]  ?></p>
    <p>Crush Age: <?php echo $crush["age"]  ?></p> -->


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
            ]
        ];

        $crushes[] = [
            'name' => 'Rita',
            'age' => 18,
            'favorite_colors' => ['red', 'green'],
        ];

        var_dump($crushes);
        var_dump($crushes[1]['favorite_colors'][1]);
        // array start index = 0 last index = array length - 1

        // echo "<p>Crush Name 1: ".$crush1."</p>";
    ?>
    <!-- <p>Crush Name 1: <?php echo $crush1  ?></p>
    <p>Crush Name 1: <?php echo $crushes[0]  ?></p>
    <p>Crush Name 2: <?php echo $crushes[1]  ?></p>
    <p>Crush Name 3: <?php echo $crushes[2]  ?></p>
    <p>Crush Name 4: <?php echo $crushes[3]  ?></p> -->
</body>
</html>