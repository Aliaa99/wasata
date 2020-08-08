<?php
    include 'controllers/header.php';
?>
<div class="container mb-60">
    <div class="row">
    
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-10 px-0">
                    <section class="mt-20">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="البحث عنوظيفة">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                </div>
                <div class="col-md-2 text-center">
                    <a href="place-ad.php">
                        <button class="btn basic-btn mt-20" width="100%" type="button">بحث متقدم</button>
                    </a>
                </div>
            </div>
            <section class="global-head">
                <article>
                    <h4><strong>مرحبا, أستكشف الفرص الجديدة</strong></h4>
                    <p>من فضلك أكمل البيانات المطلوبة فى الموقع للحصول على معلومات أكثر<a href="setting-account.php" class="basic-link"> أضف CV</a></p>
                </article>
            </section>

            <?php
            include 'controllers/product.php';
            ?>
            <?php
                include 'controllers/product.php';
            ?>

        </div>

        <div class="col-md-4 col-sm-5">
                <!-- side information -->
                <div class="sideprofile">
                    <section class="global-head sec-img">
                        <article class="text-center">
                            <p class="sercher-work"><span>باحث عن عمل </span></p>
                            <img src="images/profile.png" alt="">
                            <h5>أحمد على محمد</h5>
                            <p>إعاقة جسدية</p>
                        </article>
                    </section>
                    <div class="text-center edit-pro">
                        <a href="my-profile.php"><strong>تعديل البيانات الشخصية</strong></a>
                    </div>
                        <!-- detailes -->
                     <ul>
                        <li class="active padingstyle"><span>من فضلك أضف البيانات الشخصية  </span><a href="setting-account.php" class="basic-link">أضف الCV</a></li>
                    </ul>
                    <!-- <div class="text-center edit-pro">
                        <button type="button" class="btn btn-default text-center" data-toggle="modal" data-target="#delete"><span class="px-10">Rate Now</span></button>

                        <a href="#" data-toggle="modal" data-target="#rate"><strong>Rate Now</strong></a>
                    </div> -->
                </div>
        </div>
    
    
        </div>
</div>
<?php
    include 'controllers/footer.php';
?>