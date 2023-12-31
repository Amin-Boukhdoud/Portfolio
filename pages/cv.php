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
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Amin Boukhdoud </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" type="text/css" href="../css/CVstyle.css">
    <script src="https://kit.fontawesome.com/de8054ee33.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row" id="header">
            <div id="dropdown-menu">
                <span><i class="ico burger-ico"></i></span>
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
                    <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
                </div>
                <div class="right-content">
                    <a href="?logout">Log out</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="left_side">
                <div class="profileText">
                    <div class="imgBX">
                        <img src="../images/profilepic.jpg" id="pp">
                    </div>
                    <h2>Amin Boukhdoud<br><span>Computer Scientist</span></h2>
                </div>
                
                <div class="contactInfo">
                    <h3 class="title">Contact Info</h3>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <span class="text"> +961 03 140 641</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            <span class="text">amin.boukhdoud@outlook.com</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                            <span class="text"> https://www.linkedin.com/in/amin-boukhdoud/</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span class="text"> Beirut, Lebanon</span>
                        </li>
                    </ul>
                </div>
                <div class="contactInfo education">
                    <h3 class="title">Education</h3>
                    <ul>
                        <li>
                            <h5>2021 - 2024</h5>
                            <h4>B.S. in Computer Science</h4>
                            <h4>Lebanese American University</h4>
                        </li>
                        <li>
                            <h5>2018 - 2021</h5>
                            <h4>General Science</h4>
                            <h4>Hassan Kamel Al-Sabbah Highschool</h4>
                        </li>
                    </ul>
                </div>
                
                <div class="contactInfo language">
                    <h3 class="title">Language</h3>
                    <ul>
                        <li>
                            <span class="text">English</span>
                        </li>
                        <li>
                            <span class="text">Arabic</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="right_side">
                <h2 class="title2">Profile</h2>
                <div class="about">
                    <h2 class="title2"> Work Experience </h2>
                    <div class="box">
                        <div class="year_company">
                            <h5>2022-Present</h5>
                            <h5>GeekExpress</h5>
                        </div>
                        <div class="text">
                            <h4>Coding Trainer</h4>
                            <p>Tutoring Children on Game Development on different paltforms such as Minecraft Education, GDevelop 5, and Roblox.</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="year_company">
                            <h5>June-July 2023</h5>
                            <h5>DataConsult</h5>
                        </div>
                        <div class="text">
                            <h4>Python Intern</h4>
                            <p>Worked on cybersecurity scripts and Flask with RestAPI in AI</p>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="year_company">
                            <h5>FEB-OCT 2022</h5>
                            <h5>RedCross IT</h5>
                        </div>
                        <div class="text">
                            <h4>Data Management</h4>
                            <p>Worked with the database of the youth sector of the Lebanese RedCross  </p>
                        </div>
                    </div>
                </div>

                <div class="about">
                    <h2 class="title2"> Volunteering </h2>
                    <div class="box">
                        <div class="year_company">
                            <h5>2020-Present</h5>
                            <h5>Lebanese RedCross</h5>
                        </div>
                        <div class="text">
                            <h4>Youth Sector</h4>
                            <p>Volunteered in Nabatieh Center till 2022 and 
                                currently at LAU Club, were I got to serve in alot of activites to help out many of our targets</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="year_company">
                            <h5>October 8,9 2022</h5>
                            <h5>LCPC Event</h5>
                        </div>
                        <div class="text">
                            <h4></h4>
                            <p>I got to be a part of the team that managed the logistics of the competition and participate as a balloon runner</p>
                        </div>
                    </div>
                </div>


                <div class="about skills">
                    <h2 class="title2">Professional Skills</h2>
                    <div class="box">
                        <h4>Java</h4>
                        <div class="percent">   
                            <div style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>Python</h4>
                        <div class="percent">
                            <div style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>SQL</h4>
                        <div class="percent">
                            <div style="width: 85%;"></div>
                        </div>
                    </div>
                    <div class="box">
                        <h4>HTML</h4>
                        <div class="percent">
                            <div style="width: 65%;"></div>
                        </div>
                    </div>
                </div>
                <div class="about interest">
                    
                    <h2 class="title2">Interest</h2>
                    <ul>
                        <li><i class="fa-solid fa-dumbbell"></i>    Working out</li>
                        <li><i class="fa-solid fa-chess"></i>    Chess</li>
                        <li><i class="fa-solid fa-handshake-angle"></i>    Volunteering</li>
                        <li><i class="fa-solid fa-gamepad"></i>    Gaming</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>

</html> 