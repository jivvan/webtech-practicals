<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP programs</title>
</head>
<body>
    <h2>This page contains serveral PHP programs written for lab 16 of Web Technology</h2>

    <div style="border:2px solid black; padding:1rem;">
        <h3>Positive or Negative Test</h3>
        <form action="" method="post">
            <input type="number" required name="positivenegative" value="<?php echo isset($_POST['positivenegative']) ? $_POST['positivenegative'] : 0 ?>">
            <input type="submit" value="Check">
        </form>
        <br>
        <?php
        if ($_POST and isset($_POST["positivenegative"])){
            $x = $_POST["positivenegative"];
            if ($x > 0){
                echo $x." is a positive number";
            }elseif ($x < 0){
                echo $x." is a negative number";
            }else{
                echo $x." is a zero";
            }
        }
        ?>
    </div>
    <br>    
    <div style="border:2px solid black; padding:1rem;">
        <h3>Greatest Among Three Numbers</h3>
        <form action="" method="post">
            <input type="number" required name="number1" value="<?php echo isset($_POST['number1']) ? $_POST['number1'] : 0 ?>">
            <input type="number" required name="number2" value="<?php echo isset($_POST['number2']) ? $_POST['number2'] : 0 ?>">
            <input type="number" required name="number3" value="<?php echo isset($_POST['number3']) ? $_POST['number3'] : 0 ?>">
            <input type="submit" value="Compare">
        </form>
        <br>
        <?php
        if ($_POST and isset($_POST["number1"])){
            $a = $_POST["number1"];
            $b = $_POST["number2"];
            $c = $_POST["number3"];
            $greatest = $a;
            if ($b > $greatest) {
                $greatest = $b;
            }
            if ($c > $greatest) {
                $greatest = $c;
            }
            echo "The greatest number among $a, $b and $c is $greatest";
        
        }
        ?>
    </div>
    <br>    
    <div style="border:2px solid black; padding:1rem;">
        <h3>Sum of First Ten Even Numbers</h3>
        <?php
            $sum = 0;
            $number = 2;
            $count = 0;
            while ($count++ < 10){
                $sum += $number;
                $number += 2;
            }
            echo "The sum of the first ten even numbers is$sum."
        ?>
    </div>
    <br>    
    <div style="border:2px solid black; padding:1rem;">
        <h3>Reverse of Input Number</h3>
        <form action="" method="post">
            <input type="number" required name="reverse" value="<?php echo isset($_POST['reverse']) ? $_POST['reverse'] : 0 ?>">
            <input type="submit" value="Reverse">
        </form>
        <br>
        <?php
        if ($_POST and isset($_POST["reverse"])){
            $num = $_POST["reverse"];
            $bak = $num;
            $reverse  = 0;
            while ($num > 0){
                $digit = $num % 10;
                $reverse = $reverse * 10 + $digit;
                $num = (int)($num / 10);
            }
            echo "The reverse of $bak is $reverse";
        }
        ?>
    </div>
    <br>    
    <div style="border:2px solid black; padding:1rem;">
        <h3>Palindrome Checker</h3>
        <form action="" method="post">
            <input placeholder="Enter string to check..." type="text" required name="palindrome" value="<?php echo isset($_POST['palindrome']) ? $_POST['palindrome'] : "" ?>">
            <input type="submit" value="Check">
        </form>
        <br>
        <?php
        if ($_POST and isset($_POST["palindrome"])){
            $input = $_POST['palindrome'];
            $input = strtolower(str_replace(' ', '', $input));
            $reversed = strrev($input);
            echo "The string \"$input\" " . ($reversed == $input ? "is" : "is not") . " a palindrome.";
        }
        ?>
    </div>
</body>
</html>