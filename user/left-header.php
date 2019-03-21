<?php  require_once 'libraries/functions.inc.php';
if (!isset($_SESSION['user_id']) && !isset($_SESSION['role'])){
    header("Location: index.php");
    exit();
}
$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];
$response = fetch_user($user_id);



if ($response) {
    $user = $response;
}

 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Fargo Mine - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/fav.fw.png">

        <!-- App css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/sweetalert.css">

        <script src="js/jquery.js"></script>
    <style>


    #basic-datatable_filter.dataTables_filter label{
        .padding-left: 280px;
    }
     ul.pagination.pagination-rounded{
        .padding-left:100px;
    }
     .row .col-md-6 .profilepic{
    width: 100%;
    height:400px; 
    background-image: url('assets/images/users/socialbg.jpg');
    .background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;


}
.row .col-md-6 .profilepic .smpic{
    width: 50%;
    min-height: 100px;
     margin:0 auto;
}
.row .col-md-6 .profilepic .smpic img{
   width: 130px;
   margin-top: 40px; 
    border-radius: 100%;
}
.row .col-md-6 .profilepic p,.row .col-md-6 .profilepic span{
    text-align: center;
    margin:0;
    display: block;
}
.color{
    background-color: #2f2725b8;
    height: 100%;
}
.row .col-md-6 .profilepic span{
    padding-bottom:  10px;
}

.picture{
    width: 100%;
    min-height: 100px;
}

.err{
    color: red;
}
  .alignimg p{
    display: inline-block;
    vertical-align: top;
    width: 30%;
    min-height: 200px;
  } 
  .alignimg img{
    width: 30%;
    float: left;
    margin-left: 15px;
  }

  .aligntext {
   
    .float: right;
    width: 100%;
    height: 100px;
    margin:0;
  }
  .aligntext .box{
     display: inline-block;
    vertical-align: top;
    border-right: 1px solid grey;
    width: 23%;
    padding-left: 15px;
  }
   .aligntext .box.except{
     display: inline-block;
    vertical-align: top;
    border: none;
    width: 23%;
    padding-left: 15px;
  }
  
</style>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php if ($role === "1") { ?>
                <div class="left-side-menu left-side-menu-dark">

                    <div class=".slimscroll-menu">

                        <!-- LOGO -->
                        <a href="admin_dashboard.php" class="logo text-center mb-4">
                            <span class="logo-lg">
                                <img src="assets/images/logo1.fw.png" alt="" height="25">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="24">
                            </span>
                        </a>

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">

                            <ul class="metismenu" id="side-menu">

                                <li class="menu-title">Navigation</li>

                                <li>
                                    <a href="admin_dashboard.php">
                                        <i class="fe-airplay"></i>                                   
                                        <span>Transcation History </span>
                                    </a>
                                </li>  
                                <li>
                                    <a href="admin_Escrow.php">
                                        <i class="fe-activity"></i>                                   
                                        <span>Escrow Services </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="user_upgrade.php">
                                        <i class="mdi mdi-run"></i>                                   
                                        <span>Users Upgrade </span>
                                    </a>
                                </li>                         
                                <!-- <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-activity"></i>
                                        <span> Escrow Services </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="admin_escrow.php">Admin Escrow</a>
                                        </li>
                                        <li>
                                            <a href="#">Seller</a>
                                        </li>
                                    </ul>
                                </li> -->
                                                      
                            </ul>
                        </div>
                    </div>
                </div>                
            <?php }else{ ?>
                <div class="left-side-menu left-side-menu-dark">

                    <div class=".slimscroll-menu">

                        <!-- LOGO -->
                        <a href="dashboard.php" class="logo text-center mb-4">
                            <span class="logo-lg">
                                <img src="assets/images/logo1.fw.png" alt="" height="25">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="24">
                            </span>
                        </a>

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">

                            <ul class="metismenu" id="side-menu">

                                <li class="menu-title">Navigation</li>

                                <li>
                                    <a href="dashboard.php">
                                        <i class="fe-airplay"></i>                                   
                                        <span> Dashboard</span>
                                    </a>
                                </li>

                            
                                <!-- <li>
                                    <a href="layout.php">
                                        <i class="fe-briefcase"></i>                                 
                                        <span> Profile </span>
                                    </a>
                                </li> -->

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-activity"></i>
                                        <span> Escrow Services </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="escrow.php">Escrow Dashboard</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="escrow_sell.php">
                                    <i class="mdi mdi-chart-line"></i>
                                        <span> Sell BTC </span>
                                    </a>
                                </li>  
                                <li>
                                    <a href="contact.php">
                                    <i class="mdi mdi-message-processing"></i>
                                        <span> Contact Us </span>
                                    </a>
                                </li>                          
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- header startrs here -->
            
                 
           

                        <!-- end page title --> 