
<?php

 include "include/header.php"; 
 include "../controllers/AdminController.php" ;
 

$prodect = new ProdectController;
$error ='';
$msg = '';

// GET prodect
$GetProdect = $prodect->get();

// Craete prodect
if(isset($_POST['add'])){

  $name =$_POST['name'];
  $pice =$_POST['pice'];
  $img_file =$_FILES['img_file'];
  $category_id =$_POST['category_id'];
  
  
  if(empty($name)){
    $error = 'يجب ادخال اسم منتج ';
  }elseif(empty($category_id)){
    $error = 'يجب ادخال القسم   ';
  }else{

    $sql = $prodect->create($name,$pice,$category_id,$img_file);
    $sql['error'] =$error;

  }

}


if(isset($_GET['id'])){
  $prodect->delete($_GET['id']);
  }
  
  if(isset($_GET['msg'])){
    $msg =$_GET['msg'];
    }elseif(isset($_GET['error'])){
    $error =$_GET['error'];
    }

?>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h4 class="h2 text-white d-inline-block mb-0">ادارة المنتجات </h4>
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
        <h5 class="modal-title" id="exampleModalLabel">اضافة منتج جديد</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST"  enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleFormControlInput1">اسم منتج </label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" >
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">سعر المنتج </label>
            <input type="number" class="form-control" name="pice" id="exampleFormControlInput1" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">صورة منتج </label>
            <input type="file" class="form-control" name="img_file" id="exampleFormControlInput1" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">قسم منتج</label>
            <select class="form-control" name="category_id" id="exampleFormControlSelect1">
            <option value="">...  </option>
              <?php 
             $conn = mysqli_connect('localhost', 'root' ,'' ,'tama_shop');
             $categoryGet =  $class= mysqli_query($conn,"select * from categorys");

              foreach ($categoryGet as $category)
              {
              ?>
                <option value="<?php echo $category['id']?>"> <?php echo $category['name']?> </option>
                <?php } ?>
        
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
                  <h3 class="mb-0">جدول المنتجات </h3>
                </div>
                <div class="col text-right">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-sm btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
                    اضافة منتج جديد
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
                    <th scope="col">الصورة </th>
                    <th scope="col">اسم المنتج </th>
                    <th scope="col">سعر المنتج </th>
                    <th scope="col">العملية </th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                    foreach($GetProdect as $row){
                ?>
                  <tr>
                    <th scope="row"><?=$row['id'] ?> </th>
                    <!-- <th scope="row"> <img src="../images/<?=$row['img_file'] ?>" width="75" height="65" alt=""> </th> -->
                    <th scope="row"> <img src="../images/post.jpeg" width="75" height="65" alt=""> </th>
                    <th scope="row"><?=$row['name'] ?> </th>
                    <td> <?=$row['pice'] ?>$ </td>
                
                  <td>
                     <a href="prodect.php?Delete&id=<?=$row['id']?>" class="btn btn-sm btn-danger btn-lg">حذف </a> 
                     <a href="editProdect.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-warning btn-lg">تعديل </a>
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

