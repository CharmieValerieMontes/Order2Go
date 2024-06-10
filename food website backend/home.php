<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>Top Products</span>
               <h3>Dark Chocolate Frappee</h3>
               <a href="menu.php" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="images/b4.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Top Products</span>
               <h3>Strawberry Frappe</h3>
               <a href="menu.html" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="images/b6.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Top Products</span>
               <h3>Banoffee Frappe</h3>
               <a href="menu.html" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="images/b1.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category">


   <h1 class="title">Affiliated Shop</h1>

   <div class="box-container">

      <a href="category.php?category=bigbrew" class="box">
         <img src="images/BigBrew.png" alt="">
         <h3>Big Brew</h3>
      </a>

      <a href="category.php?category=donmacchiatos" class="box">
         <img src="images/Don Macchiatos.png" alt="">
         <h3>Don Macchiatos</h3>
      </a>

      <a href="category.php?category=baabaa" class="box">
         <img src="images/Baa Baa.png" alt="">
         <h3>Baa Baa</h3>
      </a>


   </div>

</section>


<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>