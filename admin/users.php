
<?php

 include "include/header.php"; 
include "../controllers/AdminController.php" ;

$user = new UserController;
$error ='';
$msg = '';

// GET Usre
$GetUser = $user->get();

// Craete User
if(isset($_POST['add'])){

  $username =$_POST['username'];
  $email =$_POST['email'];
  $password =$_POST['password'];
 
  
  
  if(empty($username)){
    $error = 'يجب ادخال اسم المستخدم ';
  }elseif(empty($email)){
    $error = 'يجب ادخال البريد الاكتروني ';
  }elseif(empty($password)){
    $error = 'يجب ادخال كلمة السر  ';
  }else{

    $sql = $user->create($username,$email,$password);
    // $msg = $sql['msg'];

  // header("location : index.php"); 

  }

}

if(isset($_GET['id'])){
  $sql =$user->delete($_GET['id']);


  // $msg = $sql['msg'];

  }

  if(isset($_GET['msg'])){
    $msg =$_GET['msg'];
    }

?>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h4 class="h2 text-white d-inline-block mb-0">ادارة المستخدمين</h4>
            </div>
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>



    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">اضافة مستخدم جديد</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST">
          <div class="form-group">
            <label for="exampleFormControlInput1">اسم المستخدم </label>
            <input type="text" class="form-control" name="username" id="exampleFormControlInput1" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">البريد الاكتروني</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">كلمة السر </label>
            <input type="password" class="form-control" name="password" id="exampleFormControlInput1" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">حالة المستخدم</label>
            <select class="form-control" name="active" id="exampleFormControlSelect1">
            <option value="0">غير نشط</option>
             <option value="1">نشط</option>
            </select>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
        <button type="submit" class="btn btn-primary" name="add" >اضافة </button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>


    <!-- Page content -->
    <div class="container-fluid mt--6">
  
      <div class="row">
        <div class="col-xl-11">
       <?php if($error != ''){
         echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
         <span class='alert-icon'><i class='ni ni-like-2'></i></span>
         <span class='alert-text'><strong>خطأ!</strong> $error</span>
         <button type='butto' class='close' data-dismiss='alert' aria-label='Close'>
             <span aria-hidden='true'>&times;</span>
         </button>
     </div>";
       }elseif($msg != ''){
        echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <span class='alert-icon'><i class='ni ni-like-2'></i></span>
        <span class='alert-text'><strong>تم</strong> $msg</span>
        <button type='butto' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
       } ?>
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">جدول المستخدمين</h3>
                </div>
                <div class="col text-right">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-sm btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
                    اضافة مستخدم جديد
                  </button>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">التسلسل </th>
                    <th scope="col">اسم المستخدم </th>
                    <th scope="col">البريد الاكتروني </th>
                    <th scope="col">الحالة </th>
                    <th scope="col">العملية </th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                    foreach($GetUser as $row){

                   
                ?>
                  <tr>
                    <th scope="row"><?=$row['id'] ?> </th>
                    <th scope="row"><?=$row['username'] ?> </th>
                    <td> <?=$row['email'] ?> </td>
                    <td>  <?=$row['active'] ?> Admin</td>
                  <td>
                     <a href="users.php?Delete&id=<?=$row['id']?>" class="btn btn-sm btn-danger btn-lg">حذف </a> 
                     <!-- <a href="editUser.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-warning btn-lg">تعديل </a> -->
                  </td>
                  </tr>
                 <?php  } ?>
 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
 
    </div>
  </div>


<?php include "include/footer.php"; ?>

