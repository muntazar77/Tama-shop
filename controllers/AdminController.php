<?php

include "../includ/db.php";

// ====================================
// ============ User ==================
// ====================================
class UserController  extends DB
{


    public function Get()
    {
        $sql = mysqli_query($this->conn, "select * from users");
        return $sql;
    }

    public function create($username, $email, $password)
    {
        $sql = mysqli_query($this->conn, "insert into users (username,email,password)  values ('$username','$email','$password')");
        $msg = "تم اضافة  مستخدم بنجاح ";
        echo ("<script>location.href = 'users.php?msg=$msg';</script>");
    }

    public function show($id)
    {
        $sql = "SELECT * from users where id='$id'";
        $result = $this->conn->query($sql)->fetch_assoc();

        return  $result;
    }

    public function update($id, $username, $email, $password)
    {
        mysqli_query($this->conn, "UPDATE users set username='$username',email='$email', password='$password', WHERE id='$id'");
        $msg = "تم التحديث  لبيانات بنجاح";

        echo ("<script>location.href = 'users.php?msg=$msg';</script>");
    }

    public function delete($id)
    {

        mysqli_query($this->conn, "delete from users where id = {$id}");
        $msg = 'تم حذف المستخدم بنجاح';

        echo ("<script>location.href = 'users.php?msg=$msg';</script>");
    }
}

// ====================================
// ============ Category ==============
// =====================================
class CategoryController  extends DB
{

    public function Get()
    {
        $sql = mysqli_query($this->conn, "select * from categorys");
        return $sql;
    }
    public function create($name)
    {
        $sql = mysqli_query($this->conn, "insert into categorys (name)  values ('$name')");
        $msg = "تم اضافة  قسم  جديد ";
        echo ("<script>location.href = 'categorys.php?msg=$msg';</script>");
    }

    public function delete($id)
    {

        mysqli_query($this->conn, "delete from categorys where id = {$id}");
        $msg = 'تم حذف القسم بنجاح';

        echo ("<script>location.href = 'categorys.php?msg=$msg';</script>");
    }
}



// ====================================
// ============  Prodect ==================
// ====================================
class ProdectController  extends DB
{

    public function Get()
    {
        $sql = mysqli_query($this->conn, "select * from prodects");
        return $sql;
    }

    public function create($name, $pice, $category_id, $img_file )
    {


        $path = "../images/";
        $filename = basename($img_file['name']);
        $image_name = $path . $filename;

        $sql = mysqli_query($this->conn, "insert into prodects (name,pice,category_id,img_file)  values ('$name','$pice','$category_id','$filename')");

        if(empty($filename)) {
            $error =  'يجب اختيار الصورة';
            echo ("<script>location.href = 'prodect.php?msg=$error';</script>");

        }elseif($sql == TRUE and move_uploaded_file($img_file['tmp_name'], $image_name)) {
            $msg = "تم اضافة  منتج جديد";
            echo ("<script>location.href = 'prodect.php?msg=$msg';</script>");
        }else{
            $error = "حدث خطا في رفع الصورة " . $this->conn->error;
            return ["error" => $error];
        }
    }

    public function show($id)
    {
        $sql = "SELECT * from prodects where id='$id'";
        $result = $this->conn->query($sql)->fetch_assoc();

        return  $result;
    }

    public function update($id, $name, $pice, $category_id, $img_file)
    {
        if ($img_file == "" or $img_file['name'] == '') {

            // Update  Data
            $sql = mysqli_query($this->conn, "UPDATE prodects set name='$name',pice='$pice', category_id='$category_id' WHERE id='$id'");
            $msg = "تم التحديث  لبيانات المنج بنجاح";
            echo ("<script>location.href = 'prodect.php?msg=$msg';</script>");
        } else {
            // Delete Image
            $prodect = $this->show($id);
            $img = $prodect["img_file"];
            $delete = unlink("../images/$img");

            // Add Image 
            $path = "../images/";
            $filename = basename($img_file['name']);
            $image_name = $path . $filename;

            // Update  Data
            $sql = mysqli_query($this->conn, "UPDATE prodects set name='$name',pice='$pice', category_id='$category_id', img_file='$filename'  WHERE id='$id'");

            if ($sql == TRUE and move_uploaded_file($img_file['tmp_name'], $image_name)) {
                $msg = "تم التحديث  لبيانات المنتج بنجاح";
                echo ("<script>location.href = 'prodect.php?msg=$msg';</script>");
            } else {
                $error = "حدث خطا في رفع الصورة ";
                return ["error" => $error];
            }
        }
    }

    public function delete($id)
    {

        $prodect = $this->show($id);
        $img = $prodect['img_file'];
        $delete = unlink("../img/$img");
        if ($delete == TRUE) {
            mysqli_query($this->conn, "delete from prodects where id = {$id}");
            $msg = 'تم حذف الكتاب بنجاح';
            echo ("<script>location.href = 'prodect.php?msg=$msg';</script>");
        } else {
            mysqli_query($this->conn, "delete from prodects where id = {$id}");
            $msg = 'تم الحذف بنجاح  ';
            echo ("<script>location.href = 'prodect.php?msg=$msg';</script>");
        }
    }
}



// ====================================
// ============ Dashbared =============
// ====================================
class DashbardController  extends DB
{


    public function Get()
    {
    $prodects= mysqli_query($this->conn,"select * from prodects  LIMIT 4");
    $categorys= mysqli_query($this->conn,"select * from categorys  LIMIT 4");

    return ["prodects" =>$prodects, "categorys"=>$categorys];

    }


    public function count(){

        $users = mysqli_query($this->conn,"select count(id) as count from users")->fetch_assoc();
        $prodects= mysqli_query($this->conn,"select count(id) as count from prodects")->fetch_assoc();
        $categorys=  mysqli_query($this->conn,"select count(id) as count from categorys")->fetch_assoc();

        return ["users" =>$users,"prodects" =>$prodects , "categorys" =>$categorys ];
}




}
