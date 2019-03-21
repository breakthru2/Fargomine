<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>
<!-- Left Sidebar End -->
<!-- ============================================================= -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">All Posts</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="newpost.php">
                    <button type="button" class="btn btn-primary mb-3"  data-toggle="modal" data-target="#addcontactmodal"> <i class="mdi mdi-pencil"></i>Create New Post</button>
                </a>
                <button type="button" class="btn btn-light float-right d-none d-sm-block ml-2"> <i class="mdi mdi-format-list-bulleted"></i></button>
                <button type="button" class="btn btn-light float-right"> <i class="mdi mdi-filter-variant mr-1"></i> Filter</button>
                <table id="basic-datatable" class="table table-hover dt-responsive nowrap table-centered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Post Title</th>
                            <th>Category</th>
                            <th>Number of <br>Comments</th>
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                        <?php 
                        $response = fetch_posts();
                        if ($response) {
                            $posts = $response;
                            $sn = 0;
                            foreach ($posts as $post) {
                                $fullname = $post['fullname'];
                                $email = $post['email'];
                                $title = $post['title'];
                                $cat = $post['category'];
                                $date = format_post_date($post['post_date']);
                                $num_comm = $post['num_comm'];
                                $sn++;
                                $img_path = $post['profile_pic_path'];
                                $author_id = urlencode($post['user_id']);
                                $post_id = urlencode($post['post_id']);
                            
                        ?>
                        <tr>
                            <td><b>#<?php echo $sn; ?></b></td>
                            <td>
                                <img src="<?php echo $img_path; ?>" alt="contact-img" height="36" width="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                <p class="mb-0 font-weight-bold"><a href="author-profile.php?author_id=<?php echo $author_id; ?>"><?php echo $fullname; ?></a></p>
                                <span class="font-13 d-none d-sm-block"><?php echo $email; ?></span>
                            </td>
                            
                            <td>
                                <?php echo $title; ?>
                            </td>
                            
                            <td>
                                <?php echo $cat; ?>
                            </td>
                            <td>
                                <?php if ($num_comm == 0) {
                                    echo "No comment yet!";
                                } else {
                                    echo $num_comm;
                                } ?>
                            </td>
                            
                            <td>
                                <?php echo $date; ?>
                            </td>
                            
                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-post.php?post_id=<?php echo $post_id; ?>"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Post</a>
                                        <a class="dropdown-item" href="delete-post.php?post_id=<?php echo $post_id; ?>"><i class="mdi mdi-delete mr-1 text-muted"></i>Delete</a>
                                        <a class="dropdown-item" href="view-post.php?post_id=<?php echo $post_id; ?>"><i class="mdi mdi-email mr-1 text-muted"></i>View Post</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } } ?>
                        
                    </tbody>
                </table>
                
                </div> <!-- end card-body-->
                </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
            
            </div> <!-- container -->
            </div> <!-- content -->
            <!-- Footer Start -->
<?php require_once 'footer.php';?>