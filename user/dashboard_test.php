<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

             <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Simulor</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="float-right">
                                                <i class="dripicons-document-edit text-primary widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Total Posts</h5>
                                            <h3 class="mt-2">3,543</h3>
                                        </div>
                                        <div id="sparkline1"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="float-right">
                                                <i class="mdi mdi-comment-text-multiple  text-primary widget-icon "></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Total Comments</h5>
                                            <h3 class="mt-2">21,287</h3>
                                        </div>
                                        <div id="sparkline2"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="float-right">
                                                <i class="mdi mdi-account-multiple text-primary widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Total Users</h5>
                                            <h3 class="mt-2">5,387</h3>
                                        </div>
                                        <div id="sparkline3"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body p-0">
                                        <div class="p-3 pb-0">
                                            <div class="float-right">
                                                <i class="mdi mdi-eye-outline text-danger widget-icon"></i>
                                            </div>
                                            <h5 class="text-muted font-weight-normal mt-0">Total Visits</h5>
                                            <h3 class="mt-2">74,315</h3>
                                        </div>
                                        <div id="sparkline4"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Sales Analytics</h4>

                                        <canvas id="bar" height="350" class="mt-4"></canvas>
    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Top Marketplaces</h4>

                                        <canvas id="doughnut" height="350" class="mt-4"></canvas>    
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Recent Post</h4>

                                        <div class="table-responsive mt-3">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                    <th>ID</th>
                                                    <th>Author</th>
                                                    <th>Post Title</th>
                                                    <th>Category</th>
                                                    <th>Comments</th>
                                                    <th>Date Created</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                            
                                            
                        <tbody>
                                                <tr>
                                                    <td><b>#0121</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">George Lanes</a></p>
                                                        <span class="font-13 d-none d-sm-block">george@examples.com</span>
                                                    </td>
        
                                                    <td>
                                                        606-467-7601
                                                    </td>
        
                                                    <td>
                                                        New York
                                                    </td>

                                                    <td>
                                                        Wow!
                                                    </td>
        
                                                    <td>
                                                        2018/04/28
                                                    </td>
        
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Post</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>View Post</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0120</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-3.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Morgan Fuller</a></p>
                                                        <span class="font-13 d-none d-sm-block">morgan@examples.com</span>
                                                    </td>
        
                                                    <td>
                                                        407-748-6878
                                                    </td>
        
                                                    <td>
                                                        England
                                                    </td>

                                                     <td>
                                                        Wow!
                                                    </td>

                                                    <td>
                                                        2018/04/27
                                                    </td>
        
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Post</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>View Post</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0119</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-4.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Charlie Daly</a></p>
                                                        <span class="font-13 d-none d-sm-block">charlie@examples.com</span>
                                                    </td>
        
                                                    <td>
                                                        918-766-5946
                                                    </td>
        
                                                    <td>
                                                        Canada
                                                    </td>

                                                     <td>
                                                        Wow!
                                                    </td>
        
                                                    <td>
                                                        2018/04/27
                                                    </td>
        
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Post</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>View Post</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#0118</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-5.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Skye Saunders</a></p>
                                                        <span class="font-13 d-none d-sm-block">skye@examples.com</span>
                                                    </td>
        
                                                    <td>
                                                        302-232-1376
                                                    </td>
        
                                                    <td>
                                                        France
                                                    </td>

                                                     <td>
                                                        Wow!
                                                    </td>
        
                                                    <td>
                                                        2018/04/26
                                                    </td>
        
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Post</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Delete</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>View Post</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><b>#0117</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-6.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Jodie Townsend</a></p>
                                                        <span class="font-13 d-none d-sm-block">jodie@examples.com</span>
                                                    </td>
        
                                                    <td>
                                                        251-661-5962
                                                    </td>
        
                                                    <td>
                                                        Tokyo
                                                    </td>

                                                     <td>
                                                        Wow!
                                                    </td>
        
                                                    <td>
                                                        2017/11/28
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                        <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
<?php
    include 'footer.php';
?>