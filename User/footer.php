<style>
    footer{
        background-color: #000;
        padding: 40px 0;
        margin-top: 50px;
    }
    footer .link{
        display: flex;
        flex-direction: column;
        align-items: end;
    }
    footer .link ul{
       
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: start;
        list-style: none;
    }
    footer .link ul li a{
        text-decoration: none;
        color: #ffffffc0;
    }
footer img{
    width: 120px;
    border-radius: 5px;
    
}
@media (max-width: 575.98px) { 
    .logo,.about{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    
    }
    footer .link{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
 }

@media (max-width: 767.98px) { 
   
 }
@media (max-width: 991.98px) { 
    
 }


@media (max-width: 1199.98px) { 
   
 }
</style>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="logo">
                    <h3 class="text-light">Scan Me</h3>
                    <img src="../Image/me.png" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="about">
                    <h3 class="text-light text-center">About Us</h3>
                    <p class="text-light text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis cum deserunt odit porro iste velit repellat! Officiis vel cupiditate quisquam.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="link">
                     <h5 class="text-end text-light">FOLLOW US</h5>
                    <ul>
                        <li><a href=""><i class="bi bi-facebook me-1"></i> FaceBook</a></li>
                       <li><a href=""><i class="bi bi-instagram me-1"></i> Instagram</a></li>
                        <li><a href=""><i class="bi bi-tiktok me-1"></i>Tik Tok</a></li>
                        <li><a href=""><i class="bi bi-youtube me-1"></i> YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>