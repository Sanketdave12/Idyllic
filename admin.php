<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event Management System</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="admin.css" />
  </head>
  <body>
    <nav>
      <span class="logo">
        <a href="index.php"
          ><span>Idyllic <b class="active"></b></span
        ></a>
      </span>
      <ul>
        <li><a class="active" href="index.php"> HOME</a></li>
        <li><a href="product.php">EVENTS</a></li>
        <!-- <li><a href="webpages/faq.php">FAQs</a></li> -->
        <li><a href="contact.php">CONTACT US</a></li>
        <li>
          <?php
          if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
              echo '<a href="logout.php">LOG OUT</a>';
          } else {
              echo '<a href="login.php">LOG IN</a>';
          }
          ?></li>
      </ul>
    </nav>

    <div class="admin-panel">
      <h1>Idyllic Events Admin Panel</h1>
      <h2>Manage events, registrations, and users.</h2>

      <section class="event-list">
        <h2>Upcoming Events</h2>
        <div class="cards">
          <section class="card w-33">
            <img src="images/wedding.jpg" alt="blog1 feature image" />
            <div class="bottom">
              <p class="category">Weddings</p>
              <p class="title">
                <a href="#"
                  >Elevating love stories with exquisite details, our wedding
                  expertise turns your special day into a timeless celebration
                  of romance and elegance.</a
                >
              </p>
              <button class="readmore">Explore</button>
            </div>
          </section>
          <section class="card w-33 card-2">
            <img src="images/concert.jpg" alt="blog2 feature image" />
            <div class="bottom">
              <p class="category">Concerts</p>
              <p class="title">
                <a href="#"
                  >From stage to spectacle, we orchestrate unforgettable
                  concerts, blending artistic vision with seamless execution for
                  an electrifying audio-visual experience.</a
                >
              </p>
              <button class="readmore">Explore</button>
            </div>
          </section>
          <section class="card w-33">
            <img src="images/celebration.jpg" alt="blog3 feature image" />
            <div class="bottom">
              <p class="category">Celebrations</p>
              <p class="title">
                <a href="#">
                  Igniting joy in every detail, our celebrations are a
                  harmonious fusion of creativity and precision, creating
                  memories that resonate with laughter, warmth, and pure
                  delight.
                </a>
              </p>
              <button class="readmore">Explore</button>
            </div>
          </section>
        </div>
      </section>

      <section class="event-form">
        <h2>Create New Event</h2>
        <div class="form">
            <form action="/register" method="post">
                <label for="event-name">Event Name:</label>
                <input type="text" id="event-name" name="event-name" placeholder="Event Name"  required />

                <label for="event-description">Event Description:</label>
                <textarea name="" id="" cols="30" rows="10" placeholder="Event Description" required></textarea>

                <label for="event-date">Event Date:</label>
                <input type="date" id="event-date" name="event-date" required placeholder="Event Date"/>
              <button type="submit">Create Event</button>
            </form>
          </div>
      </section>

      

      <section class="analytics">
        <h2>Event Analytics</h2>
        <p>Total registrations: 100</p>
        <p>Attendance rate: 80%</p>
      </section>

      <section class="notifications">
        <div class="alert success">New event created successfully!</div>
        <div class="alert error">Error: Event registration limit reached.</div>
      </section>
    </div>

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
            ><span>Idyllic <b class="active"></b></span
          ></a>
        </div>
        <div class="address">
          <p>Waterloo, Ontario</p>
        </div>
        <div class="info">
          <p><a href="tel:1234567890">12.3456.7890</a></p>
          <p>
            <a href="mail:info@idyllicevents.com">info@idyllicevents.com</a>
          </p>
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
  </body>
  </html>
