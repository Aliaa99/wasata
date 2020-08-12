<?php
    include 'controllers/header.php';
?>
<div class="setting-account">
    <div class="container">
        <div class="setting-title text-center">
            <img src="images/bg.png" alt="">
            <h3>شركة الماسة للمحاسبة</h3>
            <ul>
                <li>شركة محاسبة <span>+</span></li>
                <li>صاحب عمل <span>+</span></li>
                <li>الدمام<span>+</span></li>
            </ul>
        </div>

        <div class="tab-setting">
            <ul class="nav nav-pills main">
                <li><a data-toggle="pill" href="#menu1">الملف الشخصى</a></li>
                <li class="active"><a data-toggle="pill" href="#menu2">السيرة الذاتية </a></li>
            </ul>

            <div class="row">
                <div class="col-md-8 p-0">
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade">
                            <div class="personal-doc">
                                <h4>الملف الشخصى</h4>
                                <p class="mb-20">تاريخ الانتاج <span> سبتمبر 2020 </span></p>
                                <p> هذا النص يتم تعديله هذا النص يتم تعديله هذا النص يتم تعديله هذا النص يتم تعديله هذا النص يتم تعديله هذا النص يتم تعديله </p>
                                <h4>الوظائف المطلوبة</h4>
                            </div>
                            <section class="product-card">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <a href="job-details.php">
                                            <h4><strong>مطلوب موظف إدخال بيانات </strong></h4>
                                            
                                            <p>  <span class="px-10 size-10 color-gray size-color">شركة الماس للمحاسبة</span> - <span class="px-10 size-10 color-gray">السعودية الدمام</span> </p>
                                            <p class="product-card__p">هذا النص مثال يمكن أن يستبدل هذا النص مثال يمكن أن يستبدل</p>
                                        </a>
                                    </div>
                                </div>
                            </section>
                            <section class="product-card">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <a href="job-details.php">
                                            <h4><strong>مطلوب موظف إدخال بيانات </strong></h4>
                                            
                                            <p>  <span class="px-10 size-10 color-gray size-color">شركة الماس للمحاسبة</span> - <span class="px-10 size-10 color-gray">السعودية الدمام</span> </p>
                                            <p class="product-card__p">هذا النص مثال يمكن أن يستبدل هذا النص مثال يمكن أن يستبدل</p>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div id="menu2" class="tab-pane fade  in active text-center">
                            <h3 class="text-right">السيرة الذاتية</h3>
                            <div class="body-content">
                                <img src="images/profile.png" alt="">
                                <h4>لا تمتلك سيرة ذاتية</h4>
                                <p>لا تمتلك سيرة ذاتية من فضل أنشئ سيرة جديده</p>
                                <a href="#" class="newlink">سيرة جديدة</a>
                                <a href="#" class="bordered-btn">رفع سيرة ذاتية</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-0">
                    <div class="left-side">
                        <h3>بيانات الشركة </h3>
                        <div class="bordered">
                            <ul class="company-list">
                                <li> الموقع الالكترونى:<span><a href="#">ahmed@gmail.com</a></span></li>
                                <li>البريد الالكترونى:<span>ahmed@gmail.com</span></li>
                                <li>الهاتف:<span>+254278954896</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
    include 'controllers/footer.php';
?>