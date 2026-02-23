<?php

$file= fopen("example.txt","r");
$content = fread($file,filesize("example.txt"));

fclose($file);

echo $content . "<br>";

?>

<hr>

<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $file = fopen("data.txt", "a");
    fwrite($file, $name . "\n");
    fclose($file);

    echo "Data saved successfully!";
}

?>

<form method="post">
    Enter Name:
    <input type="text" name="name" required>
    <br><br>
    <input type="submit" name="submit" value="Save">
</form>