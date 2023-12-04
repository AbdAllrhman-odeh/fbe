<?php

$filename = 'counter.txt'; 

if (file_exists($filename)) {
    $lines = count(file($filename));
    echo "The file '$filename' has $lines lines.";
} else {
    echo "File '$filename' not found.";
}

?>
