<?php 
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="james";

    $sql = "SELECT * FROM scholarship";
   
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
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://kit.fontawesome.com/ao76do5399"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="index.css">
  <script type="text/javascript" src="index.js"></script>
</head>
<body>

  <div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="admin.php" class="navbar-brand">Scholarship CRM</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="admin.php" class="nav-item nav-link active">Home</a>
                    <a href="request.php" class="nav-item nav-link">Requests</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Scholarship</a>
                        <div class="dropdown-menu">
                            <a href="addScholarship.html" class="dropdown-item">Add Scholarship</a>
                            <a href="scholarshiplist.php" class="dropdown-item">Scholarship List</a>
                        </div>
                    </div>
                    <a href="request.php" class="nav-item nav-link enabled" tabindex="-1">Request</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="index.html" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>

    <div class="container">
      <div class="row height d-flex justify-content-left align-items-left">
        <div class="col-md-4">
            <div class="form"> <i class="fa fa-search"></i> <input type="search" class="form-control form-input" placeholder="Search"> <span class="left-pan"><i class="fa fa-microphone"></i></span> </div>
        </div>
    </div>
    </div>

<div class="container">

<div class="card" style="width: 18rem;" id="card_details">
  <div class="card-body">
    <h5 class="card-title">Total Scholarships</h5>
    <p class="card-text">43464</p>
    <a href="addScholarship.html" class="btn btn-primary">ADD</a>
  </div>
</div>

<div class="card" style="width: 18rem;" id="card_details">
  <div class="card-body">
    <h5 class="card-title">User Request</h5>
    <p class="card-text">3534</p>
    <a href="request.php" class="btn btn-primary">VIEW REQUESTS</a>
  </div>
</div>

<div class="card" style="width: 18rem;" id="card_details">
  <div class="card-body">
    <h5 class="card-title">Scholarship List</h5>
    <p class="card-text">43464</p>
    <a href="scholarshiplist.php" class="btn btn-primary">VIEW LIST</a>
  </div>
</div>
<!--<div style="height: 20px;"></div>-->


<div class="table-responsive" id="table_controller">
   <h2 style="text-align: center; font-weight: bolder; color: black;">Scholarship List</h2>
  <table class="table">

     <th>ID</th>
    <th>Institute Name</th>
    <th>Instutute Address</th>
    <th>About</th>
    <th>Link</th>
    <th>Eligiblity</th>
    <th>Deadline</th>
    <th>Type</th>
    <th>Level</th>
    <tr>
    <?php while($rows = $stmt->fetch(PDO::FETCH_ASSOC)) 
        { 
        ?> 
        <tr> <td><?php echo $rows['id']; ?></td> 
        <td><?php echo $rows['institute']; ?></td> 
        <td><?php echo $rows['address']; ?></td> 
        <td><?php echo $rows['about']; ?></td> 
        <td><?php echo $rows['link']; ?></td> 
        <td><?php echo $rows['eligibility']; ?></td> 
        <td><?php echo $rows['deadline']; ?></td> 
        <td><?php echo $rows['type']; ?></td> 
        <td><?php echo $rows['level']; ?></td> 
        </tr> 
    <?php 
               } 
          ?> 
  </table>
</div>
</div>
</div>

</body>
</html>