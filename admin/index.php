<?php 
session_start();
$error ='';
if(isset($_POST['btn'])){
  $conn = mysqli_connect('localhost', 'root' ,'' ,'tama_shop');
  
	$user = $_POST['user'];
	$pass = $_POST['password'];

	$sql = "select * from users where email = '$user' or username = '$user' && password = '$pass'";
	
	if(mysqli_num_rows(mysqli_query($conn, $sql)) > 0){
        $row = mysqli_query($conn, $sql)->fetch_assoc();
       
        $_SESSION['id']= $row['id']; 
        $_SESSION['email']=$row['email']; 
        $_SESSION['name']=$user; 
        $_SESSION['password']= $row['password'];

		header("Location: dashboard.php");
	} else {
		// اذا لم يتم ايجاد اى قيمه 0
		$error = 'اسم المستخدم او كلمة المرور خاطأ';
	}
}
   
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Icons -->
  <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="./assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    
    <div class="header bg-gradient-primary py-7 ">
        
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <?php if ($error != '') {
          echo "
            
            <div class='alert alert-danger alert-dismissible fade show' role='alert' style='width: 700px; >
            <span class='alert-icon'><i class='ni ni-like-2'></i></span>
            <span class='alert-text'><strong>خطأ !</strong> $error</span>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
 } ?>
              <h1 class="text-white"> مرحبا بيك في صفحة تسجيل الدخول</h1>
          
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 ">

      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
        
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h3>سجل دخول</h3>
              </div>
              <form role="form" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                      
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="user" placeholder=" البريد الاكتروني او اسم المستخدم" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="كلمة السر" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">ذكرني</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4" name="btn">تسجيل دخول</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include "include/footer.php" ?>