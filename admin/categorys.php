
<?php

 include "include/header.php"; 
include "../controllers/AdminController.php" ;

$category = new CategoryController;
$error ='';
$msg = '';

// GET category
$Getcategory = $category->get();

// Craete Category
if(isset($_POST['add'])){

  $name =$_POST['name'];

  if(empty($name)){
    $error = 'يجب ادخال اسم القسم  ';
  }else{

    $sql = $category->create($name);
  }
}

if(isset($_GET['id'])){
  $sql =$category->delete($_GET['id']);

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
              <h4 class="h2 text-white d-inline-block mb-0">ادارة الاقسام</h4>
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
        <h5 class="modal-title" id="exampleModalLabel">اضافة قسم جديد</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST">
          <div class="form-group">
            <label for="exampleFormControlInput1">اسم القسم  </label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" >
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
            <div class="card-header border-0 ">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">جدول الاقسام</h3>
                </div>
                <div class="col text-right ">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-sm btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
                    اضافة قسم جديد
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
                    <th scope="col">اسم القسم </th>
                    <th scope="col">العملية </th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                    foreach($Getcategory as $row){

                   
                ?>
                  <tr>
                    <th scope="row"><?=$row['id'] ?> </th>
                    <th scope="row"><?=$row['name'] ?> </th>
                   
                  <td>
                     <a href="categorys.php?Delete&id=<?=$row['id']?>" class="btn btn-sm btn-danger btn-lg">حذف </a> 
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

