<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="plist.css">
     
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
                <li><a href="admin.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="admin_dlist.php">
                    <i class="uil uil-user-nurse"></i>
                    <span class="link-name">Doctors</span>
                </a></li>
                <li><a href="#">
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
            
           <img src="images/pubmat.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-head-side-mask"></i>
                    <span class="text">Patients</span>
                </div>

            
                <table >

 

                    <tr>
                   
                    <th>#</th>
                   
                    <th>First Name</th>
                   
                    <th>Surnmae</th>
                   
                    <th>Patient ID</th>
                   
                    <th>Membership</th>
                   
                    <th>Balance</th>
                   
                    </tr>
                   
                   
                     <tr>
                   
                    <td>1</td>
                   
                    <td>Manny</td>
                   
                    <td>Pastil</td>
                   
                    <td>0111</td>
                   
                    <td>Basic</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>2</td>
                   
                    <td>Lita</td>
                   
                    <td>Manoban</td>
                   
                    <td>0112</td>
                   
                    <td>Basic</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>3</td>
                   
                    <td>Marta</td>
                   
                    <td>Tin</td>
                   
                    <td>0113</td>
                   
                    <td>Premium</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>4</td>
                   
                    <td>Marel</td>
                   
                    <td>Sisto</td>
                   
                    <td>0114</td>
                   
                    <td>Premium</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>5</td>
                   
                    <td>Lanny</td>
                   
                    <td>Mara</td>
                   
                    <td>0115</td>
                   
                    <td>Basic</td>
                   
                    <td>250.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>6</td>
                   
                    <td>Marz</td>
                   
                    <td>Lupany</td>
                   
                    <td>0116</td>
                   
                    <td>VIP</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>7</td>
                   
                    <td>Luna</td>
                   
                    <td>Malta</td>
                   
                    <td>0117</td>
                   
                    <td>Basic</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>8</td>
                   
                    <td>Prina</td>
                   
                    <td>Latta</td>
                   
                    <td>0118</td>
                   
                    <td>VIP</td>
                   
                    <td>1567.00 php</td>
                   
                    </tr>
                   
                    </table>
            

                

            
                        
                    
                
            
        </div>
    </section>

    <script src="plist.js"></script>
</body>
</html>