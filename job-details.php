<?php
    include 'controllers/header.php';
?>
<div class="container mb-60">
    <div class="row">
    
        <div class="col-md-8">
            <section class="global-head">
                <article>
                    <h4><strong>تفاصيل الوظيفة</strong></h4>
                    <p>من فضلك أكمل البيانات المطلوبة فى الموقع للحصول على معلومات أكثرمن فضلك أكمل البيانات المطلوبة فى الموقع للحصول على معلومات أكثرمن فضلك أكمل البيانات المطلوبة فى الموقع للحصول على معلومات أكثر</p>
                </article>
            </section>

                <!-- تفاصيل الوظيفه -->

                <section class="product-card">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="job-details.php">
                                <h4><strong>مطلوب موظف إدخال بيانات </strong></h4>
                                
                                <p>  <span class="px-10 size-10 color-gray size-color">شركة الماس للمحاسبة</span> - <span class="px-10 size-10 color-gray">السعودية الدمام</span> </p>
                                <p class="product-card__p mb-20">هذا النص مثال يمكن أن يستبدل هذا النص مثال يمكن أن يستبدهذا النص مثال يمكن أن يستبدل هذا النص مثال يمكن أن يستبدل</p>
                            </a>
                        </div>
                    </div>
                        <div class="applay-job">
                            <span>30شخص مقدم على هذه الوظيفة </span>
                            <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">التقديم على الوظيفة</button>
                        </div>
                </section>
                <!-- مطلبات الوظيفة -->
                <div class="job-requrements">
                    <section class="global-head">
                        <article>
                            <h4><strong>متطلبات الوظيفة</strong></h4>
                        </article>
                    </section>
                    <ul class="lists-table">
                        <div class="row">
                            <div class="col-sm-6 st">
                                <li>مكان الوظيفة : <span>السعودية -الدمام</span></li>
                            </div>
                            <div class="col-sm-6 st">
                                <li>الدرجة العلمة : <span>بكالريوس فى محاسبة</span></li>
                            </div>
                            <div class="col-sm-6 st">
                                <li> : الراتب الشهرى<span>تفاوضى</span></li>
                            </div>
                            <div class="col-sm-6 st">
                                <li>النوع :<span>ذكر او أنثى</span></li>
                            </div>
                            <div class="col-sm-6 st">
                                <li>الكادر الوظيفى : <span>مبتدئ</span></li>
                            </div>
                            <div class="col-sm-6 st">
                                <li>الجنسية:<span>السعودية</span></li>
                        </div>
                    </ul>

                </div>

            </div>

        <div class="col-md-4 col-sm-5">
                <!-- side information -->
                <div class="sideprofile">
                    <section class="global-head ">
                        <article class="text-center">
                            <p class="sercher-work"><span>صاحب عمل </span></p>
                            <img src="images/profile.png" alt="">
                        </article>
                    </section>
                    <div class="text-center edit-pro">
                        <a href="edit-account.php"><strong>شركة الماسة للمحاسبة</strong></a>
                    </div>
                        <!-- detailes -->
                     <ul>
                        <li class=" padingstyle "><span class="span-color"> المجال</span> <span class="span-color">المحاسبة</span></li>
                        <li class=" padingstyle "><span class="span-color"> المجال</span> <span class="span-color">المحاسبة</span></li>
                        <li class="active padingstyle block text-center"><a href="company-details.php" class="basic-link"> مشاهدة المزيد</a></li>
                    </ul>
                    <!-- <div class="text-center edit-pro">
                        <button type="button" class="btn btn-default text-center" data-toggle="modal" data-target="#delete"><span class="px-10">Rate Now</span></button>

                        <a href="#" data-toggle="modal" data-target="#rate"><strong>Rate Now</strong></a>
                    </div> -->
                </div>
        </div>
    
            
                <!-- Modal -->
        <div class="modal fade text-center" id="myModal" role="dialog">
            <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content p-0">
                    <div class="modal-header p-0">
                        <section class="global-head text-center mt-0 p-20">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <article>
                                <h4><strong>التقديم على الوظيفة</strong></h4>
                                <p>هذا النص يتم استبداله </p>
                            </article>
                        </section>
                    </div>
                    <div class="modal-body model-style">
                        <img src="images/watch.png" alt="">
                        <a href="jobs.php">الصفحة الرئيسية</a>
                    </div>
                </div>
            
            </div>
        </div>

        </div>
</div>
<?php
    include 'controllers/footer.php';
?>