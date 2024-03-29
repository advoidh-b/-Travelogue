<?php 
session_start();

	include("./php/connection.php");
	include("./php/functions.php");

	$user_data = check_login($con);

  /* <?php echo $user_data['user_name']; ?> */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="Advoidh Biju (Adwaith-B, Advoidh-B)">

  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400&family=Space+Grotesk&display=swap" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <title>Home - Travelogue</title>
  
  <link rel="stylesheet" href="./css/home.css">
  
  <!--<script src="https://kit.fontawesome.com/e1e8a204ee.js" crossorigin="anonymous">
  </script>-->
  
</head>

<body>
  
<header>
  <nav class="nav-panel">
    <div class="logo-container">
      <a href="./welcome.html" class="logo">
       Travelogue.
      </a>
    </div>
    <div class="nav-profile">
    <div class="top-nav">
      <a href="">HOME</a>
      <a href="">GALLERY</a>
    </div>
    
    <div class="avatar" onclick="">
      <img src="images/dp/bean-lisa.jpg" alt="" class="">
      <span class="material-icons avatar-ico">
        account_circle
      </span>
    </div>

    </div>
    </nav>

</header> 

<!-- ######## Side bar ######## -->

<aside>

  <div class="aside-cont">

  <div class="account-card">

    <a href="http://localhost/travelogue/forms/user_settings.php" class="acc-link">
      <div class="acc-avatar">
        <img class="user-dp" src="./images/dp/bean-lisa.jpg" alt="display picture">
      </div>

      <span class="avatar-title">
      <?php echo $user_data['user_name']; ?>
      </span>

    </a>

  </div>

  <div class="nav-cont">
    <a href="#" >
      <i class="material-icons">home</i>
      <span class="nav-label">Home</span>
    </a>

    <a href="#" >
      <i class="material-icons">search</i>
      <span class="nav-label">Search</span>
    </a>

    <a href="./forms/user_settings.php#bookingsh">
      <i class="material-icons">book</i>
      <span class="nav-label">Bookings</span>
    </a>

    <a href="./forms/user_settings.php">
      <i class="material-icons">settings</i>
      <span class="nav-label">Settings</span>
    </a>

  </div>

</div>

</aside>

<main>
  
<section class="showcase">
  <div class="hero">
    <h1 class="hero-title">Explore places that are beyond your map.</h1>
    <a href="#exp" id="explore">Start Exploring</a>
  </div>
</section>

<section class="sec-2">
  
  <div class="recc-title">
    <span>
      Recommended
    </span>
  </div>
  
  <div class="cards-container" id="exp">
    
    <div class="cards" onclick="dest('swi', 'Alps, Switzerland', '10', '70%')">
      <img src="./images/loc/swi/1.jpeg" alt="1">
      <div class="card-action">
        <div class="loc-details">
          <p>
            Alps Range
          </p>
          <span>
            Switzerland
          </span>
        </div>
          <a href="#" class="">
            
          </a>
      </div>
    </div>
    
    <div class="cards" onclick="dest('nwr', 'Skarstind, Norway', '09', '80%')">
      <img src="./images/loc/nwr/1.jpeg" alt="1">
      <div class="card-action">
        <div class="loc-details">
          <p>
            Skarstind
          </p>
          <span>
            Norway
          </span>
        </div>
        <a href="#" class="">
          
        </a>
      </div>
    </div>
    
    <div class="cards" onclick="dest('aus', 'Dachstein, Austria', '8', '66%')">
      <img src="./images/loc/aus/1.jpeg" alt="1">
      <div class="card-action">
        <div class="loc-details">
          <p>
            Daschstein
          </p>
          <span>
            Austria
          </span>
        </div>
        <a href="#" class="">
          
        </a>
      </div>
    </div>
    
    <div class="cards" onclick="dest('geo', 'Caucasus, Georgia', '6', '52%')">
      <img src="./images/loc/geo/1.jpeg" alt="1">
      <div class="card-action">
        <div class="loc-details">
          <p>
            Caucasus
          </p>
          <span>
            Georgia
          </span>
        </div>
        <a href="#" class="">
          
        </a>
      </div>
    </div>
    
    <div class="cards" onclick="dest('fin', 'Duestance, Finland', '11', '87%')">
      <img src="images/loc/fin/1.jpeg" alt="1">
      <div class="card-action">
        <div class="loc-details">
          <p>
            Duestance
          </p>
          <span>
            Finland
          </span>
        </div>
        <a href="#" class="">
          
        </a>
      </div>
    </div>
    
    <div class="cards" onclick="dest('wv', 'Moamma, West virginia', '14', '78%')">
      <img src="./images/loc/wv/1.jpeg" alt="1">
      <div class="card-action">
        <div class="loc-details">
          <p>
            Moamma
          </p>
          <span>
            West virginia
          </span>
        </div>
        <a href="#" class="">
          
        </a>
      </div>
    </div>
    
  </div>
  
  <div class="view-more-cont">
    <a href="#" class="view-more">
    <span>View More</span> <i class="material-icons mi-arrow">keyboard_arrow_right</i>
    </a>
  </div>
  
</section>

<article class="news-arti">
 <div class="news-c-t">
   <h1>
     Featured locations
   </h1>
   
 </div>
 
 <div class="news-content-1">
   
     <div class="loc-det-cont" onclick="dest('win', 'Caribbean', '10', '70%')>
      <a href="#" id="location-a">
        <i class="material-icons loc-ico">
          location_on
        </i>
        <span id="loc-city">
          Caribbean
        </span>
        <span id="loc-country">
          West Indies
        </span>
      </a>
     </div>
     
     <div class="gallery-cont">
       <div class="img-cont">
         <img src="images/gallery/carb1.jpeg" alt="caribbean image 1">
         <img src="images/gallery/carb2.jpeg" alt="caribbean islands 2">
         <a href="#" class="gallery-link">
           <i class="material-icons mi-img">image</i>
           10+
         </a>
         <img src="images/gallery/carb3.jpeg" alt="shocimg/beach.jpeg">
       </div>
     </div>
   </div>
   
</article>

</main>

<footer>
  <div class="foot-contact">

    <div class="social-links">
      <a href="#" class="">
        Instagram
      </a>

      <a href="#" class="">
        Facebook
      </a>

      <a href="#" class="">
        Twitter
      </a>
    </div>

    <div class="contact-links">
      <a href="#" class="">
        <i class="material-icons foot-ic">
          phone
        </i>
        <span>
          Contact
        </span>
      </a>
      <a href="#" class="">
        <i class="material-icons foot-ic">
          email
        </i>
        <span>
          Mail
        </span>
      </a>
    </div>

  </div>
</footer>
  <script src="./scripts/home-script.js"></script>
</body>
</html>
