<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>

<?php
if (isset($_POST['submit'])) {
$response = escrow_sell($_POST);
if ($response === true) {
$msg = true;
 header("Location: escrow.php");
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
                <h4 class="header-title">Sell Escrow</h4>

                </div>
             </div>
        </div>
    </div>

<div class="card-body">                                        

    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

   
        <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email">Amount</label>
        <div class="col-sm-5">
        <input type="text" placeholder="Amount in Dollars" class="form-control" id="sel" name="amount">
        <span class="err" ><?php if (isset($err['amount'])   ) {
                echo $err['amount'];
            } ?></span>
        </div>                                
            

        <div class="col-sm-5">
            <input type="text" placeholder="Bitcoin" readonly class="form-control" id="result_new" name="bitcoin">
            
        </div>
        <span class="err" ><?php if (isset($err['bitcoin'])   ) {
                echo $err['bitcoin'];
            } ?></span>
    </div>

<script>
    $("#sel").on('change', function () {
        let amount = $("#sel").val();
        if (amount != "") {
            $.ajax({
            url : 'process.php',
            type : 'post',
            data : "amount="+amount,
            success : function (data) {
                let roi = 1;
                if (amount == "500") {
                    roi = data * 0.15; 
                }else if(amount == "1000"){
                    roi = data * 0.20; 
                }else if(amount == "1500"){
                    roi = data * 0.25; 
                }
                                                                        
                let investment = data;
                let returns = roi;
                
                $("#result_new").val(investment);
                $('#roi').val(returns);
            }

        })
        } else {
            $("#result_new").val() = "Select a valid amount";
        }
        
        
    })
</script>
<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
<input type="hidden" name="block_chain" value="<?php echo $_SESSION['block_chain'];?>">
<input type="hidden" name="status" value="<?php echo "Not Sold";?>">
       

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
swal("Success", "Escrow Put Up for Sale","success");
</script>
<?php } ?>
