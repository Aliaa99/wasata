<?php
    include 'controllers/header.php';
?>
<div class="setting-account">
    <div class="container">
        <div class="setting-title text-center">
           <p> <a href="#" class="bordered-btn">إعدادات الحساب</a></p>
            <img src="images/bg.png" alt="">
            <h2>أحد على محمد</h2>
            <ul>
                <li>علاقة جسدية <span>+</span></li>
                <li>باحث عن عمل <span>+</span></li>
                <li>الدمام<span>+</span></li>
            </ul>
        </div>

        <div class="tab-setting">
            <ul class="nav nav-pills main">
                <li><a data-toggle="pill" href="#menu1">الملف الشخصى</a></li>
                <li class="active"><a data-toggle="pill" href="#menu2">السيرة الذاتية </a></li>
                <li><a data-toggle="pill" href="#menu3">المؤهل العلمى</a></li>
            </ul>

            <div class="row">
                <div class="col-md-8">
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade">
                            <h3>الملف الشخصى</h3>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>العمر <span>24</span></td>
                                        <td>موقع شخصى <span>لا يوجد</span></td>
                                    </tr>
                                    <tr>
                                        <td>العمر <span>24</span></td>
                                        <td>موقع شخصى <span>لا يوجد</span></td>
                                    </tr>
                                    </tbody>
                                </table>
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
                        <div id="menu3" class="tab-pane fade">
                            <h3>المؤهل العلمى <a href="#">أضف جديد</a></h3> 
                            <div class="body-content">
                                <h5>شهادة الملك الصالح للمحاسبة</h5>
                                <span>جامعة الملك فيصل</span>
                                <p>15 ديسمبر 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-side">
                        <h3>المؤهل العلمى <a href="#">أضف جديد</a></h3>
                            <div class="body-content">
                                <h5>شهادة الملك الصالح للمحاسبة</h5>
                                <p>15 ديسمبر 2015</p>
                            </div>
                            <div class="body-content">
                                <h5>شهادة الملك الصالح للمحاسبة</h5>
                                <p>15 ديسمبر 2015</p>
                            </div>
                            <div class="body-content">
                                <h5>شهادة الملك الصالح للمحاسبة</h5>
                                <p>15 ديسمبر 2015</p>
                            </div>
                    </div>

                    <div class="left-side">
                        <h3>مهاراتى <a href="#">أضف جديد</a></h3>
                            <div class="body-content">
                                <span class="span-style">محاسبة</span>
                                <span class="span-style">محاسبة</span>
                                <span class="span-style">محاسبة</span>
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