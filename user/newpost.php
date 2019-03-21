<?php require_once 'left-header.php'; ?>
<?php require_once 'top-menu.php'; ?>
<?php
if (isset($_POST['submit'])) {
$response = add_post($_POST, $_FILES['pic']);
if ($response === true) {
$msg = true;
} else {
$err = $response;
}
}
?>
<!-- Left Sidebar End -->
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<h4 class="page-title">Add Post</h4>
		</div>
	</div>
</div>
<!-- end page title -->
<div class="row">
	<div class="col-12">
		
		
		<!-- Create new Posts -->
		<div class="" style="width: 100%;" >
			<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
				
				<div class="form-group">
					
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Post Title" style="margin-top: 10px;" name="title">
					<span class="err" ><?php if (isset($err['title'])) {
						echo $err['title'];
					} ?></span>
				</div>
				<div class="form-group">
					<select class="custom-select" name="category" id="">
						<option value="">Select category</option>
						<?php
						$categories = fetch_categories();
						foreach ($categories as $cat) {
						
						?>
						<option value="<?php echo $cat['cat_id'] ?>"> <?php echo $cat['category']; ?></option>
						<?php } ?>
					</select>
					<span class="err" ><?php if (isset($err['category'])) {
						echo $err['category'];
					} ?></span>
				</div>
				<div class="form-group">
					<textarea name="body" id="" class="form-control"  placeholder="Enter body of post here..." style="width: 100%;resize: none;height: 300px;"></textarea>
					<span class="err" ><?php if (isset($err['body'])) {
						echo $err['body'];
					} ?></span>
				</div>
				
				<div class="input-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="inputGroupFile04" name="pic">
						<label class="custom-file-label dripicons-paperclip" for="inputGroupFile04">Attachment</label>
					</div>

				</div>
				<span class="err" ><?php if (isset($err['pic'])) {
						echo $err['pic'];
					} ?></span>
				
				<div class="text-center" style="margin-top: 8px;">
					<button type="submit" class="btn btn-success waves-effect waves-light" name="submit" style="width: 20%;padding: 5px;font-size: 20px;">Publish</button>
					
				</div>
			</form>
			
			</div><!-- /.modal-content -->
			
			
			
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
<!-- App js -->
<script src="js/vendor.min.js"></script>
<script src="js/app.min.js"></script>
<!-- Plugins js -->
<script src="js/vendor/jquery.dataTables.js"></script>
<script src="js/vendor/dataTables.bootstrap4.js"></script>
<script src="js/vendor/dataTables.responsive.min.js"></script>
<script src="js/vendor/responsive.bootstrap4.min.js"></script>
<script src="js/sweetalert.min.js" ></script>
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
<?php if (isset($msg)) {?>
<script>
swal("Success", "Post Added Sucessfully","success");
</script>
<?php } ?>