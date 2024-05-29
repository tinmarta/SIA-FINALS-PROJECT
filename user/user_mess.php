<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="mess.css">
     
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
              <li><a href="user_price.php">
                  <i class="uil uil-receipt-alt"></i>
                  <span class="link-name">Membership</span>
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
            
           <img src="images/mal.jpg" alt="">
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
                          <span class="question">From Dr. Ignacio - May 29. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Good Day, I saw that you've resecheduled our meeting. Rest assured that I've prepared my schedule to match yours. 
                          Looking forward on seeing you.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Dr. Ignacio - May 20. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Thanks for coming by at my office. Just do all the notes that I've told you and your Heart burn will subside. Come to my 
                          office on May 30, 2024 for further diagnosis. 
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Dr. Mallari - Feb 06. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Your Headache is not that serious but you have to take the medicine that I've given you so that it will subside more quickly.
                          Don't be shy to come at my office if you still feel some irritation or pains.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Dr. Gregorio - Dec 17. 2023</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Base on the test, your white blood cells is too low from the normal rate. You have to take the medicines that i've given 
                          so that the count of your white blood cells would rise up.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Dr. Gregorio - Dec 02. 2023</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>From what we've seen on your results earlier, you have some low number of White Blood Cells the reason why you feel lethargic
                          and no energy. The medicines that I've listed will help you increase your WBC quickly. Take it at very timely manner.
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
    
    <script src="mess.js"></script>
</body>
</html>