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
<html>
    <head>
        <title>
            My 1st Page
        </title>
        <link rel="stylesheet" href="../css/mStyle.css">
        <link rel="stylesheet" href="../css/icons.css">
    </head>
    <body>
        <div class="row" id="header">
            <div id="dropdown-menu">
                <span><i class="ico burger-ico"></i>MENU</span>
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
        </div>
        <div class="content">
            <h1 style="    border: 1px solid black;
                        text-align: center;
                        padding-top: 20px;
                    ">
                My 1st Page
            </h1>

            <div >
                <header class="fw">
                <h2 >Welcome <?php echo $_SESSION['user']; ?> </h2>
                <a href="?logout">Log out</a>
                </header>

                <main></main>
            </div>
    </body>
</html>