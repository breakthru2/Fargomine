<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>
<?php //require_once 'available.php'; ?>

<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">My DashBoard</h4>

                                    </div>
                            </div></div></div>

<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                <div class="clearfix">
                    <h3>Available Balance</h3>
                        
                                                                    
                    <h1 id="bal"><?php 
                        echo "$".getBalance();?></h1>
                       
                        
                        
                <div class="clearfix">
                <div class="clearfix">

                <a href="invest.php"  class="btn btn-danger"  id="invest" onclick="">Invest</a>
                    <a href="withdraw.php"  class="btn btn-primary">Withdrawal</a>
                     
                    


                    </div>
            </div>
            </div>
            
            </div>
            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="header-title text-info" id="active"></h2>
                                    </div>
                            </div></div>

            <script>
                 $.get('active_investment.php', function(data){
                     $('#active').text(data);
                });
            </script>
            

                <script>
                        var link_click = $('#invest').get(0).attributes.onclick.nodeValue;
                        console.log(link_click);
                        let t = "Text";
                        if (link_click === "true") {
                            $('#invest').on('click', function(e) {
                            e.preventDefault();
                            swal("Count down to Invest",t,"info");
                        });
                        }
                    
                    //console.log(link_click);
                </script>

 <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Transaction History</h4>
                    

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>TransactionID</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Amount</th> 
                                <th>BTC account</th>  
                                <th>Status</th>
                                <th>Payment</th>
                                
                            </tr>
                        </thead>
                    
                    
        <tbody>
            <?php 
        $response = fetch_history();
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
                $txComplete = $post['txComplete'];
                
        ?>
            <tr>
                                    
        <td><?php echo $txID; ?></td>
        <td><?php echo $txType; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $amount; ?></td> 
        <td><?php echo $admin_btc; ?></td>                                                    
        <!-- <input type="hidden" name=""> -->
        <td><span class="btn-success btn-sm disabled status" id="stat"><?php echo $status;?>
        </span></td>
        <td><?php echo $txComplete; ?></td>   

        <script>

            
            window.onload = function() {
                let elems = document.querySelectorAll('span.status');
                //alert(elems.length)
                for (let i = 0; i < elems.length; i++) {
                    elemsText = elems[i].innerHTML;
                    //alert(elemsText);
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