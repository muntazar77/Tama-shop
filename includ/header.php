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

		header("Location: admin/dashboard.php");
	} else {
		// اذا لم يتم ايجاد اى قيمه 0
		$error = 'اسم المستخدم او كلمة المرور خاطأ';
	}
}
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>aman</title>
  <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  

</head>

<body>
  <header>
    <input type="checkbox" name="" id="toggler" />
    <label for="toggler" class="fas fa-bars"></label>
    <div id="menu-bar" class="fas fa-bars"></div>

    <!-- <a href="#" class="logo"><span></span></a> -->
    <a href="#" class="logo">Tama<span>.</span></a>

    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#products">products</a>
      <a href="#review">review</a>
      <a href="#contact">contact</a>
    </nav>

    <div class="icons">
      <a href="#" class="" id="search-btn" ></a>
      <a href="#" class="fas fa-user" id="login-btn" ></a>
     
      <!-- <a href="#" class="fas fa-search" id="search-btn" ></a>
     
      <!-- <a href="#" class="fas fa-weight-hanging" onclick="openNav()" id="card-btn"></a> -->
     
    </div>

    <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here..." />
      <label for="search-bar" class="fas fa-search"></label>
    </form>

  </header>






  <!-- login form container  -->
  <div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>

  
 
    <form  method="POST">
    <div class="masseg">
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
    </div>
      <h3>login</h3>
      <input type="text" class="box" name="user" placeholder="enter your email or username" />
      <input type="password" class="box" name="password" placeholder="enter your password" />
      <input type="submit" name="btn" value="login now" class="btn" />
      <input type="checkbox" id="remember" />
      <label for="remember">remember me</label>
      <p>forget password? <a href="#">click here</a></p>
      <p>don't have and account? <a href="#">register now</a></p>
    </form>
  </div>

    
       <!-- mySidenav section  -->

       <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <br><br>
      <div class="mian">
        <div class="cards">
          <div class="card">
            <img src="images/product/watchs/11.jpg" alt="" width="90" height="65" srcset="">
            <h2>cotin bagen </h2>
            <h3>43$</h3>
          </div>
          <div class="card">
            <img src="images/product/elect/1.jpg" alt="" width="90" height="65" srcset="">
            <h2>cotin dssd </h2>
            <h3>443$</h3>
          </div>
          <div class="card">
            <img src="images/product/clothes/15.png" alt="" width="90" height="65" srcset="">
            <h2>cotin bagen </h2>
            <h3>43$</h3>
          </div>
        </div>
<hr>
        <div class="btns">
          <a href="index.php" class="btn-clean">Clean Cart</a>
          <a href="pay.php" class="btn-go">Pay All</a>
        </div>
   
        
      </div>

    </div>
   