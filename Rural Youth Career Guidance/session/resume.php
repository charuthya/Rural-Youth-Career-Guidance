<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Resume</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" >

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                        
                <img src="images/logo-dark.png" alt="">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        
                        <li>
                            <a href="resume.php">
                                <i class="fas fa-table"></i>Resume</a>
                        </li>
                        <li>
                            <a href="practice.php">
                                <i class="far fa-check-square"></i>Practice</a>
                        </li>
                        <li>
                            <a href="quiz.php">
                                <i class="fas fa-calendar-alt"></i>Quiz</a>
                        </li>
                        <li>
                            <a href="job.php">
                                <i class="fas fa-map-marker-alt"></i>Job</a>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="pre">
                                <i class="fas fa-desktop"></i>Interview prep</a>
                        </li>   
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
            <a href="index.php">
                <img src="images/logo-dark.png" alt=""></a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        
                        <li>
                            <a href="resume.php">
                                <i class="far fa-check-square"></i>Resume</a>
                        </li>
                        <li>
                            <a href="practice.php">
                                <i class="fas fa-code"></i>Practice</a>
                        </li>
                        <li>
                            <a href="quiz.php">
                                <i class="fas fa-desktop"></i>Quiz</a>
                        </li>
                        <li>
                            <a href="job.php">
                                <i class="fas fa-briefcase"></i>Jobs</a>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="prep/index1.html">
                                <i class="fas fa-check-square"></i>Interview prep</a>
                            
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michel</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>   
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $fetch['name']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">

                                                    
           <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>                 
                                            </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $fetch['name']; ?></a>
                                                    </h5>
                                                    <span class="email" ><?php echo $fetch['email']; ?></span>
                                                </div>
                                            </div>
   
   
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="home.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                               
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Resume Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- custom css -->
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <nav class = "navbar bg-white">
            <div class="container">
                <div class = "navbar-content">
                    <div class = "brand-and-toggler">
                        <a href = "index.html" class = "navbar-brand">
                            <img src = "assets/images/curriculum-vitae.png" alt = "" class = "navbar-brand-icon">
                            <span class = "navbar-brand-text">build <span>resume.</span>
                        </a>
                        <button type = "button" class = "navbar-toggler-btn">
                            <div class = "bars">
                                <div class = "bar"></div>
                                <div class = "bar"></div>
                                <div class = "bar"></div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <section id = "about-sc" class = "">
            <div class = "container">
                <div class = "about-cnt">
                    <form action="" class="cv-form" id = "cv-form">
                        <div class = "cv-form-blk">
                            <div class = "cv-form-row-title">
                                <h3>about section</h3>
                            </div>
                            <div class = "cv-form-row cv-form-row-about">
                                <div class = "cols-3">
                                    <div class = "form-elem">
                                        <label for = "" class = "form-label">First Name</label>
                                        <input name = "firstname" type = "text" class = "form-control firstname" id = "" onkeyup="generateCV()" placeholder="e.g. John">
                                        <span class="form-text"></span>
                                    </div>
                                    <div class = "form-elem">
                                        <label for = "" class = "form-label">Middle Name <span class = "opt-text">(optional)</span></label>
                                        <input name = "middlename" type = "text" class = "form-control middlename" id = "" onkeyup="generateCV()" placeholder="e.g. Herbert">
                                        <span class="form-text"></span>
                                    </div>
                                    <div class = "form-elem">
                                        <label for = "" class = "form-label">Last Name</label>
                                        <input name = "lastname" type = "text" class = "form-control lastname" id = "" onkeyup="generateCV()" placeholder="e.g. Doe">
                                        <span class="form-text"></span>
                                    </div>
                                </div>

                                <div class="cols-3">
                                    <div class = "form-elem">
                                        <label for = "" class = "form-label">Your Image</label>
                                        <input name = "image" type = "file" class = "form-control image" id = "" accept = "image/*" onchange="previewImage()">
                                    </div>
                                    <div class = "form-elem">
                                        <label for = "" class = "form-label">Designation</label>
                                        <input name = "designation" type = "text" class = "form-control designation" id = "" onkeyup="generateCV()" placeholder="e.g. Sr.Accountants">
                                        <span class="form-text"></span>
                                    </div>
                                    <div class = "form-elem">
                                        <label for = "" class = "form-label">Address</label>
                                        <input name = "address" type = "text" class = "form-control address" id = "" onkeyup="generateCV()" placeholder="e.g. Lake Street-23">
                                        <span class="form-text"></span>
                                    </div>
                                </div>

                                <div class = "cols-3">
                                    <div class = "form-elem">
                                        <label for = "" class = "form-label">Email</label>
                                        <input name = "email" type = "text" class = "form-control email" id = "" onkeyup="generateCV()" placeholder="e.g. johndoe@gmail.com">
                                        <span class="form-text"></span>
                                    </div>
                                    <div class = "form-elem">
                                        <label for = "" class = "form-label">Phone No:</label>
                                        <input name = "phoneno" type = "text" class = "form-control phoneno" id = "" onkeyup="generateCV()" placeholder="e.g. 456-768-798, 567.654.002">
                                        <span class="form-text"></span>
                                    </div>
                                    <div class = "form-elem">
                                        <label for = "" class = "form-label">Summary</label>
                                        <input name = "summary" type = "text" class = "form-control summary" id = "" onkeyup="generateCV()" placeholder="e.g. Doe">
                                        <span class="form-text"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cv-form-blk">
                            <div class = "cv-form-row-title">
                                <h3>achievements</h3>
                            </div>

                            <div class = "row-separator repeater">
                                <div class = "repeater" data-repeater-list = "group-a">
                                    <div data-repeater-item>
                                        <div class = "cv-form-row cv-form-row-achievement">
                                            <div class = "cols-2">
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Title</label>
                                                    <input name = "achieve_title" type = "text" class = "form-control achieve_title" id = "" onkeyup="generateCV()" placeholder="e.g. johndoe@gmail.com">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Description</label>
                                                    <input name = "achieve_description" type = "text" class = "form-control achieve_description" id = "" onkeyup="generateCV()" placeholder="e.g. johndoe@gmail.com">
                                                    <span class="form-text"></span>
                                                </div>
                                            </div>
                                            <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                        </div>
                                    </div>
                                </div>
                                <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                            </div>
                        </div>

                        <div class="cv-form-blk">
                            <div class = "cv-form-row-title">
                                <h3>experience</h3>
                            </div>

                            <div class = "row-separator repeater">
                                <div class = "repeater" data-repeater-list = "group-b">
                                    <div data-repeater-item>
                                        <div class = "cv-form-row cv-form-row-experience">
                                            <div class = "cols-3">
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Title</label>
                                                    <input name = "exp_title" type = "text" class = "form-control exp_title" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Company / Organization</label>
                                                    <input name = "exp_organization" type = "text" class = "form-control exp_organization" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Location</label>
                                                    <input name = "exp_location" type = "text" class = "form-control exp_location" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                            </div>

                                            <div class = "cols-3">
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Start Date</label>
                                                    <input name = "exp_start_date" type = "date" class = "form-control exp_start_date" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">End Date</label>
                                                    <input name = "exp_end_date" type = "date" class = "form-control exp_end_date" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Description</label>
                                                    <input name = "exp_description" type = "text" class = "form-control exp_description" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                            </div>

                                            <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                        </div>
                                    </div>
                                </div>
                                <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                            </div>
                        </div>

                        <div class="cv-form-blk">
                            <div class = "cv-form-row-title">
                                <h3>education</h3>
                            </div>

                            <div class = "row-separator repeater">
                                <div class = "repeater" data-repeater-list = "group-c">
                                    <div data-repeater-item>
                                        <div class = "cv-form-row cv-form-row-experience">
                                            <div class = "cols-3">
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">School</label>
                                                    <input name = "edu_school" type = "text" class = "form-control edu_school" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Degree</label>
                                                    <input name = "edu_degree" type = "text" class = "form-control edu_degree" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">City</label>
                                                    <input name = "edu_city" type = "text" class = "form-control edu_city" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                            </div>

                                            <div class = "cols-3">
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Start Date</label>
                                                    <input name = "edu_start_date" type = "date" class = "form-control edu_start_date" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">End Date</label>
                                                    <input name = "edu_graduation_date" type = "date" class = "form-control edu_graduation_date" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Description</label>
                                                    <input name = "edu_description" type = "text" class = "form-control edu_description" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                            </div>

                                            <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                        </div>
                                    </div>
                                </div>
                                <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                            </div>
                        </div>

                        <div class="cv-form-blk">
                            <div class = "cv-form-row-title">
                                <h3>projects</h3>
                            </div>

                            <div class = "row-separator repeater">
                                <div class = "repeater" data-repeater-list = "group-d">
                                    <div data-repeater-item>
                                        <div class = "cv-form-row cv-form-row-experience">
                                            <div class = "cols-3">
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Project Name</label>
                                                    <input name = "proj_title" type = "text" class = "form-control proj_title" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Project link</label>
                                                    <input name = "proj_link" type = "text" class = "form-control proj_link" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Description</label>
                                                    <input name = "proj_description" type = "text" class = "form-control proj_description" id = "" onkeyup="generateCV()">
                                                    <span class="form-text"></span>
                                                </div>
                                            </div>
                                            <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                        </div>
                                    </div>
                                </div>
                                <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                            </div>
                        </div>

                        <div class="cv-form-blk">
                            <div class = "cv-form-row-title">
                                <h3>skills</h3>
                            </div>

                            <div class = "row-separator repeater">
                                <div class = "repeater" data-repeater-list = "group-e">
                                    <div data-repeater-item>
                                        <div class = "cv-form-row cv-form-row-skills">
                                            <div class = "form-elem">
                                                <label for = "" class = "form-label">Skill</label>
                                                <input name = "skill" type = "text" class = "form-control skill" id = "" onkeyup="generateCV()">
                                                <span class="form-text"></span>
                                            </div>
                                            
                                            <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                        </div>
                                    </div>
                                </div>
                                <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id = "preview-sc" class = "print_area">
            <div class = "container">
                <div class = "preview-cnt">
                    <div class = "preview-cnt-l bg-green text-white">
                        <div class = "preview-blk">
                            <div class = "preview-image">
                                <img src = "" alt = "" id = "image_dsp"> 
                            </div>
                            <div class = "preview-item preview-item-name">
                                <span class = "preview-item-val fw-6" id = "fullname_dsp"></span>
                            </div>
                            <div class = "preview-item">
                                <span class = "preview-item-val text-uppercase fw-6 ls-1" id = "designation_dsp"></span>
                            </div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>about</h3>
                            </div>
                            <div class = "preview-blk-list">
                                <div class = "preview-item">
                                    <span class = "preview-item-val" id = "phoneno_dsp"></span>
                                </div>
                                <div class = "preview-item">
                                    <span class = "preview-item-val" id = "email_dsp"></span>
                                </div>
                                <div class = "preview-item">
                                    <span class = "preview-item-val" id = "address_dsp"></span>
                                </div>
                                <div class = "preview-item">
                                    <span class = "preview-item-val" id = "summary_dsp"></span>
                                </div>
                            </div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>skills</h3>
                            </div>
                            <div class = "skills-items preview-blk-list" id = "skills_dsp">
                                <!-- skills list here -->
                            </div>
                        </div>
                    </div>

                    <div class = "preview-cnt-r bg-white">
                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>Achievements</h3>
                            </div>
                            <div class = "achievements-items preview-blk-list" id = "achievements_dsp"></div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>educations</h3>
                            </div>
                            <div class = "educations-items preview-blk-list" id = "educations_dsp"></div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>experiences</h3>
                            </div>
                            <div class = "experiences-items preview-blk-list" id = "experiences_dsp"></div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>projects</h3>
                            </div>
                            <div class = "projects-items preview-blk-list" id = "projects_dsp"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class = "print-btn-sc">
            <div class = "container">
                <button type = "button" class = "print-btn btn btn-primary" onclick="printCV()">Print CV</button>
            </div>
        </section>


        

                   
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
     <!-- jquery cdn -->
     <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
     <!-- jquery repeater cdn -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js" integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!-- custom js -->
     <script src = "assets/js/script.js"></script>
     <!-- app js -->
     <script src="assets/js/app.js"></script>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
