<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP Function Arguments</h1>
<?php
    // create calculateSalary function
    function calculateSalary($baseSalary, $otRate, $otTime, $tax=10) {
        $totalOt = $otRate * $otTime;
        $totalSalary = $baseSalary + $totalOt;
        $salaryTax = $totalSalary * ($tax / 100);

        $finalSalary = $totalSalary - $salaryTax; 
        // $baseSalary = 200;
        return $finalSalary;
    }

    // Passing arguments by reference
    function changeSalaryTo1K(&$baseSalary) {
        $baseSalary = 1000;
    }


    // function nameFunction($args=[]) {

    // }
    
    // php >= 8.0
    $baseSalary = 270;
    changeSalaryTo1K($baseSalary);
    
    // Positional arguments
    // $daraSalary = calculateSalary(270, 15, 4, 20);

    // Named argument
    $daraSalary = calculateSalary(
        baseSalary: $baseSalary,
        otRate: 15,
        otTime: 4,
        tax: 10,
    );

    echo "Dara baseSalary: ".$baseSalary;
    echo "<br>Dara Salary: ".$daraSalary;

    // Dara 270, 15, 4, 10%


    // Variable-length argument lists
    function sum(...$numbers) {
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }
    echo '<br><br>Variable-length argument lists';
    echo '<br>Sum (1, 2, 3, 4) = '.sum(1, 2, 3, 4);

?>
</html>