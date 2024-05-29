<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="price.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">



    <title>User Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/vlt.png" alt="">
            </div>

            <span class="logo_name">User</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="user.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="index.php">
                    <i class="uil uil-star"></i>
                    <span class="link-name">Evaluate</span>
                </a></li>
                <li><a href="user_dlist.php">
                    <i class="uil uil-user-nurse"></i>
                    <span class="link-name">Doctors</span>
                </a></li>
                <li><a href="user_sched.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Schedule</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-receipt-alt"></i>
                    <span class="link-name">Membership</span>
                </a></li>
                <li><a href="user_mess.php">
                    <i class="uil uil-envelope-check"></i>
                    <span class="link-name">Messages</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
           <img src="images/mal.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-receipt-alt"></i>
                    <span class="text">Membership</span>
                </div>
                <div class="inner-main">
                    <div class="card1">
                        <img class="card1-svg" src="img/red.svg" alt="">
                        <h2>Basic</h2>
                        <div class="price">
                            <h3 class="doller"><sup>₱</sup>25,000</h3>
                            <h3 class="month">Annual</h3>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> 60 Days free Visit</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Free Dental Check-up</li>
                              
                            </ul>
                        </div>
                        <div class="buy-btn">
                            <a href="#">SUBSCRIBE</a>
                        </div>
                    </div>
                    <div class="card2">
                        <img class="card2-svg" src="img/blue.svg" alt="">
                        <h2>Premium</h2>
                        <div class="price">
                            <h3 class="doller"><sup>₱</sup>45,000</h3>
                            <h3 class="month">Annual</h3>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> 120 Days free of Visit</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Free Dental Check-up</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Free Nutrition Check</li>
                               
                            </ul>
                        </div>
                        <div class="buy-btn">
                            <a href="#">SUBSCRIBED</a>
                        </div>
                    </div>
                    <div class="card3">
                        <img class="card3-svg" src="img/perple.svg" alt="">
                        <h2>VIP</h2>
                        <div class="price">
                            <h3 class="doller"><sup>₱</sup>70,000</h3>
                            <h3 class="month">Annual</h3>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> 210 Days free of Visit</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Free of all Amenities</li>
                                
                            </ul>
                        </div>
                        <div class="buy-btn">
                            <a href="#">SUBSCRIBE</a>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
    

  

    <script src="price.js"></script>
</body>
</html>