<?php 
    session_start();
    if(empty($_SESSION['mail'])){
        header('location: ../Admin/login.php');
    }
?>
    <?php include "header.php";
    include "function.php"?>
    <style>
       .carousel-inner {
        width: 100%;
        height: 550px;
        .carousel-item{
            width: 100%;
            height: 100%;
            img{
                width: 100%;
                height: 100%;
            }
        }
    }
        

        @media (max-width: 1199.98px) { 
        
        }
        @media (max-width: 991.98px) { 
            .carousel-inner{
                height: 350px;
            } 
        }
        @media (max-width: 767.98px) { 
            .carousel-inner{
                height: 200px;
            }
        }
        @media (max-width: 575.98px) { 
            .carousel-inner{
                height: 200px;  
            }
    
        }
        
    </style>
    <div id="carouselExampleControls" class="carousel slide container mt-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/banner1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset//banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/banner3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section  id="drink">
  <div class="container mt-5">
        <h3 >Drink</h3>
        <div class="row">
        <?php getProduct("Drink") ?>
        </div>
  </div>
</section>
<section  id="food">
  <div class="container mt-5">
        <h3 >Food</h3>
        <div class="row">
          <?php getProduct("Food") ?>
        </div>
  </div>
</section>
<section id="fast_food">
  <div class="container mt-5" >
        <h3 >Fast Food</h3>
        <div class="row">
        <?php getProduct("Fast Food") ?>       
       </div>
  </div>
</section>
<section id="snack">
  <div class="container mt-5" >
        <h3 >Snack</h3>
        <div class="row">
        <?php getProduct("Snack") ?>
        </div>
  </div>
</section>

<?php  include 'footer.php';  ?>