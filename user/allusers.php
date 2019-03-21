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
                                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                            <li class="breadcrumb-item active">Users</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Users</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary mb-3"  data-toggle="modal" data-target="#addcontactmodal"> <i class="mdi mdi-account-plus mr-1"></i> Add User</button>
                                        <button type="button" class="btn btn-light float-right d-none d-sm-block ml-2"> <i class="mdi mdi-format-list-bulleted"></i></button>
                                        <button type="button" class="btn btn-light float-right"> <i class="mdi mdi-filter-variant mr-1"></i> Filter</button>
                                        <table id="basic-datatable" class="table table-hover dt-responsive nowrap table-centered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Details</th>
                                                    <th>Location</th>
                                                    <th>Date Joined</th>
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
                                                        New York
                                                    </td>
                                                    
                                                    <td>
                                                        2018/04/28
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
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
                                                        England
                                                    </td>
                                                    
                                                    <td>
                                                        2018/04/27
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
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
                                                        Canada
                                                    </td>
                                                    
                                                    <td>
                                                        2018/04/27
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
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
                                                        France
                                                    </td>
                                                    
                                                    <td>
                                                        2018/04/26
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
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
                                                        Tokyo
                                                    </td>
                                                    
                                                    <td>
                                                        2017/11/28
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0116</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-7.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Bruno Nash</a></p>
                                                        <span class="font-13 d-none d-sm-block">bruno@examples.com</span>
                                                    </td>
                                                    
                                                    
                                                    
                                                    <td>
                                                        London
                                                    </td>
                                                    
                                                    <td>
                                                        2017/10/28
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0115</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-8.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Fiona Green</a></p>
                                                        <span class="font-13 d-none d-sm-block">fiona@examples.com</span>
                                                    </td>
                                                    
                                                    
                                                    
                                                    <td>
                                                        San Francisco
                                                    </td>
                                                    
                                                    <td>
                                                        2017/10/28
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0114</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-9.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Jena Gaines</a></p>
                                                        <span class="font-13 d-none d-sm-block">jena@examples.com</span>
                                                    </td>
                                                    
                                                    
                                                    <td>
                                                        Edinburgh
                                                    </td>
                                                    
                                                    <td>
                                                        2017/09/17
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0113</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-1.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Jennifer Chang  </a></p>
                                                        <span class="font-13 d-none d-sm-block">jennifer@examples.com</span>
                                                    </td>
                                                    
                                                    
                                                    <td>
                                                        Singapore
                                                    </td>
                                                    
                                                    <td>
                                                        2017/09/03
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0112</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-10.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Michelle House</a></p>
                                                        <span class="font-13 d-none d-sm-block">michelle@examples.com</span>
                                                    </td>
                                                    
                                                    
                                                    <td>
                                                        Sidney
                                                    </td>
                                                    
                                                    <td>
                                                        2017/08/22
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0111</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Sakura Yamamoto</a></p>
                                                        <span class="font-13 d-none d-sm-block">sakura@examples.com</span>
                                                    </td>
                                                    
                                                    
                                                    
                                                    <td>
                                                        Tokyo
                                                    </td>
                                                    
                                                    <td>
                                                        2017/08/17
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0110</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-4.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Tiger Nixon </a></p>
                                                        <span class="font-13 d-none d-sm-block">tiger@examples.com</span>
                                                    </td>
                                                    
                                                    
                                                    
                                                    <td>
                                                        San Francisco
                                                    </td>
                                                    
                                                    <td>
                                                        2017/07/08
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>#0109</b></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-6.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">Brenden Wagner</a></p>
                                                        <span class="font-13 d-none d-sm-block">wagner@examples.com</span>
                                                    </td>
                                                    
                
                                                    <td>
                                                        London
                                                    </td>
                                                    
                                                    <td>
                                                        2017/04/25
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropdown ">
                                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                    
                                                            
                                                            <a class="dropdown-item dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               <i class="mdi mdi-pencil mr-1 text-muted"></i>Upgrade 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Admin</a>
                                                                <a class="dropdown-item" href="#">Editor</a>
                                                                <a class="dropdown-item" href="#">Author</a>
                                                                <a class="dropdown-item" href="#">Contributor</a>
                                                                <a class="dropdown-item" href="#">Subscriber</a>
                                                            </div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
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
                                    <footer class="footer">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Simulor Admin &copy; 2018 - Coderthemes.com
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="text-md-right footer-links d-none d-sm-block">
                                                        <a href="#">About Us</a>
                                                        <a href="#">Help</a>
                                                        <a href="#">Contact Us</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                    <!-- end Footer -->
                                </div>
                                <!-- ============================================================== -->
                                <!-- End Page content -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- END wrapper -->
                            <div class="modal fade" id="addcontactmodal" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myCenterModalLabel">Add User</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="name">Full Name</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="position">Role</label>
                                                    <!-- <input type="text" class="form-control" id="position" placeholder="Enter phone no."> -->
                                                    <select name="" id="" class="custom-select" >
                                                        <option value="">Administrator</option>
                                                        <option value="">Editor</option>
                                                        <option value="">Author</option>
                                                        <option value="">Contributor</option>
                                                        <option value="">Subscriber</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="company">Location</label>
                                                <select class="custom-select" >Select a Country</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <div class="form-group">
                                                <label for="profile_image">Profile Picture</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control" id="" placeholder="Enter password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Confirm Password</label>
                                                <input type="password" class="form-control" id="" placeholder="Confirm password">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <!-- App js -->
                                <script src="js/vendor.min.js"></script>
                                <script src="js/app.min.js"></script>
                                <!-- Plugins js -->
                                <script src="js/vendor/jquery.dataTables.js"></script>
                                <script src="js/vendor/dataTables.bootstrap4.js"></script>
                                <script src="js/vendor/dataTables.responsive.min.js"></script>
                                <script src="js/vendor/responsive.bootstrap4.min.js"></script>
                                <script>
                                $(document).ready(function() {
                                // Default Datatable
                                $('#basic-datatable').DataTable({
                                "pageLength": 8,
                                "lengthMenu": [[8, 15, 25, 50, -1], [8, 15, 25, 50, "All"]],
                                "language": {
                                "paginate": {
                                "previous": "<i class='mdi mdi-chevron-left'>",
                                "next": "<i class='mdi mdi-chevron-right'>"
                                }
                                },
                                "drawCallback": function () {
                                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                                }
                                });
                                });
                                </script>
                            </body>
                        </html>