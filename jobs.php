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
                    <a href="#myModal2">
                        <button class="btn basic-btn mt-20" width="100%" type="button"  data-toggle="modal" data-target="#myModal2" >بحث متقدم</button>
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
                        <a href="edit-account.php"><strong>تعديل البيانات الشخصية</strong></a>
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
    
                        <!-- Modal -->
            <div class="modal fade text-center" id="myModal2" role="dialog">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content p-0">
                        <div class="modal-header p-0">
                            <section class="global-head text-center mt-0 p-20">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <article>
                                    <h4><strong>بحث متقدم</strong></h4>
                                    <p>من فضلك أكمل البيانات من اجل الوصول للوظيفة المرغوب فيها </p>
                                </article>
                            </section>
                        </div>
                        <div class="modal-body model-style">
                            <form class="form-horizontal p-20 global-form no-border">
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label  class="control-label" >مكان الوظيفة
                                        </label>
                                        <p>المكان المرغوب به</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="select">
                                        <select class="form-control" >
                                            <option value="" selected disabled>مكان الوظيفة</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label  class="control-label" >مجال العمل
                                        </label>
                                        <p>تبع وزارة الشئون</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="select">
                                        <select class="form-control" >
                                            <option value="" selected disabled>المحاسبة</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label class="control-label" >نظام العمل
                                        </label>
                                        <p>نظام العمل</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="select">
                                        <select class="form-control" >
                                            <option value="" selected disabled>متدرب</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label class="control-label" >الراتب الشهرى الادنى
                                        </label>
                                        <p>الراتب الشهرى</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="select">
                                        <select class="form-control" >
                                            <option value="" selected disabled>500 ريال</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">  
                                    <div class="col-sm-6">
                                        <label class="control-label" >هذه البيانات مطلوبه ويجب إدخالها (*)</label>
                                    </div>      
                                    <div class="col-sm-offset-2 col-sm-4">
                                        <button type="submit" class="btn newlink">بحث</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
</div>
<?php
    include 'controllers/footer.php';
?>