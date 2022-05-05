<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link type="image/png" sizes="16x16" rel="shortcut icon" href="https://img.icons8.com/arcade/64/000000/experimental-shop-arcade.png" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/about-img.svg" alt="">
         </div>

         <div class="content">
            <h3>Why choose us?</h3>
            <p style="font-size: x-large;">We offer you the good quality products with reasonable prices</p>
            <a href="./contact.php" class="btn">Contact us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="heading">Customer's reviews</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/us.webp" alt="">
               <p>I was looking for shop selling quality products at reasonable prices. Now I found one 😎</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Mark</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/us.webp" alt="">
               <p>The shop has the best quality we need. Come to G6 and enjoy the moment you shopping</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Layla</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/us.webp" alt="">
               <p>Good products with cheap price. The best shop I'm looking for. Love you guys. I will comeback to G6 soon 😘</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Daniel</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/us.webp" alt="">
               <p>Love this shop. Always rooting for you guys to sell the best goods at best price. I will order yours goods soon 😚</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Maria</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/us.webp" alt="">
               <p>One word to describe this shop: Excellent. You guys really really really amazed me. Keep it up!!</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Frank</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/us.webp" alt="">
               <p>The best shop I have ever been visited. The atmosphere, design, and products are really fantastic. Good jobs guys </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Emily</h3>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>