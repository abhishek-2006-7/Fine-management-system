<?php
	include_once("header1.php");
	$conn=mysqli_connect("localhost","root","password","fine_type");
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>NOT PAID STUDENT DETAILS!</h4>
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
                                    <th scope="col">ROLL NO</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">DEPARTMENT</th>
                                    <th scope="col">SEMESTER</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">FINE</th>
                                    <th scope="col">BATCH</th>
                                    <th scope="col">TEACHER NAME</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            		$i=1;
                            		$result=mysqli_query($conn,"SELECT * FROM main where status='not paid'");
                            		while($display=mysqli_fetch_array($result)){
                            	?>
                        	<tr>
                                    <th><?php echo $i++; ?></th>
                                    <th><?php echo $display["id"]; ?></th>
                                    <th><?php echo $display["name"]; ?></th>
                                    <th><?php echo $display["dept"]; ?></th>
                                    <th><?php echo $display["sem"]; ?></th>
                                    <th><?php echo $display["date"]; ?></th>
                                    <th><?php echo $display["fine"]; ?></th>
                                    <th><?php echo $display["batch"]; ?></th>
                                    <th><?php echo $display["teacher"]; ?></th>
                                    <th><?php echo $display["status"]; ?></th>
                                    <!-- Add a "Paid" button for each row -->
                                    <th>
                                        <form action="paid_marking.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $display['id']; ?>">
                                            <button type="submit" name="mark_paid" class="btn btn-success">Mark as Paid</button>
                                        </form>
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

