<?php 
    include 'header.php';
?>
<link rel="stylesheet" href="./asset/contact.css">
<div class="content contact">
        <section class="trending">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-trending">
                            <div class="content-left">
                                CONTACT US
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="wrap-follow">
                            <h4 class="title">FOLLOW US</h4>
                            <ul>
                                <li>
                                   <img src="../Image/fb.png" width="40px"> <a href="https://web.facebook.com/profile.php?id=100077890950889">Facebook</a>
                                </li>
                                <li>
                                   <img src="../Image/yt.png" width="40px"> <a href="https://www.youtube.com/@KonIT007">Youtube</a>
                                </li>
                                <li>
                                   <img src="../Image/ig.jfif" width="40px"> <a href="#">Instagram</a>
                                </li>
                                <li>
                                   <img src="../Image/telegram.png" width="40px"> <a href="https://t.me/nalensrin">Telegram</a>
                                </li>
                                <li>
                                   <img src="../Image/gmail-1.png" width="40px"> <a href="#">Email</a>
                                </li>
                                <li>
                                   <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" width="40px"> <a href="https://github.com/NalenSrin123">Guthub</a>
                                </li>
                                <!-- <li>
                                   <img src="../Image/phone.jpg" width="40px"> <a href="">012 333 444 / 010 232 323</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="wrap-contact">
                            <h4 class="title">FEEDBACK TO US</h4>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="label">Username</div>
                                        <input type="text" class="box" placeholder="Username" required>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="label">Email</div>
                                        <input type="email" class="box" placeholder="Email" required>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="label">Telephone</div>
                                        <input type="tel" class="box" placeholder="Telephone" required minlength="9" maxlength="10">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="label">Address</div>
                                        <input type="text" class="box" placeholder="Address" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="label">Message</div>
                                        <textarea cols="30" rows="10" placeholder="Message Here" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="wrap-btn">
                                            <button type="submit" name="btn_message" class="btn btn-primary"><i class="fab fa-telegram-plane"></i>Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include "footer.php" ?>