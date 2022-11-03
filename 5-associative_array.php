<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $crushes = [];
        $crushes = ['Thida', 'Yaya'];
        $crush = [];
        $crush['name'] = 'Tey Tey';
        $crush['weight'] = 37.5;
        $crush['height'] = 155;
        $crush['age'] = 18;
        $crush['is_single'] = false;

        // echo $crush;
        var_dump($crushes);
        echo "<br>";
        var_dump($crush);
    ?>
    <p>Crush Name 1: <?php echo $crushes[0]  ?></p>
    <p>Crush Name 1: <?php echo $crush["name"]  ?></p>
    <p>Crush Age: <?php echo $crush["age"]  ?></p>
</body>
</html>