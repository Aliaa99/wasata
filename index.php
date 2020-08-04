<?php
    include 'controllers/header.php';
?>


        <div class="tele-academy-paging">
            <div class="container text-center">
                <p class="color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cumque praesentium corporis rem atque delectus suscipit! Ducimus, suscipit doloremque quisquam omnis modi rem placeat, reiciendis quidem veniam praesentium laboriosam. Molestias.</p>
                <h2>New Member ?</h2>
                <a href="#signupModal" data-toggle="modal" class="newmemb">new member</a>
                <p>I Already have an account</p>
                <a href="#signupModal" data-toggle="modal"> Signin</a>
            </div>
        </div>

            <!-- sigup modal -->
        <div class="modal" id="signupModal"
            role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true"> 
    
            <div class="modal-dialog signmodel"> 
                <div class="modal-content"> 

                    <ul class="nav nav-pills pillsstyle">
                        <li class="active"><a data-toggle="pill" href="#home">SignUp</a></li>
                        <li><a data-toggle="pill" href="#menu1">LogIn</a></li>
                    </ul>

                    <!-- Modal body -->
                    <div class="tab-content">
                        <!-- signup tap -->
                        <div id="home" class="tab-pane fade in active">
                            
                                        <!-- Modal root -->
                            <div class="m-header"> 
                                <h4 class="myModalLabel"> Sign Up </h4> 
                            </div> 
                            <form class="signupform" action="/new folder/categories.php">
                                <!-- username input -->
                                <input type="text" class="form-control" id="username" placeholder="Username"> 
                                <input type="number" class="form-control" id="phonenumber" placeholder="phonenumber"> 
                                <input type="email" class="form-control" id="email" placeholder="Email"> 
                                <input type="text" class="form-control" id="country" placeholder="country"> 
                                <input type="password" class="form-control" id="password" placeholder="password"> 
                                <input type="password" class="form-control" id="confirmpassword" placeholder="confirm password"> 
                                <button type="submit">Sign Up</button> 
                            </form>
                                <!-- Modal footer -->
                            <div class="footer"> 
                                <form>
                                    <div class="checkbox">
                                        <label><input class="check-adjust" type="checkbox" value="">I agree to all <a href="#">terems&conditions</a></label>
                                    </div>
                                    <!-- <input type="checkbox" value="">
                                    <label class="checkbox-inline">
                                        I agree to all
                                    </label> -->
                                    
                                </form>
                                <p> 
                                    Already have an account ?
                                    <a href="#menu1" data-toggle="pill" class="logintab"> Login </a> 
                                </p> 
                            </div> 
                        </div>

                        <!-- login tap -->

                        <div id="menu1" class="tab-pane fade">
                                <!-- Modal root -->
                            <div class="m-header"> 
                                <h4 class="myModalLabel"> Log in </h4> 
                            </div> 
                            <form class="signupform" action="/new folder/categories.php">
                                <!-- username input -->
                                <input type="text" class="form-control" id="username" placeholder="Email/Username"> 
                                <input type="password" class="form-control" id="password" placeholder="password"> 

                                <button type="submit">Log in</button> 
                            </form>
                                <!-- Modal footer -->
                            <div class="footer"> 
                                <a href="#forgetpass" data-toggle="modal">forget password</a>
                                <p> 
                                    Don't have an account ?
                                    <a href="#home" data-toggle="pill" class="logintab"> sign up </a> 
                                </p> 
                            </div> 
                        </div>
                    </div>
                </div> 
            </div> 
        </div>

            <!-- forget pass -->
        <div class="modal" id="forgetpass" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
            <div class="modal-dialog signmodel ml-ne"> 
                <div class="modal-content"> 

                    <form class="signupform " id="emailpassword">
                            <!-- Modal root -->
                        <div class="m-header"> 
                            <h4 class="myModalLabel"> forget password </h4> 
                        </div> 
                        <!-- username input -->
                        <input type="email" class="form-control" id="email" placeholder="Email"> 
                        <button type="submit" class="toforget">send</button> 
                    </form>
                </div>
            </div>
        </div>


            <!-- reset password  -->
        <div class="modal" id="resetpass" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
            <div class="modal-dialog signmodel ml-ne"> 
                <div class="modal-content">         
                    <form class="signupform form-inline " id="codepass">

                            <!-- Modal root -->
                        <div class="m-header"> 
                            <h4 class="myModalLabel"> forget password </h4> 
                        </div> 
                        <!-- username input -->
                        <input type="number" class="form-control special" id="number" placeholder="__"> 
                        <input type="number" class="form-control special" id="number2" placeholder="__"> 
                        <input type="number" class="form-control special" id="number3" placeholder="__"> 
                        <input type="number" class="form-control special" id="number4" placeholder="__"> 
                        <button type="submit" class="toforget">confirm</button> 
                    </form>
                </div>
            </div>
        </div>


            <!-- confirm reset password  -->
        <div class="modal" id="newresetpass" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
            <div class="modal-dialog signmodel ml-ne"> 
                <div class="modal-content">         
                    <form class="signupform " id="newpass" >
                            <!-- Modal root -->
                        <div class="m-header"> 
                            <h4 class="myModalLabel"> New password </h4> 
                        </div> 
                        <!-- username input -->
                        <input type="text" class="form-control" id="text" placeholder="New password"> 
                        <input type="text" class="form-control" id="text" placeholder="confirm New password"> 
                        <button type="submit" class="toforget" >confirm</button> 
                    </form>
                </div>
            </div>
        </div>



        <!-- Jquery js -->
        <script src="js/jquery-3.2.1.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
