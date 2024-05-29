<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/vlt.png" alt="">
            </div>

            <span class="logo_name">Admin</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="admin_dlist.php">
                    <i class="uil uil-user-nurse"></i>
                    <span class="link-name">Doctors</span>
                </a></li>
                <li><a href="admin_plist.php">
                    <i class="uil uil-head-side-mask"></i>
                    <span class="link-name">Patients</span>
                </a></li>
                <li><a href="admin_sched.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Schedule</span>
                </a></li>
                <li><a href="admin_pout.php">
                    <i class="uil uil-wallet"></i>
                    <span class="link-name">Payout</span>
                </a></li>
                <li><a href="admin_mess.php">
                    <i class="uil uil-envelope-check"></i>
                    <span class="link-name">Messages</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="log_in.php">
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
            
           <img src="images/pubmat.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-bed"></i>
                        <span class="text">Total Patients</span>
                        <span class="number">372</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-medical-drip"></i>
                        <span class="text">Inpatient Care</span>
                        <span class="number">46</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-head-side"></i>
                        <span class="text">Outpatient Care</span>
                        <span class="number">326</span>
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
                        <span class="data-title">Name</span>
                        <span class="data-list">Reynaldo Dumon</span>
                        <span class="data-list">Jessica Nuave</span>
                        <span class="data-list">Lito Limban</span>
                        <span class="data-list">Renato Telavera</span>
                        
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">Rey167@gmail.com</span>
                        <span class="data-list">jesnuave@gmail.com</span>
                        <span class="data-list">LimbanLito90@gmail.com</span>
                        <span class="data-list">RenRenTelavera@gmail.com</span>
                        
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2024-01-12</span>
                        <span class="data-list">2020-08-11</span>
                        <span class="data-list">2021-02-03</span>
                        <span class="data-list">2024-01-09</span>
                        
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Outpatient</span>
                        <span class="data-list">Outpatient</span>
                        <span class="data-list">Inpatient</span>
                        <span class="data-list">Outpatient</span>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>