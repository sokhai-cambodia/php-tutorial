<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Index Array</h1>
    <?php 
        $crush1 = 'Thida';
        $crush2 = 'Yaya';
        $crush3 = 'Rita';
        $crush4 = 'Chariya';
        // $variable_name = [];
        // $variable_name = array();

        $crushes = ['Thida', 'Yaya'];
        // $crushes[] = 'Thida';
        // $crushes[] = 'Yaya';
        $crushes[] = 'Rita';
        $crushes[] = 'Chariya';

        // array start index = 0 last index = array length - 1

        // echo "<p>Crush Name 1: ".$crush1."</p>";
    ?>
    <p>Crush Name 1: <?php echo $crush1  ?></p>
    <p>Crush Name 1: <?php echo $crushes[0]  ?></p>
    <p>Crush Name 2: <?php echo $crushes[1]  ?></p>
    <p>Crush Name 3: <?php echo $crushes[2]  ?></p>
    <p>Crush Name 4: <?php echo $crushes[3]  ?></p>
</body>
</html>