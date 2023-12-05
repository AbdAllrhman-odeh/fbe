<?php
$cookieName = "user";
$cookieValue = "JohnDoe";
$expiryTime = time() + 60;
$cookiePath = "/";
$cookieDomain = ""; // Set to your domain
$secure = false; // Set to true if using HTTPS
$httponly = true; // Set to true to make the cookie accessible only through the HTTP protocol

// Create the cookie
setcookie($cookieName, $cookieValue, $expiryTime, $cookiePath, $cookieDomain, $secure, $httponly);

echo "Cookie '$cookieName' is set!";

foreach ($_COOKIE as $name => $value) {
   echo "Cookie Name: $name, Cookie Value: $value<br>";
}

setcookie($cookieName, "", time() - 60, $cookiePath, $cookieDomain, $secure, $httponly);

echo "Cookie '$cookieName' is deleted!";
?>
