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
   <div class="containers">
        <aside>
            <div class="logo">
                <img width="60px" height="60px" style="border-radius: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQnaOTbfJDrWrVHc3g5C69izw2PFpaMY3LO2qG4VTK1qmQdsIRcsW0ucfFDop6wKTKjRA&usqp=CAU" alt="">
                <h4>Store</h4>
            </div>
            <div class="menu">
                <p>SYSTEM</p>
                <ul>
                    <li class="active"><a href="#" id="news"><i class="fa-solid fa-list me-2"></i>ព័ត៌មាន</a></li>
                    <li><a href="#" id="sale"><i class="fa-solid fa-cart-shopping me-2"></i>ការលក់</a></li>
                    <li id="product"><a href="#" ><i class="fa-solid fa-shop me-2"></i>ផលិតផល</a>
                        <div class="w-100 popup-menu">
                            <ul>
                                <li id="add-post">Add Post</li>
                                <li id="view-post">View Post</li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" id="staff"><i class="fa-solid fa-users me-2"></i>អ្នកប្រើប្រាស់</a></li>
                    <li id="account"><a href="#" ><i class="fa-solid fa-user me-2"></i>គណនី</a>
                        <div class="w-100 popup-menu">
                            <ul>
                                <li id="logout">ចាកចេញ</li>
                            </ul>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </aside>
        <main>
            <div class="header">
                <div class="search">
                    <input type="search" name="" id="" placeholder="what do you want to find?">
                    <button>Search</button>
                </div>
                <div class="user">
                    <nav class="navbar  navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Empty Page</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Search Results</a></li>
                                        <li><a class="dropdown-item" href="#">Timeline</a></li>
                                        <li><a class="dropdown-item" href="#">Invoices</a></li>
                                        <li><a class="dropdown-item" href="#">Pricing</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item dropdown" >
                                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Auth</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Login</a></li>
                                        <li><a class="dropdown-item" href="#">Register</a></li>
                                        <li><a class="dropdown-item" href="#">Forgot Password</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">404 error</a></li>
                                        <li><a class="dropdown-item" href="#">500 error</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-translate"></i></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-envelope position-relative">
                                    <span class="position-absolute top-0 start-100 translate-middle bg-danger border border-light rounded-circle i">
                                        <span class="visually-hidden">New alerts</span>
                                      </span>
                                </i></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-bell-fill position-relative">
                                    <span class="position-absolute top-0 start-100 translate-middle bg-danger border border-light rounded-circle i">
                                        <span class="visually-hidden">New alerts</span>
                                      </span>
                                </i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="section">
                
            </div>
        </main>
   </div> 
</body>
</html>
<script>
    $(document).ready(function(){
        function addActive(){
            $('li').removeClass('active')  
        }
        function getPage(page){
            $.ajax({
                url:page,
                cache:false,
                success:function(respone){
                    $('.section').html(respone);
                }
            });
        }
        getPage('dashboard1.php');
        $('#news').click(function(){
            getPage('dashboard1.php')
            addActive()
          const li=$(this).parent().addClass('active')
        })
        $('#sale').click(function(){
            getPage('sales.php')
            addActive()
            const li=$(this).parent().addClass('active')  
        })
        $('#product').click(function(){
            $(this).find('.popup-menu').slideToggle()
            addActive()
         
        })
        $('#add-post').click(function(){
            getPage('addProduct.php');
        })
        $('#view-post').click(function(){
            getPage('viewPost.php');
        })
        $('#account').click(function(){
            $(this).find('.popup-menu').slideToggle()
            addActive()
        })
        $('#logout').click(function(){
            if(confirm("Are you sure to logout?")){
                window.location.href='logout.php';
            }
        })
        $('#staff').click(function(){
            getPage('staff.php')
            addActive()
            const li=$(this).parent().addClass('active');  
        })
      
    })
</script>    