<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techmarktweb</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="header.php" href="header.php">
  <link rel="footer.php" href="footer.php">

<!-- Dit is voor producten overzichtspagina -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Producten overzicht</title>

  <!-- style.css wordt gebruikt voor mijn formulier -->
  <link rel="stylesheet" href="style.css"> 
  <link rel="tech.php" href="tech.php">
  <meta name="description" content="">
  <!-- price slider -->
  <script src="assets/js/app.js"></script>


  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
  <!-- Font family poppins russo one -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&family=Poppins:wght@200;300;400;600;700&family=Russo+One&display=swap" rel="stylesheet">
   <!-- searchbar google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- favorite google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
   <!-- account google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- cart google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- menu google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
   <!-- copyright google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- Font archivo-black-regular-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  


</head>



<body>

  <div class="grid">
    
    <div class="title-and-search">
      <div class="title"><a href="index.php"><h1>Techmarkt</h1></div></a>
      <span class="menu-icon material-symbols-outlined">menu</span>
      <div class="dropdown" id="dropdown"> 
        <button class="dropbtn">Categorieën</button>
        <div class="dropdown-content">
          <a href="#">Laptop</a>
          <a href="#">mobiel</a>
          <a href="#">Tv</a>
          <a href="#">Tablets</a>
        </div>
      </div>
      
      
      <div class="search-bar" id="search-bar">
        <input type="search" placeholder="Zoeken naar...">
        <button type="submit"><span class="search-icon material-symbols-outlined">search</span></button>
      </div>

      <div class="navbar-container">
        <ul id="navbar-links">
          <span class="account-icon material-symbols-outlined">person</span>
          <li><a href="account.html"><h3>Account</h3></a></li>
          <span class="favorite-icon material-symbols-outlined"> favorite</span>
          <li><a href="favorite.html"><h3>Favorite</h3></a></li>
          <span class="cart-icon material-symbols-outlined">shopping_cart</span>
          <li><a href="form.html"><h3>Winkelwagen</h3></a></li>
        </ul>
      </div>
    </div>
   <!-- This is in the header -->
    <div class="header">
      <nav class="nav-container">
        <div class="nav-links">
          <ul>
            <li><a href="Computers&tablets.html/">Computers & tablets</a></li> 
            <li><a href="Telefonie.html/">Telefonie</a></li>
            <li><a href="Beeld&geluid.html/">Beeld & geluid</a></li>
            <li><a href="Gaming.html/">Gaming</a></li> 
            <li><a href="Thuiswerken&zakelijk.html/">Thuiswerken & zakelijk</a></li> 
            <li><a href="Huishouden&wonen.html/">Huishouden & wonen</a></li> 
            <li><a href="Keuken.html/">Keuken</a></li> 
            <li><a href="Foto&video.html/">Foto & video</a></li> 
            <li><a href="Deals&merken.html/">Deals & merken</a></li> 
            <li><a href="Klantenservice.html/">Klantenservice</a></li> 
            <li><a href="Contact.html/">Contact</a></li> 
            <li><a href="products.php">Producten</a></li> 
          </ul>
        </div>
      </nav>
    

      <div class="headerdeals">
       <div class="photodeal" id="photodeal">
        <a href="cybermonday.html"><img src="assets/img/frontdeal.jpg" alt="photo1"></a> 
        <a href="blackfriday.html"><img src="assets/img/frontdealfriday.jpg" alt="photo2"></a> 
        </div>
      </div>

    </div>




    <div class="sidebar">
      <!-- Sidebar content -->
    
      <!-- Price Range Slider -->
      <div class="price-range-slider">
        <label for="priceRange">Max Price: <span id="priceValue"></span></label>
        <input type="range" id="priceRange" min="0" max="1000" value="500" class="slider">
      </div>
      
      <div class="color-products"><h5>Kleuren</h5>
        <input type="checkbox">
        <label for="colors">Goud</label><br>
        <input type="checkbox">
        <label for="colors">Rood</label><br>
        <input type="checkbox">
        <label for="colors">Blauw</label><br>
        <input type="checkbox">
        <label for="colors">Grijs</label><br>
        <input type="checkbox">
        <label for="colors">Wit</label><br>
        <input type="checkbox">
        <label for="colors">Zilver</label><br>
      </div>


      <div class="merk-products"><h5>Merk</h5>
        <input type="checkbox">
        <label for="colors">Samsung</label><br>
        <input type="checkbox">
        <label for="colors">Apple</label><br>
        <input type="checkbox">
        <label for="colors">Motorola</label><br>
        <input type="checkbox">
        <label for="colors">Xiaomi</label><br>
        <input type="checkbox">
        <label for="colors">Nokia</label><br>
        <input type="checkbox">
        <label for="colors">Sony</label><br>
      </div>

      <div id="buttons">
        <button class="btn">Toon Alles</button>
        <button class="btn">Mobiel</button>
        <button class="btn">Tv</button>
        <button class="btn">Laptop</button>
        <button class="btn">Tablet</button>
        <button class="btn">Ipad</button>
        <button class="btn">Headset</button>
      </div>

      <div class="besturingssysteem"><h5>Besturingssysteem</h5>
        <input type="checkbox">
        <label for="colors">AndroidOS</label><br>
        <input type="checkbox">
        <label for="colors">IOS</label><br>
      </div>

      <div class="beschikbaarheid"><h5>Beschikbaarheid</h5>
        <input type="checkbox">
        <label for="colors">Op voorraad (345)</label><br>
        <input type="checkbox">
        <label for="colors">Binnenkort leverbaar (25)</label><br>
      </div>

      <div class="introductiejaar"><h5>Introductiejaar</h5>
        <input type="checkbox">
        <label for="colors">2024</label><br>
        <input type="checkbox">
        <label for="colors">2023</label><br>
        <input type="checkbox">
        <label for="colors">2022</label><br>
        <input type="checkbox">
        <label for="colors">2021</label><br>
        <input type="checkbox">
        <label for="colors">2020</label><br>
        
      </div>
      
      <!-- Continue with other sidebar content -->
    </div>
    
    <div class="content">
    <div class="products">
  
    <?php
    


    //include_once ("productsarray.php");
    
    // foreach ($products as $product)
    // echo "<class='column' <a href='content'>";
    // // echo "<h2>" . $product['name'] . "</h2>";
    // // echo "<p>€".$product['price']."-.</p>";
    // echo "<src='".$product['image']."'";
  
    include("connection.inc.php");
  
  
  
    $sql = "SELECT product_id, product_naam, product_img, product_beschrijving, product_prijs FROM producten";
    $result = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($result)) {
  

    // foreach ($products as $product) {
      // echo "div class='container-1'>";
      // echo "<div class='products'><a href='detailpagina.php?id' ".  htmlspecialchars($product['id']) ." >"; // Corrected the opening tag
      // echo "<div class='products'><a href= 'detailpagina.php?id=".  htmlspecialchars($product['id']) ." '>";
      // echo "<h2>" . htmlspecialchars($product['name']) . "</h2>"; // Display the product name
      // echo "<p>€" . htmlspecialchars($product['price']) . "</p>"; // Display the price
      // echo "<img src='" . htmlspecialchars($product['image']) . "' />"; // Correctly form the img tag to display the image
      // echo "</a>"; // Close the tags properly
      // echo "<br>" .$product['shop-icon']."<br>";
      // echo "<button class='wwagon'>". htmlspecialchars($product['button']) . "<h6>Bestel nu</h6></button>";
      // echo "<button class='quik'>". htmlspecialchars($product['button2'])."<h6>Quik view</h6></button>";
      // echo "</div>";

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
    <!-- </a> -->
    </p>
      </div>
      </div>
      <?php
    }
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
  ?>
  
  </div>







  <!--    
    <div class="container-1">
      <div class="column">
      <a href="content"><h2>samsungphone0</h2><p>€999.99</p><img src="assets/img/samsungphone0.jpg" alt="samsungphone0"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div>
    <div class="column">
      <a href="content"><h2>samsungphone1</h2><p>€1009.99</p><img src="assets/img/samsungphone1.jpg" alt="samsungphone1"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div>
    <div class="column">
      <a href="content"><h2>samsungphone2</h2><p>€890.99</p><img src="assets/img/samsungphone2.jpg" alt="samsungphone2"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div> 
    <div class="column">
      <a href="content"><h2>samsungphone3</h2><img src="assets/img/samsungphone3.jpg" alt="samsungphone3"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div></div>
    <div class="container-2">
    <div class="column">
      <a href="content"><h2>sonytv0</h2><img src="assets/img/sonytv0.jpg" alt="sonytv0"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div>
    <div class="column">
      <a href="content"><h2>sonytv1</h2><img src="assets/img/sonytv1.jpg" alt="sonytv1"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div> 
    <div class="column"> 
      <a href="content"><h2>samsungtv4</h2><img src="assets/img/samsungtv4.jpg" alt="samsungtv4"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div> 
    <div class="column"> 
      <a href="content"><h2>samsungtv5</h2><img src="assets/img/samsungtv5.jpg" alt="samsungtv5"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div></div>
    <div class="container-3">
    <div class="column">
      <a href="content"><h2>lenovolaptop0</h2><img src="assets/img/lenovolaptop0.jpg" alt="lenovolaptop0"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div>  
    <div class="column">
      <a href="content"><h2>lenovolaptop1</h2><img src="assets/img/lenovolaptop1.jpg" alt="lenovolaptop1"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div> 
    <div class="column">
      <a href="content"><h2>hplaptop2</h2><img src="assets/img/hplaptop2.jpg" alt="hplaptop2"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div>  
    <div class="column">
      <a href="content"><h2>hplaptop3</h2><img src="assets/img/hplaptop3.jpg" alt="hplaptop3"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div></div> 
    <div class="container-4">
    <div class="column">
      <a href="content"><h2>lenovotablet0</h2><img src="assets/img/lenovotablet0.jpg" alt="lenovotablet0"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div>  
    <div class="column">
      <a href="content"><h2>lenovotablet1</h2><img src="assets/img/lenovotablet1.jpg" alt="lenovotablet1"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div> 
    <div class="column">
      <a href="content"><h2>samsungtablet2</h2><img src="assets/img/samsungtablet2.jpg" alt="samsungtablet2"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div>  
    <div class="column">
      <a href="content"><h2>samsungtablet3</h2><img src="assets/img/samsungtablet3.jpg" alt="samsungtablet3"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div></div>
    <div class="container-5">
    <div class="column">
      <a href="content"><h2>appleipad0</h2><img src="assets/img/appleipad0.jpg" alt="appleipad0"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div> 
    <div class="column">
      <a href="content"><h2>appleipad1</h2><img src="assets/img/appleipad1.jpg" alt="appleipad1"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div> 
    <div class="column">
      <a href="content"><h2>sonyheadset0</h2><img src="assets/img/sonyheadset0.jpg" width="351px"alt="sonyheadset0"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div> 
    <div class="column">
      <a href="content"><h2>sonyheadset1</h2><img src="assets/img/sonyheadset1.jpg" alt="sonyheadset1"></a>
      <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
    </div></div>
    <div class="container-6">
      <div class="column">
        <a href="content"><h2>motorola4</h2><img src="assets/img/>motorola4.jpg" alt="motorola4"></a>
        <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
      </div>  
      <div class="column">
        <a href="content"><h2>motorola5</h2><img src="assets/img/motorola5.jpg" alt="motorola5"></a>
        <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
      </div> 
      <div class="column">
        <a href="content"><h2>apple5</h2><img src="assets/img/apple5.jpg" alt="apple5"></a>
        <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
      </div>  
      <div class="column">
        <a href="content"><h2>apple6</h2><img src="assets/img/apple6.jpg" alt="apple6"></a>
        <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
      </div></div>
      <div class="container-7">
        <div class="column">
          <a href="content"><h2>apple7</h2><img src="assets/img/apple7.jpg" alt="apple7"></a>
          <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
        </div>  
        <div class="column">
          <a href="content"><h2>xiaomi8</h2><img src="assets/img/xiaomi8.jpg" alt="xiaomi8"></a>
          <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
        </div> 
        <div class="column">
          <a href="content"><h2>xiaomi9</h2><img src="assets/img/xiaomi9.jpg" alt="xiaomi9"></a>
          <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
        </div>  
        <div class="column">
          <a href="content"><h2>nokia10</h2><img src="assets/img/nokia10.jpg" alt="nokia10"></a>
          <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
        </div></div>
        <div class="container-8">
          <div class="column">
            <a href="content"><h2>nokia11/h2><img src="assets/img/nokia11.jpg" alt="nokia11"></a>
            <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
          </div>  
          <div class="column">
            <a href="content"><h2>nokia12</h2><img src="assets/img/nokia12.jpg" alt="nokia12"></a>
            <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
          </div> 
          <div class="column">
            <a href="content"><h2>sony13</h2><img src="assets/img/sony13.jpg" alt="sony13"></a>
            <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
          </div>  
          <div class="column">
            <a href="content"><h2>sony14</h2><img src="assets/img/sony14.jpg" alt="sony14"></a>
            <button class="wwagen"><span class="cart-icon material-symbols-outlined">shopping_cart</span><br><br><h6>Bestel nu</h6></button>
          </div></div>
    </div>
  </div>
 -->



    
 
 

  
 <div class="footer">
      <div class="social-media-icons">
        <ul>
          <!-- nog een aparte class -->
          <li><span class="copyright-icon material-symbols-outlined">copyright</span><copyright>2024 Techmarkt by Thida</copyright>  
          <h4>Beoordeling door klanten 9/10</h4>
          </li>
          <li><a href='instagram.html'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          <h4>@Techmarkt_Official</h4></a>
          </li>
          <li><a href='twitterX.html'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/></svg>
          <h4>@Techmarkt_Official_X</h4></a>
          </li>
          <li><a href='facebook.html'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
          <h4>Techmarkt</h4></a>
          </li> 
          <li><a href='discord.html'><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M19.54 0c1.356 0 2.46 1.104 2.46 2.472v21.528l-2.58-2.28-1.452-1.344-1.536-1.428.636 2.22h-13.608c-1.356 0-2.46-1.104-2.46-2.472v-16.224c0-1.368 1.104-2.472 2.46-2.472h16.08zm-4.632 15.672c2.652-.084 3.672-1.824 3.672-1.824 0-3.864-1.728-6.996-1.728-6.996-1.728-1.296-3.372-1.26-3.372-1.26l-.168.192c2.04.624 2.988 1.524 2.988 1.524-1.248-.684-2.472-1.02-3.612-1.152-.864-.096-1.692-.072-2.424.024l-.204.024c-.42.036-1.44.192-2.724.756-.444.204-.708.348-.708.348s.996-.948 3.156-1.572l-.12-.144s-1.644-.036-3.372 1.26c0 0-1.728 3.132-1.728 6.996 0 0 1.008 1.74 3.66 1.824 0 0 .444-.54.804-.996-1.524-.456-2.1-1.416-2.1-1.416l.336.204.048.036.047.027.014.006.047.027c.3.168.6.3.876.408.492.192 1.08.384 1.764.516.9.168 1.956.228 3.108.012.564-.096 1.14-.264 1.74-.516.42-.156.888-.384 1.38-.708 0 0-.6.984-2.172 1.428.36.456.792.972.792.972zm-5.58-5.604c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332.012-.732-.54-1.332-1.224-1.332zm4.38 0c-.684 0-1.224.6-1.224 1.332 0 .732.552 1.332 1.224 1.332.684 0 1.224-.6 1.224-1.332 0-.732-.54-1.332-1.224-1.332z"/></svg>
          <h4>Techmarkt_Discord</h4></a>
          </li>
          <li><a href='linkedin.html'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
          <h4>Techmarkt</h4></a>
          </li>
          <li><a href='whatsapp.html'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
          <h4>06 333 666 36</h4>
          </li>
        </ul>
     </div>
  </div>
  <script>


  </script>
  
  
</body>


</body>


</html>
