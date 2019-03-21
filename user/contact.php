<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>

<?php
if (isset($_POST['submit'])) {
$response = contact_admin($_POST);
if ($response === true) {
$msg = true;
} else {
$err = $response;
}
}
?>


<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Contact Admin</h4>

                                    </div>
                            </div></div></div>

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            
    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="example-email">Email</label>
                    <div class="col-sm-10">
                        <input type="email" id="example-email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="example-email">Subject</label>
                    <div class="col-sm-10">
                        <input type="text" id="example-email" name="subject" class="form-control" placeholder="Subject">
                    </div>
                </div>
                

                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Issue</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" name="issue"></textarea>

                
                    </div>
                </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="example-email"></label>
                    <div class="col-sm-10">
                        <input type="submit" id="example-email" name="submit" value="SEND MAIL" class="form-control btn btn-primary" placeholder="Subject">
                    </div>
                </div>

            </form>
    </div></div></div></div>


<?php require_once 'footer.php'?>