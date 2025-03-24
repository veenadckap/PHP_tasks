<?php
include("../model/DB_connect.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<style type="text/css">
    <?php include("style.css"); ?>
</style>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green Coffee -home page</title>
</head>
<body>
<?php include "../view/partial/header.php";?>
<div class="main">

      <section class="home-section">
          <div class="   slider">
              <div class="slider__slider slider1">
                  <div class="overlay"></div>
                  <div class="slider-details">
                      <h1>Lorem ipsum dolor sit</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a href="./view_products.php" class="btn">shop now</a>
                  </div>
                  <div class="hero-dec-top"></div>
                  <div class="hero-dec-bottom"></div>
              </div>
              <!------ slide end---- -->
              <div class="slider__slider slider2">
                  <div class="overlay"></div>
                  <div class="slider-details">
                      <h1>welcome to my shop</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                      <a href="./view_products.php" class="btn">shop now</a>
                  </div>
                  <div class="hero-dec-top"></div>
                  <div class="hero-dec-bottom"></div>
              </div>
              <!------ slide end---- -->
              <div class="slider__slider slider3">
                  <div class="overlay"></div>
                  <div class="slider-details">
                      <h1>Lorem ipsum dolor sit</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                      <a href="./view_products.php" class="btn">shop now</a>
                  </div>
                  <div class="hero-dec-top"></div>
                  <div class="hero-dec-bottom"></div>
              </div>
              <!------ slide end---- -->
              <div class="slider__slider slider4">
                  <div class="overlay"></div>
                  <div class="slider-details">
                      <h1>Lorem ipsum dolor sit</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a href="./view_products.php" class="btn">shop now</a>
                  </div>
                  <div class="hero-dec-top"></div>
                  <div class="hero-dec-bottom"></div>
              </div>
              <!------ slide end---- -->
              <div class="slider__slider slider5">
                  <div class="overlay"></div>
                  <div class="slider-details">
                      <h1>Lorem ipsum dolor sit</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>                     <a href="./view_products.php" class="btn">shop now</a>
                  </div>
                  <div class="hero-dec-top"></div>
                  <div class="hero-dec-bottom"></div>
              </div>
              <!------ slide end---- -->
              <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
              <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
          </div>
      </section>
<!--home slider end -->
    
    <section class="thumb">
        <div class="box-container">
            <div class="box">
                <img src="/view/src/thumb2.jpg" alt="">
                <h3>green tea</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, quis!</p>
                <i class="bx bx-chevron-right"></i>
            </div>

            <div class="box">
                <img src="/view/src/thumb0.jpg" alt="">
                <h3>lemon tea</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, quis!</p>
                <i class="bx bx-chevron-right"></i>
            </div>

            <div class="box">
                <img src="/view/src/thumb1.jpg" alt="">
                <h3>green coffee</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, quis!</p>
                <i class="bx bx-chevron-right"></i>
            </div>

            <div class="box">
                <img src="/view/src/thumb.jpg" alt="">
                <h3>green tea</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, quis!</p>
                <i class="bx bx-chevron-right"></i>
            </div>

        </div>
    </section>


    <section class="container">
        <div class="box-container">
            <div class="box">
                <img src="/view/src/about-us.jpg" alt="">
            </div>
            <div class="box">
                <img src="/view/src/download.png" alt="">
                <span>healthy tea</span>
                <h1>save up to 50% off</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga iste iure nisi obcaecati, rem reprehenderit.</p>
            </div>
        </div>
    </section>
    <section class="shop">
        <div class="title">
            <img src="/view/src/download.png" alt="">
            <h1>Trending Products</h1>
        </div>
        <div class="row">
            <img src="/view/src/about.jpg" alt="">
            <div class="row-detail">
                <img src="/view/src/basil.jpg" alt="">
                <div class="top-footer">
                    <h1>a cup of green tea makes you healthy</h1>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="/view/src/card.jpg" alt="">
                <a href="/view/view_products.php" class="btn">show now</a>
            </div>

            <div class="box">
                <img src="/view/src/card0.jpg" alt="">
                <a href="/view/view_products.php"  class="btn">show now</a>
            </div>

            <div class="box">
                <img src="/view/src/card1.jpg" alt="">
                <a href="/view/view_products.php"  class="btn">show now</a>
            </div>

            <div class="box">
                <img src="/view/src/card2.jpg" alt="">
                <a href="/view/view_products.php"  class="btn">show now</a>
            </div>

            <div class="box">
                <img src="/view/src/10.jpg" alt="">
                <a href="/view/view_products.php"  class="btn">show now</a>
            </div>

            <div class="box">
                <img src="/view/src/6.webp" alt="">
                <a href="/view/view_products.php"  class="btn" >show now</a>
            </div>
        </div>
    </section>
      <section class="shop-category">
          <div class="box-container">
              <div class="box">
                  <img src="/view/src/6.jpg" alt="">
                  <div class="detail">
                      <span>BIG OFFERS</span>
                      <h1>Extra 15% off</h1>
                      <a href="view_products.php" class="btn">shop now</a>
                  </div>
              </div>

              <div class="box">
                  <img src="/view/src/7.jpg" alt="">
                  <div class="detail">
                      <span>new in taste</span>
                      <h1>coffee house</h1>
                      <a href="view_products.php" class="btn">shop now</a>
                  </div>
              </div>

          </div>
      </section>

    <?php include "../view/partial/footer.php" ; ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert.min.js"></script>
<script scr="../controller/script.js"></script>
<?php include "alert.php";?>
</body>
</html>
