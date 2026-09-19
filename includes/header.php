<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teenytailz</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/tg-icon.svg">
    <link rel="stylesheet" href="css/mainBase.css">
  </head>
  <body>
  
  <div class="main-div">
    <header class="header-top fixed-top" id="header-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container p-mo p-0">
         <div class="logo-mo-div">
            <a class="navbar-brand" href="#">
              <img src="./img/m-logo.svg" alt="" class="img-fluid d-lg-none d-md-blocks d-block  brand-logo-mo" id="logo">
              <img src="./img/brand.svg" alt="" class="img-fluid d-lg-block d-md-none d-none  brand-logo">
            </a>
            <div class="cart-mo-top-btn">
              <div class="user-price">
                <h6>5,650</h6>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <!-- <div class="hamburger hamburger--3dy">
                    <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                    </div>
                  </div> -->
                  <span class="navbar-toggler-icon" id="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-nav-one m-auto">
              <li class="nav-item d-lg-none d-md-none d-flex ifUserlogin">
                 <h6>Signed in as</h6>
                 <h4>Jane Smith</h4>
                 <h5>5,650 tokens</h5>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ourstory.php">How it works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Stories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ourstory.php">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.php">Contact</a>
              </li>
            </ul>
            <div class="d-flex d-right-mo" role="search">
              <div class="ifuserlloginDetails">
                <ul>
                   <li><a href="#">Overview</a></li>
                   <li><a href="#">Their library</a></li>
                   <li><a href="#">Purchases</a></li>
                   <li><a href="#">Settings</a></li>
                </ul>
              </div>
              <div class="nav-item dropdown d-currency-mo dropdown-toggle-cur">
                <h6 class="d-lg-none d-md-none d-block">SELECT CURRENCY</h6>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 USD
                </a>
                <ul class="dropdown-menu">
                  <li class="">
                    <a class="dropdown-item active" href="#">
                        <span>USD</span>
                        <p>
                        US Doller
                      </p>
                    </a>
                    
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                        <span>EUR</span>
                      <p>
                        Euro
                      </p>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="#">
                      <span>GBP</span>
                     <p>
                      Pound
                    </p>
                    </a>
                  </li>
                </ul>
              </div>
              <a class="btn btn-tokens d-none" href="signup.php">5,650 tokens</a>
              <a class="btn btn-login" href="signup.php">
                <span class="btn-border-dots">Log in / Sign up</span>
              </a>
              <div class="ifuserlloginDetails nav-privecy-legal">
                <ul>
                   <li><a href="#">Terms</a></li>
                   <li><a href="#">Privacy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
   </header>
  
  