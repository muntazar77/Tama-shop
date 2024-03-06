<?php 
include "include/header.php" ;
include "../controllers/AdminController.php" ;


$dash = new DashbardController ;
// count items 
 $count=  $dash->count();

//  GET Items
  $get =$dash->Get();
  $GetCategory =$get['categorys'];
  $GetProd =$get['prodects'];
?>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">لوحة التحكم </h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">عدد المستخدمين </h5>
                      <span class="h2 font-weight-bold mb-0"><?=$count['users']['count'] ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">عدد الاقسام </h5>
                      <span class="h2 font-weight-bold mb-0"><?=$count['categorys']['count'] ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">عدد منتجات</h5>
                      <span class="h2 font-weight-bold mb-0"><?=$count['prodects']['count'] ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">عدد الزوار </h5>
                      <span class="h2 font-weight-bold mb-0">49</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Page content -->
    <div class="container-fluid mt--6">
 
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">احدث المنتجات تم اضافتها </h3>
                </div>
                <div class="col text-right">
                  <a href="prodect.php" class="btn btn-sm btn-primary">رؤية الكل</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col"> تسلسل المنتج </th>
                    <th scope="col">صورة المنتج </th>
                    <th scope="col">اسم المنتج </th>
                    <th scope="col">سعر المنتج</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  
                  foreach ($GetProd as $prod){

                  ?>
                  <tr>
                  <td><?=$prod['id'] ?> </td>
                    <!-- <th scope="row"> <img src="../img/<?=$prod['img'] ?>" width="65" height="55" alt=""> </th> -->
                    <th scope="row"> <img src="../images/post.jpeg" width="75" height="65" alt=""> </th>
                    <td><?=$prod['name'] ?> </td>
                    <td><?=$prod['pice'] ?>$ </td>
                  </tr>
                 <?php  } ?>
 
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">احدث الاقسام </h3>
                </div>
                <div class="col text-right">
                  <a href="categorys" class="btn btn-sm btn-primary">رؤية الكل </a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">التسلسل</th>
                    <th scope="col">الاسم </th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  
                  foreach ($GetCategory as $category){

                  ?>
                  <tr>
                    <th scope="row"><?=$category['id'] ?> </th>
                    <th scope="row"><?=$category['name'] ?> </th>
                  </tr>
                 
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
 
    </div>
  </div>


  <?php include "include/footer.php" ; ?>