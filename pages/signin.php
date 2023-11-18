<?php require("../BE/login.class.php") ?>
	<?php
	   if(isset($_POST['submit'])){
	      $user = new LoginUser($_POST['Username'], $_POST['Password']);
	   }
	?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="../css/LStyle.css">
    <script src="https://kit.fontawesome.com/de8054ee33.js" crossorigin="anonymous"></script>
</head>    
<body>
<div class="lcontainer">
   <div class="form-box">
        <h1 id="title">Sign In</h1>
        <form action="" method="post" id="signinForm">
            <div class="input-field" id="Username">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username" name="Username">
                </div>    
            <div class="input-field" id="Password">
                    <i class="fa-solid fa-lock"></i>
                    <input type="Password" placeholder="Password" name="Password">
                </div>
            <div class="btn-field">
                <button type="submit" name="submit" id="signupbtn">Sign In</button>
                <a href="../index.php", style="width: 170px;">
                <button type="button" id="signinbtn" class="disable">Sign Up</button>
            </a>
            </div>
            <div id="message">
                <p class="error"><?php echo @$user->error ?></p>
	            <p class="success"><?php echo @$user->success ?></p>
            </div>
        </form>
   </div>             
</div>
</body>
</html>