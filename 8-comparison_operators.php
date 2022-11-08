<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP Comparison Operators</h1>
<p>The PHP comparison operators are used to compare two values</p>
<?php 
    /*
        == Equal
        === Identical
        != Not equal
        <> Not equal
        !== Not identical
        > Greater than
        < Less than
        >= Greater than or equal to
        <= 	Less than or equal to
    */
    // $salary = 400;
    // $neighborSalary = "400";
    // var_dump($salary == $neighborSalary);

    // $gender = 'M';
    // $neighborGender = 'S';
    // var_dump($gender != $neighborGender);

    // $salary = 400;
    // $neighborSalary = "400";
    // var_dump($salary !== $neighborSalary);

    $salary = 270;
    $neighborSalary = 400;
    var_dump($salary <= $neighborSalary);

?>


</html>