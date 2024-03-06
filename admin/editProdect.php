<?php
include "include/header.php"; 
include "../controllers/AdminController.php" ;


$prodect = new ProdectController;
$error ='';
$msg = '';


// GET Usre
$row = $prodect->show($_GET['id']);

// Update User
if(isset($_POST['edit'])){

  $id =$_GET['id'];
  $name =$_POST['name'];
  $pice =$_POST['pice'];
  $img_file =$_FILES['img_file'];
  $category_id =$_POST['category_id'];
  
  if(empty($name)){
    $error = 'يجب ادخال اسم منتج ';
  }elseif(empty($category_id)){
    $error = 'يجب ادخال القسم   ';
  }else{

    $sql= $prodect->update($id,$name,$pice,$category_id,$img_file);
  }

}


?>

    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h4 class="h2 text-white d-inline-block mb-0">تعديل البيانات</h4>
            </div>
          </div>
          <!-- Card stats -->
          
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
                  <h3 class="mb-0">تحديث بيانات المنتج</h3>
                </div>
              </div>
            </div>
              <!-- Projects table -->
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">اسم المنتج </label>
                          <input type="text" id="input-username" class="form-control" name="name" value="<?php echo $row['name']?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">سعر المنتج </label>
                          <input type="text" id="input-email" class="form-control" name="pice" value="<?php echo  $row['pice'] ?>" >
                        </div>
                      </div>

  
                      
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">صورة المنتج  </label>
                        <input type="file" class="form-control" name="img_file" id="exampleFormControlInput1" >
                      </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-last-name">قسم المنتج </label>
                          <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                          <option value="">...  </option>

                          <?php 
                        $conn = mysqli_connect('localhost', 'root' ,'' ,'tama_shop');
                        $categoryGet =  $class= mysqli_query($conn,"select * from categorys");
                          foreach ($categoryGet as $category)
                          {
                          ?>
                      
                      <option value="<?php echo $category['id']?>" <?php if($row['category_id'] == $category['id']){echo "selected";} ?>>  <?php echo $category['name']?> </option>
                      <?php } ?>
                          </select>

                        </div>
                      </div>
                    
                      <div  class="col-lg-12">
                        <div class=" text-center">
                          <button type="submit" class="btn btn-success " name="edit">تحديث البيانات</button>
                        </div>
                      </div>
                    </div>
                  </div>


                </form>
              </div>
          </div>
        </div>
      </div>
 
    </div>
  </div>
  <?php include "include/footer.php"; ?>

