<?php
    include 'controllers/header.php';
?>

<div class="owl-carousel owl-theme index-caro">
    <div class="item">
        <div class="tele-academy-paging">
            <div class="container text-center">
                <h2>شبكة وساطة لتوظيف ذوى الإعاقات الخاصة</h2>
                <p class="color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cumque praesentium corporis rem atque delectus suscipit! Ducimus, suscipit doloremque quisquam omnis modi rem placeat, reiciendis quidem veniam praesentium laboriosam. Molestias.</p>
                <a href="login.php"  class="newmemb">إنضم إلينا </a>
                <a href="contact-us.php" >اتصل بنا  </a>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="tele-academy-paging">
            <div class="container text-center">
                <h2>شبكة وساطة لتوظيف ذوى الإعاقات الخاصة</h2>
                <p class="color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cumque praesentium corporis rem atque delectus suscipit! Ducimus, suscipit doloremque quisquam omnis modi rem placeat, reiciendis quidem veniam praesentium laboriosam. Molestias.</p>
                <a href="login.php"  class="newmemb">إنضم إلينا </a>
                <a href="contact-us.php" >اتصل بنا  </a>
            </div>
        </div>
    </div>

</div>


 <!-- partenars -->
    <div class="partenars">
        <div class="container">
            <h2>شركاؤنا</h2>
            <div class="owl-carousel owl-theme ">
                <div class="item">
                    <img src="images/logo.png" alt="">
                </div>
                <div class="item">
                    <img src="images/bg.png" alt="">
                </div>
                <div class="item">
                    <img src="images/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    
 <!-- opinions -->
    <div class="opinions">
        <div class="container">
            <h2>آراء عملاؤنا</h2>
            <div class="owl-carousel owl-theme ">
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

<!-- contactus -->
<div class="contact-us p-20">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-5" >
                <h4>تواصل معنا</h4>
                <ul>
                    <li>
                        <span class="icon-style"><i class="fa fa-map-marker"></i></span>
                        <div class="contacts">
                            <span>العنوان</span>
                            <p>السعودية ،الدمام</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon-style"><i class="fa fa-mobile"></i></span>
                        <div class="contacts">
                            <span>رقم الجوال</span>
                            <p>2554896454</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon-style"><i class="fa fa-envelope"></i></span>
                        <div class="contacts">
                            <span>البريد الإلكترونى</span>
                            <p>ahmed@yahoo.com</p>
                            <p>AaAa@gmail.com</p>
                            <p>ali@yahoo.com</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-7">
                <div class="contact-form">
                    <form action="">
                        <h3 class="text-center">تواصل معنا</h3>
                        <div class="form-group">
                            <label for="">اسم المستخدم</label>
                            <input type="text" class="form-control" placeholder="اسم المستخدم">
                        </div>
                        <div class="form-group">
                            <label for="">البريد الإلكترونى </label>
                            <input type="email" class="form-control" placeholder="البريد الإلكترونى">
                        </div>
                        <div class="form-group">
                            <label for="">رقم الجوال</label>
                            <input type="number" class="form-control" placeholder="رقم الجوال">
                        </div>
                        <div class="form-group">
                            <label for="">عنوان التواصل</label>
                            <input type="text" class="form-control" placeholder="عنوان التواصل">
                        </div>
                        <div class="form-group">
                            <label for="">نص التواصل</label>
                            <textarea name="" id="" cols="10" rows="5" placeholder="نص التواصل"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">إرسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





        <!-- Jquery js -->
        <script src="js/jquery-3.2.1.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
