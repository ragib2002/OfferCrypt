<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $company = $email = $location = $address = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
        $company = trim($_POST["company"]);
        $email = trim($_POST["email"]);
        $location = trim($_POST["location"]);
        $address = trim($_POST["address"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password,company,email,location,address) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_password,$param_company,$param_email,$param_location,$param_address);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_company = $company;
            $param_email = $email;
            $param_location = $location;
            $param_address = $address;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	
	#form{
		background: #333;
		min-height: 600px;
		padding: 5px 40px 40px 40px;
		color: white;
	}
	@media and screen(max-width: 450px){
		#form{
			padding: 5px 10px 10px 10px;
		}
	}
	.registration{
		font-weight: 700;
		font-size: 40px;
		border-bottom-style: ridge;
	}
	.text{
		height: 43px;
	}
	label{
		font-size: 18px;
	}

select{
    background: #B40431;
    outline: none;
    border: 2px solid white;
    color: white;
    padding: 10px 20px;
}
.btn{
	color: #333;
	background: #B40431
}
/*starts menu hamburger*/
#menu-bar{
    margin-top: 40px;
    margin-left: 30px;

}

@media screen and (max-width: 746px){
    #menu{
        width: 35px;
        height: 45px;
        margin: 50px 0 20px 20px;
    }
    #header{
        padding: 3% 10%;
    }
    .bar{
        height: 5px;
    }

#menu-bar{
    margin-top: 30px;
    margin-left: 15px;

}
}
#menu{
    width: 50px;
    height: 60px;
    margin: 30px 0 20px 20px;
    cursor: pointer;
}
.bar{
    height: 7px;
    width: 100%;
    background-color:#B40431;
    display: block;
    border-radius: 5px;
    transition: 0.3s ease;
    
}
#bar1{
    transform: translateY(-6px);
}
#bar3{
    transform: translateY(6px);
}
.nav li a{
    color: #fff;
    text-decoration: none;
    
}
.nav li a:hover{
    font-weight: bold;
}
.nav li{
    list-style: none;
    padding: 16px 0;
}
.nav{
    padding: 0;
    margin: 0 20px;
    transition: 0.3s ease;
    display: none;
}
.menu-bg, #menu-bar{
    top: 0;
    left: 0;
    position: absolute;
}
.menu-bg{
    z-index: 4;
    width: 0;
    height: 0;
    margin: 30px 0 20px 20px;
    background: radial-gradient(circle,#000000,#000000);
    border-radius: 50%;
    transition: 0.3s ease;
}
#menu-bar{
    z-index: 8; 
}
.change-bg{
    width: 660px;
    height: 600px;
    transform: translate(-60%,-30%);
    
}
.change .bar{
    background-color: white;

}
.change #bar1{
    transform: translateY(6px) rotateZ(-45deg);
}
.change #bar3{
    transform: translateY(-6px) rotate(45deg);
}
.change #bar2{
    opacity: 0;
}
.change{
    display: block;
}
    /*ends menu hamburger*/

.cutabrar{
    width: 140px;
    height: 100px;
    margin-top: 1rem;
    left: 50%;
    top: 2%;
}
@media screen and (max-width: 746px){
  .cutabrar{
    height: 70px;
    width:90px;
  }
  .post{
     top: 20px;
  right: 10px;
   padding: 10px 12px;
  }


}
.post{
 text-align: center;
  position: absolute;
  top: 50px;
  right: 10px;
  text-decoration: none;
  color: white;
  margin-left: 20px;
  background: #B40431;
  padding: 15px 20px;
}
/*card ab*/

  </style>
</head>
<body>
 <script type="text/javascript">
 	
function onClickMenu(){
  document.getElementById("menu").classList.toggle("change");
  document.getElementById("nav").classList.toggle("change");
  
  document.getElementById("menu-bg").classList.toggle("change-bg");
}
 </script>
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
    <img src="img/Untitled-2-01.png" class="cutabrar"><br>
   
    </div></center>
   <a href="#" class="post">Post Offer</a></div>
   <br>
   <div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3" id="form">
			<center><b class="registration">Create Account</b></center>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
					<label>Username</label>
					<input type="text" name="username" class="form-control text" placeholder="Username" required>
					<span class="help-block"><?php echo $username_err; ?></span>
				</div>
				<div class="form-group">
					<label>Company or store name</label>
					<input type="text" name="company" class="form-control text" placeholder="Company" required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control text" placeholder="Email" required>
				</div>
				<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
					<label>password</label>
					<input type="password" name="password" class="form-control text" placeholder="password" required>
					<span class="help-block"><?php echo $password_err; ?></span>
				</div>
				<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
					<label>Re Enter password</label>
					<input type="password" name="confirm_password" class="form-control text" placeholder="Re Enter password" required>
					<span class="help-block"><?php echo $confirm_password_err; ?></span>
				</div>

 <div class="form-group">
                   
                   <label class="categories"  >   Select location:-- </label><br>
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
                    
                    <textarea type="text" name="address" class="form-control text" placeholder="Address"></textarea>
                </div>
				 <button class="btn default btn-lg" type="submit">Signup</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>