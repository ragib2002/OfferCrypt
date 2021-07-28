<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Offer Crypt</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="./ppStyle.css" />
  <link rel="stylesheet" href="./mobile-style.css">
</head>

<body>
  <div id="menu-bar">
            <div id="menu" onclick="onClickMenu()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>
            <ul class="nav" id="nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="#portfolio">About Me</a></li>
                <li><a href="option.html">pakage</a></li>
                <li><a href="makewebsite.html">Make website?</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="menu-bg" id="menu-bg"></div>
        <script src="index.js">
            
        
        </script>
      <center> <div id="header" class="animated slideInDown" style="animation-delay:1.2s;">
    <img src="img/p.png" class="cutabrar"><br>
   
    </div></center>
   <a href="form.php" class="post">Post Offer</a></div>
   <br>
   <br>
  <main>
    <!---First Slider--->
      <div id="slider">
    <div>

              <img src="media/pictures/slider1.1.jpg" class="img-fluid" >
               <img src="media/pictures/slider1.4.jpg" class="img-fluid">
                <img src="media/pictures/slider1-2.jpg" class="img-fluid">
                <img src="media/pictures/slider1.1.jpg" class="img-fluid" >
                <img src="media/pictures/slider1.4.jpg" class="img-fluid">


    </div>
  </div>


    <!---/First Slider--->

<!--timer-->
<div class="bgimg">
  
  <div class="middle">
    <h1>Hurry up! Sale ends in</h1>
    <hr>
    <p id="demo" style="font-size:30px;margin-top: 15px;"></p>
  </div>
 </div>
<!--timer ends-->
<script type="text/javascript">
  /*timer  */
// Set the date we're counting down to
var countDownDate = new Date("May 1, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "finished";
  }
}, 1000);
</script>


    <!----quilted pic grid--->
    <div class="container text-center">
        <h1 class="text-dark"><br>Top Rated Offers</h1>
        <p class="text-secondary">Amazing offers for you to avail!</p>
      </div>
    <div class="contianer">
    <img id="pic1" src="img/sonargoan.png">
    <img id="pic2" src="img/swopno (1).jpg">
    <img id="pic3" src="img/chillox.jpg">
    <img id="pic4" src="img/artisan.jpg">
    <img id="pic5" src="img/bkash.jpg">
    <img id="pic6" src="img/artisan-gp.jpg">
    <img id="pic7" src="img/gp.jpg">
    <img id="pic8" src="img/hungrynaki.jpg">
    <img id="pic9" src="img/manhattan.jpg">
    <img id="pic10" src="img/hotel.jpg">
    <img id="pic11" src="img/aarong.png">
    <img id="pic12" src="img/artisti.jpg">
</div>
    <!----/quilted pic grid---->

<!--timer--
<div class="bgimg">

  <div class="middle">
    <h1>Hurry up! Sale ends in</h1>
    <hr>
    <p id="demo" style="font-size:30px;margin-top: 15px;"></p>
  </div>
 </div>
timer ends-->
<br>\
<br>
<center>
 <div class="hire-me">
                <h2 class="hire-me-text">Increase  <span class="hire-me-text-white">your sales </span>by posting offer</h2>
                 <button class="btn_one hire-me-button"><a href="#">Download App</a></button>
            </div>
            </center>
<br>
<!---second Slider--->
      <div id="slider">
    <div>

              <img src="media/pictures/slider1.1.jpg" class="img-fluid" >
               <img src="media/pictures/slider1.4.jpg" class="img-fluid">
                <img src="media/pictures/slider1-2.jpg" class="img-fluid">
                <img src="media/pictures/slider1.1.jpg" class="img-fluid" >
                <img src="media/pictures/slider1.4.jpg" class="img-fluid">


    </div>
  </div>


    <!---/second Slider--->
   <!-- Section 4 -->
   <!---broken trending <div id="opacity">
        <h1>TRENDING</h1>
        <p id="overlay">TRENDING</p>
      </div> --->
    <section class="section-4">
        <div class="container text-center">
        <h1 class="text-dark">Trending Now</h1>
        <p class="text-secondary">BOGO offers 50% off on all products</p>
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="media/pictures/logo-asus.png" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">ASUS</a>
                  <p class="text-black-50">Technology</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="media/pictures/logo-aarong.png" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                        <a href="#" class="text-secondary text-decoration-none">Aarong</a>
                        <p class="text-black-50">Fashion & Lifestyle</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="media/pictures/teletalk_logo.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                       <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                        <a href="#" class="text-secondary text-decoration-none">Teletalk</a>
                        <p class="text-black-50">Network Company</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="media/pictures/logo-bkash.png" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                 <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Bkash</a>
                  <p class="text-black-50">Money Transfer</p>
                </div>
              </div>
        </div>
      </div>
    </section>
    <section class="section-4">

      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="media/pictures/logo-asus.png" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">ASUS</a>
                  <p class="text-black-50">Technology</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="media/pictures/logo-aarong.png" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                        <a href="#" class="text-secondary text-decoration-none">Aarong</a>
                        <p class="text-black-50">Fashion & Lifestyle</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="media/pictures/teletalk_logo.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                       <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                        <a href="#" class="text-secondary text-decoration-none">Teletalk</a>
                        <p class="text-black-50">Network Company</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="media/pictures/logo-bkash.png" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                 <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Bkash</a>
                  <p class="text-black-50">Money Transfer</p>
                </div>
              </div>
        </div>
      </div>
    </section>
    <section class="section-4">

      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="media/pictures/logo-asus.png" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">ASUS</a>
                  <p class="text-black-50">Technology</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="media/pictures/logo-aarong.png" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                        <a href="#" class="text-secondary text-decoration-none">Aarong</a>
                        <p class="text-black-50">Fashion & Lifestyle</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="media/pictures/teletalk_logo.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                       <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                        <a href="#" class="text-secondary text-decoration-none">Teletalk</a>
                        <p class="text-black-50">Network Company</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="media/pictures/logo-bkash.png" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                 <h3 class="card-title">Buy 1 Get 1</h3>
                  <p class="card-text">
                    One transaction per person per offer. Other exclusions may apply, ask store associate for details. Buy One, Get One. BOGO 50% off on all products, Avail it now!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Bkash</a>
                  <p class="text-black-50">Money Transfer</p>
                </div>
              </div>
        </div>
        <?php
          $servername = "localhost";
          $username = "ragib";
          $password = "ragib2002";
          $dbname = "add";
          
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          if(isset($_REQUEST["search"])){
            $a = $_REQUEST["search"];
            $sql = "SELECT id, picname, offer, description,location,company,category FROM adds WHERE UPPER(location) = UPPER('$a')";
          }
          else{
            $sql = "SELECT id, picname, offer, description,location,company,category,type FROM adds WHERE type !=0 ORDER BY type";
          }
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) { ?>
            <div class="col-md-4 col-12 text-center">
        <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-img-top">
              <img src="<?php echo "pic/".$row["picname"];?>" class="img-fluid border-radius p-4" alt="">
            </div>
            <div class="card-body">
             <h3 class="card-title"><?php echo $row["offer"];?></h3>
              <p class="card-text">
              <?php echo $row["description"];?>
              </p>
              <a href="#" class="text-secondary text-decoration-none"><?php echo $row["company"];?></a>
              <p class="text-black-50"><?php echo $row["category"];?></p>
            </div>
          </div>
    </div>
          <?php }
          $conn->close();
          ?>
      </div>
    </section>
  </main>
  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">Browse Offers</h4>
          <p class="text-muted">For an amazing experience you can't ever forget!</p>
          <p class="pt-4 text-muted">Copyright ©2019 All rights reserved | by
            <span> OFFER CRYPT</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Get offers by OFFER CRYPT</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>
	<script  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>