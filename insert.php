<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "productenoverzicht");
// Check connection
if($link === false){
 die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if submit button is clicked
if(isset($_POST['submit'])){
    $product_id = $_POST['product_id'];
    $product_naam = $_POST['product_naam'];
    $product_img = $_POST['product_img'];
    $product_beschrijving = $_POST['product_beschrijving'];
    $product_prijs = $_POST['product_prijs'];

  // attempt insert query execution
  $sql = "INSERT INTO producten (product_id, product_naam, product_beschrijving, product_prijs, product_img) VALUES ('$product_id', '$product_naam', '$product_beschrijving', '$product_prijs', '$product_img')";
  echo $sql;
  if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}
// close connection
mysqli_close($link);
?>