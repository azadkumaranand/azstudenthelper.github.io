<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login1.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shop.css">
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
    <!-- coller detalis controller -->
    <div class="sidetab0">
        <div class="crosstab crosssymbol" id="crosstab0"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 1</div>
    </div>
    <div class="sidetab1">
        <div class="crosstab crosssymbol" id="crosstab1"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 2</div>
    </div>
    <div class="sidetab2">
        <div class="crosstab crosssymbol" id="crosstab2"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 3</div>
    </div>
    <div class="sidetab3">
        <div class="crosstab crosssymbol" id="crosstab3"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 4</div>
    </div>
    <div class="sidetab4">
        <div class="crosstab crosssymbol" id="crosstab4"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 5</div>
    </div>
    <div class="sidetab5">
        <div class="crosstab crosssymbol" id="crosstab5"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 6</div>
    </div>
    <div class="sidetab6">
        <div class="crosstab crosssymbol" id="crosstab6"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 7</div>
    </div>
    <div class="sidetab7">
        <div class="crosstab crosssymbol" id="crosstab7"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 8</div>
    </div>
    <div class="sidetab8">
        <div class="crosstab crosssymbol" id="crosstab8"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 9</div>
    </div>
    <div class="sidetab9">
        <div class="crosstab crosssymbol" id="crosstab9"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 10</div>
    </div>
    <!-- bycycle detalis controller -->
    <div class="sidetab10">
        <div class="crosstab crosssymbol" id="crosstab10"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 11</div>
    </div>
    <div class="sidetab11">
        <div class="crosstab crosssymbol" id="crosstab11"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 12</div>
    </div>
    <div class="sidetab12">
        <div class="crosstab crosssymbol" id="crosstab12"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 13</div>
    </div>
    <div class="sidetab13">
        <div class="crosstab crosssymbol" id="crosstab13"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 14</div>
    </div>
    <div class="sidetab14">
        <div class="crosstab crosssymbol" id="crosstab14"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 15</div>
    </div>
    <div class="sidetab15">
        <div class="crosstab crosssymbol" id="crosstab15"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 16</div>
    </div>
    <div class="sidetab16">
        <div class="crosstab crosssymbol" id="crosstab16"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 17</div>
    </div>
    <div class="sidetab17">
        <div class="crosstab crosssymbol" id="crosstab17"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 18</div>
    </div>
    <div class="sidetab18">
        <div class="crosstab crosssymbol" id="crosstab18"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 19</div>
    </div>
    <div class="sidetab19">
        <div class="crosstab crosssymbol" id="crosstab19"><img src="img/xmarks.png" alt=""></i></div>
        <div class="lechead">Video lecture 20</div>
    </div>
    <div class="sideshop">
        <button class="collerbtn shopsidebtn"><a href="#coller"><img src="img/coller.png"></a></button>
        <br>
        <button class="cyclbtn shopsidebtn"><a href="#bycycle"><img src="img/cycle.png"></a></button>
    </div>
    <div class="coller" id="coller">
        <div class="columnshop">
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap1">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap2">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap3">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap4">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
        </div>
        <div class="columnshop">
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap5">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap6">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap7">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap8">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img src="img/cool1.jpg">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap9">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
        </div>
    </div>
    <div class="bycycle" id="bycycle">
        <div class="columnshop">
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap10">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap11">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap12">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap13">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap14">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
        </div>
        <div class="columnshop">
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap15">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap16">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap17">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap18">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
            <div class="shopcard">
                <img class="cycle" src="img/cycle.png">
                <div class="shopcard-text">
                    <p>hello guys buy cooler from here at minimum price Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.</p>
                </div>
                <br>
                <button class="btn btnshop" id="chemlecchap19">View More Details</button>
                <br>
                <button class="btn"><a href="billing.php">Buy Now</a></button>
                <br>
            </div>
        </div>
        <br>
        <br>



    </div>
    <br>
    <br><br>
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
                    <li><a href="notes.php">Notes</a></li>
                    <li><a href="lecturebuy.php">Lecture</a></li>
                    <li><a href="shop.php">Shoping</a></li>
                    <li><a href="dress.php">Dress</a></li>
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
    <script src="js/shopapp.js"></script>
    <script src="js/app2.js"></script>
    </div>
</body>

</html>