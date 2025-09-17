<?php
	include_once("header.php");
	$conn = mysqli_connect("localhost", "root", "password", "fine_type");
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>TEACHER DETAILS!</h4>
                    <p class="mb-0"></p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
                </ol>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Stripped</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">DEPARTMENT</th>
                                    <th scope="col">DATE OF JOIN</th>
                                    <th scope="col">DESIGNATION</th>
                                    <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            		$i = 1;
                            		$result = mysqli_query($conn, "SELECT * FROM teacher_reg");
                            		while ($display = mysqli_fetch_array($result)) {
                            	?>
                        	<tr>
                                    <th><?php echo $i++; ?></th>
                                    <th><?php echo $display["name_of_teacher"]; ?></th>
                                    <th><?php echo $display["department"]; ?></th>
                                    <th><?php echo $display["date_of_join"]; ?></th>
                                    <th><?php echo $display["designation"]; ?></th>
                                    <th>
                                        <!-- Delete Button -->
                                        <a href="delete_teacher.php?name_of_teacher=<?php echo $display['name_of_teacher']; ?>" class="btn btn-danger"onclick="return confirm('Are you sure you want to delete this teacher detail?')">Delete</a>
                                    </th>
                                </tr>
                                <?php
                                	}
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
	include_once("footer.php");
?>

