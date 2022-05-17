<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

<!--bootstrap cdn-->
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

<!--google icon fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!--font awesome cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" type="text/css" href="../styling/index.css">
   <link rel="stylesheet" type="text/css" href="../styling/header.css">
   <link rel="stylesheet" type="text/css" href="../styling/footer.css">
  
    <script src="../JS/header.js"></script>
     <script src="../JS/index.js"></script>
    <title>SHOPEO || An Ecommerce Website</title>
  </head>
  <body>
   
<?php 
include_once "header.php";
 
?>


<section class="part2 container-fluid"  style="background-color: rgb(199, 194, 159);">
  <div class="row">
    <img src="https://cdn.shopify.com/s/files/1/1825/4753/files/banner-custom-image-1_1920x_820b9a4b-0795-4480-a6c2-717e4d64df90_1920x.jpg?v=1638362928" class="img-fluid img-responsive imgmain" style="width: 100%;">
  </div>
  <div class="row">
    <label class="offerpara text-center">BRIGHTEN UP SOMEONE’S DAY UNDER $50. <a href="#"><b>SHOP NOW</b></a></label>
  </div>
</section>


<section class="part3 container-fluid section">
  <div class="row">
    <marquee>
 <div>
  <span><i class="fa-regular fa-gem fa-2x diamond"></i>
<b class="text10">100% Genuine Products</b></span><vr class="vl">

<span><i class="fa-solid fa-truck-droplet fa-2x delivery"></i>
  <!-- <img src="../images/truck.png" class="delivery"> -->
<b class="text10">Quick Delivery</b></span><vr class="vl">

<span><!-- <i class="fa-regular fa-percent"></i> -->
<i class="material-icons percent">percent</i>
<b class="text10">Best Offer Guaranteed</b></span><vr class="vl">

<span><i class="material-icons star">star</i>
<b class="text10">Secured Shopping</b></span>
 </div>  

    </marquee>
  </div>
</section>


<section class="part4 container-fluid">
  <div class="row">
   <p class="text1"><b> Trending Products</b></p><hr>
  </div>
  <div class="row">
    <!--tabber code-->

<div class="w3-bar w3-black" style="margin-bottom: 3%;">
  <button class="btn" onclick="openCity('featured')">Featured</button>
  <button style="margin: 1%;" class="btn" onclick="openCity('latest')">Latest</button>
  <button class="btn" onclick="openCity('bestseller')">Bestsellers</button>
  <button style="margin: 1%;" class="btn" onclick="openCity('special')">Specials</button>
  <button class="btn" onclick="openCity('bestrated')">Best Rated</button>
</div>


<div class="content">
<div id="featured" class="city">

<div class="imgcontainer">
  <div class="firsttwo">
  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Fashion/Women/32%20Heat%20Pants-550x550h.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">32 Degrees Ladies'<br> Tech Fleece Jogger Pants</p>
    <p><b class="price">$20</b> <s>$25</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/watches/Snapdo%20Watch-550x550h.JPG" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Sharpdo Women's <br>Analog Quartz Watch</p>
    <p><b class="price">$25</b> <s>$28</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>
</div>


<div class="secondtwo">
  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Perfume/le_parfum_by_elie_saab-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Elie Saab Le Parfum Eau<br> De Parfum For Women, 90 ml</p>
    <p><b class="price">$85</b> <s>$90</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

 <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Nike%20Renew%20Freedom%20Running%20(2)-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Reebok Sublite <br>Legend Running Shoe</p>
    <p><b class="price">$54</b> <s>$79</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div></div>
</div>

</div>

<div id="latest" class="city" style="display:none">
  
<div class="imgcontainer">
  <div class="firsttwo">
  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/adidas-pw-hu-holi-tennis-550x550w.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Adidas Pharrell <br>Williams Holi Tennis</p>
    <p><b class="price">$64</b> <s>$125</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Fashion/Men/Aeropostale%20Ath%20Dep871-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Aeropostale Aero<br> Guys Ath Dept87</p>
    <p><b class="price">$28</b> <s>$35</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>
</div>


  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Adidas%20Runfalcon_Shoes_Pink-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Adidas Runfalcon<br> Shoes</p>
    <p><b class="price">$50</b> <s>$85</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

 <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Reebok%20Sublite-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Reebok Sublite Legend <br>Running Shoe</p>
    <p><b class="price">$54</b> <s>$75</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>
</div>

</div>

<div id="bestseller" class="city" style="display:none">

<div class="imgcontainer">
  <div class="firsttwo">
  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Nike%20Airforce1..-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Nike Air Force <br>1 Low White</p>
    <p><b class="price">$64</b> <s>$125</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Nike%20270-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Nike Air Max 270<br> Triple Black</p>
    <p><b class="price">$100</b> <s>$125</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>
</div>


  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Mobiles/Samsung%20Galaxy%20A02-550x550h.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Samsung Galaxy A02 Dual SIM, <br>64GB 3GB RAM LTE,<br> Blue - $120</p>
    <p><b class="price">$120</b> <s>$135</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

 <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Fashion/Men/Armani%20sport%20suit-min-550x550h.png" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Emporio Armani <br>- Sports Suit</p>
    <p><b class="price">$60</b> <s>$90</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>
</div>

</div>

<div id="special" class="city" style="display:none">

<div class="imgcontainer">
  <div class="firsttwo">
  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Adidas%20Alpaboost-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Adidas Alphaboost Torsion<br> System Black-Orange</p>
    <p><b class="price">$50</b> <s>$105</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Converse%20kids%20green-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Converse Chuck Taylor All<br> Star Loopholes Green
</p>
    <p><b class="price">$30</b> <s>$65</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>
</div>


  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/watches/US%20Polo%20Watch-550x550h.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">US. Polo Assn. Casual Watch <br>Analog Quartz For Men</p>
    <p><b class="price">$78</b> <s>$100</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

 <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Fashion/Women/237%20Adidas%203%20streps%207-8%20Legging-550x550.jpeg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Adidas 3 Stripes 7/8<br> Leggings Black</p>
    <p><b class="price">$32</b> <s>$55</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>
</div>

</div>

<div id="bestrated" class="city" style="display:none">
 

<div class="imgcontainer">
  <div class="firsttwo">
  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Converse%20kids%20green-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Converse Chuck Taylor All<br> Star Loopholes Green</p>
    <p><b class="price">$35</b> <s>$65</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Perfume/Dior%20Sauvage%20(1)-550x550w.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Dior Sauvage perfume for men - <br>Eau de Toilette, 60ML</p>
    <p><b class="price">$90</b> <s>$102</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>
</div>


  <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Reebok%20Sublite-550x550.jpg" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Reebok Sublite Legend <br>Running Shoe</p>
    <p><b class="price">$54</b> <s>$79</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>

 <div class="card">
    <a href="#"  style="text-decoration: none;">
    <div>
    <img src="https://shopme.online/image/cache/catalog/watches/Snapdo%20Watch-550x550h.JPG" class="img-fluid img-responsive img1">
  </div>
  <div class="contentSection">
  <div>
    <p class="text2">Sharpdo Women's Analog<br> Quartz Watch</p>
    <p><b class="price">$20</b> <s>$30</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div>
</a>
  </div>
</div>

</div>
</div>

    <!--till here-->
  </div>
</section>


<section class="part5 container-fluid">
  <div class="row">
    <p align="center" class="text3">I’m looking for..</p> <hr>
  </div>
  <div class="row" align="center">
   <a href=""><img src="https://cdn.shopify.com/s/files/1/1825/4753/files/spotlight_icon_1_1024x1024_crop_center.png?v=1603871981"></a>
    <a href=""><img src="https://cdn.shopify.com/s/files/1/1825/4753/files/spotlight_icon_2_1024x1024_crop_center.png?v=1603871989"></a>
    <a href=""><img src="https://cdn.shopify.com/s/files/1/1825/4753/files/spotlight_icon_3_1024x1024_crop_center.png?v=1603871997"></a>
    <a href=""><img src="https://cdn.shopify.com/s/files/1/1825/4753/files/spotlight_icon_4_1024x1024_crop_center.png?v=1603872005"></a>
    <a href=""><img src="https://cdn.shopify.com/s/files/1/1825/4753/files/spotlight_icon_5_1024x1024_crop_center.png?v=1603872014"></a>
    <a href=""><img src="https://cdn.shopify.com/s/files/1/1825/4753/files/spotlight_icon_6_1024x1024_crop_center.png?v=1603872021"></a>
  </div>
</section>


<!-- <section class="part6 container-fluid">
  <div class="row row1">
    <div class="left1">
      <div class="textcontainer">
     <p align="center" class="text4">NEW COLLECTION</p>
      <p class="text5">Jungleries</p>
      <p class="text6">Temporibus autem quibusdam et<br> aut officiis debitis aut rerum <br>necessitatibus saepe eveniet ut<br> et voluptates repudiandae sint et<br> molestiae non redae.</p>
      <button class="btn1">SHOP THE COLLECTION</button>
    </div></div>
    <div align="center" class="right1">
      <img src="https://cdn.shopify.com/s/files/1/1825/4753/files/banner-two-custom-1_1024x1024_crop_center.jpg?v=1604459293" class="img-fluid img-responsive img2">
    </div>
  </div>
</section>
 -->

<section class="part7 container-fluid" style="background-color:rgb(227, 226, 222); padding-bottom: 6%;">
  <div class="row">
    <p align="center" class="text7">Shop By Top Categories</p><hr>
  </div>
  
  <div>
<div class="w3-bar w3-black" style="margin-bottom: 20px;">
    <button class="btn" onclick="openCity('top')">Top Category</button>
  <button class="btn" onclick="openCity('beauty')">Beauty & Perfumes</button>
  <button class="btn" onclick="openCity('clothes')">Clothes</button>
  <button class="btn" onclick="openCity('accessories')">Accessories</button>
  <button class="btn" onclick="openCity('electronics')">Electronics</button>
  <button class="btn" onclick="openCity('fashion')">Fashion</button>
  <button class="btn" onclick="openCity('shoes')">Shoes</button>
  <button class="btn" onclick="openCity('watch')">Watch</button>
</div>




<div class="content">
<div id="top" class="city">

<div class="cardbelowcontainer">
  <div class="cardbelow loop1">
    <a href="perfumes.php"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/Perfume%20Banner-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Beauty $ Perfumes</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
  <!-- <div class="contentSection">
  <div>
    <p class="text8">32 Degrees Ladies'<br> Tech Fleece Jogger Pants</p>
    <p><b class="price">$20</b> <s>$25</s></p>
  </div>
  <div>
  <a href=""><i class="fa-regular fa-heart fa-lg" title="add to wishlist" style="color:red;"></i></a>
   <a href=""><i class="fa-solid fa-cart-plus fa-lg" title="add to cart"></i></a>

  <a href=""> <i class="fa-solid fa-dollar-sign fa-lg" title="purchase now" style="color: green;"></i></a>

   <a href=""><i class="fa-solid fa-arrow-right-arrow-left" title="compare this product" style="color: blue;"></i></a>

<a href=""><i class="fa-regular fa-envelope fa-lg" title="ask question" style="color: pink;"></i></a>
  
  </div>
</div> -->
</a>
  </div>
<div class="cardbelow loop2">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/bagcat-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Fashion</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>

  <div class="cardbelow loop3">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/banners/Watches-min-200x250h.png" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Watches</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
 <div class="cardbelow loop4">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/Shoe%20cat-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Shoes</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>

  <div class="cardbelow loop5">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/electronic%20banner-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Electronics</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
</div>


  
</div>

<div id="beauty" class="city">
<div class="cardbelow3">
  <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/Perfume%20Banner-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Perfumes</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
 <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/Perfume/le_parfum_by_elie_saab-550x550.jpg" class="img-fluid img-responsive img-cloth img3">
  </div>
  <button class="btn1">Women Perfumes</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
</div>
</div>

<div id="clothes" class="city">
<div class="cardbelow3">
  <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/people/new/pexels-photo-1070030-200x250w.jpeg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Women</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
 <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/people/new/pexels-photo-1546136-200x250w.jpeg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Men</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
</div>
</div>

<div id="accessories" class="city">
<div class="cardbelow4">
  <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/items/ph-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Purses</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
 <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/bagcat-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Accessories</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
</div>
</div>

<div id="electronics" class="city">
<div class="cardbelow5">
  <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/phone%20category-200x250h.png" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Mobiles</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
 <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/electronic%20banner-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Accessories</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
</div>
</div>

<div id="fashion" class="city">
<div class="cardbelow6">
  <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/Fashion/Men/Aeropostale%20Ath%20Dep871-550x550.jpg" class="img-fluid img-responsive img3 img-cloth">
  </div>
  <button class="btn1">Clothing</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
 <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/bagcat-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Fashion</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
</div>
</div>

<div id="shoes" class="city">
<div class="cardbelow7">
  <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/Shoes/Reebok%20Sublite-550x550.jpg" class="img-fluid img-responsive img3 img-cloth">
  </div>
  <button class="btn1">Shoes</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
 <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/Shoe%20cat-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Shoes</button></div>
  <p class="text11">See Products<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
</div>
</div>

<div id="watch" class="city">
<div class="cardbelow8">
  <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/categories/electronic%20banner-200x250h.jpg" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Shoes</button></div>
  <p class="text11">Smart Watch<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
 <div class="cardbelow">
    <a href="#"  style="text-decoration: none;">
   <div class="box1"> <div>
    <img src="https://shopme.online/image/cache/catalog/journal3/banners/Watches-min-200x250h.png" class="img-fluid img-responsive img3">
  </div>
  <button class="btn1">Shoes</button></div>
  <p class="text11">Smart Bands<i class="fa-solid fa-arrow-right"></i></p>
</a>
  </div>
</div>
</div>







</div>



  </div>
</section>


<section class="part8 container-fluid">
<div class="row">
  
</div>
</section>



<?php 
include_once 'footer.php';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 
  </body>
</html>