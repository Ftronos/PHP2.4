<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Product</title>
  <!--<link rel="stylesheet" href="css/less/style.css">-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div class="wrapper">
  <div class="content">
    <header class="header">
      <div class="header-flex ">
        <div class="header-left">
          <a class="logo" href="index.php"> <img src="img/logo.png" alt="logo">BRAN<span
              class="special-D">D</span></a>
          <form class="form" action="#">
            <div class="browse"><span class="browse-text">Browse</span><i class="fa fa-caret-down"></i>
              <div class="browse-mega-box">
                <div class="browse-mega-flex">
                  <h3>Women</h3>
                  <ul class="browse-mega-menu">
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Sweaters/Knits</a></li>
                    <li><a href="#">Jackets/Coats</a></li>
                    <li><a href="#">Blazers</a></li>
                    <li><a href="#">Denim</a></li>
                    <li><a href="#">Leggings/Pants</a></li>
                    <li><a href="#">Skirts/Shorts</a></li>
                    <li><a href="#">Accessories </a></li>
                  </ul>
                  <h3>Men</h3>
                  <ul class="browse-mega-menu">
                    <li><a href="#">Tees/Tank tops</a></li>
                    <li><a href="#"> Shirts/Polos </a></li>
                    <li><a href="#">Sweaters</a></li>
                    <li><a href="#">Sweatshirts/Hoodies</a></li>
                    <li><a href="#">Blazers</a></li>
                    <li><a href="#">Jackets/vests</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <input class="search" type="search" placeholder="Search for Item...">
            <button class="submit-search" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="header-right">
          <div class="cart-position">
            <a href="shoping_cart.php"><img src="img/cart.svg" alt="cart"> </a>
            <div class="cart">
              <div id="cart">
                <!--<div class="goods"><img src="img/Layer_43.jpg" alt="thing">-->
                <!--<div class="cart-text">-->
                <!--<p class="name-goods">Rebox Zane</p>-->
                <!--<div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i-->
                <!--class="fa fa-star"></i> <i class="fa fa-star"></i> <i-->
                <!--class="fa fa-star-half"></i></div>-->
                <!--<p class="price">1&nbsp;x $250</p>-->
                <!--</div>-->
                <!--<i class="fas fa-times-circle"></i></div>-->
                <!--<div class="goods"><img src="img/Layer_44.jpg" alt="thing">-->
                <!--<div class="cart-text">-->
                <!--<p class="name-goods">Rebox Zane</p>-->
                <!--<div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i-->
                <!--class="fa fa-star"></i> <i class="fa fa-star"></i> <i-->
                <!--class="fa fa-star-half"></i></div>-->
                <!--<p class="price">1&nbsp;x $250</p>-->
                <!--</div>-->
                <!--<i class="fas fa-times-circle"></i></div>--> </div>
              <div class="flex-text-between">
                <p>TOTAL</p>
                <p>$<span id="all-price"></span></p>
              </div>
              <div class="checkout"><a class="checkout-text"
                                       href="checkout.php"><span>Checkout</span></a></div>
              <div class="go-to-card"><a class="go-to-card-text"
                                         href="shoping_cart.php"><span>Go&nbsp;to&nbsp;cart</span></a>
              </div>
            </div>
          </div>
          <div class="account">
            <a class="account-text" href="#"> <span>My&nbsp;Account</span><i
                class="fa fa-caret-down"></i></a>
          </div>
        </div>
      </div>
    </header>
    <nav>
      <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="#">Man</a></li>
        <li><a href="#">Women</a>
          <div class="mega-box">
            <div class="mega-flex">
              <h3>Women</h3>
              <ul class="mega-menu">
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">Sweaters/Knits</a></li>
                <li><a href="#">Jackets/Coats</a></li>
                <li><a href="#">Blazers</a></li>
                <li><a href="#">Denim</a></li>
                <li><a href="#">Leggings/Pants</a></li>
                <li><a href="#">Skirts/Shorts</a></li>
                <li><a href="#">Accessories </a></li>
              </ul>
            </div>
            <div class="mega-flex">
              <h3>Women</h3>
              <ul class="mega-menu">
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">Sweaters/Knits</a></li>
                <li><a href="#">Jackets/Coats</a></li>
              </ul>
              <h3>Women</h3>
              <ul class="mega-menu">
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">Sweaters/Knits</a></li>
              </ul>
            </div>
            <div class="mega-flex">
              <h3>Women</h3>
              <ul class="mega-menu">
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">Sweaters/Knits</a></li>
                <li><a href="#">Jackets/Coats</a></li>
              </ul>
              <a class="mega-menu-link" href="#"><img src="img/Layer_42.jpg" alt="choose-menu">
                <p class="mega-menu-text">Super sale!</p>
              </a>
            </div>
          </div>
        </li>
        <li><a href="#">Kids</a></li>
        <li><a href="#">Accoseriese</a></li>
        <li><a href="#">Featured</a></li>
        <li><a href="#">Hot Deals</a></li>
      </ul>
    </nav>
    <div class="breadcrumb">
      <div class="breadcrumb-text">
        <h3>New Arrivals</h3>
        <div class="breadcrumb-link"><a href="index.php">Home</a>/ <a href="#">Men </a>/ <a
            href="#"><span>New Arrivals</span>
        </a></div>
      </div>
    </div>
    <section class="product-flex">
      <div class="left-details-list">
        <details class="category " open>
          <summary>
            <h3 class="category-h3 active-elment">Category <span><i class="fa fa-caret-down"></i></span>
            </h3></summary>
          <ul class="category-list">
            <li> Accessories</li>
            <li>Bags</li>
            <li>Denim</li>
            <li>Hoodies &amp;&nbsp;Sweatshirts</li>
            <li>Jackets &amp;&nbsp;Coats</li>
            <li>Pants</li>
            <li>Polos</li>
            <li>Shirts</li>
            <li>Shoes</li>
            <li>Shorts</li>
            <li>Sweaters &amp;&nbsp;Knits</li>
            <li>T-Shirts</li>
            <li>Tanks</li>
          </ul>
        </details>
        <details class="category">
          <summary>
            <h3 class="category-h3">BRAND <span><i class="fa fa-caret-down"></i></span></h3></summary>
        </details>
        <details class="category">
          <summary>
            <h3 class="category-h3">dESIGNER<span><i class="fa fa-caret-down"></i></span></h3></summary>
        </details>
      </div>
      <div class="right-product">
        <div class="high-block-choose">
          <div class="choose-link">
            <h4 class="h4-choose">Trending now</h4>
            <div class="text-choose-link choose-link__text-choose-link"><a class="link-text" href="#">Bohemian </a>
              <a class="link-text" href="#">Floral</a> <a class="link-text" href="#">Lace </a> <a
                  class="link-text" href="#">Lace </a> <a class="link-text" href="#">Floral</a> <a
                  class="link-text" href="#">Bohemian </a></div>
          </div>
          <div class="choose-checkbox">
            <h4 class="h4-choose">Size</h4>
            <form class="choose-check-box choose-checkbox__choose-check-box" action="#">
              <label class="text-size">
                <input type="checkbox"> XXS </label>
              <label class="text-size">
                <input type="checkbox"> XS </label>
              <label class="text-size">
                <input type="checkbox"> S </label>
              <label class="text-size">
                <input type="checkbox"> M </label>
              <label class="text-size">
                <input type="checkbox"> L </label>
              <label class="text-size">
                <input type="checkbox"> XL </label>
              <label class="text-size">
                <input type="checkbox"> XXL </label>
            </form>
          </div>
          <div class="choose-price">
            <h4 class="h4-choose">pRICE</h4>
            <div class="block-price choose-price__block-price">
              <div class="choose-price-line"></div>
              <div class="choose-price-text block-price__choose-price-text">
                <p class="text-price">$52</p>
                <p class="text-price">$400</p>
              </div>
            </div>
          </div>
        </div>
        <div class="sort right-product__sort">
        
        </div>
        <div class="img-items">
          
          
          <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.html"> <img class="img"-->
          <!--src="img/product-page/product-1.jpg"-->
          <!--alt="items-poduct">-->
          <!--<div class="product-info special-color-p-product">-->
          <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
          <!--<div class="link-special-product">-->
          <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
          <!--<span>Add to&nbsp;Cart</span>-->
          <!--</a>-->
          <!--<div class="flex-svg-item">-->
          <!--<a class="active-link" href="#"><img src="img/change.svg" alt="change"></a>-->
          <!--<a class="active-link" href="#"> <img src="img/Like.svg" alt="like"></a>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.html"> <img class="img"-->
          <!--src="img/product-page/product-2.jpg"-->
          <!--alt="items-poduct">-->
          <!--<div class="product-info special-color-p-product">-->
          <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
          <!--<div class="link-special-product">-->
          <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
          <!--<span>Add to&nbsp;Cart</span>-->
          <!--</a>-->
          <!--<div class="flex-svg-item">-->
          <!--<a class="active-link" href="#"><img src="img/change.svg" alt="change"></a>-->
          <!--<a class="active-link" href="#"> <img src="img/Like.svg" alt="like"></a>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.html"> <img class="img"-->
          <!--src="img/product-page/product-3.jpg"-->
          <!--alt="items-poduct">-->
          <!--<div class="product-info special-color-p-product">-->
          <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
          <!--<div class="link-special-product">-->
          <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
          <!--<span>Add to&nbsp;Cart</span>-->
          <!--</a>-->
          <!--<div class="flex-svg-item">-->
          <!--<a class="active-link" href="#"><img src="img/change.svg" alt="change"></a>-->
          <!--<a class="active-link" href="#"> <img src="img/Like.svg" alt="like"></a>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.html"> <img class="img"-->
          <!--src="img/product-page/product-4.jpg"-->
          <!--alt="items-poduct">-->
          <!--<div class="product-info special-color-p-product">-->
          <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
          <!--<div class="link-special-product">-->
          <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
          <!--<span>Add to&nbsp;Cart</span>-->
          <!--</a>-->
          <!--<div class="flex-svg-item">-->
          <!--<a class="active-link" href="#"><img src="img/change.svg" alt="change"></a>-->
          <!--<a class="active-link" href="#"> <img src="img/Like.svg" alt="like"></a>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.html"> <img class="img"-->
          <!--src="img/product-page/product-5.jpg"-->
          <!--alt="items-poduct">-->
          <!--<div class="product-info special-color-p-product">-->
          <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
          <!--<div class="link-special-product">-->
          <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
          <!--<span>Add to&nbsp;Cart</span>-->
          <!--</a>-->
          <!--<div class="flex-svg-item">-->
          <!--<a class="active-link" href="#"><img src="img/change.svg" alt="change"></a>-->
          <!--<a class="active-link" href="#"> <img src="img/Like.svg" alt="like"></a>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.html"> <img class="img"-->
          <!--src="img/product-page/product-6.jpg"-->
          <!--alt="items-poduct">-->
          <!--<div class="product-info special-color-p-product">-->
          <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
          <!--<div class="link-special-product">-->
          <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
          <!--<span>Add to&nbsp;Cart</span>-->
          <!--</a>-->
          <!--<div class="flex-svg-item">-->
          <!--<a class="active-link" href="#"><img src="img/change.svg" alt="change"></a>-->
          <!--<a class="active-link" href="#"> <img src="img/Like.svg" alt="like"></a>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.html"> <img class="img"-->
          <!--src="img/product-page/product-7.jpg"-->
          <!--alt="items-poduct">-->
          <!--<div class="product-info special-color-p-product">-->
          <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
          <!--<div class="link-special-product">-->
          <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
          <!--<span>Add to&nbsp;Cart</span>-->
          <!--</a>-->
          <!--<div class="flex-svg-item">-->
          <!--<a class="active-link" href="#"><img src="img/change.svg" alt="change"></a>-->
          <!--<a class="active-link" href="#"> <img src="img/Like.svg" alt="like"></a>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.html"> <img class="img"-->
          <!--src="img/product-page/product-8.jpg"-->
          <!--alt="items-poduct">-->
          <!--<div class="product-info special-color-p-product">-->
          <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
          <!--<div class="link-special-product">-->
          <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
          <!--<span>Add to&nbsp;Cart</span>-->
          <!--</a>-->
          <!--<div class="flex-svg-item">-->
          <!--<a class="active-link" href="#"><img src="img/change.svg" alt="change"></a>-->
          <!--<a class="active-link" href="#"> <img src="img/Like.svg" alt="like"></a>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.html"> <img class="img"-->
          <!--src="img/product-page/product-9.jpg"-->
          <!--alt="items-poduct">-->
          <!--<div class="product-info special-color-p-product">-->
          <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
          <!--<div class="link-special-product">-->
          <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
          <!--<span>Add to&nbsp;Cart</span>-->
          <!--</a>-->
          <!--<div class="flex-svg-item">-->
          <!--<a class="active-link" href="#"><img src="img/change.svg" alt="change"></a>-->
          <!--<a class="active-link" href="#"> <img src="img/Like.svg" alt="like"></a>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!--</div>-->
          <!---->
        
        
        </div>
        <div class="pagination">
<!--          <div class="slider-number"></div>-->
          <div id="view-all" class="special-link-text" href="#">See More</div>
        </div>
      </div>
    </section>
    <aside class="futered-box">
      <!--
                      <div class="item-offer">
                          <img src="img/car.svg" alt="delivery">
                      </div>
      -->
      <div class="service-special futered-box__service-special">
        <article class="special-service-delivery"><img src="img/car.svg" alt="delivery">
          <div class="delivery-text special-delivery-text">
            <h6 class="dilevery-text-h6">Free Delivery</h6>
            <p class="delivery-text-p special-text-p">Worldwide delivery on&nbsp;all. Authorit tively morph
              next-generation innov tion with extensive models.</p>
          </div>
        </article>
        <article class="special-service-delivery "><img src="img/sales.svg" alt="delivery">
          <div class="sales-text special-delivery-text">
            <h6 class="dilevery-text-h6">Sales &amp;&nbsp;discounts</h6>
            <p class="delivery-text-p special-text-p">Worldwide delivery on&nbsp;all. Authorit tively morph
              next-generation innov tion with extensive models.</p>
          </div>
        </article>
        <article class="special-service-delivery"><img src="img/crown.svg" alt="delivery">
          <div class="delivery-text special-delivery-text">
            <h6 class="dilevery-text-h6">Quality assurance</h6>
            <p class="delivery-text-p special-text-p">Worldwide delivery on&nbsp;all. Authorit tively morph
              next-generation innov tion with extensive models.</p>
          </div>
        </article>
      </div>
    </aside>
  </div>
  <footer class="footer">
    <section class="short-info">
      <div class=" short-info-text">
        <div class="short-info-discription-img"><img src="img/img-face.png" alt="">
          <div class="short-info-text-discription">
            <p class="short-info-quote">&laquo;Vestibulum quis porttitor dui! Quisque viverra nunc&nbsp;mi,
              a&nbsp;pulvinar purus condimentum&nbsp;a. Aliquam condimentum mattis neque sed pretium&raquo;</p>
            <p class="short-info-name">Bin Burhan</p>
            <p class="short-info-">Dhaka, Bd</p>
            <div class="swap">
              <a class="swap1" href="#"></a>
              <a class="swap2" href="#"></a>
              <a class="swap1" href="#"></a>
            </div>
          </div>
        </div>
        <div class="subscribe-container">
          <div class="subscride">
            <h5>Subscribe</h5>
            <p>FOR OUR NEWLETTER AND PROMOTION</p>
          </div>
          <div class="email-subscribe">
            <form action="#">
              <input class="email-subscribe-form" type="email" placeholder="Enter Your Email">
              <input class="email-button" type="submit" value="Subscribe"></form>
          </div>
        </div>
      </div>
      <div class="img-backdround"></div>
    </section>
    <div class="footer-info">
      <div class="footer-info1">
        <a class="logo logo-margin-bottom" href="#"> <img src="img/logo.png" alt="logo">BRAN<span
            class="special-D">D</span></a>
        <div class="footer-text">
          <p class="p-margin-bottom">Objectively transition extensive data rather than cross functional
            solutions. Monotonectally syndicate multidisciplinary materials before go&nbsp;forward benefits.
            Intrinsicly syndicate an&nbsp;expanded array of&nbsp;processes and cross-unit partnerships. </p>
          <p>Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively seize
            superior initiatives for wireless technologies. Dynamically optimize. </p>
          <!--
                           <p class="p-margin-bottom">Objectively strategize seamless relationships via resource sucking testing procedures. Proactively cultivate next-generation results for value-added methodologies. Dynamically plagiarize unique methodologies after performance based methodologies. Monotonectally empower stand-alone mindshare rather than ubiquitous opportunities. Dynamically orchestrate resource sucking scenarios after alternative synergy.</p>

                           <p>Compellingly envisioneer corporate methods of empowerment before standards compliant technologies. Objectively facilitate progressive.</p>
          -->
        </div>
      </div>
      <div class="company">
        <h6 class="footer-h6">COMPANY</h6>
        <ul class="choose">
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">How It&nbsp;Works</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="information">
        <h6 class="footer-h6">INFORMATION</h6>
        <ul class="choose">
          <li><a href="#">Tearms &amp;&nbsp;Condition</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">How to&nbsp;Buy</a></li>
          <li><a href="#">How to&nbsp;Sell</a></li>
          <li><a href="#">Promotion</a></li>
        </ul>
      </div>
      <div class="shop-category">
        <h6 class="footer-h6">SHOP CATEGORY</h6>
        <ul class="choose">
          <li><a href="#">Men</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">Child</a></li>
          <li><a href="#">Apparel</a></li>
          <li><a href="#">Brows All</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="footer-copyright-text">
        <div class="copyright">
          <p>&copy;&nbsp;2017 Brand All Rights Reserved.</p>
        </div>
        <div class="social-site">
          <a href="#">
            <div class="icon"><i class="fab fa-facebook-f"></i></div>
          </a>
          <a href="#">
            <div class="icon"><i class="fab fa-twitter"></i></div>
          </a>
          <a href="#">
            <div class="icon"><i class="fab fa-linkedin-in"></i></div>
          </a>
          <a href="#">
            <div class="icon"><i class="fab fa-pinterest-p"></i></div>
          </a>
          <a href="#">
            <div class="icon"><i class="fab fa-google-plus-g"></i></div>
          </a>
        </div>
      </div>
    </div>
  </footer>
</div>
<script src="js/catalog.js"></script>
<script>
  (function ($) {
    $(function () {
      catalog.init();
    })
  })
  (jQuery);
</script>
</body>

</html>