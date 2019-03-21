<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>

 <?php

    if (isset($_REQUEST['txID'])) {
        $txID = $_REQUEST['txID'];
        $response = fetch_escrow_history($txID);
         //var_dump($response);
        if ($response) {
        $posts = $response;
        
        foreach ($posts as $post) {
            $txID = $post['esID'];
            $firstname = $post['firstname'];
            $amount = $post['esAmount'];
            $date = format_post_date($post['esDate']);
            $status = $post['esStatus'];
            $bitcoin = $post['esBitcoin'];
            $blockChain = $post['esBlockChain'];
            $confirm = $post['esConfirm'];
        }
    }
    if (isset($_POST['submit'])) {
        $response = escrow_confirm_transaction($_POST);
         var_dump($response);
         var_dump($_POST);
            if ($response === true) {
                $msg = true;
                header("Location: admin_escrow.php");
                exit();
            } else {
                $err = $response;
            }
    }
}
    

    
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Admin Transaction confirm</h4>

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
            <label class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly placeholder="Date" value="<?php echo $date;?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Amount</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly placeholder="Amount" value="<?php echo '$'.$amount;?>">
            </div>
        </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly placeholder="Status" value="<?php echo $status;?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Confirmed Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly placeholder="Status" value="<?php echo $confirm;?>">
            </div>
        </div>

        <input type="hidden" name="txID" value="<?php echo $txID;?>">
        
       

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Confirm Transaction</label>
            <div class="col-sm-10">
                <select class="form-control" name="esConfirm">
                    <option value="Confirmed">Confirm</option>
                    <option value="Not Confirmed">Not Confirmed</option>
                    <option value="Failed">Disapprove Transaction</option>
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