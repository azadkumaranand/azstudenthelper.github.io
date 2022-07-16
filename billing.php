<?php
require_once "config.php";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $product_id = $_POST['product_id'];
        $hostel = $_POST['hostel'];
        $stmt = $conn->prepare("insert into cooler_cycle_users(name, phone, email, product_id, hostel)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $phone, $email, $product_id, $hostel);
        if($stmt->execute()){
            header("location: oderplace.php");
        }
        else{
            echo "Sorry! something went wrong please try again";
        }
        $stmt->close();
        $conn->close();
    }
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/billing2.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8505550afa.js" crossorigin="anonymous"></script>
    <title>StudentHelper.com</title>
</head>

<body>
    <div class="navbar navbar1">
        <div class="logo"><img src="img/logo.jpg" alt=""></div>
        <ul class="nav_links" id="nav_Id">
            <li><a href="index.html">HOME</a> </li>
            <li><a href="notes.php">NOTES</a></li>
            <li><a href="dress.php">DRESS</a></li>
            <li><a href="lecturebuy.php">LECTURE</a></li>
            <li><a href="shop.php">SHOPING</a></li>
        </ul>
        <div class="menu imageClass" id="menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="formcard">
        <div class="registerheading">
            <h3>Fill Your Billing Address Please!</h3>
        </div>
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-8 mb-3">
                    <label for="">Name</label>
                    <input class="form-control" name="name" type="text" placeholder="Enter Your Name" required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Contact NO</label>
                    <input class="form-control" id="phone" name="phone" type="phone"
                        placeholder="Enter Your Phone Number" required>
                    <div class="invalid-feedback">
                        please enter a valid phone please!
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Email</label>
                    <input class="form-control" name="email" id="email" type="email" placeholder="Enter Your Email ID"
                        required>
                    <div class="invalid-feedback">
                        password should match
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Product ID</label>
                    <input class="form-control" name="product_id" type="email" placeholder="Enter Your Product ID"
                        required>
                    <div class="invalid-feedback">
                        Enter a valid phone number
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Hostel Name</label>
                    <input class="form-control" name="hostel" placeholder="Enter Your Hostel Name" required>
                    <div class="invalid-feedback">
                        Please Enter Your college Id
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Pay Online</button>
        </form>
    </div>
    <script src="js/app2.js"></script>
    <script src="js/billing.js"></script>
</body>

</html>