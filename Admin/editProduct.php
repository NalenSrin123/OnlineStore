<?php 
session_start();
include '../conection.php';
include 'moveFile.php';
if(empty($_SESSION['mail'])){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQnaOTbfJDrWrVHc3g5C69izw2PFpaMY3LO2qG4VTK1qmQdsIRcsW0ucfFDop6wKTKjRA&usqp=CAU">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
<?php 
    if($_SESSION['role']=="admin"){
        include 'aside.php';
    }elseif($_SESSION['role']=="staff"){
        include 'asideStaff.php';
    }else{
        header('location: ../User/index.php');
    }
    if(isset($_GET['id'])){
        $edit_id=$_GET['id'];
        global $con;
        $getProduct="SELECT * FROM `tbl_product` WHERE `product_id`='$edit_id'";
        $res=$con->query($getProduct);
        $data='';
        while($row=$res->fetch_assoc()){
            $data=$row;
        }

    }    
?>
            <div class="section">
            <div class=" w-100">
            <h3>EDIT PRODUCT</h3>
               <form action="" class="w-100" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
                         <div class="col-6">
                              <label class="" for="name">NAME</label>
                              <input type="text" name="name" id="name" class="form-control" value="<?php echo $data['name'] ?>">
                         </div>
                         <div class="col-6">
                              <label class="" for="reqular_price">REGULAR PRICE</label>
                              <input type="text" name="reqular_price" id="reqular_price" class="form-control" value="<?php echo $data['reqular_price'] ?>">
                         </div>
                    </div>
                    <div class="row mb-4">
                         <div class="col-6">
                              <label class="" for="sale_price">SALE PRICE</label>
                              <input type="text" name="sale_price" id="sale_price" class="form-control  " value="<?php echo $data['sale_price'] ?>">
                         </div>
                         <div class="col-6">
                              <label class="" for="qty">QUANTITY</label>
                              <input type="text" name="qty" id="qty" class="form-control " value="<?php echo $data['qty'] ?>">
                             
                         </div>
                    </div>
                    <div class="row mb-4">
                         <div class="col-6">
                              <label class="" for="category">CATEGORIES</label>
                              <select name="category" id="category" class="form-select  ">
                              <option value="Drink" <?= ($data['category'] == "Drink") ? "selected" : "" ?>>Drink</option>
                                <option value="Food" <?= ($data['category'] == "Food") ? "selected" : "" ?>>Food</option>
                                <option value="Fast Food" <?= ($data['category'] == "Fast Food") ? "selected" : "" ?>>Fast Food</option>
                                <option value="Snack" <?= ($data['category'] == "Snack") ? "selected" : "" ?>>Snack</option>
                              </select>
                         </div>
                         <div class="col-6">
                              <label class="" for="image">IMAGE</label>
                              <input type="hidden" name="hide_img" id="hide_img" value="<?php echo $data['image'];?>">
                              <input type="file" name="image" id="image" class="form-control  ">

                              <img width="60" src="../Image/<?php echo $data['image'] ?>" alt="">
                         </div>
                    </div>
               
                    <div class="row mb-4">
                         <div class="col-12">
                              <label class="" for="description">DESCRIPTION</label>
                              <textarea name="description" id="description" cols="30" rows="6" 
                              class="form-control  "><?php echo $data['description'] ?> </textarea>
                         </div>
                    </div>
                    <div class="row ">
                         <div class="col-12 d-flex justify-content-end gap-3">
                              <a href="allProduct.php"><button type="button" class="btn btn-danger">CLOSE</button></a>
                              <button type="submit" class="btn btn-success" name="edit">EDIT</button>
                         </div>
                    </div>
               </form>
          </div>
            </div>
        </main>
   </div> 
</body>
</html>
<?php 
     
    date_default_timezone_set('Asia/Phnom_Penh');
    if(isset($_POST['edit'])){
     $sql = "SELECT `user_id` FROM `tbl_user` WHERE `email`='{$_SESSION['mail']}'";
     $data = $con->query($sql);
     
     if ($data->num_rows > 0) {
         $row = $data->fetch_assoc();
         $user_id = $row['user_id'];
     } else {
         die("User not found.");
     }  
        $name = $_POST['name'];
        $r_price = $_POST['reqular_price'];
        $s_price = $_POST['sale_price'];
        $qty = $_POST['qty'];
        $cate = $_POST['category'];
        $description=$_POST['description'];
        $image = $_FILES['image']['name'];
        $update_at=date('ymdhis');
        if(empty($image)){
            $hide_image=$_POST['hide_img'];
            $sql="UPDATE `tbl_product` SET`userID`='$user_id',`name`='$name',`reqular_price`='$r_price',`sale_price`='$s_price',`qty`='$qty',`category`='$cate',`image`='$hide_image',`description`='$description',`update_at`='$update_at' WHERE `product_id`='$edit_id'";
        }else{
          $image=moveFile('image');
          $sql="UPDATE `tbl_product` SET`userID`='$user_id',`name`='$name',`reqular_price`='$r_price',`sale_price`='$s_price',`qty`='$qty',`category`='$cate',`image`='$image',`description`='$description',`update_at`='$update_at' WHERE `product_id`='$edit_id'";
        }
        if ($con->query($sql) === TRUE) {
          echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
          echo '<script>
                Swal.fire({
                    title: "Edit success!",
                    icon: "success"
                }).then(() => {
                    window.location.href = "allProduct.php";
                });
                </script>';
      }
      
    }

?>

    