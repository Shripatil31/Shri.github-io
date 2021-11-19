<!DOCTYPE html>
<html lang="en">

    <head>

      <link rel="stylesheet" href="home.html">
        <link rel="stylesheet" href="css/styling.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/table.css">
        <link rel="stylesheet" type="text/css" href="css/createuser.css">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <link rel = "icon" href = "img/logo.png" type = "image/x-icon">
        <title>Sparks Bank</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: auto;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: fixed;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: rgb(172, 48, 48);
  font-weight: bold;
  font-size: 18px;
  transition-duration: 10s;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #fafafa;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #b4b4b4;
  font-size: 0px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: rgb(0, 0, 0);
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #b80d0d;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<style>
  img {
    border: 5px solid #555;
  }
  </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-color: black;

}

.glow {
  font-family: 'Times New Roman';
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes
 glow {
  from {
    text-shadow: 0 0 12px rgb(255, 255, 255), 0 0 20px #fff, 0 0 30px #e60000, 0 0 40px #bb1313, 0 0 50px #bb1313, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px rgb(9, 26, 184), 0 0 30px #3213bb, 0 0 40px #3213bb, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>

        
    </head>
     
 <body>    
    <nav class="navbar navbar-expand-sm navbar-dark background-color navbar-light" style="background-color: lightslategray;">
      
      <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    
   
        <a class="navbar-brand" href="#">
          <img src="img/sparks.png" alt="logo" style="width: 50px;">
        </a>

        <h1 class="glow">SPARK BANK</h1>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
          style="font-size: 25px;">
           Home
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="transfer_money.php">All Users</a>
            <a class="dropdown-item" href="transfer_money.php">Transfer Money</a>
            <a class="dropdown-item" href="transactionhistory.php">Transaction History</a>
          </div>
        </div>

         <!-- <ul class="navbar-nav" style="padding-left: 100px ;"> -->

         
          <!-- <li class="nav-item"> -->
            <!-- <button type="button" class="btn "  style="border-color: red; font-size: 20px;  font-family: cursive;"  style="color: black;" style= "background: mintcream; "><b>HOME</b></button> -->
          <!-- </li> -->
        <!-- </ul> -->
   </nav> 



        <div>
          <style>

    body 
    {
      background-image: url("img/bank.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    </style>
    </div>  
    <div class="slideshow-container">

      <div class="mySlides glow">
        <div class="numbertext">1 / 3</div>
        <img src="img/USER.jpg" style="width: 802px; ">
        <div class="text" style="font-size: 50px;"><b> View Users</b></div>
      </div>
      
      <div class="mySlides glow">
        <div class="numbertext">2 / 3</div>
        <img src="img/moneyt.jpg" style="width: 810px;">
        <div class="text" style="font-size: 50px;"><b>Money Transfer</b> </div>
      </div>
      
      <div class="mySlides glow">
        <div class="numbertext">3 / 3</div>
        <img src="img/th.jpg" style="width: 800px;">
        <div class="text" style="font-size: 50px;" > <b>Transation History</b></div>
      </div>
      
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
      
      <script>
      var slideIndex = 1;
      showSlides(slideIndex);
      
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
      }
      </script>
       
    
  <footer>
  <div id="container">
      <div id="header">© 2021. Made by   <a href="https://www.linkedin.com/in/shriyash-patil-b622aa171/" target="blank">Shriyash Patil</a> <br>
        For the Project of The Sparks Foundation</div>
   </div>
  </footer>
 </body>
</html>