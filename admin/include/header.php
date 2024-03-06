<?php

session_start();

if (isset($_POST['logout'])){

if(isset($_SESSION['name']))
{
	unset($_SESSION['name']);
}
header("location:index.php");
session_destroy();
}


if(!isset($_SESSION['name']))
{
	header("location:/tama");
}
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
<!--   <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/fontawesome.min.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">لوحة التحكم </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users.php">
                <i class="ni ni-circle-08 text-primary "></i>
                <span class="nav-link-text">ادارة المستخدمين </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="categorys.php">
                <i class="ni ni-archive-2 text-primary"></i>
                <span class="nav-link-text">ادارة الاقسام </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="prodect.php">
                <i class="ni ni-books text-primary"></i>
                <span class="nav-link-text">ادارة المنتجات </span>
              </a>
            </li>
          
          </ul>

        </div>
      </div>
    </div>
  </nav>


  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
          </ul>

          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['name']; ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="../admin/users.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>حسابي </span>
                </a>          
                <div class="dropdown-divider"></div>
                <form  method="post">
                  <button type="submit"  name="logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>تسجيل الخروج </span>
                </button>
              </form>
              </div>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    
