<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    ?>
<script>
alert('session is not set please login again')
</script>
<?php
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/notes.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8505550afa.js" crossorigin="anonymous"></script>
    <title>StudentHelper.com</title>
</head>

<body>
    <div class="navbar navbar1">
        <div class="logo"><img src="img/logo1.jpg" alt=""></div>
        <ul class="nav_links" id="nav_Id">
            <li><a href="index.html">HOME</a> </li>
            <li><a href="notes.php">NOTES</a></li>
            <li><a href="dress.php">DRESS</a></li>
            <li><a href="video.php">LECTURE</a></li>
            <li><a href="shop.php">SHOPING</a></li>
            <li><i class="fa-solid fa-person-simple"><?php echo "Welcome". $_SESSION['username']; ?></i></li>
        </ul>
        <div class="menu imageClass" id="menu">
            <i class="fa-solid fa-bars" id="menu"></i>
        </div>
    </div>
    <div class="notecontaniner">
        <div class="notes">
            <div class="chemisty">
                <div class="noteHedading">
                    <h3>CHEMISTY SECTION</h3>
                </div>
                <div class="btncol">
                    <button class="btnnotes"><a href="chapterchem.html">CHEMISTRY</a></button>
                    <button class="btnnotes"><a href="chapterbme.html">BME</a></button>
                    <button class="btnnotes"><a href="chaptereco.html">ECONOMICS</a></button>
                    <button class="btnnotes"><a href="chaptercsp.html">CSP</a></button>
                    <button class="btnnotes"><a href="chapterese.html">ESE</a></button>
                    <button class="btnnotes"><a href="chaptermath.html">MATH</a></button>
                </div>
            </div>
            <div class="physics">
                <div class="noteHedading">
                    <h3>PHYSICS SECTION</h3>
                </div>
                <div class="btncol">
                    <button class="btnnotes"><a href="chapterphy.html">PHYSICS</a></button>
                    <button class="btnnotes"><a href="chapterece.html">ECE</a></button>
                    <button class="btnnotes"><a href="chapterelec.html">ELECTRICAL</a></button>
                    <button class="btnnotes"><a href="chaptereng.html">ENGLISH</a></button>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <div class="footer">
        <div class="rowfoot">
            <div class="columnfoot">
                <div class="contact">
                    <h4>Get Touch</h4>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <h5>+91-9798827707</h5>
                    </div>
                    <div class="email">
                        <i class="fa-solid fa-envelope"></i>
                        <h5>studenthelper@gmail.com</h5>
                    </div>
                </div>
            </div>
            <div class="columnfoot">
                <div class="services">
                    <h4>Services</h4>
                    <li><a href="notes.html">Notes</a></li>
                    <li><a href="video.html">Lecture</a></li>
                    <li><a href="shop.html">Shoping</a></li>
                    <li><a href="dress.html">Dress</a></li>
                </div>
            </div>
            <div class="columnfoot">
                <div class="social">
                    <h4>Social Media</h4>
                    <div class="social_links">
                        <a href="#"><img src="img/insta.png" alt=""></a>
                        <a href="#"><img src="img/linkedn.png" alt=""></a>
                        <a href="#"><img src="img/fb.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/app2.js"></script>
</body>

</html>