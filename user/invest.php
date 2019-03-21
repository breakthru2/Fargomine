<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>




<?php
if (isset($_POST['submit'])) {
$response = invest($_POST);
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
                <h3 class="">No BTC? Invest now with our escrow.</h3>
                <a class="btn btn-primary" href="escrow_buy.php">Invest with Escrow</a>
            </div>
    </div></div></div>

<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


<?php if (investment_date($user_id)) { ?>                                   
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email">Amount</label>
        <div class="col-sm-5">
        <?php 
            if (user_check($user_id)) {
                
          
        ?>
            <select class="custom-select" id="sel" name="amount">
            <option selected="">Amount in Dollars</option>
            <option value="500">$500</option>            
        </select>

        <?php
            }else{
        ?>
         <select class="custom-select" id="sel" name="amount">
            <option selected="">Amount in Dollars</option>
            <option value="500">$500</option>
            <option value="1000">$1000</option>
            <option value="1500">$1500</option>
        </select>

            <?php } ?>

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
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email">Admin BTC account</label>
        <div class="col-sm-10">
            <input type="text" id="random" class="form-control" placeholder="Block chain transaction ID" readonly name="admin_btc">
                <span class="err" ><?php if (isset($err['roi'])   ) {
                echo $err['roi'];
            } ?></span>
        </div>
    </div>                                             

    <!-- script to get a random.php page using ajax -->
        <script>
        $.get('random.php', function(data){
            $('#random').val(data);
        });
        </script>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email">ROI</label>
        <div class="col-sm-10">
            <input type="text" id="roi" name="roi" class="form-control" placeholder="Return amount" readonly>
        </div>
            <span class="err" ><?php if (isset($err['roi'])   ) {
                echo $err['roi'];
            } ?></span>
    </div>   
    
    
        <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email"></label>
        <div class="col-sm-10">
            <input type="submit" id="example-email" name="submit" class="form-control btn btn-primary" placeholder="Subject" value="Invest">
        </div>
    </div>

        </form>

    <?php } else { ?>

        <?php 
            $return_investment_date = return_investment_date($user_id);
            $return_expected_date = return_expected_date($user_id);
            ?>
            <p id="demo" class="display-4 text-danger"></p>
            <h2 id="demo1" class="text-info"></h2>

            <script>
            var countDownDate = <?php echo $return_expected_date ?> * 1000;
            var now = <?php echo $return_investment_date ?> * 1000;

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                // 1. JavaScript
                // var now = new Date().getTime();
                // 2. PHP
                now = now + 1000;

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                    minutes + "m " + seconds + "s";
                document.getElementById("demo1").innerHTML = "Remain to make another transaction";

                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
                        }, 1000);
                        </script>
                    
                    <?php } ?>
    </div></div></div></div>

         
                  
<?php require_once 'footer.php'?>

<?php if (isset($msg)) {?>
<script>
swal("Success", "Investment made","success");
</script>
<?php } ?> 