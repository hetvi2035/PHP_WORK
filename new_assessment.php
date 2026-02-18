<?php

//Form handling and validation
if($_POST){

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$age = $_POST["age"];
$pass = $_POST["password"];

if($name=="" || $email=="" || $age=="" || $pass==""){
    echo "All fields required<br>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Invalid Email<br>";
}
elseif($age<18){
    echo "Age must be 18+<br>";
}
elseif(strlen($pass)<8 || !preg_match("/[0-9]/",$pass) || !preg_match("/[\W]/",$pass)){
    echo "Password must be 8 chars, 1 number, 1 special char<br>";
}
else{
    $hash = password_hash($pass,PASSWORD_DEFAULT);
    echo "Success<br>";
    echo "Name: $name<br>Email: $email<br>Age: $age<br>";
    echo "Hashed: $hash<br>";
}
}
?>
<h2>Form handling & Validation</h2>
<form method="post">
Name: <input type="text" name="name"><br><br>
Email: <input type="email" name="email"><br><br>
Age: <input type="number" name="age"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit">
</form>

<hr>

<?php
//array processing
$products=[
["name"=>"Laptop","price"=>50000],
["name"=>"Mobile","price"=>20000],
["name"=>"Tablet","price"=>15000]
];

$total=0;$max=0;

foreach($products as $p){
    $total+=$p["price"];
    if($p["price"]>$max) 
        $max=$p["price"];
}

echo "Total: $total<br>";
echo "Highest: $max<br>";
echo "Above 18000:<br>";

foreach($products as $p){
if($p["price"]>18000){
echo $p["name"]."<br>";}
}

echo "<hr>";

// Word counter
$text="PHP is powerful and PHP is widely used";

echo "Words: ".str_word_count($text)."<br>";
echo "PHP count: ".substr_count($text,"PHP")."<br>";
echo str_replace("PHP","Laravel",$text);
?>