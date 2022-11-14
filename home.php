<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"ebs");


session_start();
if(!isset($_SESSION['UserLoginId']))
{
    header("location: Index.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/fa11acf629.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/topbar.css">
    <link rel="stylesheet" href="css/homeContain.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Document</title>
</head>
<body>
    <?php
        $user_data="SELECT * FROM user WHERE email='$_SESSION[UserLoginId]'";
        $user_datta=mysqli_query($connection,$user_data);
        $row = mysqli_fetch_assoc($user_datta)
    ?>
    <div class="topbarContainer">
      <div class="topbarLeft">
        <a href="home.php" class="topbarLeft">
            <span class="logoo">omazon<span>.in</span></span>
            <img src="img/kindpng_5532732.png" class="omazon_logo" alt="">
        </a>
      </div>
      <div class="topbarCenter">
        <div class="searchbar">
            <input placeholder="Search for your item." class="searchInput" />
            <i class="fa-solid fa-magnifying-glass searchIcon"></i>
        </div>
      </div>
      <div class="topbarRight">
        <div class="topbarLinks">
            <div class="home_name">Hello, <?php echo $row['name'];?>
            <i class="fas fa-caret-down"></i>
            <div class="dropdown_menu">
                <ul>
                    <li><a href="edituser.php">Edit profile</a></li>
                    <li><a href="">Order history</a></li>
                    <li><a href="contactpage.php">Contact Us</a></li>
                    <li><form method="post">
                            <button name="Logout">Signout</button>
                        </form>
                    </li>
                </ul>
            </div>
            </div>
        </div>
        <i class="fa-solid fa-cart-shopping topbarImg"></i>
      </div>
    </div>
    <div class="topbar2">
      <i class="fas fa-map-marker-alt"></i>
      <p class="topbar-city"><b><?php echo $row['city'];?>,</b></p>
      <p class="topbar-state"><?php echo $row['state'];?>, </p>
      <p class="topbar-pin"><?php echo $row['pin'];?></p>
    </div>
    <section class="products" id="shirts">
        <h2>All Products</h2>
        <p>Shirts</p>
        <div class="pro-container">
            <div class="pro">
            <img src="/img/shirts1.png" alt="">
            <div class="des">
                <span>Company</span>
                <h5>Red Check Shirt</h5>
                <div>
                  <button class="item-button">Add to Cart</button>
                  <h4>450 RS</h4>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="/img/shirts3.png" alt="">
            <div class="des">
                <span>Company</span>
                <h5>Red Check Shirt</h5>
                <div>
                  <button class="item-button">Add to Cart</button>
                  <h4>450 RS</h4>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="/img/shirts3.png" alt="">
            <div class="des">
                <span>Company</span>
                <h5>Red Check Shirt</h5>
                <div>
                  <button class="item-button">Add to Cart</button>
                  <h4>450 RS</h4>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="/img/shirts1.png" alt="">
            <div class="des">
                <span>Company</span>
                <h5>Red Check Shirt</h5>
                <div>
                  <button class="item-button">Add to Cart</button>
                  <h4>450 RS</h4>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="/img/shirts1.png" alt="">
            <div class="des">
                <span>Company</span>
                <h5>Red Check Shirt</h5>
                <div>
                  <button class="item-button">Add to Cart</button>
                  <h4>450 RS</h4>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="/img/shirts1.png" alt="">
            <div class="des">
                <span>Company</span>
                <h5>Red Check Shirt</h5>
                <div>
                  <button class="item-button">Add to Cart</button>
                  <h4>450 RS</h4>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="/img/shirts1.png" alt="">
            <div class="des">
                <span>Company</span>
                <h5>Red Check Shirt</h5>
                <div>
                  <button class="item-button">Add to Cart</button>
                  <h4>450 RS</h4>
                </div>
            </div>
        </div>

        <div class="pro">
            <img src="/img/shirts3.png" alt="">
            <div class="des">
                <span>Company</span>
                <h5>Red Check Shirt</h5>
                <div>
                  <button class="item-button">Add to Cart</button>
                  <h4>450 RS</h4>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php
    if(isset($_POST['Logout']))
    {
    session_destroy();
    header("location: Index.html");
    }
  ?>
</body>
</html>