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
  <style>
    .a{
      transition: transform 0.5s;
    }
    .a:hover{
      opacity:0.6;
      transform: scale(.9,.9);
    }
  </style>
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
                <li><a href="aboutme.html">Life</a></li>
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
   <section class="section-4">
   <div class="team row ">
   <?php
    $servername = "localhost";
    $username = "ragib";
    $password = "ragib2002";
    $dbname = "add";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);


    $a = $_REQUEST["search"];
    if($a == ""){
      header("Location: main.php");
    }
    $sql = "SELECT id, picname, offer, description,location,company,category,type FROM adds WHERE UPPER(location) = UPPER('$a') ORDER BY type";
    $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) { ?>
            <div id="<?php echo $row["id"];?>" class="col-md-4 col-12 text-center a" onclick="myFunction(this.id)">
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
  <script>
function myFunction(x) {
  var link = "slider.php?id=" + x;
  window.location.assign(link);
}
</script>
	<script  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</html>