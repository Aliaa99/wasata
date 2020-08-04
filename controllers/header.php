<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!-- Tab Title -->
        <title>Rakan</title>
        <!-- Shortcut Icon -->
        <link rel="shortcut icon" href="images/logoicon.png" />
        <!-- Font Awesome Css -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="css/bootstrap-e.min.css" />
        <link rel="stylesheet" href="fonts/font/stylesheet.css" />
        <link rel="stylesheet" href="fonts/icons/css/fontello.css" />
        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

        <!-- <link rel="stylesheet" href="css/bootstrap-a.min.css" /> -->
        <!-- Owl carousel -->
        <!-- <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css"> -->
        <!-- Lightbox -->
        <link rel="stylesheet" href="css/lightbox.css" />
        <!-- Styling File -->
        <link rel="stylesheet" href="css/main.css" />




            <style> 
        
        /* Text alignment for body */ 
        /* body { 
            text-align: center; 
        }  */
          
          
        /* Styling modal */ 
        .modal:before { 
            content: ''; 
            display: inline-block; 
            height: 100%; 
            vertical-align: middle; 
        } 
          
        .modal-dialog { 
            display: inline-block; 
            vertical-align: middle; 
        } 
          
        .modal .modal-content { 
            padding: 50px; 
            -webkit-animation-name: modal-animation; 
            -webkit-animation-duration: 0.5s; 
            animation-name: modal-animation; 
            animation-duration: 0.5s; 
        } 
          
        @-webkit-keyframes modal-animation { 
            from { 
                top: -100px; 
                opacity: 0; 
            } 
            to { 
                top: 0px; 
                opacity: 1; 
            } 
        } 
          
        @keyframes modal-animation { 
            from { 
                top: -100px; 
                opacity: 0; 
            } 
            to { 
                top: 0px; 
                opacity: 1; 
            } 
        } 
    </style> 

    </head>


 <header>

        <!-- up nav 1-->

        <div class="upnav">
            <div class="container">
              <p> <span> - </span> Welcome and hapy day <span> - </span></p>
            </div>
        </div>


                <!--  change language  -->

        <div class="language-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-4">
                        <select class="form-control borderless" id="">
                            <option value="" >Arabic</option>
                            <option value="" selected>English </option>
                        </select>
                        <!-- <div class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span>اللغة العربية
                            <span> <img src="images/002.png"> </span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">ُاللغة العربية</a></li>
                                <li><a href="#">ُُُالانجليزيه</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-8 text-center">
                        <a href="index.php">
                            <img src="images/logo.png" width="120px" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>




            <!-- navbar -->
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="fa fa-bars"></span>                        
                    </button>
                    <!-- <a class="navbar-brand" href="#">
                        <img src="images/001.png" alt="">
                    </a> -->
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="categories.php" class="main-link"><i class="fa fa-home px-5"></i>Home</a></li>
                    <li><a href="favorites.php" class="main-link"><i class="fa fa-heart px-5"></i>Favorites</a></li>
                    <li><a href="notifications.php" class="main-link"><i class="fa fa-bell px-5"></i>Notifications</a></li>
                    <li><a href="messages.php" class="main-link"><i class="fa fa-envelope px-5"></i>Messages</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle py-15" type="button" data-toggle="dropdown">  
                          <span class="caret color-white"></span><span class="color-white font-regular px-adjust">Ahmed Mahmoud</span><span> <img height="25px" width="25px" class="mb-3 rounded" src="images/profile.png" alt=""></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="my-profile.php">
                                <i class="icon-person px-5"></i>    
                                My Profile</a></li>
                            <li><a href="advertisment.php">
                                <i class="icon-ads px-5"></i>                
                                 My Advertisment</a></li>
                            <li><a href="commision.php">
                                <i class="icon-creditcard px-5"></i>                
                                 Commision</a></li>
                            <li class="text-center"><a href="#" class="is-favorite">
                                 LOGOUT</a></li>

                        </ul>
                    </div>
                </ul>

                </div>
            </div>
        </nav>
    
    </header>



    <body>
