<?php
if(isset($_POST['name'])){
    //set connection variables
$insert=false;
$server = "localhost";
$username = "root";
$password = "";

//create a database connection
$con = mysqli_connect($server, $username, $password);

//check for connection success
if(!$con){
    die("connection to this database failed due to ". mysqli_connect_error());
}
//echo "success connecting to the db";

//collect post variables

$name=$_POST['name'];                                  //(for multicursor: alt+shift+drag+endkey(f12))
$email=$_POST['email'];
$address=$_POST['address'];
$coffee=$_POST['coffee'];
$message=$_POST['message'];
$sql = "
INSERT INTO `cafe`.`review`( `name`, `email`, `address`, `coffee`, `message`) VALUES ('$name','$email','$address','$coffee','$message');";
//echo $sql;


// execute the query
if($con->query($sql)==true){
  //  echo"successfully inserted"; 

  //flag for successful insertion
  $insert=true;                                                                   //(-> object operator)
}
else{
    echo"ERROR:$sql <br> $con->error";

}
//close the database connection
$con->close();

}

?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BTS coffee shop</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="cookies.css">
</head>

<body>
  <main>
    <div class="big-wrapper light">

      <header>
        <div class="container">
          <div class="logo">
            <img src="./img/Coffee-logo-design-on-transparent-background-PNG.png" alt="Logo" />
            <h3>AgustD Cafe</h3>
          </div>

          <div class="links">
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="signup.php" id="signup-btn" class="btn">Sign Up</a></li>

      
              

              

              <li><div class="bottom-area">
                <div class="container">
                  <button class="toggle-btn">
                    <i class="far fa-moon"></i>
                    <i class="far fa-sun"></i>
                  </button>
                </div>
              </div></li>
            </ul>
          </div>

          <div class="overlay"></div>

          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </header>
      
      <!-- home section starts -->
      <section class="home" id="section">
        <!-- <div class="showcase-area"> -->
       
           
            <div class="content">
              <h3>Agust D Cafe</h3>
              <p>Taste the freshness!!</p>
              <p>Made with Love💜</p>
              <a href="order.php" class="btn">Order Now</a>
          </div>
            
          <div class="controls">
              <span class="vid-btn active" data-src="./video/vid1.3.mp4"></span>
              <span class="vid-btn " data-src="./video/vid1.mp4"></span>
              <span class="vid-btn " data-src="./video/vid2.mp4"></span>
              <span class="vid-btn " data-src="./video/vid3.mp4"></span>
              <span class="vid-btn " data-src="./video/vid4.mp4"></span>
             
          </div>
  
          <div class="video-container">
              <video src="./video/vid1.3.mp4" id="video-slider" loop autoplay muted></video>
          </div>


            
      </section>

    <!-- Cookie creation starts -->
    <div class="wrapper">
        <!-- <i class="fa-solid fa-cookie"></i> -->
        <div class="content">
            <h1>Cookies Consent</h1>
            <p>This website use cookies to ensure you get the best experience on our website</p>
            <div class="buttons">
                <button class="item">Accept Cookie</button>
                <a href="#" class="item">Learn More</a>
            </div>
        </div>
    </div>


    <!-- Cookie creation ends -->
      <!-- services section starts -->
      <section class="espresso" id="services">
        <div class="max-width">
          <h2 class="title">Services</h2>
          <marquee behavior="" direction="">Power up with ❤️coffee⚡!!</marquee>
          <div class="espresso-content">
            <div class="card" data-aos="zoom-in">
              <div class="box">
                <img src="./img/eepresso.1.jpg" alt="espresso">
                <div class="text">Espresso</div>
                <p>We serve Espresso a full-flavored, concentrated form of coffee served in “shots.” <br> $20 </p>
              </div>
            </div>
            <div class="card" data-aos="zoom-in">
              <div class="box">
                <img src="./img/cappucino.jpg" alt="cap">
                <div class="text">Cappuccino</div>
                <p>An expertly made cappuccino rich, have a mildly sweet flavouring from the milk.<br> $20</p>
              </div>
            </div>
            <div class="card" data-aos="zoom-in">
              <div class="box">
                <img src="./img/mocha.jpg" alt="mocha">
                <div class="text">Mocha coffee</div>
                <p>Deliciously sweet, nutty and chocolatey. made with special love❤️<br> $20</p>
              </div>
            </div>
            <div class="card" data-aos="zoom-in">
              <div class="box">
                <img src="./img/Latte.jpg" alt="latte">
                <div class="text">Latte</div>
                <p>it`s comprised of a shot of espresso & steamed milk with just a touch of foam.<br> $20</p>
              </div>
            </div>
            <div class="card" data-aos="zoom-in">
              <div class="box">
                <img src="./img/Iced-Coffee.jpg" alt="ice">
                <div class="text">Ice Coffee</div>
                <p>It`s consists of espresso, filtered coffee/coffee syrup with ice cubes & milk.<br> $20</p>
              </div>
            </div>
            <div class="card" data-aos="zoom-in">
              <div class="box">
                <img src="./img/red-eye-coffee.jpg" alt="red">
                <div class="text">Red Eye</div>
                <p>Red eye coffee that combines drip coffee with one or two shots of espresso. <br> $20</p>
              </div>
            </div>
            <div class="card" data-aos="zoom-in">
              <div class="box">
                <img src="./img/coffee-brew.jfif" alt="brew">
                <div class="text">Cold Brew</div>
                <p>The trendiest of iced coffee bunch, cold brew coffees are made by steeping coffee beans.<br> $20</p>
              </div>
            </div>
            <div class="card" data-aos="zoom-in">
              <div class="box">
                <img src="./img/Irish-Coffee.jpg" alt="irish">
                <div class="text">Irish Coffee</div>
                <p>A classic, cozy dessert drink made by hot black coffee, Irish whiskey & Baileys Irish Cream.<br> $20</p>
              </div>
            </div>
            <div class="card" data-aos="zoom-in">
              <div class="box">
                <img src="./img/macchiato.jpg" alt="mac">
                <div class="text">Macchiato</div>
                <p>macchiato is another espresso-based drink has a small amount of foam on top.<br>$20</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About Us section starts here -->
      <section class="about" id="about">
        <div class="max-width">
          <h2 class="title">About Us</h2>
          <div class="about-content">
            <div class="column left" data-aos="fade-right">
              <img src="./img/suga_coffee.jpg" alt="suga_coffee">
            </div>
            <div class="column right" data-aos="fade-left">
              <div class="text">Helloo!! We are AgustD Cafe 💜<span class="typing-2"></span> </div>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our shop is heaven for coffee lovers. we make coffee
                which touches directly to customers heart. <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our coffee shop theme is based on the famous K-pop group
                <span>Bangtan Sonyeondan(BTS)</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It takes many hands to craft the perfect cup of coffee
                from the farmers who tend to the red-ripe coffee cherries, to the master roasters who coax the best from
                every bean, and to the barista who serves it with care. We are committed to the highest standards of
                quality and service, embracing our heritage while innovating to create new experiences to savor.
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </section>

      <!-- contacts section starts here -->

      <section class="contact" id="contact">
        <div class="max-width">
          <h2 class="title">Contact Us</h2>
          <div class="contact-content">
            <div class="column left" data-aos="fade-right">
              <div class="text">Get in touch with us</div>
              <p>Hello There!!! <br>
                If you have any query kindly contact us on below information or you con visit our social media profiles.
                <br> Thank You😇!
              </p>
              <div class="icons">
                <div class="row">
                  <i class="fas fa-coffee"></i>
                  <div class="info">
                    <div class="head">Cafe Name</div>
                    <div class="subtitle">AgustD Cafe</div>
                  </div>
                </div>
                <div class="row">
                  <i class="fas fa-map-marker" aria-hidden="true"></i>
                  <div class="info">
                    <div class="head">Address</div>
                    <div class="subtitle">Wagholi ,pune-412207 , maharashtra.</div>
                  </div>
                </div>
                <div class="row">
                  <i class="fas fa-envelope"></i>
                  <div class="info">
                    <div class="head">E-mail</div>
                    <div class="subtitle">ptdcafe22@gmail.com</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column right" data-aos="fade-left">
              <div class="text">Give your Review😇❤️</div>
              <form action="index.php" method="post">
                <div class="fields">
                  <div class="field name">
                    <input type="text" name="name" placeholder="Name" required>
                  </div>
                  <div class="field email">
                    <input type="email" name="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="field text">
                  <input type="text" name="address" placeholder="Address" required>
                </div>
                <br>
                
                <select name="coffee" id="coffee" size="1" class="bts">
                  <option value="Espresso">Select your favourite coffee:</option>
                  <option value="Espresso">Espresso</option>
                  <option value="Cappuccino">Cappuccino</option>
                  <option value="Mocha coffee">Mocha coffee</option>
                  <option value="Latte">Latte</option>
                  <option value="Ice Coffee">Ice Coffee</option>
                  <option value="Red Eye">Red Eye</option>
                  <option value="Cold Brew">Cold Brew</option>
                  <option value="Irish Coffee">Irish Coffee</option>
                  <option value="Macchiato">Macchiato</option>
                </select>
                <br><br>
                <div class="field textarea" id="textarea">
                  <textarea cols="30" name="message" rows="10" placeholder="Say something about our cafe..." required></textarea>
                </div>
            <a href="#" >
              <button class="btn" id="myButton" onclick="alert ('message sent successfully Thank you for contacting Us')">send message</button>
            </a>
                  
              </form>


            </div>
          </div>
        </div>
      </section>

      <!-- social section starts here -->

      <section class="social text-center">
        <div class="max-width" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <ul>
            <!-- unordered list tag -->
            <li>
              <a target="_blank" href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook.png"></a>
            </li>
            <li>
              <a href="#" target="_blank"><img src="https://img.icons8.com/fluent/50/000000/instagram-new.png" />
            </li>
            <li>
              <a href="#" target="_blank"><img src="https://img.icons8.com/color/50/000000/twitter.png" />
            </li>
          </ul>
        </div>
      </section>

<!-- footer section starts here -->

<footer>
  <span id="footer"> Created by <a href="#home"> Srushti Alhat & Harshada Awhale </a><span class="far fa-copyright"></span> 2022 All rights reserved .</span>
</footer>


    </div>
  </main>

  <!-- JavaScript Files -->

  <script src="cookies.js"></script>

  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <!-- <script src="app.js"></script> -->
  <script>
    let videoBtn = document.querySelectorAll('.vid-btn');



videoBtn.forEach(btn =>{
  btn.addEventListener('click', ()=>{
    document.querySelector('.controls .active').classList.remove('active');
    btn.classList.add('active');
      let src = btn.getAttribute('data-src');
      document.querySelector('#video-slider').src = src;
  });
});

// redirecting to homepage
document.getElementById("myButton").onclick = function () {
  location.href = "#";
};

// Select The Elements
var toggle_btn;
var big_wrapper;
var hamburger_menu;

function declare() {
  toggle_btn = document.querySelector(".toggle-btn");
  big_wrapper = document.querySelector(".big-wrapper");
  hamburger_menu = document.querySelector(".hamburger-menu");
}

const main = document.querySelector("main");

declare();

let dark = false;

function toggleAnimation() {
  // Clone the wrapper
  dark = !dark;
  let clone = big_wrapper.cloneNode(true);
  if (dark) {
    clone.classList.remove("light");
    clone.classList.add("dark");
  } else {
    clone.classList.remove("dark");
    clone.classList.add("light");
  }
  clone.classList.add("copy");
  main.appendChild(clone);

  document.body.classList.add("stop-scrolling");

  clone.addEventListener("animationend", () => {
    document.body.classList.remove("stop-scrolling");
    big_wrapper.remove();
    clone.classList.remove("copy");
    // Reset Variables
    declare();
    events();
  });
}

function events() {
  toggle_btn.addEventListener("click", toggleAnimation);
  hamburger_menu.addEventListener("click", () => {
    big_wrapper.classList.toggle("active");
  });
}

events();
  </script>
</body>

</html>