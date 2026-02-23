<?php

// Examples of string functioins

//Example 1: print length of string, string to upper letter

$string = "Hello World!";
echo $string . "<br>";
echo "Length of string: " . "<br>";
echo strlen($string) . "<br>"; //fun1: strlen(): counts length of string

echo strtoupper($string) . "<br>"; //fun2: strtoupper(): convert string to upper letters
echo strtolower($string) . "<br>"; //fun3: strtolower(): convert string to lower letters
?>

<hr>

<?php

//Example 2:

$string = "PHP is server side scripting language";

$words = explode(" ", $string); //fun1: explode(): Convert string to array

echo "Array after explode:<br>";
print_r($words);

$newstring = implode(" ", $words); //fun2: implode(): Convert array back to string

echo "<br>After implode: " . "<br>". $newstring;

?>

<hr>

<?php

//Example 3: 

$text = "I love php because php is powerful";

// Replace php with PHP
$newText = str_replace("php", "PHP", $text); //fun1: str_replace(): Replaces a part of a string with another string

// Convert full string to uppercase
$finalText = strtoupper($newText); //fun2: strtoupper()

echo $finalText;

?>

<hr>

<?php

//Task:

$paragraph = "php is a popular server-side scripting language. 
Many developers use php for web development. 
php is easy to learn and php is powerful.";

// Count occurrences
$count = substr_count($lowerPara, "php");

echo "Paragraph:<br>" . $paragraph . "<br><br>";
echo "The word 'php' appears " . $count . " times.";

?>


