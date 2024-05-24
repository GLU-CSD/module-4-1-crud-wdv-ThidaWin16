<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productenoverzicht";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//BaseURL
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https";
} else {
    $url = "http";
}

$url .= "://{$_SERVER['HTTP_HOST']}";

define("BASEURL", "{$url}/weekopdrachten-webshop-dynamisch-ThidaWin16/");
define("BASEURL_CMS", "{$url}/weekopdrachten-webshop-dynamisch-ThidaWin16/admin/");