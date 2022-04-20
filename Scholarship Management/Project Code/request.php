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
  <title>Requests</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://kit.fontawesome.com/ao76do5399"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="index.css">
  <script type="text/javascript" src="index.js"></script>
</head>
<body>

  <div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Scholarships</a>
                        <div class="dropdown-menu">
                            <a href="addScholarship.html" class="dropdown-item">Add Scholarships</a>
                            <a href="scholarshiplist.php" class="dropdown-item">Scholarship List</a>
                        </div>
                    </div>
                    <a href="request.php" class="nav-item nav-link" tabindex="-1">Request</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="index.html" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>
    <!-- Image Banner -->

    <div class="img_controller"></div><img src="image3.jpg" class="img-fluid" alt="..." id="img_controller">

    <!-- End Image Banner -->

<!--  Serch Bar Code -->
<div class="container">
      <div class="row height d-flex justify-content-left align-items-left">
        <div class="col-md-4">
            <div class="form"> <i class="fa fa-search"></i> <input type="search" class="form-control form-input" placeholder="Search"> <span class="left-pan"><i class="fa fa-microphone"></i></span> </div>
        </div>
    </div>
    </div>
    <!-- End Serch Bar code -->

<!-- Add Body details here -->

<div class="table-responsive" id="table_controller">
   <h2 style="text-align: center; font-weight: bolder; color: black;">View User Requests</h2>
  <table class="table">

    <th>ID</th>
    <th>Request Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>About</th>
    <th>Applicant Name</th>
    <th>Level Desire</th>
    <th>Type Desire</th>
    <th>Date</th>
    <tr>
    <?php while($rows = $stmt->fetch(PDO::FETCH_ASSOC)) 
        { 
        ?> 
        <tr> <td><?php echo $rows['Id']; ?></td> 
        <td><?php echo $rows['request']; ?></td> 
        <td><?php echo $rows['email']; ?></td> 
        <td><?php echo $rows['gender']; ?></td> 
        <td><?php echo $rows['about']; ?></td> 
        <td><?php echo $rows['name']; ?></td> 
        <td><?php echo $rows['level']; ?></td> 
        <td><?php echo $rows['type']; ?></td> 
        <td><?php echo $rows['date']; ?></td> 
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