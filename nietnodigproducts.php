<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product.php</title>
</head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techmarktweb</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="header.php" href="header.php">
  <link rel="footer.php" href="footer.php">
  <link rel="index.php" href="index.php">
  <link rel="tech.php" href="tech.php">
  <!-- cart google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  </head>
<body>

<?php
    function getProduct(){

      $products = [
        //first product beginning with the first part of phones//
        [
            "id" => "101",
            "name" => "samsungphone0",
            "price" => "999.99",
            "image" => "assets/img/samsungphone0.jpg",
            "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
            "button" => "",
            "in_stock" => false
        ],
        [
            "id" => "102",
            "name" => "samsungphone1",
            "price" => "1009.99",
            "image" => "assets/img/samsungphone1.jpg",
            "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
            "button" => "",
            "in_stock" => false
        ],
        [
            "id" => "103",
            "name" => "samsungphone2",
            "price" => "890.99",
            "image" => "assets/img/samsungphone2.jpg",
            "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
            "button" => "",
            "in_stock" => true
            
        ],
        [
          "id" => "104",
          "name" => "samsungphone3",
          "price" => "999.99",
          "image" => "assets/img/samsungphone3.jpg",
          "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
          "button" => "",
          "in_stock" => true
        ],
      //beginning Tv's//
        [
          "id" => "105",
          "name" => "sonytv0",
          "price" => "1009.99",
          "image" => "assets/img/sonytv0.jpg",
          "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
          "button" => "u",
          "in_stock" => true
        ],
        [
          "id" => "106",
          "name" => "sonytv1",
          "price" => "890.99",
          "image" => "assets/img/sonytv1.jpg",
          "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
          "button" => "",
          "in_stock" => true
          
        ],
       [
        "id" => "107",
        "name" => "samsungtv4",
        "price" => "999.99",
        "image" => "assets/img/samsungtv4.jpg",
        "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
        "button" => "",
        "in_stock" => true
      ],
      [
        "id" => "108",
        "name" => "samsungtv5",
        "price" => "1009.99",
        "image" => "assets/img/samsungtv5.jpg",
        "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
        "button" => "",
        "in_stock" => true
      ],
    //Beginning laptops//
      [
        "id" => "109",
        "name" => "lenovolaptop0",
        "price" => "890.99",
        "image" => "assets/img/lenovolaptop0.jpg",
        "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
        "button" => "",
        "in_stock" => true
        
      ],
      [
      "id" => "110",
      "name" => "lenovolaptop1",
      "price" => "999.99",
      "image" => "assets/img/lenovolaptop1.jpg",
      "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
      "button" => "",
      "in_stock" => true
    ],
    [
      "id" => "111",
      "name" => "hplaptop2",
      "price" => "1009.99",
      "image" => "assets/img/hplaptop2.jpeg",
      "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
      "button" => "",
      "in_stock" => true
    ],
    [
      "id" => "112",
      "name" => "hplaptop3",
      "price" => "890.99",
      "image" => "assets/img/hplaptop3.jpg",
      "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
      "button" => "",
      "in_stock" => false
    ],
    //Beginning tablets//
    [
      "id" => "113",
      "name" => "lenovotablet0",
      "price" => "890.99",
      "image" => "assets/img/lenovotablet0.jpg",
      "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
      "button" => "",
      "in_stock" => true
      
    ],
    [
    "id" => "114",
    "name" => "lenovotablet1",
    "price" => "999.99",
    "image" => "assets/img/lenovotablet1.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "115",
    "name" => "samsungtablet2",
    "price" => "1009.99",
    "image" => "assets/img/samsungtablet2.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "116",
    "name" => "samsungtablet3",
    "price" => "1009.99",
    "image" => "assets/img/samsungtablet3.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => false
  ],
  [//Beginning Ipads//
    "id" => "117",
    "name" => "appleipad0",
    "price" => "999.99",
    "image" => "assets/img/appleipad0.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "118",
    "name" => "appleipad1",
    "price" => "1009.99",
    "image" => "assets/img/appleipad1.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [//Beginning headsets//
    "id" => "119",
    "name" => "sonyheadset0",
    "price" => "1009.99",
    "image" => "assets/img/sonyheadset0.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => false
  ],
  [
    "id" => "120",
    "name" => "sonyheadset1",
    "price" => "999.99",
    "image" => "assets/img/sonyheadset1.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [//Beginning second part phones//
    "id" => "121",
    "name" => "motorola4",
    "price" => "1009.99",
    "image" => "assets/img/motorola4.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "122",
    "name" => "motorola5",
    "price" => "1009.99",
    "image" => "assets/img/motorola5.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => false
  ],
  [
    "id" => "123",
    "name" => "apple5",
    "price" => "999.99",
    "image" => "assets/img/apple5.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "124",
    "name" => "apple6",
    "price" => "1009.99",
    "image" => "assets/img/apple6.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "125",
    "name" => "apple7",
    "price" => "1009.99",
    "image" => "assets/img/apple7.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => false
  ],
  [
    "id" => "126",
    "name" => "xiaomi8",
    "price" => "999.99",
    "image" => "assets/img/xiaomi8.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "127",
    "name" => "xiaomi9",
    "price" => "1009.99",
    "image" => "assets/img/xiaomi9.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "128",
    "name" => "nokia10",
    "price" => "1009.99",
    "image" => "assets/img/nokia10.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "129",
    "name" => "nokia11",
    "price" => "999.99",
    "image" => "assets/img/nokia11.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "130",
    "name" => "snokia12",
    "price" => "1009.99",
    "image" => "assets/img/nokia12.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "131",
    "name" => "sony13",
    "price" => "1009.99",
    "image" => "assets/img/sony13.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => true
  ],
  [
    "id" => "132",
    "name" => "sony14",
    "price" => "1009.99",
    "image" => "assets/img/sony14.jpg",
    "shop-icon" => "<span class='cart-icon material-symbols-outlined'>shopping_cart</span>",
    "button" => "",
    "in_stock" => false
  ],




    ];
    return $products;
   
    }

    $products = getProduct();

    // foreach ($products as $product)
    // echo "<class='column' <a href='content'>";
    // // echo "<h2>" . $product['name'] . "</h2>";
    // // echo "<p>€".$product['price']."-.</p>";
    // echo "<src='".$product['image']."'";
    
    foreach ($products as $product) {
      echo "<div class='column'><a href='content'>"; // Corrected the opening tag
      echo "<h2>" . htmlspecialchars($product['name']) . "</h2>"; // Display the product name
      echo "<p>€" . htmlspecialchars($product['price']) . "</p>"; // Display the price
      echo "<img src='" . htmlspecialchars($product['image']) . "' />"; // Correctly form the img tag to display the image
      echo "</a>"; // Close the tags properly
      echo "<br>" .$product['shop-icon']."<br>";
      echo "<button class='wwagon'>". htmlspecialchars($product['button']) . "<h6>Bestel nu</h6></button>";
      echo "</div>";
    }
//Dit is een kopie het mag weg //

    ?>
    
</body>
</html>