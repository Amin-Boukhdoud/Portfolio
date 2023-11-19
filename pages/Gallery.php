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

    function getGalleryImages() {
        $galleryFile = '../Gallery/gallery.json';
    
        if (file_exists($galleryFile)) {
            $galleryData = file_get_contents($galleryFile);
            $galleryArray = json_decode($galleryData, true);
    
            if (isset($galleryArray['images']) && is_array($galleryArray['images'])) {
                return $galleryArray['images'];
            }
        }
    
        return [];
    }
    
    $galleryImages = getGalleryImages();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="../css/gallery.css">   
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
    
   <div class="gt">Gallery</div>
    <div class="wrapper">
    <div class="img-area">
         <?php
             foreach ($galleryImages as $image) {
                echo '<img src="../' . $image['url'] . '" alt="' . $image['alt'] . '">';
            }
            ?>   
    </div>
    </div>
</body>
</html>
