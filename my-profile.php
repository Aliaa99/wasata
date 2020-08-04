<?php
    include 'controllers/header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="sideprofile">
                    <section class="global-head">
                        <article>
                            <h4><strong>Settings</strong></h4>
                            <p>Change your settings</p>
                        </article>
                    </section>
                        <!-- tabs -->
                     <ul class="nav nav-tabs nav-stacked">
                        <li class="active"><a data-toggle="tab" href="#personal-info">Personal Information</a></li>
                        <li><a data-toggle="tab" href="#change-pass">Change Password</a></li>
                        <li><a data-toggle="tab" href="#change-phone">Change Phone Number</a></li>
                        <li><a data-toggle="tab" href="#change-email">Change Email</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="profilepage">
                    <div class="tab-content">
                        <!-- tabs content -->
                        <!-- personal-info -->
                        <div id="personal-info" class="tab-pane fade in active">
                            <section class="global-head">
                                <article>
                                    <h4><strong>Personal Information</strong></h4>
                                    <p>Change your personal information</p>
                                </article>
                            </section>
                            <!-- form -->
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >First Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="first name" placeholder="first name" name="first name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >Second Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="second name" placeholder="second name" name="second name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="email" placeholder="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for ="sel1" class="control-label col-sm-3" >Country</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="sel1">
                                            <option value="" selected disabled>Contury</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">        
                                    <div class="col-sm-offset-6 col-sm-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <!-- change-pass -->
                        <div id="change-pass" class="tab-pane fade">
                            <section class="global-head">
                                <article>
                                    <h4><strong>Change Password</strong></h4>
                                    <p>Change your password</p>
                                </article>
                            </section>
                                <!-- form -->
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >Current password</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control"  placeholder="current password" name="current password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >New Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" placeholder="New password" name="New password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >New Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control"  placeholder="New password" name="New password">
                                    </div>
                                </div>

                                <div class="form-group">        
                                    <div class="col-sm-offset-6 col-sm-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <!-- change-phone -->
                        <div id="change-phone" class="tab-pane fade">
                            <section class="global-head">
                                <article>
                                    <h4><strong>Change Phone Number</strong></h4>
                                    <p>Change your change phone number</p>
                                </article>
                            </section>
                                <!-- forms -->
                                    <!-- form1 -->
                                    <form class="form-horizontal deletform">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" >Current Password</label>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control"  placeholder="current password" >
                                            </div>
                                        </div>
                                        <div class="form-group">        
                                            <div class="col-sm-offset-6 col-sm-4">
                                                <button type="button" class="btn btn-primary changeform">Confirm</button>
                                            </div>
                                        </div>
                                    </form> 
                                    <!-- form 2 -->
                                    <form class="form-horizontal none showform" >
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" >Phone Number</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control"  placeholder="Phone Number" >
                                            </div>
                                        </div>
                                        <div class="form-group">        
                                            <div class="col-sm-offset-6 col-sm-4">
                                                <button type="submit" class="btn btn-primary ">Update</button>
                                            </div>
                                        </div>
                                    </form>   
                                </div>
                            <!-- change-email -->
                        <div id="change-email" class="tab-pane fade">
                            <section class="global-head">
                                <article>
                                    <h4><strong>Change Email</strong></h4>
                                    <p>Change your change email</p>
                                </article>
                            </section>
                                <!-- form1 -->
                            <form class="form-horizontal deletform">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >Current Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control"  placeholder="current password" >
                                    </div>
                                </div>
                                <div class="form-group">        
                                    <div class="col-sm-offset-6 col-sm-4">
                                        <button type="button" class="btn btn-primary changeform">Confirm</button>
                                    </div>
                                </div>
                            </form> 
                                            <!-- form2 -->
                            <form class="form-horizontal none showform">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >New Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control"  placeholder="New Email" >
                                    </div>
                                </div>
                                <div class="form-group">        
                                    <div class="col-sm-offset-6 col-sm-4">
                                        <button type="submit" class="btn btn-primary " >Update</button>
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