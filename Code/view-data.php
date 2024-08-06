<?php
session_start();
require 'dbcon.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $remark = $_POST['remark'];
    $fstatus = $_POST['fstatus'];

    if($POST['fstatus']=="Approved"){
      header("Location:"."income_certificate/index.php?id=".$_POST["id"]);
    }
    mysqli_query($con, "UPDATE forms SET remark='$remark',fstatus='$fstatus' WHERE id=$id");
    
}

$result = mysqli_query($con,"SELECT * FROM forms WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Application Details - Jamnagar Municipal Corporation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicon -->
 <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/FwbCBHF/fotor-2023-1-29-10-51-0.png">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<style>
  .action-div-show{
    display: none;
    /* visibility: hidden; */
  }
</style>
<script>
  function showaction(){
    document.getElementById("myP").style.display = "block";
    document.getElementById("myP").style.transition = "all 5s";
    
  }
</script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="" class="logo d-flex align-items-center">
    <span class="d-none d-lg-block" style="font-size: 20px;">Jamnagar Municipal Cor.</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="https://cdn.icon-icons.com/icons2/2643/PNG/512/male_boy_person_people_avatar_icon_159358.png"
          alt="Profile" class="rounded-circle">

        <?php
        $sqll = "select * from `userdata`";
        $resultt = mysqli_query($con, $sqll);

        if ($resultt) {
          while ($row = mysqli_fetch_assoc($resultt)) {
            $uname = $row['name'];

            echo '<span class="d-none d-md-block dropdown-toggle ps-2">' . $uname . '</span>';
          }
        }
        ?>
      </a>

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <?php
          $sql = "select * from `userdata`";
          $result = mysqli_query($con, $sql);

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $uname = $row['name'];


              echo '<h6>' . $uname . '</h6>';
            }
          }
          ?>
          <span>Clerk</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>


        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Schemes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
            <a href="upload-notice.php">
              <i class="bi bi-circle"></i><span>Upload Schemes</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="all-form.php">
              <i class="bi bi-circle"></i><span>All Application</span>
            </a>
          </li>


        </ul>
      </li><!-- End Tables Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="col-md-12">
      <div class="widget">
        <header class="widget-header">
          <h4 class="widget-title" style="color: blue">Application Details</h4>
        </header>
        <hr class="widget-separator">
        <div class="widget-body">
          <div class="table-responsive">
          <table border="1" class="table table-bordered mg-b-0">
          <tbody>
                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM forms WHERE id='$user_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>  
                                          <tr>
  <th>Application Number</th>
  <td><?= $user['id']; ?></td>
  <th>Full Name</th>
  <td><?= $user['fullname']; ?></td>
</tr>

<tr>
  <th>Mobile Number</th>
  <td><?= $user['mobile']; ?></td>
  <th>Email</th>
  <td><?= $user['email']; ?></td>
</tr>
 <tr>
  <th>Date of Birth</th>
  <td><?= $user['dob']; ?></td>
  <th>Gender</th>
  <td><?= $user['gender']; ?></td>
</tr>
<tr>
  <th>Aadhar Card Number  </th>
  <td><?= $user['aadhar']; ?></td>
  <th>Father name</th>
  <td><?= $user['fathername']; ?></td>
</tr>
<tr>
  <th>Relation</th>
  <td><?= $user['relation']; ?></td>
  <th>Caste</th>
  <td><?= $user['caste']; ?></td>
</tr>
<tr>
  <th>District</th>
  <td><?= $user['district']; ?></td>
  <th>Taluka</th>
  <td><?= $user['taluka']; ?></td>
</tr>
<tr>
  <th>Village</th>
  <td><?= $user['village']; ?></td>
  <th>Income Proof  </th>
  <td><a href="#">View</a></td>
</tr>
<tr>
  <th>Annual Income  </th>
  <td><?= $user['annualincome']; ?></td>
  <th>Issue date </th>
  <td><?= $user['issuedate']; ?></td>
</tr>
<tr>
  <th>Caste Certificate</th>
  <td><a href="#">View</a></td>
   <th>Certificate number</th>
   <td><?= $user['Certificatenumber']; ?></td>
</tr>
<tr>
<th>Photo</th>
<td><a href="<?php echo 'img/'.$user['Photo'];?>">View</a></td>
</tr>

<?php
          }
            else
            {
                echo "<h4>No Such Id Found</h4>";
            }
        }
?>
</tbody>

</table> 
<button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal" onclick="show();">Take Action</button>

<div class="show" id="show" style="display:none">
  <iframe src="edit.php?id=<?= $user['id']; ?>" style="width: 100%; height:30vh";" frameborder="0"></iframe>
</div>

<script>
function show(){
  document.getElementById("show").style.display = "block";   
 
}
</script>


  </div><!-- .widget-body -->
        
 
      </div><!-- .widget -->
    </div><!-- END column -->
    
    
  </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Jamnagar Municipal Corporation</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>