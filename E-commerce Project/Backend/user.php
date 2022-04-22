<?php 

	$server_name="localhost";
    $username="root";
    $password="";
    $database_name="project";

    $sql = "SELECT * FROM user";
   
  try{
   $pdo = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Error");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
 ?>

 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://kit.fontawesome.com/ao76do5399"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin Panel</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="order.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">View Orders</span>
          </a>
        </li>
        <li>
          <a href="product.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Products</span>
          </a>
        </li>
        <li>
          <a href="add_product.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add Products</span>
          </a>
        </li>
        <li>
          <a href="user.php">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="links_name">View Users</span>
          </a>
        </li>
        <li>
          <a href="add_admin.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Add Admin</span>
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
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Willie</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Products</div>
            <div class="number">56</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">2,146</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Users</div>
            <div class="number">2</div>
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

     <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="table-responsive" id="table_controller">
   <h2 style="text-align: center; font-weight: bolder; color: black;">Product List</h2>
  <table class="table">

    <!-- ALERT DELETE MESSAGE SECTION -->
    <?php  include_once 'edit_user.php'; 
  
  if (isset($_SESSION['message'])): ?>
      <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
      </div>
   <?php endif ?>
    <!-- END ALERT DELETE MESSAGE SECTION -->

    <th  style="background-color:#16248c; color: white;">ID</th>
    <th style="background-color:#16248c; color: white;">User Name</th>
    <th style="background-color:#16248c; color: white;">Email</th>
    <th style="background-color:#16248c; color: white;">Address</th>
    <th style="background-color:#16248c; color: white;">Role</th>
    <th style="background-color:#16248c; color: white;">Date</th>
    <th colspan="2" style="background-color:#16248c; color:white;">Action</th>
    <tr>
    <?php while($rows = $stmt->fetch(PDO::FETCH_ASSOC)) 
        { 
        ?> 
        <tr> <td><?php echo $rows['user_id']; ?></td> 
        <td><?php echo $rows['username']; ?></td> 
        <td><?php echo $rows['email']; ?></td> 
        <td><?php echo $rows['address']; ?></td> 
        <td><?php echo $rows['role']; ?></td> 
        <td><?php echo $rows['date']; ?></td> 
        <td>
          <a href="edit_user.php?edit=<?php echo $rows['user_id']; ?>" class="btn btn-info">Edit</a>
          <a href="edit_user.php?delete=<?php echo $rows['user_id']; ?>" class="btn btn-danger">Delete</a>
        </td> 
        </tr> 
    <?php 
               } 
          ?> 
  </table>
</div>
      <div class="button">
            <a href="add_product.php">Add Admin</a>
          </div>
        </div>
        
      </div>

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
