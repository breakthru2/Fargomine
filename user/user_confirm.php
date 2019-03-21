<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>

 <?php

   if (isset($_REQUEST['user_id'])) {
        $user_id = $_REQUEST['user_id'];
        $response = fetch_user_status($user_id);
         //var_dump($response);
        if ($response) {
            $firstname = $response['firstname'];
            $status = $response['status'];
        } 
    }
    if (isset($_POST['submit'])) {
        $response = confirm_user($_POST);
         var_dump($response);
         var_dump($_POST);
            if ($response === true) {
                $msg = true;
                header("Location: user_upgrade.php");
                exit();
            } else {
                $err = $response;
            }
    }

    

    
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">User Upgrade</h4>

                </div>
             </div>
        </div>
    </div>

<div class="card-body">                                        

    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

   
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly placeholder="First Name" value="<?php echo $firstname;?>">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Current User Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly value="<?php echo $status;?>">
            </div>
        </div>
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        
       

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Confirm Transaction</label>
            <div class="col-sm-10">
                <select class="form-control" name="status">
                    <option value=""></option>
                    <option value="old">Upgrade</option>
                    <option value="new">Down grade</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input type="submit" class="form-control btn-primary" value="SUBMIT" name="submit">
            </div>
        </div>

       

        

    </form>

</div>

<?php require_once 'footer.php'?>
<?php if (isset($msg)) {?>
<script>
swal("Success", "Escrow Confirmed","success");
</script>
<?php } ?>