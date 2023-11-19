<?php
    session_start();    

    if(!isset($_SESSION['user'])){
		header("location: signin.php");
        exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: signin.php");
        exit();
	}

?>
<!DOCTYPE html>
<html>
    <title>About</title>
    <head>
        <title>
            About
        </title>
        <link rel="stylesheet" href="../css/mStyle.css">
        <link rel="stylesheet" href="../css/icons.css">
    </head>
    <body>
        <div class="row" id="header">
            <div id="dropdown-menu">
                <span>MENU<i class="ico burger-ico"></i></span>
                <div class="dropdown-content">
                    <ul>
                        <a href="first.php">
                            <li>Home<i class="ico ico-l user-ico"></i></li>
                        </a>
                        <a href="cv.php">
                            <li>CV<i class="ico ico-l wallet-ico"></i></li>
                        </a>
                        <a href="Gallery.php">
                            <li>Gallery<i class="ico ico-l gallery-ico"></i></li>
                        </a>
                        <a href="about.php">
                            <li>About<i class="ico ico-l wallet-ico"></i></li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="header-content"> 
                <div class="center-content">
                    <h2 id="welcome ">Welcome <?php echo $_SESSION['user']; ?></h2>
                </div>
                <div class="right-content">
                    <a href="?logout">Log out</a>
                </div>
            </div>
        </div>
        
        <div class="about">
            <h1> </h1>
            <h1>Contact Us</h1>
            <p>If you have any questions or concerns, please don't hesitate to reach out to us.</p>
            <h2>Contact Information</h2>
            <ul>
                <li>Email: amin.boukhdoud@outlook.com</li>
                <li>Phone: +9613140641</li>
                <li>Address: Beirut, Lebanon</li>
            </ul>
  </div>
    </body>
</html>