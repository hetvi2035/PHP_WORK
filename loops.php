<?php

/* FOR loop
Example 1: Print square of numbers */

for($i=0; $i<=10; $i++){
echo "Square of $i =" . ($i * $i) . "<br>";
}
?>
<hr>

<?php

//Example 2: Star pattern (Triangle)

for($i=1; $i<=5; $i++){
    for($j=1; $j<=$i; $j++){
    echo "* ";
}
echo "<br>";
}
?>
<hr>

<?php

//Example 3: Reverse Counting (10 to 1)

for($i=10; $i>=1; $i--){
    echo "$i  ";
}
?>
<hr>

<?php 
/* WHILE loop
Example 1: Reverse Number */

$num = 123;
$reverse = 0;
while ($num > 0) {
    $digit = $num % 10;
    $reverse = $reverse * 10 + $digit;
    $num = (int)($num / 10);
    }
    echo "Reverse = " . $reverse;
?>
<hr>

<?php

//Example 2: Palindrome Number
$num = 1212;
$temp = $num;
$reverse = 0;

while ($num > 0) {
    $reverse = $reverse * 10 + ($num % 10);
    $num = (int)($num / 10);
}

if ($temp == $reverse)
    echo "Palindrome";
else
    echo "Not Palindrome";
?>
<hr>

<?php

//Example 3: Print odd numbers from 1 to 10
$i = 1;
while ($i <= 10) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
    $i++;
}
?>
<hr>
<?php

/* DO WHILE loop
Example 1: Sum of digits of a number */

$num = 456;
$sum = 0;

do {
    $digit = $num % 10;
    $sum = $sum + $digit;
    $num = (int)($num / 10);
} while ($num > 0);

echo "Sum of digits = " . $sum;
?>
<hr>

<?php

//Example 2: Print table of a number
$num = 5;
$i = 1;

do {
    echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
    $i++;
} while ($i <= 10);

?>
<hr>

<?php

//Example 3: add 2 to number from 0 to 20
$num = 0;
do {
   echo $num . "\n";
   $num += 2;
} while ($num < 20);
?>