<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Café Noir</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f3e5d8;
    }
    header {
      background: linear-gradient(to right, #3e2723, #5d4037);
      padding: 20px;
      text-align: center;
      color: white;
      font-size: 28px;
      font-weight: bold;
    }
    nav {
      background-color: #5c4033;
      display: flex;
      justify-content: center;
      padding: 10px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    nav a {
      margin: 0 15px;
      padding: 10px;
      text-decoration: none;
      color: #f3e5d8;
      font-weight: bold;
      border-radius: 5px;
    }
    nav a:hover {
      background-color: #3e2723;
      padding: 10px 15px;
    }
    .container {
      padding: 20px;
    }
    .section {
      margin: 20px 0;
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .section h2 {
      color: #3e2723;
    }
    .product-list {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }
    .product {
      flex: 1 1 calc(25% - 20px);
      background-color: #fff5e1;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .product img {
      width: 100%;
      height: 200px;  /* Fixed height for consistency */
      object-fit: cover;  /* Ensures images don't stretch/distort */
      border-radius: 10px;
    }
    .product h3 {
      margin: 10px 0 5px;
    }
    .product button {
      background-color: #3e2723;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }
    .product button:hover {
      background-color: #5d4037;
    }
    footer {
      text-align: center;
      padding: 15px;
      background-color: #3e2723;
      color: white;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<header>
  Café Noir ☕
</header>

<nav>
  <a href="#home">Home</a>
  <a href="#menu">Menu</a>
  <a href="#specials">Specials</a>
  <a href="#about">About Us</a>
  <a href="#contact">Contact</a>
</nav>

<div class="container">
  <section id="home" class="section">
    <h2>Welcome to Café Noir!</h2>
    <p>Discover the deep, bold flavors of our specialty coffee blends. Let every sip take you on a journey of rich taste and aroma.</p>
  </section>

  <section id="menu" class="section">
    <h2>Our Menu</h2>
    <div class="product-list">
      <div class="product">
        <img src="./espresso.webp" alt="Espresso">
        <h3>Espresso</h3>
        <p>Strong & bold coffee shot.</p>
        <button onclick="alert('Espresso added to order!')">Order Now</button>
      </div>
      <div class="product">
        <img src="./cappuccino.jpg" alt="Cappuccino">
        <h3>Cappuccino</h3>
        <p>Creamy and foamy delight.</p>
        <button onclick="alert('Cappuccino added to order!')">Order Now</button>
      </div>
      <div class="product">
        <img src="./coffee-latte-glass_1399530-2678.avif" alt="Latte">
        <h3>Latte</h3>
        <p>Perfect blend of milk & espresso.</p>
        <button onclick="alert('Latte added to order!')">Order Now</button>
      </div>
      <div class="product">
        <img src="./Mocha-1fc71f7.png" alt="Mocha">
        <h3>Mocha</h3>
        <p>Chocolate & coffee in one cup.</p>
        <button onclick="alert('Mocha added to order!')">Order Now</button>
      </div>
    </div>
  </section>

  <section id="specials" class="section">
    <h2>Today's Specials</h2>
    <div class="product-list">
      <div class="product">
        <img src="./cinnamon-caramel-macchiato-1024x585.webp" alt="Caramel Macchiato">
        <h3>Caramel Macchiato</h3>
        <p>Sweet caramel flavor with espresso.</p>
        <button onclick="alert('Special added to order!')">Order Now</button>
      </div>
      <div class="product">
        <img src="./RFO-1400x919-IcedCoffee-76221116-2565-4103-9899-89571028018e-0-1400x919.jpg" alt="Iced Coffee">
        <h3>Iced Coffee</h3>
        <p>Cold, refreshing & energizing.</p>
        <button onclick="alert('Special added to order!')">Order Now</button>
      </div>
    </div>
  </section>

  <section id="about" class="section">
    <h2>About Us</h2>
    <p>Café Noir is dedicated to bringing you the finest quality coffee with rich flavors and a relaxing atmosphere.</p>
  </section>

  <section id="contact" class="section">
    <h2>Contact Us</h2>
    <p>Have questions? Email us at <a href="mailto:contact@cafenoir.com">lejaniexx.domingo@gmail.com</a> or call (987) 654-3210.</p>
  </section>
</div>

<footer>
  <p>&copy; 2025 Café Noir | All rights reserved.</p>
</footer>

</body>
</html>
