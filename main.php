<?php
include_once("header.php");
$con = mysqli_connect("localhost", "root", "password", "fine_type");


?>

<body>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <span class="ml-1">Element</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Fine Registration Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="main_action.php" method="post">
			 
			 <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>	ID OF STUDENT</label>
                                    <input type="text" class="form-control" placeholder="Id Of Student" name="txtid">
                                </div>
                            </div>
			 
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>NAME OF STUDENT</label>
                                    <input type="text" class="form-control" placeholder="Name Of Student" name="txtname">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>DEPARTMENT</label>
                                    <select class="form-control" id="sel1" name="txtdept">
                                        <option>CT</option>
                                        <option>ME</option>
                                        <option>IF</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label>SEMESTER</label>
                                    <select class="form-control" id="sel1" name="txtsem"> 
                                        <option>S1</option>
                                        <option>S2</option>
                                        <option>S3</option>
                                        <option>S4</option>
                                        <option>S5</option>
                                        <option>S6</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>DATE</label>
                                    <input type="date" class="form-control" name="txtdate">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>FINE FOR</label>
                                    <select name="fine" id="fine" required class="form-control">
                                        <option value="">..SELECT fine..</option>
                                        <?php
                                        $sqlquery = "SELECT * FROM tbl_type";
                                        $result = mysqli_query($con, $sqlquery);
                                        
                                            while ($display = mysqli_fetch_array($result)){     
                                        ?>
                                        <option value="<?php  echo $display['type_id'];?>"><?php echo $display['fine_type'];?>-<?php echo $display['amount'];?></option>
                                    <?php
                                }
                                ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>BATCH</label>
                                    <select class="form-control" id="sel1" name="txtbatch">
                                        <option>2010-2013</option>
                                        <option>2011-2014</option>
                                        <option>2012-2015</option>
                                        <option>2013-2016</option>
                                        <option>2014-2017</option>
                                        <option>2015-2018</option>
                                        <option>2016-2019</option>
                                        <option>2017-2020</option>
                                        <option>2018-2021</option>
                                        <option>2019-2022</option>
                                        <option>2020-2023</option>
                                        <option>2021-2024</option>
                                        <option>2022-2025</option>
                                        <option>2023-2026</option>
                                        <option>2024-2027</option>
                                        <option>2025-2028</option>
                                    </select>
                                </div>
                            </div>
  			 
                            <button type="submit" class="btn btn-primary">Submit</button>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
include_once("footer.php");
?>

