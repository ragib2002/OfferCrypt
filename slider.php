<?php
  $servername = "localhost";
  $username = "ragib";
  $password = "ragib2002";
  $dbname = "add";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  $i = $_REQUEST["id"];
  $sql = "UPDATE adds SET count=count+1 WHERE id='$i'";
  if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="slider.css">
    <link rel="icon" type="icon" href="logo-red.jpg">
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "ragib";
    $password = "ragib2002";
    $dbname = "add";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $i = $_REQUEST["id"];

    $sql = "SELECT * FROM adds WHERE id = '$i'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
?>
  <script type="text/javascript"></script>
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
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="img/slider1.2.jpg" style="width:100%">
  <div class="text"> </div>
</div>

<div class="mySlides fade">
 
  <img src="img/swopno (1).jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
 
  <img src="img/slider1.4.jpg" style="width:100%">
  <div class="text"> </div>

</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<script type="text/javascript">
  var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

/*test*/

function onClickMenu(){
  document.getElementById("menu").classList.toggle("change");
  document.getElementById("nav").classList.toggle("change");
  
  document.getElementById("menu-bg").classList.toggle("change-bg");
}
</script>

<div class="des-container">
  <div class="img-des">
    <img src="<?php echo "pic/".$row["picname"];?>" class="img-own">
  </div>
  <div class="des-own">
    <h1 class="header-des"><?php echo $row["offer"];?>
    </h1>
    <div class="des-details">
    <?php echo $row["description"];?>
    </div>
  </div>
</div>
</body>
</html>
<?php }
          $conn->close();
   ?>