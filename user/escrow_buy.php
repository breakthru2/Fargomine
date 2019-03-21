<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>


<?php
if (isset($_POST['submit'])) {
$response = escrow_invest($_POST);
if ($response === true) {
$msg = true;
    header("Location: dashboard.php");
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
                <h4 class="header-title">Invest With Escrow</h4>

                </div>
             </div>
        </div>
    </div>

<div class="card-body">                                        

<?php if (investment_date($user_id)) { ?> 
   <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email">Amount</label>
        <div class="col-sm-5">
            <select class="custom-select" id="sel" name="amount">
            <option selected="">Amount in Dollars</option>
            <option value="500">$500</option>
            <option value="1000">$1000</option>
            <option value="1500">$1500</option>
        </select>
        <span class="err" ><?php if (isset($err['amount'])   ) {
                echo $err['amount'];
            } ?></span>
            <span class="err" ><?php if (isset($err['buy'])   ) {
                echo $err['buy'];
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
        <label class="col-sm-2 col-form-label" for="example-email">ROI</label>
        <div class="col-sm-10">
            <input type="text" id="roi" name="roi" class="form-control" placeholder="Return amount" readonly>
        </div>
            <span class="err" ><?php if (isset($err['roi'])) {
                echo $err['roi'];
            } ?></span>
    </div>   
    
     <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email">Sellers Name</label>
        <div class="col-sm-10">
            <select class="custom-select" id="seller" name="seller_name">
            
            <option selected="" disabled>Pick A seller</option>
             <?php 
    $response = fetch_escrow();
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
            
            
    ?>
            <option value="<?php echo $txID;?>"> <?php echo $firstname;?></option>
            <!-- <option value="500">$500</option>
            <option value="1000">$1000</option>
            <option value="1500">$1500</option> -->

    <?php } } ?>

        </select>
        <span class="err" ><?php if (isset($err['seller_name'])   ) {
                echo $err['seller_name'];
            } ?></span>
            </div>    
        </div>

         <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email">Sellers Amount</label>
        <div class="col-sm-10">
            <input type="text" id="amount" class="form-control" placeholder="Sellers Amount" readonly name="esAmount">                
        </div>
    </div>  

     <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email">Admin BTC account</label>
        <div class="col-sm-10">
            <input type="text" id="random" class="form-control" placeholder="BTC Account" readonly name="admin_btc">                
        </div>
    </div> 
    <script>
        $.get('random.php', function(data){
            $('#random').val(data);
        });
        </script>
     <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="example-email">Seller Confirmation Status</label>
        <div class="col-sm-10">
            <input type="text" id="confirm" class="form-control" placeholder="Confirmation Status" readonly name="esConfirm">  
            <span class="err" ><?php if (isset($err['esConfirm'])   ) {
                echo $err['esConfirm'];
            } ?></span>              
        </div>
    </div>                                             

<!-- script to get a random.php page using ajax -->
<script>
    $(document).ready(function(){
// code to get all records from table via select box
    $("#seller").change(function() {
    var id = $(this).find(":selected").val();
    console.log(id);
    var dataString = 'txID='+ id;
        $.ajax({
        url: 'escrow_process.php',
        dataType: "json",
        data: dataString,
        cache: false,
        success: function(sellerData) {
            console.log(sellerData);
        if(sellerData) {
            $("#amount").val(sellerData.esAmount);
            $("#bitcoin").val(sellerData.esBlockChain);
            $("#confirm").val(sellerData.esConfirm);
        } else {
            // $("#heading").hide();
            // $("#records").hide();
            // $("#no_records").show();
        }
        }
        });
    })
    });
</script>
    
    
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
