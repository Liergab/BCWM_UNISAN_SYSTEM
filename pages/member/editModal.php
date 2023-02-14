<!-- Modal -->
<?php
include 'update.php';

$id = $_GET['id'];

$queryEdit = "SELECT * FROM tbl_member WHERE id=$id";
$sqlEdit =$con->query($queryEdit);
while($res = mysqli_fetch_array($sqlEdit)){
  $fname = $res['fname'];
  $lname = $res['lname'];
  $gender = $res['gender'];
  $bdate = $res['bdate'];
  $age = $res['age'];
  $address = $res['address'];
  $position = $res['position'];
  $bapt = $res['bapt'];
  $acl = $res['acl'];

}



?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<div class="container">
<form class="row g-3 needs-validation" novalidate action="update.php" method="post">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First name" value=<?php echo $fname ?> required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" name="lname"  value=<?php echo $lname ?> placeholder="Last name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Gender</label>
                    <div class="input-group has-validation">
                    
                    <input type="text" class="form-control" id="validationCustomUsername" name="gender" aria-describedby="inputGroupPrepend"  value=<?php echo $gender ?>  placeholder="Gender" required>
                    
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom03" class="form-label">BIRTH DAY</label>
                    <input type="date" class="form-control" name="bdate" id="validationCustom03"  value=<?php echo $bdate ?> required>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom03" class="form-label">AGE</label>
                    <input type="number" class="form-control" name="age" id="validationCustom03"  value=<?php echo $age ?> required>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">ADDRESS</label>
                    <select class="form-select" name="address" id="validationCustom04"  value=<?php echo $address ?>  required>
                    <option selected disabled value="">Choose...</option>
                    <option>Brgy. Malvar</option>
                    <option>Brgy. Muliguin</option>
                    <option>Brgy. Punta</option>
                    <option>Brgy. Poctol</option>
                    <option>Brgy. F Dejesus</option>
                    <option>Brgy. Malvar</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">POSITION</label>
                    <select class="form-select" name="position" id="validationCustom04"  value=<?php echo $position ?> required>
                    <option selected disabled value="">Choose...</option>
                    <option>Member</option>
                    <option>Leader</option>
                    <option>Pastor</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom04" class="form-label">BAPT in BCWM</label>
                    <select class="form-select" name="bapt" id="validationCustom04"  value=<?php echo $bapt ?> required>
                    <option selected disabled value="">Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                    <option>Willing</option>
                  
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">AGE IN CHRISTIAN LIVING</label>
                    <select class="form-select" name="acl" id="validationCustom04"   value=<?php echo $acl ?>required>
                    <option selected disabled value="">Choose...</option>
                    <option>1-3 Years</option>
                    <option>4-6 Years</option>
                    <option>7-10 Years</option>
                    <option>11-20 Years</option>
                  
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                </div>
                
                <div class="col-12">
                    
                </div>
                <div class="col-12">
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <button class="btn btn-primary" name="update" type="submit">Submit form</button>
                    <a href="member.php"  class="btn btn-danger">Cancel</a>
                </div>
        </form>

</div>


  
</body>
</html> -->

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BCWM UNISAN</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/1781ced494.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php" style="margin-left:30px;" >BCWM UNISAN</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                        <form class="dropdown-item" action="../../connection/logout.php" method="post">
                            <input type="submit" class="btn btn-primary" name="logout" value="Logout">
                        </form>
                    
                    
                    </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"><center> <img src="../../assets/img/Unisanlogo.jpg" alt="" style="width:100px;"></center></div>
                            <a class="nav-link" href="../../index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                User Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="member.php">Member</a>
                                    <a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.php">401 Page</a>
                                            <a class="nav-link" href="404.php">404 Page</a>
                                            <a class="nav-link" href="500.php">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main style="padding:20px 40px;">
                          <div class="container">
                          <h1 class="mt-4">UPDATE MEMBER</h1>
                              <ol class="breadcrumb mb-4">
                                  <li class="breadcrumb-item active">MEMBER</li>
                              </ol>
                               <form class="row g-3 needs-validation" novalidate action="update.php" method="post">
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First name" value=<?php echo $fname ?> required>
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="lname"  value=<?php echo $lname ?> placeholder="Last name" required>
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustomUsername" class="form-label">Gender</label>
                                            <div class="input-group has-validation">
                                            
                                            <input type="text" class="form-control" id="validationCustomUsername" name="gender" aria-describedby="inputGroupPrepend"  value=<?php echo $gender ?>  placeholder="Gender" required>
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="validationCustom03" class="form-label">BIRTH DAY</label>
                                            <input type="date" class="form-control" name="bdate" id="validationCustom03"  value=<?php echo $bdate ?> required>
                                            <div class="invalid-feedback">
                                            Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="validationCustom03" class="form-label">AGE</label>
                                            <input type="number" class="form-control" name="age" id="validationCustom03"  value=<?php echo $age ?> required>
                                            <div class="invalid-feedback">
                                            Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">ADDRESS</label>
                                            <select class="form-select" name="address" id="validationCustom04"  value=<?php echo $address ?>  required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>Brgy. Malvar</option>
                                            <option>Brgy. Muliguin</option>
                                            <option>Brgy. Punta</option>
                                            <option>Brgy. Poctol</option>
                                            <option>Brgy. F Dejesus</option>
                                            <option>Brgy. Malvar</option>
                                            </select>
                                            <div class="invalid-feedback">
                                            Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">POSITION</label>
                                            <select class="form-select" name="position" id="validationCustom04"  value=<?php echo $position ?> required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>Member</option>
                                            <option>Leader</option>
                                            <option>Pastor</option>
                                            </select>
                                            <div class="invalid-feedback">
                                            Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="validationCustom04" class="form-label">BAPT in BCWM</label>
                                            <select class="form-select" name="bapt" id="validationCustom04"  value=<?php echo $bapt ?> required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>Willing</option>
                                          
                                            </select>
                                            <div class="invalid-feedback">
                                            Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label">AGE IN CHRISTIAN LIVING</label>
                                            <select class="form-select" name="acl" id="validationCustom04"   value=<?php echo $acl ?>required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>1-3 Years</option>
                                            <option>4-6 Years</option>
                                            <option>7-10 Years</option>
                                            <option>11-20 Years</option>
                                          
                                            </select>
                                            <div class="invalid-feedback">
                                            Please select a valid state.
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            
                                        </div>
                                        <div class="col-12">
                                            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                                            <button class="btn btn-primary" name="update" type="submit">Submit form</button>
                                            <a href="member.php"  class="btn btn-danger">Cancel</a>
                                        </div>
                                </form>

                        </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../../assets/demo/chart-area-demo.js"></script>
        <script src="../../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../../js/datatables-simple-demo.js"></script>
    </body>
</php>

           