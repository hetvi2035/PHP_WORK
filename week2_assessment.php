<?php

$sname=["Hetvi","Devanshi","Jansi"];

echo "Student names: " . "<br>";

foreach($sname as $name){
    echo $name . "<br>";
}

?>
<hr>

<?php

$sname=["student-1" => "Hetvi", "student-2" => "Devanshi", "student-3" => "Jansi"];

foreach ($sname as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

?>

<hr>

<?php

$array=[5,7,2,6,9,3];

echo "Sorted array: ";
sort($array);

foreach($array as $a){
    echo $a . " ";
}

?>

<hr>

<?php

$array1=[1,2,3];
$array2=[4,5,6];

$result=array_merge($array1,$array2);

print_r($result);

?>

<hr>

<?php

$string="Hello";

$string_length=strlen($string);
echo "Length of string " . $string ." " . "=";
echo $string_length;

?>

<hr>

<?php

function reversestring($text){
    return strrev($text);
}
echo "reverse of string Hello " . "is" . " ";
echo reversestring("Hello");

?>
<hr>

<?php

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    echo "name:  " . $name;
}
?>

<form method="POST">
    name: <input type="text" name="name">
    <input type="submit" name="submit">
</form>
<hr>

<?php
session_start();
$_SESSION['user'] = "Hetvi";
?>

<a href="page2.php">Go to page2</a>
<hr>

<?php

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (isset($_POST['add'])) {

    $product = [
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "sku" => $_POST['sku'],
        "description" => $_POST['description']
    ];

    $_SESSION['products'][] = $product;

    $file = fopen("products.txt", "a");
    fwrite($file, implode(",", $product) . "\n");
    fclose($file);
}

if (isset($_GET['delete'])) {
    $sku = $_GET['delete'];

    foreach ($_SESSION['products'] as $key => $value) {
        if ($value['sku'] == $sku) {
            unset($_SESSION['products'][$key]);
        }
    }
}
?>

<h2>Add Product</h2>
<form method="post">
    Name: <input type="text" name="name"><br>
    Price: <input type="number" name="price"><br>
    SKU: <input type="text" name="sku"><br>
    Description: <input type="text" name="description"><br>
    <input type="submit" name="add" value="Add Product">
</form>

<hr>

<h2>Product List (From Session)</h2>
<?php
foreach ($_SESSION['products'] as $product) {
    echo "Name: " . $product['name'] . " | ";
    echo "Price: " . $product['price'] . " | ";
    echo "SKU: " . $product['sku'] . " | ";
    echo "Desc: " . $product['description'] . " ";
    echo "<a href='?delete=" . $product['sku'] . "'>Delete</a>";
    echo "<br><br>";
}
?>

<hr>

<h2>Filter by Price > 100</h2>
<?php
if (file_exists("products.txt")) {

    $file = fopen("products.txt", "r");

    while (!feof($file)) {

        $line = fgets($file);
        $data = explode(",", $line);

        if (isset($data[1]) && $data[1] > 100) {
            echo $line . "<br>";
        }
    }

    fclose($file);
}
?>