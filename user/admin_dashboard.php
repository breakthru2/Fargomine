<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; 

$role = $_SESSION['role'];
    if ($role !== '1') {
        header("Location: dashboard.php");
        exit();
}

?>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Admin DashBoard</h4>

                </div>
             </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Transaction History</h4>
                    

    <table id="basic-datatable" class="table dt-responsive nowrap">
        <thead>
            <tr>
                <th>TransactionID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Amount</th> 
                <!-- <th>BTC account</th>   -->
                <th>Status</th>
                <th>Payment</th>
                
            </tr>
        </thead>
    
                    
                        <tbody>
                                <?php 
    $response = admin_fetch_history();
    if ($response) {
        $posts = $response;
        
        foreach ($posts as $post) {
            $txID = $post['txID'];
            $txType = $post['txType'];
            $amount = $post['amount'];                                
            $date = format_post_date($post['time']);
            $status = $post['status'];
            $roi = $post['roi'];
            $invested = $post['invested'];
            $admin_btc = $post['admin_btc'];
            $firstname = $post['firstname'];
            $user_id = $post['user_id'];
            $txComplete = $post['txComplete'];
            
    ?>
        <tr>
                                
        <td><a href="transaction_confirm.php?txID=<?php echo $txID;?>"><?php echo $txID; ?></a></td>
        <td><?php echo $firstname; ?></td>
        <td><?php echo $txType; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $amount; ?></td> 
        <!-- <td><?php echo $admin_btc; ?></td>                                                     -->
        <!-- <input type="hidden" name=""> -->
        <td><span id="stat" class="status"><?php echo $status;?>
        </span></td>
         <td><?php echo $txComplete; ?></td> 

        <script>
            
            window.onload = function() {
                let elems = document.querySelectorAll('span.status');
               // alert(elems.length);
                for (let i = 0; i < elems.length; i++) {
                    elemsText = elems[i].innerHTML;
                 //   alert(elemsText);
                    if (elemsText == "Pending") {
                        elems[i].setAttribute('class', 'btn-info btn-sm disabled status');
                    }else if(elemsText == "Success") {
                        elems[i].setAttribute('class', 'btn-success btn-sm disabled status');
                    }else if(elemsText == "Failed") {
                        elems[i].setAttribute('class', 'btn-danger btn-sm disabled status');
                    }
                    
                }
            }

                                    
                                    
                                </script>
                            </tr>
                            
                                <?php } } ?>
                                
                            
                        </tbody>
                    </table>
                                </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div></div>

<?php require_once 'footer.php'?>