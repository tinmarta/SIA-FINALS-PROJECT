<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="mess.css">
     
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
              <li><a href="#">
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
                    <i class="uil uil-envelope-check"></i>
                    <span class="text">Messages</span>
                </div>

                <div class="accordion">
                    <div class="image-box">
                      <img src="images/vlt.png" alt="">
                    </div>
                    <div class="accordion-text">
                      <div class="title">Important Messages</div>
                    <ul class="faq-text">
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Admin - May 27. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All new patients from other hospitals will not be catered due to large number of patients
                            inside our hospital. Give prior notice to all incoming patients so that no issue will occur.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Admin - May 20. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All Medical personnel will have summer camp this coming May 31, 2024. Everyone is expected to come.</p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Admin - May 15. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All personnel who have problems with their user systems shall contact the admin. Please do contact us
                            immediately. Thank You.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Admin - April 01. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Everyone working from all departments will receive an incentive amounting to 1,200 php. This is to encourage Everyone
                            especially in this times where how weather is enevitable.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Admin - March 27. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All medical personnel will have an important meeting with the head admin. Come to 5th floor office at exactly 1:00 PM,
                            Attendance is a must.
                        </p>
                        <span class="line"></span>
                      </li>
                    </ul>
                    </div>
                  </div>
   
                        
                    
                
            
        </div>
    </section>

    <script>
        let li = document.querySelectorAll(".faq-text li");
        for (var i = 0; i < li.length; i++) {
          li[i].addEventListener("click", (e)=>{
            let clickedLi;
            if(e.target.classList.contains("question-arrow")){
              clickedLi = e.target.parentElement;
            }else{
              clickedLi = e.target.parentElement.parentElement;
            }
           clickedLi.classList.toggle("showAnswer");
          });
        }
      </script>
    
    <script src="mess.css"></script>
</body>
</html>