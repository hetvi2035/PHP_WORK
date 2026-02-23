<?php

$file = fopen("sampledata.txt", "r");

$content = fread($file, filesize("sampledata.txt"));
echo "<h3>File Content:</h3>";
echo $content . "<br>";

fclose($file);

$file = fopen("sampledata.txt", "a");

fwrite($file, "\nSuccess");

fclose($file);

echo "<br><br>Success message appended successfully.";

?>