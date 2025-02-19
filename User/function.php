<?php 
    include '../conection.php';
    function getProduct($category){
        global $con;
        $select="SELECT `product_id`,`name`, `reqular_price`, `sale_price`, `qty`, `category`, `image`, `description` FROM `tbl_product` WHERE `category`='$category'";
        $result=$con->query($select);
        while($row=$result->fetch_assoc()){
            echo '
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cards">
                        <div class="image">
                        <img src="../Image/'.$row['image'].'" alt="">
                        </div>
                        <div class="title">
                            <h4>'.$row['sale_price'].'</h4>
                            <p>'.$row['name'].'</p>
                            <button class="btn btn-primary">Buy</button>
                        </div>
                    </div>
                </div>
            ';
        }
    }
?>