<?php
$a = "";
 if(isset($_GET["pa"])){
     $s = $_GET["pa"];
     $GLOBALS["a"] = "action.php?pa=$s";
 }
 else{
     $GLOBALS["a"] = "action.php";
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background: black;
		}
		#contact h1{
			color: #FF416C;
			font-size: 2.5rem;

		}
.btn_one {
    color:#FF416C;
    padding:10px 40px;
    border-radius:50px;
    border:2px solid #fff;
    font-size:18px;
    font-family: 'Comfortaa', cursive;
    font-weight:bold;
    background:transparent;
    transition:0.4s ease-in-out;
    margin:15px 10px;
}
.btn_one a{
    color:#FF416C;
    text-decoration: none;
    list-style: none;
}
.btn_one:hover {
    background:white;
    cursor:pointer;
    color:#000;
}

#contact {
    margin:4vh 0px !important;
    padding:2vh 0px !important;
}
#contact form {
    width:100%;
}
#contact form input {
    width:46%;
    margin:20px 1%;
    background:transparent;
    border:0px;
    border-bottom:2px solid rgba(255,255,255,0.5);
    padding:8px 10px;
    font-family: 'Comfortaa', cursive;
    font-size:18px;
    transition:0.4s ease-in-out;
    color:#fff;
}
#contact form textarea {
    width:96%;
    margin:20px 1%;
    padding:8px 10px;
    border:0px;
    border-bottom:2px solid rgba(255,255,255,0.5);
    padding:8px 10px;
    font-family: 'Comfortaa', cursive;
    font-size:18px;
    background:transparent;
    resize:none;
    transition:0.4s ease-in-out;
    color:#fff;
}
#contact form input:focus {
    outline:none;
    border-bottom:2px solid rgba(255,255,255,1);
}
#contact form textarea:focus {
    outline:none;
    border-bottom:2px solid rgba(255,255,255,1);
}
::placeholder {
    color:#fff;
}
select{
    background: #B40431;
    outline: none;
    border: 2px solid white;
    color: white;
    padding: 10px 20px;
}
label{
    color: white;
    font-size: 22px;
    font-weight: 500;
}
.image input{
background: #B40431;
 outline: none;
    border: 2px solid white;
    color: white;
    padding: 10px 20px;}
	</style>



</head>
<body>
 <div id="contact">
                 <h1> Drop Your Information For Advertisement </h1> 
 <form enctype="multipart/form-data" method="POST" action="<?php echo $a;?>">
                
                <!-- name input field -->
                <div class="form-group">
                   
                    <input required="required" type="text" name="name" class="form-control" placeholder="Offer title">
                </div>
                
                <!-- email input field -->
                <div class="form-group">
                    
                    <input required="required" type="email" name="email" class="form-control" placeholder="email">
                </div>
                <br>
                <div class="form-group">
                   
                   <label class="categories"  >   Select offer category:-- </label>
<select name="categories" class="cat-1" required="required">
<option value=" Food"> Food</option>
<option value=" clothing"> Clothing</option>
<option value="Vehicle">Vehicle</option>
<option value="sim">Sim</option>
<option value="Hotels">Hotels</option>
<option value="Money transfer">Money Transfer</option>
<option value="Electronics">Electronics</option>
<option value="Sports">Sports</option>
</select>
                </div>
                <br>
                <br>
                <div class="form-group">
                   
                   <label class="categories"  >   Select location:-- </label>
<select name="location" class="cat-1" required="required">
<option value="Banani"> Banani</option>
<option value="Gulshan"> Gulshan</option>
<option value="Mirpur">Mirpur</option>
<option value="Uttara">Uttara</option>
<option value="Cantonment">Cantonment</option>
<option value="Farmgate">Farmgate</option>
<option value="Shahbag">Shahbag</option>
<option value="Motijhil">Motijhil</option>
<option value="Ashulia">Ashulia</option>
<option value="Karwanbazar">Karwanbazar</option>
</select>
                </div>
                <div class="form-group">
                   
                    <input required="required" type="text" name="company" class="form-control" placeholder="Company name">
                </div>
                <div class="form-group">
                   
                    <input required="required" type="number" name="Phonenumber" class="form-control" placeholder="Phone number">
                </div>

                <!-- message field -->
                <div class="form-group">
                    
                    <textarea type="text" name="Description" class="form-control" placeholder="Offer Details"></textarea>
                </div>
                <div class="form-group">
                   <label>Choose image of offers</label>
                    <input required="required" type="file" name="picture" class="image" placeholder="image">
                </div>
                <button type="submit" name="submit"
                      class=" btn_one" >Send</button>
            </form> </div>
</body>
</html>