<?php 
require_once 'libraries/functions.inc.php';
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['submit'])) {
   $response = login_user($_POST);

   if ($response === true) {
       if ($_SESSION['role']=== '0') {
            header("Location: dashboard.php");
            exit();
       }elseif ($_SESSION['role'] === '1') {
            header("Location: admin_dashboard.php");
            exit(); 
       }       
   } else {
        $errors = $response;
   }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Fargomine - Login</title>
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

    </head>

    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="assets/images/logo2.fw.png" alt="" height="50"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" name="email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <a href="recoverpw.php" class="text-muted float-right"><small></small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit" name="submit"> Log In </button>
                                        <?php if (isset($errors)) {
                                            foreach ($errors as $error) {
                                                echo "<p>$error</p>";
                                            }
                                        } ?>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted"> <a href="recoverpw.php" class="text-muted ml-1">Forgot your password?</a></p>
                                <p class="text-muted">Don't have an account? <a href="register.php" class="text-dark ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <!-- App js -->
        <script src="js/vendor.min.js"></script>
        <script src="js/app.min.js"></script>
        <script src="js/sweetalert.min.js"></script>
        
    </body>
</html>

<?php if (isset($_GET['action'])) { 
    if ($_GET['action'] == "success") { ?>
    
    <script>
        swal("Regsitration was Successful", "Please enter your login credenials to gain access!", "success");
    </script>
<?php } }?>