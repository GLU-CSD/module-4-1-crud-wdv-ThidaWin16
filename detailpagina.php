<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detailpagina</title>
  <link rel="stylesheet" href="product0style.css">
</head>
<body>

<?php
include_once("header.php");
include_once("productsarray.php");




$id = $_GET['id']; // Get product ID
$sql = "SELECT product_id, product_naam, product_img, product_beschrijving, product_prijs FROM producten WHERE product_id =".$id;
include("connection.inc.php");
  
    $result = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($result)) {

      ?>
      <div class="product"><a href="detailpagina.php?id=<?php echo  htmlspecialchars($row["product_id"]); ?>">
      <h2><?= htmlspecialchars($row["product_naam"]); ?></h2> <!-- Display the product name -->
      <h3><?= htmlspecialchars($row["product_beschrijving"]); ?></h2> <!-- Display the product beschrijving-->
      <p>€ <?= htmlspecialchars($row["product_prijs"]); ?></p> <?php // Display the price ?>
      <img src="<?= BASEURL ?>/assets/img/<?= htmlspecialchars($row["product_img"]); ?>" /> <!-- Correctly form the img tag to display the image -->
      </a> <!-- Close the tags properly-->
      <div>
      <p>
      <!-- <a href="winkelwagen.php?id= <?php echo  htmlspecialchars($product['id']); ?>"> -->
      
        <button onclick="winkelwagen(<?=$product['id']?>)" class="wwagon">
          <span class='cart-icon material-symbols-outlined'>shopping_cart

          </span>
          <h6>Bestel nu</h6>
        </button>


        <form action='shoppingcart.php' method='post'>
                  <input type='number' value='1' name='amount'>
                  <input type='submit' value='Add To Cart' class='order-btn' name='add_to_cart'>
                  <input type='hidden' name='id' value='" . htmlspecialchars($row["product_id"]) . "'>
              </form>";




    <!-- </a> -->
    </p>
      </div>
      </div>
      <?php
    }
  }

include_once("footer.php");
?>

</body>
</html>