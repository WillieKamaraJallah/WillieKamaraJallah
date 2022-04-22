<?php 

	$server_name="localhost";
    $username="root";
    $password="";
    $database_name="project";

    $sql = "SELECT * FROM product";
   
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

     <!-- ******************** ADD NEW ADMIN FORM **************** -->
      <div class="container">

<form action="new_admin.php" method="POST" enctype="multipart/form-data">
  <h2 style="text-align: center; font-weight: bolder; color: black;">Add New Admin</h2>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">Admin Name</label>
      <input type="text" class="form-control" id="name" placeholder="John" name="username">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" placeholder="name@gmail.com" name="email">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="address">Address</label>
      <input type="texy" class="form-control" id="address" placeholder="main street" name="address">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="text" class="form-control" id="password" placeholder="*****" name="password">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="role">Role</label>
      <input type="text" class="form-control" id="role" placeholder="Admin" name="role">
    </div>
  <div class="form-row" class="form-group col-md-6">
    <div class="form-group col-md-6">
      <label for="picture">Profile Image</label>
      <input type="file" class="form-control" id="picture" name="picture" value="Upload">
    </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Comfirm Information
      </label>
    </div>
  </div>
  <div style="height: 30px;"></div>
  <button type="submit" class="btn btn-primary" name="submit" style="align-self: center;" value="submit">Submit</button>
</form>

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
