<?php

$products = [
    ["name" => "iPhone", "price" => 100000, "stock" => 10, "category" => "Mobile"],
    ["name" => "Analog watch", "price" => 1000, "stock" => 15, "category" => "Watches"],
    ["name" => "Denim Jeans", "price" => 1500, "stock" =>10, "category" => "Clothes"],
    ["name" => "Remote control car", "price" => 150, "stock" =>20, "category" => "Toys"],
    ["name" => "stud Earring", "price" => 500, "stock" =>5, "category" => "Jwellery"]
];

echo "Products with price > 500: " . "<br>"; 
foreach($products as $product){
    if($product['price'] > 500){
        echo $product['name'] . "<br>";
    }
}

?>
<hr>

<?php

echo "Total stock of all products: " . "<br>";
$total =0;
foreach($products as $product)
    $total += $product['stock'];
    echo $total . "<br>";
?>

<hr>
<?php

// Ascending order
usort($products, function($a, $b) {
    return $a['price'] - $b['price'];
});

echo "Ascending Order: <br>";

foreach($products as $product){
    echo $product['name'] . " - " . $product['price'] . "<br>";
}
?>
<hr>

<?php

// Descending order
usort($products, function($a, $b) {
    return $b['price'] - $a['price'];
});

echo "<br>Descending Order: <br>";

foreach($products as $product){
    echo $product['name'] . " - " . $product['price'] . "<br>";
}

?>
<hr>