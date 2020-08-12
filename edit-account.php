<?php
    include 'controllers/header.php';
?>
    <div class="container">
        <div class="profilepage">
            <div class="tab-content">
                <!-- tabs content -->
                <!-- personal-info -->
                <div id="personal-info" class="tab-pane fade in active">
                    <section class="global-head">
                        <article>
                            <h4><strong>إعدادات حسابى</strong></h4>
                            <p>هذا النص ممكن أن يتغير هذا الن ممكن ان يتغير</p>
                        </article>
                    </section>
                    <!-- form -->
                    <div class="row">
                    <form class="form-horizontal p-20 global-form">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label" >الاسم بالكامل
                                </label>
                                <p>الذى نفضل ظهوره لدى المستخدم</p>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="first name" placeholder="الاسم بالكامل" name="first name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for ="sel1" class="control-label" >نوع الإعاقة
                                </label>
                                <p>يجب تحديد نوع الإعاقة</p>
                            </div>
                            <div class="col-sm-4">
                                <div class="select">
                                <select class="form-control" >
                                    <option value="" selected disabled>نوع الاعاقة</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for ="sel1" class="control-label" >الشؤن الاجتماعية
                                </label>
                                <p>تبع وزارة الشئون</p>
                            </div>
                            <div class="col-sm-4">
                                <div class="select">
                                <select class="form-control" >
                                    <option value="" selected disabled>الشئون الاجتماعية</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for ="sel1" class="control-label" >الضمان الاجتماعى
                                </label>
                                <p>الاستفادة من الضمان</p>
                            </div>
                            <div class="col-sm-4">
                                <div class="select">
                                <select class="form-control" >
                                    <option value="" selected disabled>الضمان الاجتماعى</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label" >تاريخ الميلاد
                                </label>
                                <p>تاريخ الميلاد</p>
                            </div>
                            <div class="col-sm-4">
                                <input type="number" class="form-control"  placeholder="تاريخ الميلاد" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label" >الجنس
                                </label>
                                <p>النوع</p>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  placeholder=" الجنس" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label" >الجنسية
                                </label>
                                <p>تحديد الجنسية</p>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  placeholder=" السعودية" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label" >اسم الدخول
                                </label>
                                <p>الاسم -رقمالهوية</p>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  placeholder=" اسم الدخول" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label" >الاسم بالكامل
                                </label>
                                <p>الذى تفضل ظهوره لدى المستخدم</p>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  placeholder=" الاسم بالكامل" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label" >البريد الإلكترونى
                                </label>
                                <p>اختيارى</p>
                            </div>
                            <div class="col-sm-4">
                                <input type="email" class="form-control"  placeholder=" البريد الإلكترونى" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for ="sel1" class="control-label" >المدينة
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <div class="select">
                                    <select class="form-control">
                                        <option value="" selected disabled>المدينة</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label" >رقم الجوال
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  placeholder=" رقم الجوال" >
                            </div>
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-5 col-sm-2">
                                <button type="submit" class="btn newlink">حفظ</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'controllers/footer.php';
?>