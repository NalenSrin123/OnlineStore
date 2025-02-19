<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OZZY Store</title>
    <link rel="stylesheet" href="./asset/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
nav{
  z-index: 111;
}
 .navbar-collapse{
    margin-left: 150px;
    .navbar-nav{
        display: flex;
        gap: 20px;
        .nav-item{
            
            .nav-link{
                font-size: 20px;
                font-weight: bold;
            }
        }
    }
 }  
 .navbar-brand img{
    width: 80px;
    height: 70px;
 }
@media (max-width: 575.98px) { 
    .navbar-collapse{
        margin-left: 0px;
    }
    
 }

@media (max-width: 767.98px) { 
    .navbar-collapse{
        margin-left: 0px;
    }
 }
@media (max-width: 991.98px) { 
    .navbar-collapse{
        margin-left: 0px;
    }
 }


@media (max-width: 1199.98px) { 
    .navbar-collapse{
        margin-left: 0px;
    }
 }

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light position-sticky top-0">
  <div class="container">
    <a class="navbar-brand" href="#"><img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQnaOTbfJDrWrVHc3g5C69izw2PFpaMY3LO2qG4VTK1qmQdsIRcsW0ucfFDop6wKTKjRA&usqp=CAU" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Productions</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Choices
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#drink">Drink</a></li>
            <li><a class="dropdown-item" href="#food">Food</a></li>
            <li><a class="dropdown-item" href="#fast_food">Fast Food</a></li>
            <li><a class="dropdown-item" href="#snack">Snack</a></li>
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>  
</header>