<?php
$servername = "localhost";
$username = "ragib";
$password = "ragib2002";
$dbname = "add";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$a = $_REQUEST["name"];
$b = $_REQUEST["email"];
$c = $_REQUEST["categories"];
$d = $_REQUEST["location"];
$e = $_REQUEST["Phonenumber"];
$f = $_REQUEST["Description"];
$g = $_FILES["picture"]["name"];
$h = $_FILES["picture"]["tmp_name"];
$i = "pic/";
$j = uniqid().".png";
$k = $_REQUEST["company"];
move_uploaded_file($h,$i."$j");
if(isset($_GET["pa"])){
    global $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$conn;
    $ab = $_GET["pa"];
    $sql = "INSERT INTO adds (picname,offer,description,category,location,email,phone,company,type)
    VALUES ('$j','$a','$f','$c','$d','$b','$e','$k','$ab')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $re = "r".uniqid();
    $sql = "CREATE EVENT $re ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 7 DAY DO UPDATE adds SET type ='2' WHERE picname='$j'";
    if ($conn->query($sql) === TRUE) {
        echo "Event created";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    global $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k;
    $sql = "INSERT INTO adds (picname,offer,description,category,location,email,phone,company)
    VALUES ('$j','$a','$f','$c','$d','$b','$e','$k')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
header("Location: main.php");
?>