<?php 
session_start();
include 'header.php'; 

// Include products array
include 'productsarray.php';

// Function to empty cart
function emptyCart() {
    $_SESSION['cart'] = array();
}

// Function to remove one item from cart
function removeItemFromCart($product_id) {
    if(isset($_SESSION['cart'][$product_id])) {
        // If the quantity is greater than 1, reduce the quantity by 1
        if($_SESSION['cart'][$product_id]['quantity'] > 1) {
            $_SESSION['cart'][$product_id]['quantity']--;
        } else {
            // If the quantity is 1, remove the entire product from the cart
            unset($_SESSION['cart'][$product_id]);
        }
    }
}

if (isset($_POST['add_to_cart'])){
    $product_id = $_POST['id'];
    $product_quantity = $_POST['amount'];

    // Check if the product is already in the cart
    if(isset($_SESSION['cart'][$product_id])) {
        // Update the quantity of the existing product
        $_SESSION['cart'][$product_id]['quantity'] += $product_quantity;
    } else {
        // Add product to cart
        $_SESSION['cart'][$product_id] = array(
            'id' => $product_id,
            'quantity' => $product_quantity,
        );
    }
}

// Check if remove action is triggered
if(isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    removeItemFromCart($remove_id);
}

$Items_in_cart = array_keys($_SESSION['cart']);

?>

<div class="small-container cart-page">
  <table style="width:100%">
    <tr>
      <th>    </th>
      <th>Products</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Subtotal</th>
    </tr>

    <?php 
    // Check if the cart is empty
    if(empty($_SESSION['cart'])) {
        echo '<tr><td colspan="5">Cart is empty</td></tr>';
    } else {
        foreach($products as $product) {
            if (in_array($product['id'], $Items_in_cart)) {
                echo '<tr>
                    <td>
                        <img src="'. $product['image']. '" alt="'. $product['name']. '">
                    </td>
                    <td>'. $product['name']. '<br>
                        <a href="?remove='. $product['id']. '">Remove</a>
                    </td>';

                // Check if the product exists in the cart before accessing its quantity
                if(isset($_SESSION['cart'][$product['id']])) {
                    echo '<td>'. $_SESSION['cart'][$product['id']]['quantity']. '</td>';
                    echo '<td>'. $product['price']. '</td>';
                    echo '<td>$'. ($product['price'] * $_SESSION['cart'][$product['id']]['quantity']). '</td>';
                } else {
                    echo '<td colspan="3">Product removed from cart</td>';
                }

                echo '</tr>';
            }
        }
    }

    if (empty($Items_in_cart)) {
        echo '<tr><td colspan="5">Your cart is empty.</td></tr>';
    } else {
        echo '<tr><td colspan="5"><a href="?empty_cart=1">Empty Cart</a></td></tr>';
    }
    ?>
  </table>
</div>

<?php 
// Check if empty cart action is triggered
if(isset($_GET['empty_cart'])) {
    emptyCart();
    header("Location: shoppingcart.php"); // Redirect to cart page after emptying the cart
}

include 'footer.php'; 
?>
