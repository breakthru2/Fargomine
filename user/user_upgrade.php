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
                <h4 class="header-title">Users Upgrade Dashboard</h4>

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
                <th>User ID</th>
                <th>Name</th>                
                <th>Status</th>
                <th>Invested</th>
                <th>Transaction Date</th>
                
            </tr>
        </thead>
    
                    
                        <tbody>
            <?php
        $response = fetch_user_check_history();
    if ($response) {
        $posts = $response;
        
        foreach ($posts as $post) {
          
            $firstname = $post['firstname'];
            $user_id = $post['user_id'];
            $status = $post['status'];
            $invested = $post['invested'];
            if ($invested === NULL) {
                $invested = 'Not ever Invested';
            }else{
                $invested = 'Invested';
            }
             $time = $post['time'];
             if ($time === NULL) {
                $time = 'No time';
            }else{
                $time = format_post_date($time);
            }
        
            
    ?>
        <tr>
                                
        <td><a href="user_confirm.php?user_id=<?php echo $user_id;?>"><?php echo $user_id; ?></a></td>
        <td><?php echo $firstname; ?></td>
        <td><?php echo $status; ?></td>
        <td><?php echo $invested; ?></td>
        <td><?php echo $time; ?></td>
        
    
        
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