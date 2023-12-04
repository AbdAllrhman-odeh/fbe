<?php
session_start();

$fileName = 'index2.php';
$lastAccessTime;
$formattedLastAccessTime; 

if (file_exists($fileName)) {
    $lastAccessTime = fileatime($fileName);
    $formattedLastAccessTime = date('l, jS F, Y, g:ia', $lastAccessTime);
    $_SESSION['lastTime']=('Last modified in: ' . $formattedLastAccessTime);
} else {
    $_SESSION['lastTime']=('File does not exist');
}

echo($_SESSION['lastTime']);
?>
