<?php 

  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://kit.fontawesome.com/ao76do5399"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="index.css">
  <script type="text/javascript" src="index.js"></script>
   </head>
<body>
 <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Alex Desoe</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="school_list.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">School List</span>
          </a>
        </li>
        <li>
          <a href="add_grades.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add Grades</span>
          </a>
        </li>
        <li>
          <a href="student_record.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">View students</span>
          </a>
        </li>
        <li>
          <a href="new_student.php">
            <i class='bx bxl-c-plus-plus' ></i>
            <span class="links_name">Add Student</span>
          </a>
        </li>
        <li>
          <a href="new_school.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Add School</span>
          </a>
        </li>
        <li>
          <a href="fraud_message.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Fraud Reports</span>
          </a>
        </li>
        <li>
          <a href="message.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Contact Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div> -->
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Alex</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Schools</div>
            <div class="number">6</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Students</div>
            <div class="number">4</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Fraud Report</div>
            <div class="number">40</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Messages</div>
            <div class="number">21</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

        <!-- ************** ADD GRADE FORM *************** -->
        <div class="container">

  <form method="POST" action="new_grade.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="term">Student Name</label>
      <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="term">Gender</label>
      <input type="text" class="form-control" name="sex" id="sex" required>
    </div>
    <div class="form-group col-md-6">
    <label for="term">School Name</label>
     <input type="text" class="form-control" name="school_name" id="school_name" required>
  </div>
  <div class="form-group col-md-6">
    <label for="term">Class</label>
     <input type="text" class="form-control" name="class" id="class" required>
  </div>
   <div class="form-group col-md-6">
    <label for="term">Term</label>
     <input type="date" class="form-control" name="term" id="term" required>
  </div>
    
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="math">Math</label>
      <input type="text" class="form-control" name="Math" id="Math" required>
    </div>
    <div class="form-group col-md-6">
      <label for="english">English</label>
      <input type="text" class="form-control" name="English" id="English" required>
    </div>
    <div class="form-group col-md-6">
      <label for="chemistry">Chemistry</label>
      <input type="text" class="form-control" name="Chemistry" id="Chemistry" required>
    </div>
    <div class="form-group col-md-6">
      <label for="biology">Biology</label>
      <input type="text" class="form-control" name="Biology" id="Biology" required>
    </div>
    <div class="form-group col-md-6">
      <label for="history">History</label>
      <input type="text" class="form-control" name="History" id="History" required>
    </div>
    <div class="form-group col-md-6">
      <label for="physic">Physics</label>
      <input type="text" class="form-control" name="Physic" id="Physic" required>
    </div>
    <div class="form-group col-md-6">
      <label for="literature">Literature</label>
      <input type="text" class="form-control" name="Literature" id="Literature" required>
    </div>
  </div>
    
  </div>
  <div class="form-group">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

         </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

