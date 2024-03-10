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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script
      src="https://code.jquery.com/jquery-3.6.4.js"
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="e_detail.css" />
  </head>
  <body class="event_detail">
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
      <div class="e_detail_main">
        <div class="col-md-7 container bg-default pt-5">
            <h1>Checkout</h1>
          <h4 class="my-4">Billing Address</h4>

          <form>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <label for="firstname">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstname"
                  placeholder="First Name"
                />
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-md-6 form-group">
                <label for="lastname">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastname"
                  placeholder="Last Name"
                />
                <div class="invalid-feedback">Valid last name is required.</div>
              </div>
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  placeholder="Username"
                  required
                />
                <div class="invalid-feedback">Your username is required.</div>
              </div>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="you@example.com"
                required
              />
            </div>

            <div class="form-group">
              <label for="adress">Address</label>
              <input
                type="text"
                class="form-control"
                id="adress"
                placeholder="1234 Main Street"
                required
              />
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="form-group">
              <label for="address2"
                >Address 2
                <span class="text-muted">(Optional)</span>
              </label>
              <input
                type="text"
                class="form-control"
                id="adress2"
                placeholder="Flat No"
              />
            </div>

            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="same-adress"
              />
              Save this information for next time
              <label for="same-adress" class="form-check-label"></label>
            </div>

            <hr />

            <h4 class="mb-4">Payment</h4>

            <div class="form-check">
              <input
                type="radio"
                class="form-check-input"
                id="credit"
                name="payment-method"
                checked
                required
              />
              <label for="credit" class="form-check-label">Credit Card</label>
            </div>

            <div class="form-check">
              <input
                type="radio"
                class="form-check-input"
                id="debit"
                name="payment-method"
                required
              />
              <label for="debit" class="form-check-label">Debit Card</label>
            </div>

            <div class="form-check">
              <input
                type="radio"
                class="form-check-input"
                id="paypal"
                name="payment-method"
                required
              />
              <label for="paypal" class="form-check-label">PayPal</label>
            </div>

            <div class="row mt-4">
              <div class="col-md-6 form-group">
                <label for="card-name">Name on card</label>
                <input
                  type="text"
                  class="form-control"
                  id="card-name"
                  placeholder
                  required
                />
                <div class="invalid-feedback">Name on card is required</div>
              </div>

              <div class="col-md-6 form-group">
                <label for="card-no">Card Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="card-no"
                  placeholder
                  required
                />
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6 form-group">
                <label for="expiration">Expire Date</label>
                <input
                  type="text"
                  class="form-control"
                  id="card-name"
                  placeholder
                  required
                />
                <div class="invalid-feedback">Expiration date required</div>
              </div>

              <div class="col-md-6 form-group">
                <label for="ccv-no">Security Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="sec-no"
                  placeholder
                  required
                />
                <div class="invalid-feedback">Security code required</div>
              </div>
            </div>

            <hr class="mb-4" />

            <button class="btn btn-primary bt-lg btn-block" type="submit">
              Finish
            </button>
          </form>
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
    <script src="script.js"></script>
  </body>
  </html>
