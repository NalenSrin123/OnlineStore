<?php 
session_start();
if(empty($_SESSION['mail'])){
    header('location: login.php');
}
?>
<?php
include '../conection.php'; // Include database connection

$user = null; // Default value

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Convert to integer for security
    global $con;
    $query = "SELECT * FROM `tbl_user` WHERE `user_id`='$id'";
   $result=$con->query($query);
   while($row=$result->fetch_assoc()){
    $user=$row;
   }
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
            <div class=" w-100">
                <h3 class="text-center">EDIT USER</h3>
               <form action="" class="w-100" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
                         <div class="col-6">
                              <label class="" for="user_id">User ID</label>
                              <input type="text" name="user_id" id="user_id" class="form-control" disabled value="<?php echo $user['user_id'] ?>">
                         </div>
                         <div class="col-6">
                              <label class="" for="user_name">User Name</label>
                              <input type="text" name="user_name" id="user_name" class="form-control  " value="<?php echo $user['userName'] ?>">
                         </div>
                    </div>
                    <div class="row mb-4">
                         <div class="col-6">
                              <label class="" for="email">Email</label>
                              <input type="email" name="email" id="email" class="form-control  " value="<?php echo $user['email'] ?>">
                         </div>
                         <div class="col-6">
                              <label class="" for="password">Password</label>
                              <input type="password" name="password" id="password" class="form-control  " value="<?php echo $user['password'] ?>">
                         </div>
                    </div>
                    <div class="row mb-4">
                         <div class="col-6">
                              <label class="" for="role">Role</label>
                              <select name="role" class="form-control">
                                <option value="admin" <?= ($user['role'] ?? '') == 'admin' ? 'selected' : '' ?>>Admin</option>
                                <option value="user" <?= ($user['role'] ?? '') == 'user' ? 'selected' : '' ?>>User</option>
                                <option value="staff" <?= ($user['role'] ?? '') == 'staff' ? 'selected' : '' ?>>Staff</option>
                            </select>
                         </div>
                         <div class="col-6">
                         <label>Profile</label>
                        <input type="file" name="profile" class="form-control" >
                        <input type="hidden" name="hide_profile" value="<?php echo $user['profile'] ?>">
                        <img width="80px" src="../Image/<?php echo $user['profile'] ?>" alt="">
                         </div>
                    </div>
                    <div class="row ">
                         <div class="col-12 d-flex justify-content-end gap-3">
                         <button type="button" class="btn btn-danger" onclick="window.location.href='staff.php'">CLOSE</button>
                              <button type="submit" class="btn btn-primary" name="save">SAVE</button>
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
    
?>


