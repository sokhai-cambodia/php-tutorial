<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Arithmetic & Assignment Operators</h1>
<p>The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.</p>
<p>The PHP assignment operators are used with numeric values to write a value to a variable.</p>
<?php 
    // Arithmetic: +, -, *, /, %, **
    // Assignment: x = y, x += y, x = x + y
    $salaryGoal = 1000;
    $baseSalary = 250;
    $increase = 20;
    // $salary += $increase;
    $salaryAfterIncrease = $baseSalary + $increase; // 270 => 250 + 20
    $late = 10;
    // $salary -= $late; // 260 => 270 - 10
    $salaryAfterLate = $salaryAfterIncrease - $late; // 260 => 270 - 10
    $ot = 15;
    $otTime = 4;
    $totalOt = $ot * $otTime; // 30 => 15 * 4
    $totalSalary = $salaryAfterLate + $totalOt;

    $tax = 10 / 100; // 10% => 0.1
    $salaryTax = $totalSalary * $tax;
    $finalSalary = $totalSalary - $salaryTax; 
?>

<p>baseSalary: <?= $baseSalary ?><p>
<p>increase: <?= $increase ?><p>
<p>salaryAfterIncrease (baseSalary + increase): <?= $salaryAfterIncrease ?><p>
<hr>

<p>late: <?= $late ?><p>
<p>salaryAfterLate (salaryAfterIncrease - late): <?= $salaryAfterLate ?><p>
<hr>

<p>OT Range: <?= $ot ?><p>
<p>OT Time: <?= $otTime ?><p>
<p>totalOt (OT Range * OT Time): <?= $totalOt ?><p>
<p>totalSalary (salaryAfterLate + totalOt): <?= $totalSalary ?><p>
<hr>

<p>tax (10%): <?= $tax ?><p>
<p>salaryTax (totalSalary * tax): <?= $salaryTax ?><p>
<p>finalSalary (totalSalary - salaryTax): <?= $finalSalary ?><p>
    
</html>