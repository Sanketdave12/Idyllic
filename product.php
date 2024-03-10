<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
      src="https://code.jquery.com/jquery-3.6.4.js"
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="popup d-none">
      <div class="overlay"></div>
     <div class="popupmain">
      <div class="popcontent">
        <div class="top">
          <p class="poptitle"></p>
          <div class="close">X</div>
        </div>
        <div class="bottom">
          <p class="cat">Category: <span class="popcat"></span></p>
          <img class="popupImg" src="" alt="">
          <p class="description"></p>
        </div>
      </div>
     </div>
    </div>
    <nav>
      <span class="logo">
        <a href="index.php"
          ><span>Idyllic <b class="active"></b></span></a
        >
      </span>
      <ul>
        <li><a href="index.php"> HOME</a></li>
        <li><a class="active" href="product.php">EVENTS</a></li>
        <!-- <li><a href="webpages/faq.php">FAQs</a></li> -->
        <li><a href="contact.php">CONTACT US</a></li>
        <li> <?php
          if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
              echo '<a href="logout.php">LOG OUT</a>';
          } else {
              echo '<a href="login.php">LOG IN</a>';
          }
          ?></li>
      </ul>
    </nav>
    <main class="product_main">
      <h1>EVENTS</h1>
      <div class="product">
        <div class="cards">
          <section class="card w-33">
            <img src="images/wedding.jpg" alt="blog1 feature image" />
            <div class="bottom">
              <p class="category">Weddings</p>
              <p class="title">
                Make your  wedding day truly unforgettable with our elegant and sophisticated packages!
              </p>
            
              <button class="readmore pdp">More Details</button>
            </div>
          </section>
          <section class="card w-33 card-2">
            <img src="images/concert.jpg" alt="blog2 feature image" />
            <div class="bottom">
              <p class="category">Concert</p>
              <p class="title">
                Elevate your Concert experience
              </p>
              
              <button class="readmore pdp">More Details</button>
            </div>
          </section>
          <section class="card w-33">
            <img src="images/celebration.jpg" alt="blog3 feature image" />
            <div class="bottom">
              <p class="category">Celebrations</p>
              <p class="title">
                
                  Celebrate your moments, make it special with Idyllic.
                
              </p>
             
              <button class="readmore pdp">More Details</button>
            </div>
          </section>
        </div>
      </div>
    </main>
    <footer>
      <div class="left w-33">
        <p class="head">QUICK LINKS</p>
        <ul class="clear">
          <li><a href="product.php">EVENTS</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <!-- <li><a href="webpages/faq.php">FAQs</a></li> -->
          <li><a href="">Privacy & Policy</a></li>
          <li><a href="">Terms & Conditions</a></li>
        </ul>
      </div>
      <div class="mid w-33">
        <div class="logo">
          <a href="index.php"
            ><span>Idyllic <b class="active"></b></span></a
          >
        </div>
        <div class="address">
          <p>Waterloo, Ontario </p>
        </div>
        <div class="info">
          <p><a href="tel:1234567890">12.3456.7890</a></p>
          <p><a href="mail:info@idyllicevents.com">info@idyllicevents.com</a></p>
        </div>
        <div class="copy">
          <p>Idyllic. All rights reserved |<span> Sitemap</span></p>
        </div>
      </div>
      <div class="right w-33">
        <div class="signup">
          <p>SIGN UP FOR</p>
          <p>THE NEWSLETTER</p>
        </div>
        <div class="newsletter">
          <input type="email" name="" id="" placeholder="@ email address ..." />
          <button>GO</button>
        </div>

        <div class="social">
          <div class="border">
            <img src="images/footer/facebook.png" alt="facebook" />
            <img src="images/footer/instagram.png" alt="instagram" />
            <img src="images/footer/tik-tok.png" alt="tik-tok" />
            <img src="images/footer/twitter.png" alt="twitter" />
          </div>
        </div>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
        </html>