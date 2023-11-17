<?php require("BE/register.class.php") ?>
<?php 
    if(isset($_POST['submit'])){
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;

        $user = new RegisterUser(
             $_POST['Username'],
             $_POST['FirstName'],
             $_POST['LastName'],
             $_POST['Password'],
              $gender,
             $_POST['dob']
            );



    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="css/LStyle.css">
    <script src="https://kit.fontawesome.com/de8054ee33.js" crossorigin="anonymous"></script>
</head>    
<body>
<div class="lcontainer">
   <div class="form-box">
        <h1 id="title">Sign Up</h1>
        <form action="" method="post" enctype="multipart/form-data"  autocomplete="off" id="signupform">
            <div class="input-group">
                <div class="input-field" id="usern">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Username" name="Username">
                </div>
                <div class="input-field" id="fname">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="FirstName" name="FirstName">
                </div>
                <div class="input-field" id="lname">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="LastName" name="LastName">
                </div>
                <div class="input-field" >
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="Password">
                </div>
                <div class="gender-field" id="sex" name="gender">
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="female">Female</label>
                    <input type="radio" id="female" name="gender" value="female">
                </div>
                <div class="input-field" id="dob">
                    <i class="fa-solid fa-calendar"></i>
                    <input type="date" placeholder="Date of Birth" name="dob">
                </div>
            </div>
            <div class="btn-field">
                <button type="submit"  name="submit" id="signupbtn">Sign Up</button>
                <button type="button" id="signinbtn" class="disable">Sign In</button>
            </div>   
        </form>
        <div id="message">
                <p class= "error"><?php echo @$user->error ?></p>
            
                <p class= "success"><?php echo @$user->success ?></p>
            </div>
   </div>             
</div>
</body>
</html>