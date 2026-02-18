<?php
$name = "Hetvi";
$age = 20;

echo "My name is $name and I am $age years old.";
?>

<br>
<br>

<?php
$count = 10;

function increaseCount() {
    global $count;   
    $count += 5;
}

increaseCount();

echo "Updated Count: " . $count;
?>

<br>
<br>

<?php
$num = 20;

if ($num > 0) {
    echo "Number is Positive";
} elseif ($num < 0) {
    echo "Number is Negative";
} else {
    echo "Number is Zero";
}
?>

<br>
<br>


<?php
$day = 5;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid Day";
}
?>

<br>
<br>

<?php
$age = 20;

echo ($age >= 18) ? "You are an adult." : "You are a minor.";
?>

<br>
<br>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
?>
<br>
<br>

<?php
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
?>
<br>
<br>

<?php
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 10);
?>

<br>
<br>

<?php
$num = 3;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;

}


echo "Factorial of $num is $factorial";
?>

<br>
<br>

<?php
$numbers = [2, 5, 8, 12, 7];
$sum = 0;

foreach ($numbers as $n) {
    $sum += $n;
}

echo "Total Sum: " . $sum;
?>

<br>
<br>

<?php

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Cannot divide by zero";
    }
    return $a / $b;
}

echo add(10,5) . "<br>";
echo subtract(10, 5) . "<br>";
echo multiply(10, 5) . "<br>";
echo divide(10,5  );
?>

<br>
<br>

<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 4;

if (isPrime($number)) {
    echo "$number is a Prime number.";
} else {
    echo "$number is not a Prime number.";
}
?>