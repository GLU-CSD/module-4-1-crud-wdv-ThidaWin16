<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
  </head>
  <body>
    <form action="insert.php" method="post">
      <p>
        <label for="product_id">product_id</label>
        <input type="number" name="product_id" id="product_id">
      </p>
      <p>
      <label for="product_naam">product_naam</label>
        <input type="text" name="product_naam" id="product_naam">
      </p>
      <p>
      <label for="product_beschrijving">product_beschrijving</label>
        <input type="text" name="product_beschrijving" id="product_beschrijving">
      </p>
      <p>
      <label for="product_prijs">product_prijs</label>
        <input type="number" name="product_prijs" id="product_prijs">
      </p>
      <p>
      <label for="product_img">product_img</label>
        <input type="file" name="product_img" id="product_img">
      </p>
      <p>
      <input type="submit" value="Submit" name="submit">
    </form>
  </body>
</html>