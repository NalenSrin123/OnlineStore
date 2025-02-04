<?php 
    include '../conection.php';
    //staff
    function getStaff(){
        global $con;
        $sql="SELECT * FROM `tbl_user`";
        $data=$con->query($sql);
        while($row=$data->fetch_assoc()){
            echo '
            <tr>
                <td>'.$row['user_id'].'</td>
                <td>'.$row['userName'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
                <td><img width="60px"  class="rounded" src="../Image/'.$row['profile'].'" alt=""></td>
                <td>'.$row['role'].'</td>
                <td>
                    <a href="editUser.php?id='.$row['user_id'].'"><i class="bi bi-pencil-square me-1"></i></a>
                    <i id="delete" class="bi bi-trash text-danger" data_id="'.$row['user_id'].'"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                </td>
            </tr>';
        }

    }
    // Product
    function deleteUser(){
        if(isset($_POST['deleteUser'])){
            $id=$_POST['remove_user'];
            global $con;
            $deleteUser="DELETE FROM `tbl_user` WHERE `user_id`='$id'";
            $result=$con->query($deleteUser);
   
        }
    }
    deleteUser();
    
?>