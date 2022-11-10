<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP Logical Operators</h1>
<p>The PHP logical operators are used to combine conditional statements.</p>
<?php 
    /*
        and = && => if all conditions true => true
        or = || => if any conditions true => true
        ! => if $x is not true => true
    */

    // Thida
    // $is_handsome = false;
    // $has_money = false;
    // if($is_handsome && $has_money) {
    //     echo 'ព្រមស្រលាញ់';
    // } else {
    //     echo 'អត់ព្រមស្រលាញ់';
    // }

    // // Rita
    // $is_handsome = true;
    // $has_money = false;
    // if($is_handsome || $has_money) {
    //     echo 'ព្រមស្រលាញ់';
    // } else {
    //     echo 'អត់ព្រមស្រលាញ់';
    // }

    // Kaka
    $is_handsome = false;
    // true => false, false => true
    if(!$is_handsome) {
        echo 'ព្រមស្រលាញ់';
    } else {
        echo 'អត់ព្រមស្រលាញ់';
    }
?>

</html>