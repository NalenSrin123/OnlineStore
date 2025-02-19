<?php 
session_start();
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
            ?>
    <div class="section">
    <div class="professor">
    <div class="title">
        <h3>ផលិតផល</h3>
    </div>
    <div class="container-fluid px-0 py-1" >
    <table class="table  align-middle text-center mt-4 " style="table-layout: fixed;">
        <thead>
            <tr>
                <th>ល.រ</th>
                <th>ឈ្មោះ</th>
                <th>តម្លៃដើម</th>
                <th>តម្លៃលក់</th>
                <th>ចំនួន</th>
                <th>ប្រភេទ</th>
                <th>រូបភាព</th>
                <th>អ្នកបញ្ចូល</th>
                <th>សកម្មភាព</th>
            </tr>
        </thead>
        <tbody>

            <?php
                include '../conection.php';
                if(searchProduct()){
                    
                }else{
                    global $con;
                $selectUser="SELECT `profile` FROM `tbl_user` WHERE `email`='{$_SESSION['mail']}'";
                $profile=$con->query($selectUser);
                while($row=$profile->fetch_assoc()){
                    $profiles= $row['profile'];
                }
                $selectProduct="SELECT * FROM `tbl_product`";
                $data=$con->query($selectProduct);
                while($row=$data->fetch_assoc()){
                    echo '<tr>
                            <td>'.$row['product_id'].'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['reqular_price'].'</td>
                            <td>'.$row['sale_price'].'</td>
                            <td>'.$row['qty'].'</td>
                            <td>'.$row['category'].'</td>
                            <td><img width="60px" class="rounded" src="../Image/'.$row['image'].'" alt=""></td>
                            <td><img width="60px" class="rounded" src="../Image/'.$profiles.'" alt=""></td>
                            <td>
                                <a href="editProduct.php?id='.$row['product_id'].'"><i class="bi bi-pencil-square me-1" style="cursor: pointer;" ></i></a>
                                <i class="bi bi-trash text-danger" style="cursor: pointer;" id="delete"  data_id="'.$row['product_id'].'"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                            </td>
                        </tr>';
                }
                }
                
            ?>
        </tbody>
    </table>
    </div>
</div>
    </div>
    
   </div> 
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this user?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <input type="hidden" name="remove_product" id="remove_product">
            <button type="submit" class="btn btn-primary" name="deleteProduct">Yes, delete it.</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $(document).on('click','#delete',function(){
            $id=$(this).attr('data_id');
            $('#remove_product').val($id)
        })
    })
</script>
<?php 
function deleteProduct(){
    if(isset($_POST['deleteProduct'])){
        $id=$_POST['remove_product'];
        global $con;
        $deleteProduct="DELETE FROM `tbl_product` WHERE `product_id`='$id'";
        $result=$con->query($deleteProduct);
        if($result){
            echo '<script>window.location.href="allProduct.php"</script>';
        }
    }
}
deleteProduct();
function searchProduct(){
    global $con;
  if(isset($_GET['name'])){
    $name=$_GET['name'];
    $selectUser="SELECT `profile` FROM `tbl_user` WHERE `email`='{$_SESSION['mail']}'";
    $profile=$con->query($selectUser);
    while($row=$profile->fetch_assoc()){
        $profiles= $row['profile'];
    }
    $search="SELECT * FROM `tbl_product` WHERE `name` LIKE '%$name%'";
    $result=$con->query($search);
    while($row=$result->fetch_assoc()){
        echo '<tr>
                <td>'.$row['product_id'].'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['reqular_price'].'</td>
                <td>'.$row['sale_price'].'</td>
                <td>'.$row['qty'].'</td>
                <td>'.$row['category'].'</td>
                <td><img width="60px" class="rounded" src="../Image/'.$row['image'].'" alt=""></td>
                <td><img width="60px" class="rounded" src="../Image/'.$profiles.'" alt=""></td>
                <td>
                    <a href="editProduct.php?id='.$row['product_id'].'"><i class="bi bi-pencil-square me-1" style="cursor: pointer;" ></i></a>
                    <i class="bi bi-trash text-danger" style="cursor: pointer;" id="delete"  data_id="'.$row['product_id'].'"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                </td>
            </tr>';
    }
  }
  if(!empty($result)){
    return true;
  }else{
   
    return false;
  }
}



?>
