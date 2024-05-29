<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dlist.css">
     
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
                <li><a href="#">
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
                    <i class="uil uil-user-nurse"></i>
                    <span class="text">Doctors</span>
                </div>

            
                <table >

 

                    <tr>
                   
                    <th>#</th>
                   
                    <th>First Name</th>
                   
                    <th>Surnmae</th>
                   
                    <th>ID Number</th>
                   
                    <th>Date Absorbed</th>
                   
                    <th>Salary</th>
                   
                    </tr>
                   
                   
                     <tr>
                   
                    <td>1</td>
                   
                    <td>Rey</td>
                   
                    <td>Valerio</td>
                   
                    <td>0122</td>
                   
                    <td>18 Nov 2015</td>
                   
                    <td>29,000 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>2</td>
                   
                    <td>Reynold</td>
                   
                    <td>Limban</td>
                   
                    <td>0123</td>
                   
                    <td>16 Dec 2019</td>
                   
                    <td>36,000 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>3</td>
                   
                    <td>Martin</td>
                   
                    <td>Justine</td>
                   
                    <td>0124</td>
                   
                    <td>12 Nov 2018</td>
                   
                    <td>28,000 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>4</td>
                   
                    <td>Lito</td>
                   
                    <td>Mari</td>
                   
                    <td>0125</td>
                   
                    <td>18 Mar 2021</td>
                   
                    <td>21,000 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>5</td>
                   
                    <td>Susan</td>
                   
                    <td>Nitong</td>
                   
                    <td>0126</td>
                   
                    <td>10 Mar 2021</td>
                   
                    <td>21,000 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>6</td>
                   
                    <td>Mary</td>
                   
                    <td>Lara</td>
                   
                    <td>0127</td>
                   
                    <td>11 Dec 2021</td>
                   
                    <td>27,000 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>7</td>
                   
                    <td>Louis</td>
                   
                    <td>De Guzman</td>
                   
                    <td>0128</td>
                   
                    <td>12 Jun 2023</td>
                   
                    <td>21,000 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>8</td>
                   
                    <td>Mirko</td>
                   
                    <td>Renmo</td>
                   
                    <td>0129</td>
                   
                    <td>16 Jan 2022</td>
                   
                    <td>25,000 php</td>
                   
                    </tr>
                   
                    </table>
            

                

            
                        
                    
                
            
        </div>
    </section>

    <script src="dlist.js"></script>
</body>
</html>