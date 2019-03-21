<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Escrow Dashboard</h4>

                </div>
             </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Escrow Services</h4>
                    

    <table id="basic-datatable" class="table dt-responsive nowrap">
        <thead>
            <tr>
                <th>TransactionID</th>
                <th>Seller</th>
                <th>Amount</th>
                <th>Date</th> 
                <th>Status</th>                
                <th>Bitcoin Address</th>
                <th>Confirmation</th>
                
            </tr>
        </thead>
    
                    
                        <tbody>
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
            $confirm = $post['esConfirm'];
            
            
    ?>
        <tr>
                                
        <td><?php echo $txID; ?></td>
        <td><?php echo $firstname; ?></td>
        <td><?php echo '$'.$amount; ?></td>
        <td><?php echo $date; ?></td>
       
            <script>
            
            window.onload = function() {
                let elems = document.querySelectorAll('span.status');
               // alert(elems.length);
                for (let i = 0; i < elems.length; i++) {
                    elemsText = elems[i].innerHTML;
                 //   alert(elemsText);
                    if (elemsText == "Not Sold") {
                        elems[i].setAttribute('class', 'btn-info btn-sm disabled status');
                    }else if(elemsText == "Success") {
                        elems[i].setAttribute('class', 'btn-success btn-sm disabled status');
                    }else if(elemsText == "Failed") {
                        elems[i].setAttribute('class', 'btn-danger btn-sm disabled status');
                    }
                    
                }
            }     
                                </script>

        <td><button id="stat" class="status btn-info btn-sm disable-btn"><?php echo $status;?>
        </button></td>
       
        <td><?php echo $blockChain; ?></td>
        <td><?php echo $confirm; ?></td>

        
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