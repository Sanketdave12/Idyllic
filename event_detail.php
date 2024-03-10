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
    <link rel="stylesheet" href="e_detail.css">
  </head>
  <body class="event_detail">
 
    <nav>
      <span class="logo">
        <a href="index.php"
          ><span>Idyllic <b class="active"></b></span></a
        >
      </span>
      <ul>
        <li><a class="active" href="index.php"> HOME</a></li>
        <li><a href="product.php">EVENTS</a></li>
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
    <main>
        <div class="event_img">
            <img src="images/concert.jpg" alt="">
        </div>
        <div class="content">
            <div class="e_detail_main">
               <div class="head">
                <h1>SOCIAL EVENTS</h1>  
                <p class="desc"><b>Description: </b> Social events are personal celebrations that bring together friends, families, and communities for special occasions and milestones. These events are often informal and festive, focused on creating memorable experiences and fostering social connections. Social events encompass a wide range of gatherings, including weddings, birthdays, anniversaries, reunions, engagement parties, baby showers, and holiday celebrations. They can vary in scale and style, from intimate gatherings at home to elaborate parties at event venues, restaurants, or outdoor locations.</p>
               </div>
             
            </div> 
            <div class="e_detail_main">
                <div class="events">
                    <div class="cards">
                        <section class="card w-33">
                          <img src="images/wedding.jpg" alt="blog1 feature image" />
                          <div class="bottom">
                            <p class="category">Weddings</p>
                            <p class="title">
                              <a href="#">Elevating love stories with exquisite details, our wedding expertise turns your special day into a timeless celebration of romance and elegance.</a>
                            </p>
                            <button class="readmore">Explore</button>
                          </div>
                        </section>
                        <section class="card w-33 card-2">
                          <img src="images/concert.jpg" alt="blog2 feature image" />
                          <div class="bottom">
                            <p class="category">Birthday</p>
                            <p class="title">
                              <a href="#">From stage to spectacle, we orchestrate unforgettable concerts, blending artistic vision with seamless execution for an electrifying audio-visual experience.</a>
                            </p>
                            <button class="readmore">Explore</button>
                          </div>
                        </section>
                        <section class="card w-33">
                          <img src="images/celebration.jpg" alt="blog3 feature image" />
                          <div class="bottom">
                            <p class="category">Anniversaries</p>
                            <p class="title">
                              <a href="#">
                                Igniting joy in every detail, our celebrations are a harmonious fusion of creativity and precision, creating memories that resonate with laughter, warmth, and pure delight.
                              </a>
                            </p>
                            <button class="readmore">Explore</button>
                          </div>
                        </section>
                      </div>
                </div>
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

