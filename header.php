<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techmarktweb</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="index.php" href="index.php">
  <link rel="footer.php" href="footer.php">
  <link rel="stylesheet" href="product0style.css">
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
          </ul>
        </div>
      </nav>
   

    
      <div class="headerdeals">
        <div class="photodeal" id="photodeal">
        <a href="cybermonday.html"><img src="assets/img/frontdeal.jpg" alt="photo1" width="1000px" height="10px"></a> 
        <a href="blackfriday.html"><img src="assets/img/frontdealfriday.jpg" alt="photo2" width="1000px" height="10px"></a> 
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
      
    </div> <!-- Continue with other sidebar content -->
    
    <div class="content">
    <div class="products">
  
  
  
  
  
  
  </div>

   


</body>