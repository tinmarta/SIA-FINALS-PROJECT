<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
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
                <li><a href="#">
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
                <li><a href="user_price.php">
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
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-schedule"></i>
                        <span class="text">Visit Schedule</span>
                        <span class="number">May 31, 2024</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-receipt-alt"></i>
                        <span class="text">Membership</span>
                        <span class="number">Premium</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-bill"></i>
                        <span class="text">Balance</span>
                        <span class="number">₱ 0.00</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Activity</span>
                        <span class="data-list">Name Update</span>
                        <span class="data-list">Change Visit Schedule</span>
                       
                        
                    </div>
                    <div class="data email">
                        <span class="data-title">Process</span>
                        <span class="data-list">Mary Loi Yves Ricalde</span>
                        <span class="data-list">May 31, 2024</span>
                       
                        
                    </div>
                    <div class="data joined">
                        <span class="data-title">Date</span>
                        <span class="data-list">2024-29-05</span>
                        <span class="data-list">2024-29-05</span>
                        
                        
                    </div>
                    <div class="data type">
                        <span class="data-title">Time</span>
                        <span class="data-list">15:36 PM</span>
                        <span class="data-list">9:09 AM</span>
                        
                        
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Successful</span>
                        <span class="data-list">Successful</span>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>