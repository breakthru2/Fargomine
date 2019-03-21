<?php include 'left-header.php'; ?>
<?php include 'top-menu.php' ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<!-- Add Category Buttn -->
				<button style="" type="button" class="btn btn-primary mb-3"  data-toggle="modal" data-target="#add-category"> <i class="mdi mdi-plus-outline"></i>Add Category</button>
				<!-- End Category Buttn -->
				<table id="basic-datatable" class="table table-hover dt-responsive nowrap table-centered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Category</th>
						</tr>
					</thead>
					<?php 

					$response = fetch_categories();

					if ($response) {
						$categories = $response;
						$count = 0;
						foreach ($categories as $category) {
							$count++;
							?>
					<tr>
						<th scope="row"><?php echo $count; ?></th>
						<td><?php echo $category['category']; ?></td>
						
					</tr>

				<?php } } ?>
					
					
				</table>
				 <div class="modal fade" id="add-category" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header d-block">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title border-bottom-0">Add a category</h4>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form>
                                                    <div class="form-group">
                                                        <label class="control-label">Category Name</label>
                                                        <input id="category" class="form-control form-white" placeholder="Enter Category " type="text" name="category-name" autofocus="true" />
                                                    </div>
                                                    

                                                </form>

                                                <div class="text-right">
                                                    <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary ml-1   save-category" id="addBtn">Add</button>
                                                </div>

                                            </div> <!-- end modal-body-->
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
				</div>
			</div>
		</div>
	</div>

	
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


<script type="text/javascript">
		$(document).ready(function() {
			$("#addBtn").on('click', function() {
				var category = $("#category").val();
				if (category != "") {
					$.ajax({
						type : 'post',
						url : 'process-cat.php',
						data : 'category='+category,
						success : function(response) {
							// Actions to be performed if successful...
							alert(response);
							$('#category').val("");
						}
					})
				}
			})
		});
</script>
    </body>
</html>